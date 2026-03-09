<?php

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
            'customer_email' => $data['customer_email']
        ]);

        try {
            $transaction = Transaction::create([
                'amount' => (int) $data['amount'],
                'description' => $data['description'],
                'currency' => ['iso' => $data['currency'] ?? 'XOF'],
                'callback_url' => $data['callback_url'],
                'customer' => [
                    'email' => $data['customer_email'],
                    'firstname' => $data['customer_name'],
                    'lastname' => '',
                ],
                'reference' => (string) $data['reference'],
            ]);

            $transaction->generateToken();

            $this->lastTransactionId = $transaction->id;

            $this->logger->info('Transaction créée', [
                'id' => $transaction->id,
                'payment_url' => $transaction->payment_url
            ]);

            return $transaction->payment_url;

        } catch (\Exception $e) {
            $this->logger->error('Erreur FedaPay', [
                'type' => get_class($e),
                'message' => $e->getMessage()
            ]);

            // Personnaliser le message selon le type d'exception
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
            $transaction = Transaction::retrieve($transactionId);
            // Utiliser __toArray() au lieu de toArray()
            return $transaction->__toArray();
        } catch (\Exception $e) {
            $this->logger->error('Erreur vérification FedaPay', [
                'id' => $transactionId,
                'message' => $e->getMessage()
            ]);
            throw new \Exception('Impossible de vérifier la transaction : ' . $e->getMessage());
        }
    }

    public function getLastTransactionId(): ?string
    {
        return $this->lastTransactionId;
    }
}