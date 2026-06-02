<?php
// src/Service/FedaPayService.php

namespace App\Service;

use FedaPay\FedaPay;
use FedaPay\Transaction;
use Psr\Log\LoggerInterface;

class FedaPayService
{
    private LoggerInterface $logger;
    private string $environment;
    private ?string $lastTransactionId = null;

    public function __construct(
        string $apiKey,
        string $environment,
        LoggerInterface $logger
    ) {
        $this->environment = $environment;
        $this->logger = $logger;

        FedaPay::setApiKey($apiKey);
        FedaPay::setEnvironment($environment);
    }

    public function createPayment(array $data): string
    {
        $this->logger->info('FedaPay createPayment', [
            'amount' => $data['amount'],
            'description' => $data['description'],
            'customer_email' => $data['customer_email'],
            'reference' => $data['reference']
        ]);

        try {
            $transaction = Transaction::create([
                'amount' => (int) $data['amount'],
                'description' => $data['description'],
                'currency' => ['iso' => $data['currency'] ?? 'XOF'],
                'callback_url' => $data['callback_url'],
                'customer' => [
                    'email' => $data['customer_email'],
                    'firstname' => $data['customer_name'] ?? '',
                    'lastname' => '',
                ],
                'reference' => (string) $data['reference'],
                // ✅ Ajout de custom_metadata pour stocker le numéro de demande
                'custom_metadata' => [
                    'request_number' => (string) $data['reference'],
                    'type' => 'analysis_payment'
                ]
            ]);

            $transaction->generateToken();

            $this->lastTransactionId = $transaction->id;

            $this->logger->info('Transaction créée', [
                'id' => $transaction->id,
                'reference' => $transaction->reference,
                'payment_url' => $transaction->payment_url
            ]);

            return $transaction->payment_url;

        } catch (\Exception $e) {
            $this->logger->error('Erreur FedaPay', [
                'type' => get_class($e),
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            if (str_contains(get_class($e), 'Authentication')) {
                throw new \Exception('Erreur d\'authentification FedaPay. Vérifiez votre clé API.');
            }
            if (str_contains(get_class($e), 'InvalidRequest')) {
                throw new \Exception('Erreur de création de transaction : ' . $e->getMessage());
            }
            if (str_contains(get_class($e), 'ApiConnection')) {
                throw new \Exception('Erreur de connexion au service FedaPay.');
            }

            throw new \Exception('Erreur de paiement : ' . $e->getMessage());
        }
    }

    public function verifyPayment(string $transactionId): array
    {
        try {
            $this->logger->info('Vérification transaction FedaPay', ['id' => $transactionId]);
            
            $transaction = Transaction::retrieve($transactionId);
            
            // ✅ Récupérer toutes les données de la transaction
            $result = $transaction->__toArray();
            
            // ✅ Ajouter les informations importantes manuellement si disponibles
            if (isset($transaction->id)) {
                $result['id'] = $transaction->id;
            }
            if (isset($transaction->reference)) {
                $result['reference'] = $transaction->reference;
            }
            if (isset($transaction->status)) {
                $result['status'] = $transaction->status;
            }
            if (isset($transaction->amount)) {
                $result['amount'] = $transaction->amount;
            }
            
            // ✅ Récupérer custom_metadata si disponible
            if (isset($transaction->custom_metadata)) {
                $result['custom_metadata'] = $transaction->custom_metadata;
            }
            
            $this->logger->info('Transaction vérifiée', [
                'id' => $transactionId,
                'status' => $result['status'] ?? 'unknown',
                'reference' => $result['reference'] ?? null,
                'has_custom_metadata' => isset($result['custom_metadata'])
            ]);
            
            return $result;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur vérification FedaPay', [
                'id' => $transactionId,
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw new \Exception('Impossible de vérifier la transaction : ' . $e->getMessage());
        }
    }

    public function getLastTransactionId(): ?string
    {
        return $this->lastTransactionId;
    }
}