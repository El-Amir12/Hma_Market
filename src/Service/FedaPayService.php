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
        // ✅ Vérification du montant
        $amount = (int) $data['amount'];
        $currency = $data['currency'] ?? 'XOF';
        
        $this->logger->info('🔑 FedaPay createPayment', [
            'amount' => $amount,
            'currency' => $currency,
            'description' => $data['description'],
            'customer_email' => $data['customer_email'],
            'reference' => $data['reference'],
            'callback_url' => $data['callback_url']
        ]);

        // ✅ Validation du montant
        if ($amount <= 0) {
            throw new \Exception('Le montant doit être supérieur à 0');
        }

        try {
            $transaction = Transaction::create([
                'amount' => $amount, // ✅ Montant en FCFA (pas de multiplication)
                'description' => $data['description'],
                'currency' => ['iso' => $currency],
                'callback_url' => $data['callback_url'],
                'customer' => [
                    'email' => $data['customer_email'],
                    'firstname' => $data['customer_name'] ?? '',
                    'lastname' => '',
                ],
                'reference' => (string) $data['reference'],
                'custom_metadata' => [
                    'request_number' => (string) $data['reference'],
                    'type' => 'order_payment'
                ]
            ]);

            $transaction->generateToken();

            $this->lastTransactionId = $transaction->id;

            $this->logger->info('✅ Transaction créée avec succès', [
                'id' => $transaction->id,
                'reference' => $transaction->reference,
                'amount' => $transaction->amount,
                'currency' => $transaction->currency,
                'payment_url' => $transaction->payment_url
            ]);

            return $transaction->payment_url;

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur FedaPay createPayment', [
                'type' => get_class($e),
                'message' => $e->getMessage(),
                'amount' => $amount,
                'currency' => $currency,
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
            $this->logger->info('🔍 Vérification transaction FedaPay', ['id' => $transactionId]);
            
            $transaction = Transaction::retrieve($transactionId);
            
            $result = $transaction->__toArray();
            
            // ✅ Ajouter les champs importants manuellement
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
            if (isset($transaction->custom_metadata)) {
                $result['custom_metadata'] = $transaction->custom_metadata;
            }
            
            $this->logger->info('✅ Transaction vérifiée', [
                'id' => $transactionId,
                'status' => $result['status'] ?? 'unknown',
                'amount' => $result['amount'] ?? null,
                'reference' => $result['reference'] ?? null
            ]);
            
            return $result;
            
        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur vérification FedaPay', [
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