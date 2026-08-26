-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 24 août 2026 à 01:33
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hma_market_saas`
--

-- --------------------------------------------------------

--
-- Structure de la table `analysis_payment`
--

DROP TABLE IF EXISTS `analysis_payment`;
CREATE TABLE IF NOT EXISTS `analysis_payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(100) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment_data` json DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `analysis_request_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_17F9E20B2FC0CB0F` (`transaction_id`),
  KEY `IDX_17F9E20B8480EA0E` (`analysis_request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `analysis_payment`
--

INSERT INTO `analysis_payment` (`id`, `transaction_id`, `amount`, `status`, `payment_data`, `paid_at`, `created_at`, `analysis_request_id`) VALUES
(4, '450446', '150000.00', 'success', '{\"id\": 450446, \"fees\": 6250, \"mode\": \"momo_test\", \"flags\": [], \"klass\": \"v1/transaction\", \"amount\": 150000, \"status\": \"approved\", \"metadata\": {\"paid_customer\": {\"email\": \"zitawi@gmail.com\", \"lastname\": \"LAPORTE Jean\", \"firstname\": \"Zitawi\"}, \"expire_schedule_jobid\": \"a2e22e483346a5c30b78568f\", \"transfer_schedule_jobid\": \"59c69ea16c310568209602a4\"}, \"operation\": \"payment\", \"reference\": \"trx_eV4_1780344566873\", \"account_id\": 18261, \"balance_id\": 597106, \"commission\": \"0.04\", \"created_at\": \"2026-06-01T20:09:26.873Z\", \"deleted_at\": null, \"updated_at\": \"2026-06-01T20:10:32.080Z\", \"approved_at\": \"2026-06-01T20:10:31.335Z\", \"canceled_at\": null, \"currency_id\": 1, \"customer_id\": 96232, \"declined_at\": null, \"description\": \"Analyse Analyse Power BI - Zitawi\", \"payment_url\": null, \"receipt_url\": \"https://sandbox-api.fedapay.com/v1/transactions/receipt?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjQ1MDQ0NiwiZXhwIjoxNzgwNDMxMDMxfQ.LfH3MUdUYHxdWHCQoe6ADDMfw_fYrHxpK6qIMyIaqNE\", \"refunded_at\": null, \"callback_url\": \"https://0491-137-255-68-66.ngrok-free.app/payment/callback\", \"payment_token\": null, \"amount_debited\": 156250, \"transferred_at\": null, \"custom_metadata\": {\"type\": \"analysis_payment\", \"request_number\": \"ANL-20260601-0001-26\"}, \"last_error_code\": null, \"transaction_key\": null, \"fixed_commission\": 0, \"payment_method_id\": 225459, \"amount_transferred\": 150000, \"merchant_reference\": null, \"to_be_transferred_at\": \"2026-06-04T20:10:31.313Z\", \"sub_accounts_commissions\": null}', '2026-06-01 20:10:52', '2026-06-01 20:10:52', 19),
(5, '452304', '45000.00', 'success', '{\"id\": 452304, \"fees\": 1875, \"mode\": \"momo_test\", \"flags\": [], \"klass\": \"v1/transaction\", \"amount\": 45000, \"status\": \"approved\", \"metadata\": {\"paid_customer\": {\"email\": \"zitawi@gmail.com\", \"lastname\": \"LAPORTE Jean\", \"firstname\": \"Zitawi\"}, \"expire_schedule_jobid\": \"17d3ab7f058e7c907a1f5f8a\", \"transfer_schedule_jobid\": \"a4f33ad2cfe0650bbfe8284a\"}, \"operation\": \"payment\", \"reference\": \"trx_5n4_1780698806693\", \"account_id\": 18261, \"balance_id\": 597106, \"commission\": \"0.04\", \"created_at\": \"2026-06-05T22:33:26.693Z\", \"deleted_at\": null, \"updated_at\": \"2026-06-05T22:34:57.917Z\", \"approved_at\": \"2026-06-05T22:34:57.445Z\", \"canceled_at\": null, \"currency_id\": 1, \"customer_id\": 96232, \"declined_at\": null, \"description\": \"Analyse Analyse Standard - Zitawi\", \"payment_url\": null, \"receipt_url\": \"https://sandbox-api.fedapay.com/v1/transactions/receipt?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjQ1MjMwNCwiZXhwIjoxNzgwNzg1Mjk3fQ.l2r94UhjC918aSjxE6kr2WFK9yfVh57Pa6UrmWiUQdY\", \"refunded_at\": null, \"callback_url\": \"https://2072-137-255-153-8.ngrok-free.app/payment/callback\", \"payment_token\": null, \"amount_debited\": 46875, \"transferred_at\": null, \"custom_metadata\": {\"type\": \"analysis_payment\", \"request_number\": \"ANL-20260605-0001-17\"}, \"last_error_code\": null, \"transaction_key\": null, \"fixed_commission\": 0, \"payment_method_id\": 226865, \"amount_transferred\": 45000, \"merchant_reference\": null, \"to_be_transferred_at\": \"2026-06-08T22:34:57.427Z\", \"sub_accounts_commissions\": null}', '2026-06-05 22:35:10', '2026-06-05 22:35:10', 20);

-- --------------------------------------------------------

--
-- Structure de la table `analysis_price`
--

DROP TABLE IF EXISTS `analysis_price`;
CREATE TABLE IF NOT EXISTS `analysis_price` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `label` varchar(100) NOT NULL,
  `description` longtext,
  `price` int NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `display_order` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FD21AA6C8CDE5729` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `analysis_price`
--

INSERT INTO `analysis_price` (`id`, `type`, `label`, `description`, `price`, `is_active`, `display_order`, `created_at`, `updated_at`) VALUES
(2, 'standard', 'Analyse Standard', '📊 Rapport Excel complet avec analyse des tendances de vente, top produits, analyse des stocks et recommandations personnalisées.', 45000, 1, 1, '2026-05-28 23:25:52', '2026-05-29 01:23:52'),
(3, 'powerbi', 'Analyse Power BI', '📈 Tableaux de bord interactifs Power BI avec visualisations dynamiques, filtres personnalisables, prévisions de ventes et export des données.', 150000, 1, 2, '2026-05-29 01:05:38', '2026-05-29 01:06:12'),
(4, 'custom', 'Analyse sur mesure', '🎯 Analyse personnalisée selon vos besoins spécifiques avec accompagnement dédié et rapports sur mesure.', 300000, 0, 3, '2026-05-29 01:07:33', '2026-06-04 19:38:45'),
(5, 'subscription', 'Abonnement mensuel', '🔄 Analyse automatique chaque mois sans intervention. Livraison du rapport par email et suivi d\'\'évolution.', 99000, 0, 4, '2026-05-29 01:11:17', '2026-06-04 19:38:02');

-- --------------------------------------------------------

--
-- Structure de la table `analysis_request`
--

DROP TABLE IF EXISTS `analysis_request`;
CREATE TABLE IF NOT EXISTS `analysis_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `request_number` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `notes` longtext,
  `export_file_path` varchar(255) DEFAULT NULL,
  `exported_at` datetime DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `payment_transaction_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `company_id` int NOT NULL,
  `raw_export_path` varchar(255) DEFAULT NULL,
  `raw_exported_at` datetime DEFAULT NULL,
  `final_report_path` varchar(255) DEFAULT NULL,
  `final_report_filename` varchar(255) DEFAULT NULL,
  `final_report_type` varchar(255) DEFAULT NULL,
  `final_report_uploaded_at` datetime DEFAULT NULL,
  `final_report_uploaded_by_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4146E999DDC9DCAF` (`request_number`),
  KEY `IDX_4146E999979B1AD6` (`company_id`),
  KEY `IDX_4146E9995F7D856B` (`final_report_uploaded_by_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `analysis_request`
--

INSERT INTO `analysis_request` (`id`, `request_number`, `type`, `amount`, `status`, `period_start`, `period_end`, `notes`, `export_file_path`, `exported_at`, `paid_at`, `payment_transaction_id`, `created_at`, `updated_at`, `expires_at`, `company_id`, `raw_export_path`, `raw_exported_at`, `final_report_path`, `final_report_filename`, `final_report_type`, `final_report_uploaded_at`, `final_report_uploaded_by_id`) VALUES
(19, 'ANL-20260601-0001-26', 'powerbi', '150000.00', 'completed', '2026-03-25', '2026-05-25', 'Ajoutez les NB dans l\'analyse', NULL, NULL, '2026-06-01 20:10:52', '450446', '2026-06-01 20:02:54', '2026-06-05 22:25:46', '2026-06-04 20:02:54', 19, 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/exports/analyses/raw/RAW_DATA_KE93008092_ZITAWI_20260601_201457.zip', '2026-06-01 20:15:46', 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/exports/analyses/reports/KE93008092/RAPPORT_ANALYSE_KE93008092_20260605_222545.pbix', 'RAPPORT_ANALYSE_KE93008092_20260605_222545.pbix', 'powerbi', '2026-06-05 22:25:46', 19),
(20, 'ANL-20260605-0001-17', 'standard', '45000.00', 'completed', '2026-03-20', '2026-06-03', 'Ajoutez les NB', NULL, NULL, '2026-06-05 22:35:10', '452304', '2026-06-05 22:31:59', '2026-06-05 22:41:17', '2026-06-08 22:31:59', 19, 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/exports/analyses/raw/RAW_DATA_KE93008092_ZITAWI_20260605_223642.zip', '2026-06-05 22:37:15', 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/exports/analyses/reports/KE93008092/RAPPORT_ANALYSE_KE93008092_20260605_224117.pbix', 'RAPPORT_ANALYSE_KE93008092_20260605_224117.pbix', 'powerbi', '2026-06-05 22:41:17', 19);

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `customer_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BA388B79395C3F3` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `created_at`, `updated_at`, `customer_id`) VALUES
(5, '2026-07-28 01:31:39', '2026-08-01 01:37:52', 2);

-- --------------------------------------------------------

--
-- Structure de la table `cart_item`
--

DROP TABLE IF EXISTS `cart_item`;
CREATE TABLE IF NOT EXISTS `cart_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantity` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F0FE25271AD5CDBF` (`cart_id`),
  KEY `IDX_F0FE25274584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cart_item`
--

INSERT INTO `cart_item` (`id`, `quantity`, `cart_id`, `product_id`, `notes`) VALUES
(28, 1, 5, 20, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `description` longtext,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  `is_public` tinyint NOT NULL DEFAULT '0',
  `company_public` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C1989D9B62` (`slug`),
  KEY `IDX_64C19C1A76ED395` (`user_id`),
  KEY `IDX_64C19C1727ACA70` (`parent_id`),
  KEY `IDX_64C19C171879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `description`, `image`, `is_active`, `created_at`, `updated_at`, `parent_id`, `user_id`, `hma_service_id`, `subscription_active`, `is_public`, `company_public`) VALUES
(1, 'Produits alimentaires', 'produits-alimentaires', 'Idéale pour le déjeuner', '18900d7e-adbb-4530-ae71-f27216a5839b-53f369ca53cb1bd7d914c17103a9eb92-Copie-6977fe085273a.webp', 1, '2026-01-26 23:51:00', '2026-01-27 01:05:50', NULL, 21, 13, 1, 1, 1),
(2, 'Riz et pâtes', 'riz-et-pates', 'Idéale pour le déjeuner', NULL, 1, '2026-01-27 01:08:47', '2026-07-04 01:39:59', 1, 21, 13, 1, 1, 0),
(13, 'Poulet', 'poulet', NULL, NULL, 1, '2026-03-26 00:37:54', '2026-03-26 00:38:06', 11, 29, 19, 1, 0, 1),
(7, 'Légumes', 'legumes', NULL, NULL, 1, '2026-03-25 00:57:02', '2026-03-25 00:57:12', NULL, 29, 19, 1, 0, 1),
(8, 'Épices', 'epices', NULL, NULL, 1, '2026-03-25 00:59:01', '2026-03-26 00:19:47', NULL, 29, 19, 1, 0, 1),
(9, 'Pain', 'pain', NULL, NULL, 1, '2026-03-25 01:00:48', '2026-03-26 00:18:41', NULL, 29, 19, 1, 0, 1),
(10, 'Sauces', 'sauces', NULL, NULL, 1, '2026-03-25 01:01:13', '2026-04-23 21:27:50', NULL, 29, 19, 1, 0, 1),
(11, 'Viandes', 'viandes', NULL, NULL, 1, '2026-03-25 01:02:00', '2026-03-26 00:15:45', NULL, 29, 19, 1, 0, 1),
(14, 'Tomates', 'tomates', NULL, NULL, 1, '2026-03-26 00:45:45', '2026-03-26 00:45:55', 7, 29, 19, 1, 0, 1),
(15, 'Oignons', 'oignons', NULL, NULL, 1, '2026-03-26 00:46:43', '2026-03-26 00:46:53', 7, 29, 19, 1, 0, 1),
(16, 'Sauce blanche', 'sauce-blanche', NULL, NULL, 1, '2026-03-26 00:49:27', '2026-03-26 00:49:36', 10, 29, 19, 1, 0, 1),
(17, 'Sauce piquante', 'sauce-piquante', NULL, NULL, 1, '2026-03-26 00:50:16', '2026-03-26 00:50:25', 10, 29, 19, 1, 0, 1),
(18, 'Salades', 'salades', NULL, '69c5d208cd8ce.jpg', 1, '2026-03-26 00:50:59', '2026-03-27 00:40:40', 7, 29, 19, 1, 0, 1),
(19, 'Boissons', 'boissons', NULL, NULL, 1, '2026-04-23 21:34:13', '2026-04-23 21:34:31', NULL, 29, 19, 1, 0, 1),
(20, 'Accessoires', 'accessoires', 'Idéale pour les sorties', '6a5573b6b0461.jpg', 1, '2026-07-12 19:34:48', '2026-07-13 23:24:38', NULL, 19, 20, 1, 0, 1),
(21, 'Vêtements', 'vetements', 'Idéale pour les soirées, fêtes et autres', NULL, 1, '2026-07-12 20:26:15', '2026-07-12 20:26:24', NULL, 19, 20, 1, 0, 1),
(22, 'Sacs', 'sacs', 'Idéale pour l\'école', NULL, 1, '2026-07-12 20:31:21', '2026-07-12 20:31:28', 20, 19, 20, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category_recipe`
--

DROP TABLE IF EXISTS `category_recipe`;
CREATE TABLE IF NOT EXISTS `category_recipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `description` longtext,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  `parent_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D5607B4C989D9B62` (`slug`),
  KEY `IDX_D5607B4C727ACA70` (`parent_id`),
  KEY `IDX_D5607B4CA76ED395` (`user_id`),
  KEY `IDX_D5607B4C71879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category_recipe`
--

INSERT INTO `category_recipe` (`id`, `name`, `slug`, `description`, `image`, `is_active`, `created_at`, `updated_at`, `subscription_active`, `parent_id`, `user_id`, `hma_service_id`) VALUES
(1, 'Entée', 'entee', 'Idéale pour un diner de couple', '69b891db326bc.jpg', 1, '2026-03-16 23:25:08', '2026-03-27 00:35:04', 1, NULL, 29, 19),
(4, 'Plats principaux', 'plats-principaux', NULL, NULL, 1, '2026-03-27 17:56:40', '2026-03-27 17:56:48', 1, NULL, 29, 19),
(5, 'Sandwiches', 'sandwiches', NULL, NULL, 1, '2026-03-27 17:57:42', '2026-03-27 17:57:50', 0, 4, 29, 19);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `bio` longtext,
  `is_active` tinyint NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `is_verified` tinyint NOT NULL DEFAULT '0',
  `must_change_password` tinyint NOT NULL DEFAULT '1',
  `verification_token` varchar(255) DEFAULT NULL,
  `verification_token_expires_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `failed_login_attempts` int DEFAULT NULL,
  `locked_until` datetime DEFAULT NULL,
  `last_failed_attempt_at` datetime DEFAULT NULL,
  `reset_password_token` varchar(255) DEFAULT NULL,
  `reset_password_token_expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_81398E09E7927C74` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `email`, `roles`, `password`, `full_name`, `phone`, `address`, `city`, `country`, `bio`, `is_active`, `created_at`, `updated_at`, `last_login_at`, `is_verified`, `must_change_password`, `verification_token`, `verification_token_expires_at`, `deleted_at`, `failed_login_attempts`, `locked_until`, `last_failed_attempt_at`, `reset_password_token`, `reset_password_token_expires_at`) VALUES
(2, 'djamal@gmail.com', '[\"ROLE_CUSTOMER\"]', '$2y$13$RsNSSz.trpEM9iufS9fUru5VEjh1j2IBidtm.nwojeghTNkgDmaXG', 'FASSASSI Dalil', '0197453524', 'Tokpota, Les cocotiers', 'Porto-Novo', 'BJ', 'Trust the process', 1, '2026-07-03 18:48:14', '2026-08-01 02:27:16', '2026-08-01 02:27:16', 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `daily_usage`
--

DROP TABLE IF EXISTS `daily_usage`;
CREATE TABLE IF NOT EXISTS `daily_usage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `sales_count` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_50CA3FA471879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `daily_usage`
--

INSERT INTO `daily_usage` (`id`, `date`, `sales_count`, `created_at`, `hma_service_id`) VALUES
(4, '2026-04-13', 2, '2026-04-13 01:40:15', 19),
(5, '2026-04-14', 7, '2026-04-14 00:36:50', 19),
(6, '2026-04-17', 3, '2026-04-17 02:00:11', 19),
(7, '2026-04-18', 1, '2026-04-18 01:15:44', 19),
(8, '2026-04-19', 1, '2026-04-19 03:26:03', 13),
(9, '2026-04-23', 1, '2026-04-23 22:26:32', 19),
(10, '2026-04-24', 1, '2026-04-24 17:36:19', 13),
(11, '2026-04-25', 1, '2026-04-25 16:14:02', 13),
(12, '2026-04-27', 1, '2026-04-27 02:14:42', 19),
(13, '2026-06-29', 3, '2026-06-29 19:29:59', 19),
(14, '2026-06-29', 3, '2026-06-29 20:16:19', 13),
(15, '2026-07-01', 1, '2026-07-01 20:45:45', 13),
(16, '2026-07-13', 1, '2026-07-13 23:35:39', 20),
(17, '2026-07-18', 1, '2026-07-18 02:33:19', 20);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20260124213526', '2026-01-24 21:36:21', 16682),
('DoctrineMigrations\\Version20260125181429', '2026-01-25 18:15:57', 44344),
('DoctrineMigrations\\Version20260125184835', '2026-01-25 18:49:06', 11646),
('DoctrineMigrations\\Version20260126115940', '2026-01-26 12:01:38', 24482),
('DoctrineMigrations\\Version20260126134921', '2026-01-26 13:49:38', 13623),
('DoctrineMigrations\\Version20260126225838', '2026-01-26 22:59:33', 30298),
('DoctrineMigrations\\Version20260127175500', '2026-01-27 17:55:58', 27867),
('DoctrineMigrations\\Version20260127190905', '2026-01-27 19:09:31', 59431),
('DoctrineMigrations\\Version20260128005912', '2026-01-28 00:59:45', 36950),
('DoctrineMigrations\\Version20260128020247', '2026-01-29 14:31:36', 24826);

-- --------------------------------------------------------

--
-- Structure de la table `employee_role_count`
--

DROP TABLE IF EXISTS `employee_role_count`;
CREATE TABLE IF NOT EXISTS `employee_role_count` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `current_count` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EAD21C9971879AED` (`hma_service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE IF NOT EXISTS `favorite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_favorite` (`customer_id`,`product_id`),
  KEY `IDX_68C58ED99395C3F3` (`customer_id`),
  KEY `IDX_68C58ED94584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `favorite`
--

INSERT INTO `favorite` (`id`, `created_at`, `customer_id`, `product_id`) VALUES
(4, '2026-06-25 23:03:17', 1, 1),
(13, '2026-08-02 02:14:26', 2, 20);

-- --------------------------------------------------------

--
-- Structure de la table `hma_service`
--

DROP TABLE IF EXISTS `hma_service`;
CREATE TABLE IF NOT EXISTS `hma_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_type` varchar(50) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` longtext,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `latitude` decimal(11,8) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `trial_ends_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `subscription_number` varchar(10) DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `subscription_plan` varchar(20) NOT NULL DEFAULT 'trial',
  `subscription_start_at` datetime DEFAULT NULL,
  `subscription_ends_at` datetime DEFAULT NULL,
  `product_count` int NOT NULL DEFAULT '0',
  `order_count` int NOT NULL DEFAULT '0',
  `user_count` int NOT NULL DEFAULT '0',
  `category_count` int NOT NULL DEFAULT '0',
  `supplier_count` int NOT NULL DEFAULT '0',
  `recipe_count` int NOT NULL DEFAULT '0',
  `hma_active` tinyint NOT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `receipt_header` longtext,
  `receipt_footer` longtext,
  `default_tax_rate` double DEFAULT NULL,
  `primary_color` varchar(7) DEFAULT NULL,
  `secondary_color` varchar(7) DEFAULT NULL,
  `description` longtext,
  `website` varchar(255) DEFAULT NULL,
  `is_public` tinyint NOT NULL DEFAULT '0',
  `guard_periods` json DEFAULT NULL,
  `company_public` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1E667870E7927C74` (`email`),
  UNIQUE KEY `UNIQ_1E6678705F6607D3` (`subscription_number`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `hma_service`
--

INSERT INTO `hma_service` (`id`, `company_name`, `company_type`, `phone`, `email`, `password`, `address`, `city`, `country`, `longitude`, `latitude`, `logo`, `is_active`, `trial_ends_at`, `created_at`, `updated_at`, `subscription_number`, `activated_at`, `subscription_plan`, `subscription_start_at`, `subscription_ends_at`, `product_count`, `order_count`, `user_count`, `category_count`, `supplier_count`, `recipe_count`, `hma_active`, `slogan`, `receipt_header`, `receipt_footer`, `default_tax_rate`, `primary_color`, `secondary_color`, `description`, `website`, `is_public`, `guard_periods`, `company_public`) VALUES
(13, 'Dodji Pharmacie', 'pharmacy', '0191186655', 'abiolahaqq@gmail.com', '$2y$13$RCWKHaUFsceGki0DfWm5ZeqfR4Itt58X.Hep0kxKA3IcE9kqz3A/6', 'Situé non loin du commesariat de Dodji', 'Porto-Novo', 'BJ', '2.41500000', '6.36690000', 'pharmacie-1024x620-698f81400fb49.jpg', 1, NULL, '2026-02-10 19:53:38', '2026-07-07 02:03:42', 'JV76849420', '2026-02-13 19:54:08', 'basic', '2026-06-28 19:15:18', '2026-07-28 19:15:18', 2, 7, 4, 2, 1, 0, 1, NULL, NULL, NULL, NULL, '#0463f1', '#8b5cf6', NULL, NULL, 1, NULL, 1),
(19, 'Zitawi', 'restaurant', '0197514234', 'zitawi@gmail.com', '$2y$13$iQv8XtuRwQ7y1GI1xgpzHObE4EFswobz5iz1H6BucRdNgOxmkVHT.', 'Situé non loin de l\'ancien pont Ganhi', 'Cotonou', 'FR', NULL, NULL, 'istockphoto-981368726-612x612-69b83d958de14.jpg', 1, '2026-03-30 17:27:51', '2026-03-16 17:27:51', '2026-08-05 20:22:32', 'KE93008092', '2026-03-16 17:29:07', 'trial', NULL, NULL, 13, 23, 4, 12, 1, 2, 1, 'Qualité et service', 'Merci de votre visite !', 'À très bientôt !', 18, '#16a34a', '#3b82f6', 'Mon entreprise', 'http://Zitawi.com', 0, NULL, 0),
(20, 'Hma Marketplace', 'supermarket', '0156139200', 'abiolaelamir@gmail.com', '$2y$13$yZj/e/72mSDds5lEG072wefxYuCWw6YlI4UTO1QRd65PtmJz0scZC', 'Situé non loin du commesariat de Dodji', 'Porto-Novo', 'BJ', '2.41500000', '6.36690000', '', 1, NULL, '2026-02-10 19:53:38', '2026-06-28 02:12:16', 'AM76849420', '2026-02-13 19:54:08', 'premium', '2026-03-09 01:18:02', '2046-04-09 01:18:02', 0, 0, 1, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `inventory_number` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `inventory_date` date NOT NULL,
  `validated_at` datetime DEFAULT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by_id` int NOT NULL,
  `validated_by_id` int DEFAULT NULL,
  `location_id` int DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B12D4A36964C83FF` (`inventory_number`),
  KEY `IDX_B12D4A36B03A8386` (`created_by_id`),
  KEY `IDX_B12D4A36C69DE5E5` (`validated_by_id`),
  KEY `IDX_B12D4A3664D218E` (`location_id`),
  KEY `IDX_B12D4A3671879AED` (`hma_service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inventory_item`
--

DROP TABLE IF EXISTS `inventory_item`;
CREATE TABLE IF NOT EXISTS `inventory_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `expected_quantity` int NOT NULL,
  `actual_quantity` int NOT NULL,
  `difference` int NOT NULL,
  `notes` longtext,
  `counted_at` datetime DEFAULT NULL,
  `inventory_id` int NOT NULL,
  `product_id` int NOT NULL,
  `stock_batch_id` int DEFAULT NULL,
  `location_id` int DEFAULT NULL,
  `counted_by_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_55BDEA309EEA759` (`inventory_id`),
  KEY `IDX_55BDEA304584665A` (`product_id`),
  KEY `IDX_55BDEA30BC58EA38` (`stock_batch_id`),
  KEY `IDX_55BDEA3064D218E` (`location_id`),
  KEY `IDX_55BDEA307D70F0D2` (`counted_by_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(50) NOT NULL,
  `amount_fcfa` decimal(10,2) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `due_date` date NOT NULL,
  `pdf_path` varchar(255) DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9065174471879AED` (`hma_service_id`),
  KEY `IDX_906517449A1887DC` (`subscription_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_number`, `amount_fcfa`, `period_start`, `period_end`, `status`, `due_date`, `pdf_path`, `sent_at`, `paid_at`, `created_at`, `hma_service_id`, `subscription_id`) VALUES
(8, 'INV-202603-0001', '25000.00', '2026-03-09', '2026-04-09', 'paid', '2026-04-09', 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/recus-abonnement/facture_INV-202603-0001.pdf', '2026-03-09 01:18:13', '2026-03-09 01:18:02', '2026-03-09 01:18:02', 13, 34),
(9, 'INV-202606-0009', '25000.00', '2026-06-28', '2026-07-28', 'paid', '2026-07-28', 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/recus-abonnement/facture_INV-202606-0009.pdf', '2026-06-28 19:16:13', '2026-06-28 19:15:19', '2026-06-28 19:15:19', 13, 36);

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_location_per_service` (`hma_service_id`,`name`),
  KEY `IDX_5E9E89CB71879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `name`, `description`, `code`, `is_active`, `created_at`, `hma_service_id`) VALUES
(1, 'Bar à boissons', 'Stockage des boissons alcoolisées et non alcoolisées', 'BAR-01', 1, '2026-04-09 22:24:13', 19),
(4, 'Etagère de Riz', 'Stockage des Riz parfumé', 'RIZ-01', 1, '2026-04-09 22:24:13', 13);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `is_read` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `read_at` datetime DEFAULT NULL,
  `conversation` int DEFAULT NULL,
  `sender_id` int NOT NULL,
  `recipient_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B6BD307FF624B39D` (`sender_id`),
  KEY `IDX_B6BD307FE92F8F78` (`recipient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750` (`queue_name`,`available_at`,`delivered_at`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":5:{i:0;s:30:\\\"reset_password/email.html.twig\\\";i:1;N;i:2;a:1:{s:10:\\\"resetToken\\\";O:58:\\\"SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\\":4:{s:65:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0token\\\";s:40:\\\"atU7WoHvQujVknfi8RiAxoVLign3RW7DuljyNfHL\\\";s:69:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0expiresAt\\\";O:17:\\\"DateTimeImmutable\\\":3:{s:4:\\\"date\\\";s:26:\\\"2026-01-25 19:54:53.890757\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:71:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0generatedAt\\\";i:1769367293;s:73:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0transInterval\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:28:\\\"no-reply-hmamarket@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:8:\\\"No reply\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:14:\\\"amir@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:27:\\\"Your password reset request\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}i:4;N;}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2026-01-25 18:55:06', '2026-01-25 18:55:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_number` varchar(255) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(30) NOT NULL,
  `total_amount` decimal(12,2) NOT NULL,
  `amount_paid` decimal(12,2) NOT NULL,
  `change_amount` decimal(12,2) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int NOT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  `is_active` tinyint NOT NULL DEFAULT '1',
  `delivery_address` varchar(255) DEFAULT NULL,
  `delivery_city` varchar(255) DEFAULT NULL,
  `delivery_zipcode` varchar(50) DEFAULT NULL,
  `delivery_country` varchar(255) DEFAULT NULL,
  `delivery_latitude` double DEFAULT NULL,
  `delivery_longitude` double DEFAULT NULL,
  `customer_email` varchar(50) DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5299398A76ED395` (`user_id`),
  KEY `IDX_F529939871879AED` (`hma_service_id`),
  KEY `IDX_F52993989395C3F3` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `order_number`, `customer_name`, `customer_phone`, `total_amount`, `amount_paid`, `change_amount`, `payment_method`, `payment_status`, `status`, `notes`, `created_at`, `updated_at`, `user_id`, `hma_service_id`, `subscription_active`, `is_active`, `delivery_address`, `delivery_city`, `delivery_zipcode`, `delivery_country`, `delivery_latitude`, `delivery_longitude`, `customer_email`, `customer_id`) VALUES
(1, 'VENTE-20260411-0001', 'ABIOLA Amir', '0197187212', '7500.00', '7500.00', '0.00', 'cash', 'paid', 'completed', 'Aucune', '2026-04-11 22:10:58', '2026-04-11 22:10:58', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'VENTE-20260412-0001', 'ABIOLA Amir', '0197187212', '7500.00', '10000.00', '2500.00', 'cash', 'paid', 'completed', 'Aucune note', '2026-04-12 00:15:12', '2026-04-12 21:58:12', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'VENTE-20260412-0001', 'ABIOLA Amir', '0197187212', '2500.00', '5000.00', '2500.00', 'cash', 'paid', 'completed', 'Aucune note ', '2026-04-12 00:15:57', '2026-04-12 22:18:57', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'VENTE-20260412-0001', 'ABIOLA Amir', '0197187212', '5000.00', '10000.00', '5000.00', 'cash', 'paid', 'completed', 'Aucune note ', '2026-04-12 00:15:54', '2026-04-12 22:33:54', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'VENTE-20260413-0001', 'ABIOLA Amir', '0197187212', '5000.00', '10000.00', '5000.00', 'cash', 'paid', 'completed', '', '2026-04-13 00:35:51', '2026-04-13 00:35:51', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'VENTE-20260413-0001', 'ABIOLA Amir', '0197187212', '5000.00', '12000.00', '7000.00', 'cash', 'paid', 'completed', 'Aucune remarque ', '2026-04-13 01:40:11', '2026-04-13 01:40:11', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'VENTE-20260413-0001', 'ABIOLA Amir', '0197187212', '2500.00', '10000.00', '7500.00', 'cash', 'paid', 'completed', 'Aucune remarque ', '2026-04-13 01:52:01', '2026-04-13 01:52:01', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'VENTE-20260414-0001', 'ABIOLA Amir', '0197187212', '5000.00', '7000.00', '2000.00', 'cash', 'paid', 'completed', '', '2026-04-14 00:36:45', '2026-04-14 00:36:45', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'VENTE-20260414-d420b9', 'ABIOLA Amir', '0197187212', '2500.00', '5000.00', '2500.00', 'mobile_money', 'paid', 'completed', 'Aucune', '2026-04-14 00:51:41', '2026-04-14 00:51:41', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'VENTE-20260414-e9b027', 'ABIOLA Amir', '0197187212', '5000.00', '10000.00', '5000.00', 'cash', 'paid', 'completed', 'Aucune', '2026-04-14 00:54:22', '2026-04-14 00:54:22', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'VENTE-20260414-09a806', 'ABIOLA Amir', '0197187212', '2500.00', '3000.00', '500.00', 'cash', 'paid', 'completed', '', '2026-04-14 01:07:44', '2026-04-14 01:07:44', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'VENTE-20260414-f15e85', 'ABIOLA Amir', '0197187212', '5000.00', '10000.00', '5000.00', 'mobile_money', 'paid', 'completed', 'Aucune remarque', '2026-04-14 01:30:55', '2026-04-14 01:30:55', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'VENTE-20260414-d3071d', 'Paulain', '0197421752', '2500.00', '5000.00', '2500.00', 'cash', 'paid', 'completed', 'Aucune remarque', '2026-04-14 01:37:49', '2026-04-14 01:37:49', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'VENTE-20260414-5da771', 'ABIOLA Amir', '0197187212', '2500.00', '5000.00', '2500.00', 'mobile_money', 'paid', 'completed', 'Aucune', '2026-04-14 02:04:21', '2026-04-14 02:04:21', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'VENTE-20260417-4ab0af', 'ABIOLA Amir', '0197187212', '3000.00', '10000.00', '7000.00', 'cash', 'paid', 'completed', '', '2026-04-17 02:00:04', '2026-04-17 02:00:04', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'VENTE-20260417-735d59', 'ABIOLA Amir', '0197187212', '4500.00', '10000.00', '5500.00', 'cash', 'paid', 'completed', '', '2026-04-17 22:57:11', '2026-04-17 22:57:11', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'VENTE-20260417-259d76', 'AGBO Paulin', '0197451872', '5000.00', '10000.00', '5000.00', 'mobile_money', 'paid', 'completed', '', '2026-04-17 23:03:14', '2026-04-17 23:03:14', 30, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'VENTE-20260418-d5ad54', 'SODOKPA Darlène', '0197451873', '7500.00', '10000.00', '2500.00', 'mobile_money', 'paid', 'completed', 'Aucune note', '2026-04-18 01:15:41', '2026-04-18 01:15:41', 30, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'VENTE-20260419-705a8b', '', '0197187212', '2000.00', '10000.00', '8000.00', 'cash', 'paid', 'completed', '', '2026-04-19 03:25:59', '2026-04-19 03:25:59', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'VENTE-20260423-55d429', 'ABIOLA Haqq', '0191185545', '1000.00', '2000.00', '1000.00', 'mobile_money', 'paid', 'completed', 'A réserver pour la soirée . ', '2026-04-23 22:26:29', '2026-04-23 22:26:29', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'VENTE-20260424-192798', 'ABIOLA Amir', '0197187212', '2000.00', '5000.00', '3000.00', 'card', 'paid', 'completed', 'Aucune', '2026-04-24 17:36:17', '2026-04-24 17:36:17', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'VENTE-20260425-540d82', 'ABIOLA Amir', '0197187212', '92000.00', '100000.00', '8000.00', 'mobile_money', 'paid', 'completed', '', '2026-04-25 16:13:57', '2026-04-25 16:13:57', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'VENTE-20260427-e9e160', 'ABIOLA Amir', '0197187212', '5000.00', '10000.00', '5000.00', 'cash', 'paid', 'completed', 'Aucune', '2026-04-27 02:14:38', '2026-04-27 02:14:38', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'VENTE-20260629-55a8d3', 'FASSASSi Djamal', '0197412318', '4.00', '8.00', '4.00', 'cash', 'paid', 'completed', 'Aucune note', '2026-06-29 19:29:57', '2026-06-29 19:29:57', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'VENTE-20260629-26b04f', 'FASSASSi Djamal', '0197412318', '25000.00', '30000.00', '5000.00', 'cash', 'paid', 'delivered', 'Aucune note supplémentaire', '2026-06-29 20:16:18', '2026-06-29 20:16:18', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(26, 'VENTE-20260629-ab66bb', '', '0197187212', '4.00', '8.00', '4.00', 'cash', 'paid', 'completed', 'Aucune note', '2026-06-29 20:50:18', '2026-06-29 20:50:18', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'VENTE-20260629-f33bf7', '', '0197187212', '4.00', '8.00', '4.00', 'cash', 'paid', 'completed', 'Aucune note', '2026-06-29 20:51:59', '2026-06-29 20:51:59', 29, 19, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'VENTE-20260629-eccec2', '', '0197187212', '25000.00', '30000.00', '5000.00', 'cash', 'paid', 'completed', 'Aucune note', '2026-06-29 20:53:34', '2026-06-29 20:53:34', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'VENTE-20260629-92a014', '', '0197187212', '25000.00', '30000.00', '5000.00', 'cash', 'paid', 'completed', 'Aucune note', '2026-06-29 21:03:53', '2026-06-29 21:03:53', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'VENTE-20260701-75247c', '', '0197187212', '33000.00', '40000.00', '7000.00', 'cash', 'paid', 'completed', 'Aucune note ', '2026-07-01 20:45:43', '2026-07-01 20:45:43', 20, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'VENTE-20260713-ac314e', 'HOUNSSOU Merveille', '0197452391', '10000.00', '12000.00', '2000.00', 'cash', 'paid', 'completed', 'Aucune ', '2026-07-13 23:35:38', '2026-07-13 23:35:38', 19, 20, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'VENTE-20260718-e24673', 'FASSASSi Djamal', '0197453524', '15000.00', '17000.00', '2000.00', 'cash', 'paid', 'completed', '', '2026-07-18 02:33:18', '2026-07-18 02:33:18', 19, 20, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'CMD-20260726-7305B4', 'FASSASSI Djamal', '0197542170', '5000.00', '0.00', '0.00', 'feda_pay', 'pending', 'pending', NULL, '2026-07-26 01:39:51', '2026-07-26 01:39:51', 19, 13, 1, 1, 'Dodji, commesariat', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(34, 'CMD-20260726-47473E', 'FASSASSI Djamal', '0197542170', '5000.00', '0.00', '0.00', 'feda_pay', 'pending', 'pending', NULL, '2026-07-26 01:45:24', '2026-07-26 01:45:24', 19, 20, 1, 1, 'Dodji, commesariat', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(35, 'CMD-20260726-74E87D', 'FASSASSI Djamal', '0198244354', '5000.00', '0.00', '0.00', 'feda_pay', 'pending', 'pending', NULL, '2026-07-26 02:23:03', '2026-07-26 02:23:03', 19, 20, 1, 1, 'Dodji', 'Cotonoi', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(36, 'CMD-20260726-27E648', 'FASSASSI Djamal', '0197187212', '5000.00', '0.00', '0.00', 'feda_pay', 'pending', 'pending', NULL, '2026-07-26 20:16:50', '2026-07-26 20:16:50', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(37, 'CMD-20260726-A5EC5B', 'FASSASSI Djamal', '0197453524', '5000.00', '5000.00', '0.00', 'feda_pay', 'paid', 'completed', NULL, '2026-07-26 23:35:38', '2026-07-26 23:35:38', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(38, 'CMD-20260727-90321E', 'FASSASSI Djamal', '0197453524', '5000.00', '5000.00', '0.00', 'feda_pay', 'paid', 'pending', NULL, '2026-07-27 01:07:21', '2026-07-27 03:05:04', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(39, 'CMD-20260727-386C0C', 'FASSASSI Djamal', '0197851238', '5000.00', '0.00', '0.00', 'feda_pay', 'pending', 'pending', NULL, '2026-07-27 02:41:55', '2026-07-27 02:41:55', 34, 13, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(40, 'CMD-20260727-9EC926', 'FASSASSI Djamal', '0197851238', '5000.00', '0.00', '0.00', 'feda_pay', 'pending', 'pending', NULL, '2026-07-27 02:42:17', '2026-07-27 02:42:17', 34, 13, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(41, 'CMD-20260727-194374', 'FASSASSI Djamal', '0197453524', '5000.00', '5000.00', '0.00', 'feda_pay', 'paid', 'delivered', NULL, '2026-07-27 02:46:57', '2026-07-28 01:12:33', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', NULL),
(42, 'CMD-20260728-BDC78C', 'FASSASSI Djamal', '0197854127', '4500.00', '4000.00', '0.00', 'feda_pay', 'paid', 'completed', NULL, '2026-07-28 01:40:27', '2026-07-28 01:40:27', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', 2),
(43, 'CMD-20260728-93073B', 'FASSASSI Djamal', '0197472534', '4500.00', '4000.00', '0.00', 'feda_pay', 'paid', 'completed', NULL, '2026-07-28 02:43:21', '2026-07-28 02:48:01', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', 2),
(44, 'CMD-20260728-F33801', 'FASSASSI Djamal', '0197842317', '4500.00', '4000.00', '0.00', 'feda_pay', 'paid', 'pending', NULL, '2026-07-28 03:01:03', '2026-07-28 03:01:03', 19, 20, 1, 1, 'Dodji;47', 'Porto-Novo', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', 2),
(45, 'CMD-20260730-08F09A', 'FASSASSI Djamal', '0197542109', '4500.00', '4000.00', '0.00', 'feda_pay', 'paid', 'pending', NULL, '2026-07-30 00:55:28', '2026-07-30 00:55:28', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', 2),
(46, 'CMD-20260731-A83D77', 'FASSASSI Dalil', '0197853740', '4500.00', '4000.00', '0.00', 'feda_pay', 'paid', 'pending', NULL, '2026-07-31 19:15:38', '2026-07-31 19:15:38', 19, 20, 1, 1, 'Dodji,47', 'Porto-Novo', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', 2),
(47, 'CMD-20260801-6E75DF', 'FASSASSI Dalil', '0197845237', '5000.00', '5000.00', '0.00', 'feda_pay', 'paid', 'processing', NULL, '2026-08-01 01:39:50', '2026-08-01 01:39:50', 19, 20, 1, 1, 'Dodji,47', 'Cotonou', '01BP', 'Bénin', NULL, NULL, 'djamal@gmail.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `unit_price` decimal(12,2) NOT NULL,
  `batch_purchase_price` decimal(12,2) NOT NULL,
  `quantity` int NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `vente_id` int NOT NULL,
  `recipe_id` int DEFAULT NULL,
  `promotion_id` int DEFAULT NULL,
  `promotion_name` varchar(255) DEFAULT NULL,
  `promotion_discount_amount` varchar(255) DEFAULT NULL,
  `promotion_discount_percentage` varchar(255) DEFAULT NULL,
  `original_unit_price` varchar(255) DEFAULT NULL,
  `stock_batch_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `notes` longtext,
  `applied_promotion_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_52EA1F097DC7170A` (`vente_id`),
  KEY `IDX_52EA1F0959D8A214` (`recipe_id`),
  KEY `IDX_52EA1F0954ADF74B` (`applied_promotion_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `order_item`
--

INSERT INTO `order_item` (`id`, `product_name`, `unit_price`, `batch_purchase_price`, `quantity`, `total_price`, `created_at`, `vente_id`, `recipe_id`, `promotion_id`, `promotion_name`, `promotion_discount_amount`, `promotion_discount_percentage`, `original_unit_price`, `stock_batch_id`, `product_id`, `notes`, `applied_promotion_id`) VALUES
(1, 'Chawarma', '4.00', '0.00', 3, '12.00', '2026-04-11 22:11:05', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Chawarma', '4.00', '0.00', 3, '12.00', '2026-04-12 21:58:25', 2, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Chawarma', '4.00', '0.00', 1, '4.00', '2026-04-12 22:19:00', 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-12 22:33:58', 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-13 00:35:53', 5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-13 01:40:15', 6, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Chawarma', '4.00', '0.00', 1, '4.00', '2026-04-13 01:52:04', 7, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-14 00:36:49', 8, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Chawarma', '4.00', '0.00', 1, '4.00', '2026-04-14 00:51:43', 9, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-14 00:54:25', 10, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Chawarma', '4.00', '0.00', 1, '4.00', '2026-04-14 01:07:47', 11, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-14 01:30:59', 12, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Chawarma', '4.00', '0.00', 1, '4.00', '2026-04-14 01:37:52', 13, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Chawarma', '4.00', '0.00', 1, '4.00', '2026-04-14 02:04:24', 14, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-17 02:00:11', 15, 5, 2, 'Promo Chawarma', '1', '75', '4', NULL, NULL, NULL, NULL),
(16, 'Chawarma', '4.00', '0.00', 3, '12.00', '2026-04-17 22:57:14', 16, 5, 2, 'Promo Chawarma', '1', '75', '4', NULL, NULL, NULL, NULL),
(17, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-17 23:03:17', 17, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Chawarma', '4.00', '0.00', 3, '12.00', '2026-04-18 01:15:44', 18, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 2, '2000.00', '2026-04-19 03:26:03', 19, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', NULL, NULL, NULL, NULL),
(20, 'Coca-Cola Canette 33cl', '2.00', '0.00', 2, '4.00', '2026-04-23 22:26:31', 20, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 2, '2000.00', '2026-04-24 17:36:19', 21, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', NULL, 1, NULL, NULL),
(22, 'Adidas 350 SPLY', '30000.00', '25000.00', 3, '90000.00', '2026-04-25 16:14:01', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(23, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 2, '2000.00', '2026-04-25 16:14:02', 22, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', NULL, 1, NULL, NULL),
(24, 'Chawarma', '4.00', '0.00', 2, '8.00', '2026-04-27 02:14:42', 23, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Moins de piment , moins d\'oignon', NULL),
(25, 'Coca-Cola Canette 33cl', '2.00', '0.00', 2, '4.00', '2026-06-29 19:29:59', 24, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 25, '25000.00', '2026-06-29 20:16:19', 25, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', 34, 1, NULL, 3),
(27, 'Coca-Cola Canette 33cl', '2.00', '0.00', 2, '4.00', '2026-06-29 20:50:19', 26, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Coca-Cola Canette 33cl', '2.00', '0.00', 2, '4.00', '2026-06-29 20:52:00', 27, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 25, '25000.00', '2026-06-29 20:53:35', 28, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', 34, 1, NULL, 3),
(30, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 25, '25000.00', '2026-06-29 21:03:53', 29, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', 34, 1, NULL, 3),
(31, 'Riz parfumé 5 Kg', '1000.00', '1250.00', 33, '33000.00', '2026-07-01 20:45:45', 30, NULL, 3, 'Promotion Rabais', '500', '33.33', '1500', 36, 1, NULL, 3),
(32, 'Montre connectée', '5000.00', '3500.00', 2, '10000.00', '2026-07-13 23:35:38', 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL),
(33, 'Montre connectée', '5000.00', '3500.00', 3, '15000.00', '2026-07-18 02:33:18', 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL),
(34, 'Montre connectée', '5000.00', '3500.00', 1, '5000.00', '2026-07-26 01:45:25', 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, 'pointure 45', NULL),
(35, 'Montre connectée', '5000.00', '3500.00', 1, '5000.00', '2026-07-26 02:23:03', 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '55', NULL),
(36, 'Montre connectée', '5000.00', '3500.00', 1, '5000.00', '2026-07-26 20:16:50', 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL),
(37, 'Montre connectée', '5000.00', '3500.00', 1, '5000.00', '2026-07-26 23:35:39', 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL),
(38, 'Montre connectée', '5000.00', '3500.00', 1, '5000.00', '2026-07-27 01:07:21', 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL),
(39, 'Montre connectée', '5000.00', '3500.00', 1, '5000.00', '2026-07-27 02:46:58', 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL),
(40, 'Montre connectée', '5000.00', '3500.00', 1, '4500.00', '2026-07-28 01:40:29', 42, NULL, 4, 'Promotion Remise', '500', '10', '5000', NULL, 19, NULL, 4),
(41, 'Montre connectée', '5000.00', '3500.00', 1, '4500.00', '2026-07-28 02:43:22', 43, NULL, 4, 'Promotion Remise', '500', '10', '5000', NULL, 19, NULL, 4),
(42, 'Montre connectée', '5000.00', '3500.00', 1, '4500.00', '2026-07-28 03:01:04', 44, NULL, 4, 'Promotion Remise', '500', '10', '5000', NULL, 19, NULL, 4),
(43, 'Montre connectée', '5000.00', '3500.00', 1, '4500.00', '2026-07-30 00:55:29', 45, NULL, 4, 'Promotion Remise', '500', '10', '5000', NULL, 19, NULL, 4),
(44, 'Montre connectée', '5000.00', '3500.00', 1, '4500.00', '2026-07-31 19:15:39', 46, NULL, 4, 'Promotion Remise', '500', '10', '5000', NULL, 19, NULL, 4),
(45, 'Bracelet connecté', '5000.00', '3500.00', 1, '5000.00', '2026-08-01 01:39:51', 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `payment_date` datetime NOT NULL,
  `invoice_number` varchar(100) DEFAULT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_id` int NOT NULL,
  `subscription_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6D28840D71879AED` (`hma_service_id`),
  KEY `IDX_6D28840D9A1887DC` (`subscription_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `payment_method`, `transaction_id`, `status`, `payment_date`, `invoice_number`, `notes`, `created_at`, `hma_service_id`, `subscription_id`, `subscription_number`) VALUES
(33, '25000.00', 'fedapay', '413827', 'completed', '2026-03-09 01:18:01', 'INV-202603-0001', 'Plan: basic, Période: monthly', '2026-03-09 01:17:19', 13, 34, 'JV76849420'),
(34, '25000.00', 'fedapay', '462591', 'completed', '2026-06-28 19:15:18', 'INV-202606-0009', 'Plan: basic, Période: monthly', '2026-06-28 19:12:58', 13, 36, 'JV76849420');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` longtext,
  `barcode` varchar(255) NOT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `purchase_price` decimal(12,2) NOT NULL,
  `stock_quantity` int NOT NULL,
  `min_quantity` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `has_expiry_date` tinyint NOT NULL,
  `dosage` varchar(50) DEFAULT NULL,
  `form` varchar(100) DEFAULT NULL,
  `prescription_required` tinyint DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  `unit` varchar(50) DEFAULT NULL,
  `is_storable` tinyint NOT NULL DEFAULT '0',
  `last_stock_updated_at` datetime DEFAULT NULL,
  `last_stock_updated_by_id` int DEFAULT NULL,
  `is_public` tinyint NOT NULL DEFAULT '0',
  `company_public` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`),
  KEY `IDX_D34A04ADA76ED395` (`user_id`),
  KEY `idx_hma_service` (`hma_service_id`),
  KEY `idx_is_active` (`is_active`),
  KEY `idx_subscription_active` (`subscription_active`),
  KEY `idx_barcode` (`barcode`(250)),
  KEY `idx_name` (`name`),
  KEY `IDX_D34A04ADCAAD984E` (`last_stock_updated_by_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `description`, `barcode`, `sale_price`, `purchase_price`, `stock_quantity`, `min_quantity`, `image`, `is_active`, `created_at`, `updated_at`, `category_id`, `user_id`, `has_expiry_date`, `dosage`, `form`, `prescription_required`, `hma_service_id`, `subscription_active`, `unit`, `is_storable`, `last_stock_updated_at`, `last_stock_updated_by_id`, `is_public`, `company_public`) VALUES
(1, 'Riz parfumé 5 Kg', 'riz-parfume-5-kg', 'Idéale pour les soirées', 'PROD-20260127-727660', '1500.00', '1250.00', 30, 10, 'Cliches-de-Saveurs-Ines-Millet-Prise-Direct-Noel-1-6979169991878.jpg', 1, '2026-01-27 19:11:59', '2026-03-15 18:59:34', 2, 21, 0, NULL, 'cirop', 0, 13, 1, 'pièce', 0, NULL, NULL, 1, 1),
(2, 'Adidas 350 SPLY', 'adidas-350-sply', 'Idéale pour les sories', 'PROD-20260314-684737', '30000.00', '25000.00', 50, 5, 'default-product.png', 1, '2026-03-14 22:40:33', '2026-07-04 01:21:55', 1, 20, 0, NULL, NULL, 1, 13, 1, 'pièce', 0, NULL, NULL, 1, 0),
(5, 'Poulet', 'poulet', NULL, 'PROD-20260326-174368', NULL, '76.22', 5000, 20, 'default-product.png', 1, '2026-03-26 01:00:23', NULL, 13, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(6, 'Pain pita', 'pain-pita', NULL, 'PROD-20260326-142181', NULL, '7.62', 5000, 10, 'default-product.png', 1, '2026-03-26 01:01:41', NULL, 9, 29, 0, NULL, NULL, NULL, 19, 1, 'pièce', 0, NULL, NULL, 0, 1),
(7, 'Tomate', 'tomate', NULL, 'PROD-20260326-409834', NULL, '30.49', 5000, 500, 'default-product.png', 1, '2026-03-26 01:03:01', NULL, 14, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(8, 'Oignon', 'oignon', NULL, 'PROD-20260326-837873', NULL, '22.87', 5000, 500, 'default-product.png', 1, '2026-03-26 01:04:21', '2026-05-09 02:18:59', 15, 29, 1, NULL, NULL, NULL, 19, 1, 'g', 0, '2026-05-09 02:18:59', 29, 0, 1),
(9, 'Sauce blanche', 'sauce-blanche', NULL, 'PROD-20260326-956849', NULL, '30.49', 5000, 1000, 'default-product.png', 1, '2026-03-26 01:06:10', NULL, 16, 29, 0, NULL, NULL, NULL, 19, 1, 'ml', 0, NULL, NULL, 0, 1),
(10, 'Sauce piquante', 'sauce-piquante', NULL, 'PROD-20260326-333810', NULL, '30.49', 5000, 100, 'default-product.png', 1, '2026-03-26 01:10:55', NULL, 17, 29, 0, NULL, NULL, NULL, 19, 1, 'ml', 0, NULL, NULL, 0, 1),
(11, 'Curcuma', 'curcuma', NULL, 'PROD-20260326-834664', NULL, '30.49', 5000, 100, 'default-product.png', 1, '2026-03-26 01:12:44', NULL, 8, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(12, 'Cumin', 'cumin', NULL, 'PROD-20260326-324680', NULL, '22.87', 5000, 10, 'default-product.png', 1, '2026-03-26 01:15:06', NULL, 8, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(13, 'Paprika', 'paprika', NULL, 'PROD-20260326-390307', NULL, '30.49', 5000, 100, 'default-product.png', 1, '2026-03-26 01:26:28', NULL, 8, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(14, 'Salade verte', 'salade-verte', NULL, 'PROD-20260326-904863', NULL, '45.73', 5000, 100, 'default-product.png', 1, '2026-03-26 01:28:44', NULL, 18, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(15, 'Cornichon', 'cornichon', NULL, 'PROD-20260326-731823', NULL, '76.22', 5000, 200, '69c5da7c91b25.jpg', 1, '2026-03-26 01:31:41', '2026-03-27 01:16:44', 7, 29, 0, NULL, NULL, NULL, 19, 1, 'pièce', 0, NULL, NULL, 0, 1),
(17, 'Blanc de poulet', 'blanc-de-poulet', NULL, 'PROD-20260327-627187', NULL, '22.00', 3000, 1000, 'default-product.png', 1, '2026-03-27 17:48:03', NULL, 13, 29, 0, NULL, NULL, NULL, 19, 1, 'g', 0, NULL, NULL, 0, 1),
(18, 'Coca-Cola Canette 33cl', 'coca-cola-canette-33cl', NULL, 'PROD-20260423-412265', NULL, '1.00', 44, 30, 'default-product.png', 1, '2026-04-23 21:39:28', NULL, 19, 29, 0, NULL, NULL, NULL, 19, 1, 'pièce', 1, NULL, NULL, 0, 1),
(19, 'Montre connectée', 'montre-connectee', 'Idéale pour un dîner', 'PROD-20260713-184809', '5000.00', '3500.00', 20, 10, '6a5574a331528.jpg', 1, '2026-07-13 23:28:24', NULL, 20, 19, 0, NULL, NULL, NULL, 20, 1, 'pièce', 0, NULL, NULL, 0, 1),
(20, 'Bracelet connecté', 'bracelet-connecte', 'Idéale pour le sport', 'PROD-20260713-184709', '5000.00', '3500.00', 19, 10, '6a5574a331528.jpg', 1, '2026-07-13 23:28:24', NULL, 20, 19, 0, NULL, NULL, NULL, 20, 1, 'pièce', 0, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` longtext,
  `value` decimal(10,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `user_id` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type_promotion_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C11D7DD171879AED` (`hma_service_id`),
  KEY `IDX_C11D7DD1A76ED395` (`user_id`),
  KEY `IDX_C11D7DD194DE4B91` (`type_promotion_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `name`, `description`, `value`, `start_date`, `end_date`, `is_active`, `created_at`, `updated_at`, `hma_service_id`, `user_id`, `image`, `type_promotion_id`) VALUES
(2, 'Promo Chawarma', 'Profitez d\'une réduction sur notre délicieux Chawarma', '1.00', '2026-04-05 00:00:00', '2026-05-25 00:00:00', 1, '2026-04-04 02:36:41', '2026-04-16 03:04:05', 19, 29, NULL, 3),
(3, 'Promotion Rabais', NULL, '500.00', '2026-04-04 00:00:00', '2026-08-27 00:00:00', 1, '2026-04-04 18:33:11', '2026-04-06 01:26:33', 13, 20, NULL, 7),
(4, 'Promotion Remise', NULL, '500.00', '2026-04-04 00:00:00', '2026-08-27 00:00:00', 1, '2026-04-04 18:33:11', '2026-04-06 01:26:33', 20, 20, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `promotion_category`
--

DROP TABLE IF EXISTS `promotion_category`;
CREATE TABLE IF NOT EXISTS `promotion_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promotion_id` int NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C018BD85139DF194` (`promotion_id`),
  KEY `IDX_C018BD8512469DE2` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `promotion_category`
--

INSERT INTO `promotion_category` (`id`, `promotion_id`, `category_id`) VALUES
(2, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `promotion_category_recipe`
--

DROP TABLE IF EXISTS `promotion_category_recipe`;
CREATE TABLE IF NOT EXISTS `promotion_category_recipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promotion_id` int NOT NULL,
  `category_recipe_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_791CA10F139DF194` (`promotion_id`),
  KEY `IDX_791CA10F9EB87024` (`category_recipe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `promotion_product`
--

DROP TABLE IF EXISTS `promotion_product`;
CREATE TABLE IF NOT EXISTS `promotion_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promotion_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8B37F297139DF194` (`promotion_id`),
  KEY `IDX_8B37F2974584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `promotion_product`
--

INSERT INTO `promotion_product` (`id`, `promotion_id`, `product_id`) VALUES
(2, 4, 19);

-- --------------------------------------------------------

--
-- Structure de la table `promotion_recipe`
--

DROP TABLE IF EXISTS `promotion_recipe`;
CREATE TABLE IF NOT EXISTS `promotion_recipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promotion_id` int NOT NULL,
  `recipe_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CF329A0A139DF194` (`promotion_id`),
  KEY `IDX_CF329A0A59D8A214` (`recipe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `promotion_recipe`
--

INSERT INTO `promotion_recipe` (`id`, `promotion_id`, `recipe_id`) VALUES
(4, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int NOT NULL AUTO_INCREMENT,
  `purchase_number` varchar(50) NOT NULL,
  `total_amount` decimal(12,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `received_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `cancellation_reason` longtext,
  `cancelled_at` datetime DEFAULT NULL,
  `cancelled_by_id` int DEFAULT NULL,
  `bon_commande` varchar(255) DEFAULT NULL,
  `recu_achat` varchar(255) DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6117D13B2ADD6D8C` (`supplier_id`),
  KEY `IDX_6117D13BA76ED395` (`user_id`),
  KEY `IDX_6117D13B187B2D12` (`cancelled_by_id`),
  KEY `IDX_6117D13B71879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `purchase`
--

INSERT INTO `purchase` (`id`, `purchase_number`, `total_amount`, `status`, `notes`, `created_at`, `confirmed_at`, `supplier_id`, `user_id`, `received_at`, `updated_at`, `cancellation_reason`, `cancelled_at`, `cancelled_by_id`, `bon_commande`, `recu_achat`, `hma_service_id`) VALUES
(46, 'ACH-20260328-0001', '120000.00', 'received', 'Aucune remarque', '2026-03-28 20:14:35', '2026-03-28 20:14:36', 1, 29, '2026-03-28 20:24:44', NULL, NULL, NULL, NULL, NULL, NULL, 19),
(47, 'ACH-20260328-0001', '150000.00', 'received', '', '2026-03-28 20:37:26', '2026-03-28 20:37:26', 1, 29, '2026-03-28 20:39:13', NULL, NULL, NULL, NULL, NULL, NULL, 19),
(48, 'ACH-20260330-0001', '172000.00', 'received', 'Aucune remarque', '2026-03-30 19:12:32', '2026-03-30 19:12:33', 1, 29, '2026-03-30 19:19:13', NULL, NULL, NULL, NULL, NULL, NULL, 19),
(49, 'ACH-20260401-0001', '6000.00', 'cancelled', '', '2026-04-01 20:21:35', '2026-04-01 20:21:35', 1, 29, NULL, NULL, 'Produit indisponible', '2026-04-01 20:52:38', 29, 'bon_commande_ACH-20260401-0001.pdf', NULL, 19),
(50, 'ACH-20260401-0001', '10000.00', 'received', '', '2026-04-01 20:59:09', '2026-04-01 20:59:09', 1, 29, '2026-04-01 22:45:25', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260401-0001.pdf', 'recu_achat_ACH-20260401-0001.pdf', 19),
(51, 'ACH-20260402-0001', '22500.00', 'received', 'Aucune ', '2026-04-02 16:46:27', '2026-04-02 16:46:28', 1, 29, '2026-04-02 16:49:33', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260402-0001.pdf', 'recu_achat_ACH-20260402-0001.pdf', 19),
(52, 'ACH-20260402-0001', '50000.00', 'cancelled', 'Aucune ', '2026-04-02 16:51:32', '2026-04-02 16:51:32', 1, 29, NULL, NULL, 'Erreur inventaire', '2026-04-02 17:25:52', 29, 'bon_commande_ACH-20260402-0001.pdf', NULL, 19),
(53, 'ACH-20260402-0001', '15000.00', 'received', 'Aucune ', '2026-04-02 16:57:58', '2026-04-02 16:57:58', 1, 29, '2026-04-02 17:11:52', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260402-0001.pdf', 'recu_achat_ACH-20260402-0001.pdf', 19),
(54, 'ACH-20260402-0001', '81000.00', 'received', 'Aucune', '2026-04-02 17:01:39', '2026-04-02 17:01:39', 1, 29, '2026-04-02 17:03:18', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260402-0001.pdf', 'recu_achat_ACH-20260402-0001.pdf', 19),
(55, 'ACH-20260510-0001', '31250.00', 'received', 'Aucune note', '2026-05-10 01:47:01', '2026-05-10 01:47:01', 2, 20, '2026-06-28 20:19:38', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260510-0001.pdf', 'recu_achat_ACH-20260510-0001.pdf', 13),
(68, 'ACH-20260521-0001', '30000.00', 'received', 'Aucune note supplémentaire', '2026-05-21 01:45:57', '2026-05-21 01:45:57', 1, 29, '2026-05-21 02:20:20', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260521-0001.pdf', 'recu_achat_ACH-20260521-0001.pdf', 19),
(69, 'ACH-20260701-0001', '6250.00', 'received', 'Faite attention aux produits ', '2026-07-01 01:45:17', '2026-07-01 01:45:18', 2, 20, '2026-07-01 01:47:27', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260701-0001.pdf', 'recu_achat_ACH-20260701-0001.pdf', 13),
(70, 'ACH-20260701-0001', '6250.00', 'received', '', '2026-07-01 01:58:31', '2026-07-01 01:58:31', 2, 20, '2026-07-01 01:59:20', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260701-0001.pdf', 'recu_achat_ACH-20260701-0001.pdf', 13),
(71, 'ACH-20260701-0001', '31250.00', 'received', '', '2026-07-01 20:03:50', '2026-07-01 20:03:50', 2, 20, '2026-07-01 20:23:58', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260701-0001.pdf', 'recu_achat_ACH-20260701-0001.pdf', 13),
(72, 'ACH-20260701-0001', '1250.00', 'received', '', '2026-07-01 20:28:06', '2026-07-01 20:28:06', 2, 20, '2026-07-01 20:28:55', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260701-0001.pdf', 'recu_achat_ACH-20260701-0001.pdf', 13),
(73, 'ACH-20260702-0001', '2500.00', 'received', '', '2026-05-02 01:24:19', '2026-07-02 01:24:19', 2, 20, '2026-05-02 01:25:24', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260702-0001.pdf', 'recu_achat_ACH-20260702-0001.pdf', 13);

-- --------------------------------------------------------

--
-- Structure de la table `purchase_item`
--

DROP TABLE IF EXISTS `purchase_item`;
CREATE TABLE IF NOT EXISTS `purchase_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `batch_number` varchar(50) DEFAULT NULL,
  `quantity` int NOT NULL,
  `unit_price` decimal(12,2) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `manufacturing_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `purchase_id` int NOT NULL,
  `product_id` int NOT NULL,
  `notes` longtext,
  PRIMARY KEY (`id`),
  KEY `IDX_6FA8ED7D558FBEB9` (`purchase_id`),
  KEY `IDX_6FA8ED7D4584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `purchase_item`
--

INSERT INTO `purchase_item` (`id`, `batch_number`, `quantity`, `unit_price`, `total_price`, `expiry_date`, `manufacturing_date`, `created_at`, `purchase_id`, `product_id`, `notes`) VALUES
(39, 'LOT-20260328-10-19243', 6, '20000.00', '120000.00', NULL, NULL, '2026-03-28 20:14:36', 46, 10, NULL),
(40, 'LOT-20260328-8-00590', 10, '15000.00', '150000.00', NULL, NULL, '2026-03-28 20:37:26', 47, 8, NULL),
(41, 'LOT-20260330-9-87528', 4, '20000.00', '80000.00', NULL, NULL, '2026-03-30 19:12:33', 48, 9, NULL),
(42, 'LOT-20260330-10-20317', 4, '20000.00', '80000.00', NULL, NULL, '2026-03-30 19:12:33', 48, 10, NULL),
(43, 'LOT-20260330-8-31021', 10, '1200.00', '12000.00', NULL, NULL, '2026-03-30 19:12:33', 48, 8, NULL),
(44, 'LOT-20260401-6-87826', 2, '3000.00', '6000.00', NULL, NULL, '2026-04-01 20:21:35', 49, 6, NULL),
(45, 'LOT-20260401-6-54980', 5, '2000.00', '10000.00', NULL, NULL, '2026-04-01 20:59:09', 50, 6, NULL),
(46, 'LOT-20260402-6-06721', 5, '4500.00', '22500.00', NULL, NULL, '2026-04-02 16:46:28', 51, 6, NULL),
(47, 'LOT-20260402-10-96798', 10, '5000.00', '50000.00', NULL, NULL, '2026-04-02 16:51:32', 52, 10, NULL),
(48, 'LOT-20260402-8-07700', 3, '5000.00', '15000.00', '2026-04-18', '2026-04-08', '2026-04-02 16:57:58', 53, 8, NULL),
(50, 'LOT-20260402-9-20524', 3, '15000.00', '45000.00', NULL, NULL, '2026-04-02 17:01:39', 54, 9, NULL),
(51, 'LOT-20260402-10-40017', 6, '6000.00', '36000.00', NULL, NULL, '2026-04-02 17:01:39', 54, 10, NULL),
(52, 'LOT-20260510-1-69673', 25, '1250.00', '31250.00', NULL, NULL, '2026-05-10 01:47:01', 55, 1, NULL),
(65, 'LOT-20260521-8-48281', 2, '15000.00', '30000.00', '2029-06-07', '2026-05-21', '2026-05-21 01:45:57', 68, 8, NULL),
(66, 'LOT-20260701-1-52398', 5, '1250.00', '6250.00', NULL, NULL, '2026-07-01 01:45:18', 69, 1, NULL),
(67, 'LOT-20260701-1-94745', 5, '1250.00', '6250.00', NULL, NULL, '2026-07-01 01:58:31', 70, 1, NULL),
(68, 'LOT-20260701-1-74362', 25, '1250.00', '31250.00', NULL, NULL, '2026-07-01 20:03:50', 71, 1, NULL),
(69, 'LOT-20260701-1-29889', 1, '1250.00', '1250.00', NULL, NULL, '2026-07-01 20:28:06', 72, 1, NULL),
(70, 'LOT-20260702-1-67837', 2, '1250.00', '2500.00', NULL, NULL, '2026-07-02 01:24:19', 73, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int NOT NULL AUTO_INCREMENT,
  `score` int NOT NULL,
  `comment` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_rating` (`customer_id`,`product_id`),
  KEY `IDX_D88926229395C3F3` (`customer_id`),
  KEY `IDX_D88926224584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`id`, `score`, `comment`, `created_at`, `updated_at`, `customer_id`, `product_id`) VALUES
(1, 3, 'chill !!!', '2026-07-18 00:42:34', '2026-07-25 01:30:48', 2, 19);

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` longtext,
  `selling_price` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  `category_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `instructions` longtext,
  `type` varchar(50) NOT NULL DEFAULT 'food',
  PRIMARY KEY (`id`),
  KEY `IDX_DA88B13771879AED` (`hma_service_id`),
  KEY `IDX_DA88B13712469DE2` (`category_id`),
  KEY `IDX_DA88B137A76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `description`, `selling_price`, `created_at`, `updated_at`, `is_active`, `hma_service_id`, `subscription_active`, `category_id`, `user_id`, `image`, `instructions`, `type`) VALUES
(5, 'Chawarma', 'Plat oriental à base de poulet mariné, servi dans un pain pita avec légumes et sauces.', '4.00', '2026-03-27 18:07:07', '2026-03-27 18:20:18', 1, 19, 1, 5, 29, '69c6ca62b098e.jpg', '1. Couper le poulet en fines lamelles.\n2. Mélanger les épices et enrober le poulet.\n3. Cuire le poulet à la poêle.\n4. Garnir le pain pita de laitue, tomate, oignon et cornichons.\n5. Ajouter le poulet et les sauces.', 'food'),
(6, 'Coca-Cola Canette 33cl', NULL, '2.00', '2026-04-23 21:43:09', '2026-04-26 02:37:35', 1, 19, 1, 1, 29, '69ea99787ee08.jpg', NULL, 'drink');

-- --------------------------------------------------------

--
-- Structure de la table `recipe_item`
--

DROP TABLE IF EXISTS `recipe_item`;
CREATE TABLE IF NOT EXISTS `recipe_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantity` double NOT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `recipe_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_60007FC159D8A214` (`recipe_id`),
  KEY `IDX_60007FC14584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recipe_item`
--

INSERT INTO `recipe_item` (`id`, `quantity`, `unit`, `recipe_id`, `product_id`) VALUES
(5, 200, 'g', 5, 17),
(6, 1, 'pièce', 5, 6),
(7, 50, 'g', 5, 7),
(8, 50, 'ml', 5, 9),
(9, 10, 'ml', 5, 10),
(10, 2, 'g', 5, 11),
(11, 1, 'g', 5, 12),
(12, 1, 'g', 5, 13),
(13, 20, 'g', 5, 14),
(14, 20, 'pièce', 5, 15),
(15, 1, 'pièce', 6, 18);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
CREATE TABLE IF NOT EXISTS `reset_password_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `selector` varchar(20) NOT NULL,
  `hashed_token` varchar(100) NOT NULL,
  `requested_at` datetime NOT NULL,
  `expires_at` datetime NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `return_item`
--

DROP TABLE IF EXISTS `return_item`;
CREATE TABLE IF NOT EXISTS `return_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_id` int NOT NULL,
  `quantity_returned` int NOT NULL,
  `unit_price_at_sale` decimal(10,2) NOT NULL,
  `refund_amount` decimal(10,2) NOT NULL,
  `total_refund` decimal(10,2) NOT NULL,
  `promotion_id` int DEFAULT NULL,
  `promotion_name` varchar(255) DEFAULT NULL,
  `return_order_id` int NOT NULL,
  `original_order_item_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7EED95F79BE58A6F` (`return_order_id`),
  KEY `IDX_7EED95F72B74224A` (`original_order_item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `return_item`
--

INSERT INTO `return_item` (`id`, `product_name`, `item_type`, `item_id`, `quantity_returned`, `unit_price_at_sale`, `refund_amount`, `total_refund`, `promotion_id`, `promotion_name`, `return_order_id`, `original_order_item_id`) VALUES
(1, 'Riz parfumé 5 Kg', 'product', 0, 1, '1000.00', '1000.00', '1000.00', 3, 'Promotion Rabais', 1, 19),
(8, 'Riz parfumé 5 Kg', 'product', 1, 1, '1000.00', '1000.00', '1000.00', 3, 'Promotion Rabais', 8, 19),
(9, 'Coca-Cola Canette 33cl', 'recipe', 6, 1, '500.00', '500.00', '500.00', NULL, NULL, 9, 20);

-- --------------------------------------------------------

--
-- Structure de la table `return_order`
--

DROP TABLE IF EXISTS `return_order`;
CREATE TABLE IF NOT EXISTS `return_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `return_number` varchar(50) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `return_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `reason_notes` longtext,
  `total_refund_amount` decimal(10,2) NOT NULL,
  `refund_method` varchar(50) NOT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `original_order_id` int NOT NULL,
  `returned_by_id` int NOT NULL,
  `hma_service_id` int NOT NULL,
  `approved_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `approved_by_id` int DEFAULT NULL,
  `completed_by_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2C9E3FF4D24D858B` (`return_number`),
  KEY `IDX_2C9E3FF4AEC08A29` (`original_order_id`),
  KEY `IDX_2C9E3FF471AD87D9` (`returned_by_id`),
  KEY `IDX_2C9E3FF471879AED` (`hma_service_id`),
  KEY `IDX_2C9E3FF42D234F6A` (`approved_by_id`),
  KEY `IDX_2C9E3FF485ECDE76` (`completed_by_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `return_order`
--

INSERT INTO `return_order` (`id`, `return_number`, `order_number`, `customer_name`, `customer_phone`, `return_date`, `status`, `reason`, `reason_notes`, `total_refund_amount`, `refund_method`, `notes`, `created_at`, `updated_at`, `original_order_id`, `returned_by_id`, `hma_service_id`, `approved_at`, `completed_at`, `approved_by_id`, `completed_by_id`) VALUES
(1, 'RETOUR-20260419-0001', 'VENTE-20260419-705a8b', '', '0197187212', '2026-04-19 20:51:21', 'completed', 'quality_issue', 'Aucune note supplémentaire', '1000.00', 'mobile_money', '', '2026-04-19 20:51:21', '2026-04-20 02:07:27', 19, 20, 13, '2026-04-12 22:06:16', '2026-04-13 00:00:00', 20, 20),
(8, 'RETOUR-20260423-0001', 'VENTE-20260419-705a8b', '', '0197187212', '2026-04-23 18:07:39', 'completed', 'wrong_product', 'Aucune', '1000.00', 'cash', NULL, '2026-04-23 18:07:39', '2026-04-23 18:10:04', 19, 20, 13, '2026-04-23 18:09:00', '2026-04-23 18:10:04', 20, 20),
(9, 'RETOUR-20260423-0002', 'VENTE-20260423-55d429', 'ABIOLA Haqq', '0191185545', '2026-04-23 22:51:32', 'pending', 'quality_issue', 'Aucune', '500.00', 'mobile_money', NULL, '2026-04-23 22:51:32', NULL, 20, 29, 19, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock_adjustment`
--

DROP TABLE IF EXISTS `stock_adjustment`;
CREATE TABLE IF NOT EXISTS `stock_adjustment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `quantity` int NOT NULL,
  `reason` longtext NOT NULL,
  `justification_file` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by_id` int NOT NULL,
  `stock_batch_id` int NOT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_27B08FBAB03A8386` (`created_by_id`),
  KEY `IDX_27B08FBABC58EA38` (`stock_batch_id`),
  KEY `IDX_27B08FBA71879AED` (`hma_service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stock_batch`
--

DROP TABLE IF EXISTS `stock_batch`;
CREATE TABLE IF NOT EXISTS `stock_batch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `batch_number` varchar(50) NOT NULL,
  `unit_price` decimal(12,2) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `manufacturing_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `purchase_item_id` int DEFAULT NULL,
  `product_id` int NOT NULL,
  `initial_quantity` int NOT NULL,
  `current_quantity` int NOT NULL,
  `is_active` tinyint DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `location_entity_id` int DEFAULT NULL,
  `has_issue` tinyint DEFAULT NULL,
  `issue_declared_amount` decimal(12,2) DEFAULT NULL,
  `issue_recovered_amount` decimal(12,2) DEFAULT NULL,
  `issue_lost_amount` decimal(12,2) DEFAULT NULL,
  `issue_status` varchar(50) DEFAULT NULL,
  `issue_priority` varchar(20) DEFAULT NULL,
  `issue_reported_at` date DEFAULT NULL,
  `issue_resolved_at` date DEFAULT NULL,
  `supplier_credit_note_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_641B4E254584665A` (`product_id`),
  KEY `IDX_641B4E2571879AED` (`hma_service_id`),
  KEY `IDX_641B4E25CFF0AB2B` (`location_entity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stock_batch`
--

INSERT INTO `stock_batch` (`id`, `batch_number`, `unit_price`, `expiry_date`, `manufacturing_date`, `created_at`, `purchase_item_id`, `product_id`, `initial_quantity`, `current_quantity`, `is_active`, `hma_service_id`, `location`, `updated_at`, `location_entity_id`, `has_issue`, `issue_declared_amount`, `issue_recovered_amount`, `issue_lost_amount`, `issue_status`, `issue_priority`, `issue_reported_at`, `issue_resolved_at`, `supplier_credit_note_id`) VALUES
(10, 'LOT-20260328-10-19243', '20000.00', NULL, NULL, '2026-03-28 20:24:44', 39, 10, 6, 0, 0, 19, 'BAR-01 - Bar à boissons', '2026-04-11 22:11:03', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'LOT-20260328-8-00590', '15000.00', '2026-04-19', '2026-02-26', '2026-03-28 20:39:13', 40, 8, 10, 10, 0, 19, NULL, '2026-06-28 02:09:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'LOT-20260330-9-87528', '20000.00', NULL, NULL, '2026-03-30 19:19:13', 41, 9, 4, 0, 0, 19, NULL, '2026-04-11 22:11:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'LOT-20260330-10-20317', '20000.00', NULL, NULL, '2026-03-30 19:19:13', 42, 10, 4, 0, 0, 19, NULL, '2026-04-11 22:11:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'LOT-20260330-8-31021', '1200.00', '2026-04-24', '2026-03-30', '2026-03-30 19:19:13', 43, 8, 10, 10, 0, 19, NULL, '2026-06-28 02:09:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'LOT-20260401-6-54980', '2000.00', NULL, NULL, '2026-04-01 22:45:25', 45, 6, 5, 0, 0, 19, NULL, '2026-04-12 21:58:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'LOT-20260402-6-06721', '4500.00', NULL, NULL, '2026-04-02 16:49:33', 46, 6, 5, 0, 0, 19, NULL, '2026-04-13 00:35:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'LOT-20260402-9-20524', '15000.00', NULL, NULL, '2026-04-02 17:03:18', 50, 9, 3, 0, 0, 19, NULL, '2026-04-11 22:11:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'LOT-20260402-10-40017', '6000.00', NULL, NULL, '2026-04-02 17:03:18', 51, 10, 6, 0, 0, 19, NULL, '2026-04-11 22:11:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'LOT-20260402-8-07700', '5000.00', '2026-04-30', '2026-04-08', '2026-04-02 17:11:52', 48, 8, 3, 3, 0, 19, 'BAR-01 - Bar à boissons', '2026-06-28 02:09:15', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'LOT-20260521-8-48281', '15000.00', '2029-06-07', '2026-05-21', '2026-05-21 02:20:18', 65, 8, 2, 1, 1, 19, 'BAR-01 - Bar à boissons', NULL, 1, 1, '15000.00', NULL, NULL, 'pending', 'medium', '2026-05-21', NULL, 13),
(34, 'LOT-20260510-1-69673', '1250.00', NULL, NULL, '2026-06-28 20:19:38', 52, 1, 25, 0, 0, 13, 'RIZ-01 - Etagère de Riz', '2026-06-29 21:03:53', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'LOT-20260701-1-94745', '1250.00', NULL, NULL, '2026-07-01 01:59:20', 67, 1, 5, 0, 0, 13, 'RIZ-01 - Etagère de Riz', '2026-07-01 20:45:44', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'LOT-20260701-1-74362', '1250.00', NULL, NULL, '2026-07-01 20:23:58', 68, 1, 25, 0, 0, 13, 'RIZ-01 - Etagère de Riz', '2026-07-01 20:45:44', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'LOT-20260701-1-29889', '1250.00', NULL, NULL, '2026-07-01 20:28:55', 69, 1, 1, 0, 0, 13, 'RIZ-01 - Etagère de Riz', '2026-07-01 20:45:45', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'LOT-20260702-1-67837', '1250.00', NULL, NULL, '2026-07-02 01:25:24', 70, 1, 2, 2, 1, 13, 'RIZ-01 - Etagère de Riz', NULL, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock_movement`
--

DROP TABLE IF EXISTS `stock_movement`;
CREATE TABLE IF NOT EXISTS `stock_movement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movement_type` varchar(20) NOT NULL,
  `quantity` int NOT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `user_id` int DEFAULT NULL,
  `reference_id` int DEFAULT NULL,
  `unit_price` decimal(12,2) DEFAULT NULL,
  `product_id` int NOT NULL,
  `purchase_item_id` int DEFAULT NULL,
  `stock_batch_id` int DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BB1BC1B5A76ED395` (`user_id`),
  KEY `IDX_BB1BC1B54584665A` (`product_id`),
  KEY `IDX_BB1BC1B59B59827` (`purchase_item_id`),
  KEY `IDX_BB1BC1B5BC58EA38` (`stock_batch_id`),
  KEY `IDX_BB1BC1B571879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=244 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stock_movement`
--

INSERT INTO `stock_movement` (`id`, `movement_type`, `quantity`, `notes`, `created_at`, `user_id`, `reference_id`, `unit_price`, `product_id`, `purchase_item_id`, `stock_batch_id`, `hma_service_id`) VALUES
(11, 'purchase_in', 6, 'Réception commande ACH-20260328-0001', '2026-03-28 20:24:44', 29, NULL, '20000.00', 10, 39, 10, 19),
(12, 'purchase_in', 10, 'Réception commande ACH-20260328-0001', '2026-03-28 20:39:13', 29, NULL, '15000.00', 8, 40, 11, 19),
(13, 'purchase_in', 4, 'Réception commande ACH-20260330-0001', '2026-03-30 19:19:13', 29, NULL, '20000.00', 9, 41, 12, 19),
(14, 'purchase_in', 4, 'Réception commande ACH-20260330-0001', '2026-03-30 19:19:13', 29, NULL, '20000.00', 10, 42, 13, 19),
(15, 'purchase_in', 10, 'Réception commande ACH-20260330-0001', '2026-03-30 19:19:13', 29, NULL, '1200.00', 8, 43, 14, 19),
(16, 'purchase_in', 5, 'Réception commande ACH-20260401-0001', '2026-04-01 22:45:25', 29, 50, '2000.00', 6, 45, 15, 19),
(17, 'purchase_in', 5, 'Réception commande ACH-20260402-0001', '2026-04-02 16:49:33', 29, 51, '4500.00', 6, 46, 16, 19),
(18, 'purchase_in', 3, 'Réception commande ACH-20260402-0001', '2026-04-02 17:03:18', 29, 54, '15000.00', 9, 50, 17, 19),
(19, 'purchase_in', 6, 'Réception commande ACH-20260402-0001', '2026-04-02 17:03:18', 29, 54, '6000.00', 10, 51, 18, 19),
(20, 'purchase_in', 3, 'Réception commande ACH-20260402-0001', '2026-04-02 17:11:52', 29, 53, '5000.00', 8, 48, 19, 19),
(21, 'sale_out', 600, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:00', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(22, 'sale_out', 3, 'Vente #VENTE-20260411-0001', '2026-04-11 22:11:02', 29, 1, '2000.00', 6, NULL, 15, 19),
(23, 'sale_out', 150, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:02', 29, 1, '20000.00', 7, NULL, NULL, 19),
(24, 'sale_out', 4, 'Vente #VENTE-20260411-0001', '2026-04-11 22:11:02', 29, 1, '20000.00', 9, NULL, 12, 19),
(25, 'sale_out', 3, 'Vente #VENTE-20260411-0001', '2026-04-11 22:11:02', 29, 1, '15000.00', 9, NULL, 17, 19),
(26, 'sale_out', 143, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:02', 29, 1, '20000.00', 9, NULL, NULL, 19),
(27, 'sale_out', 6, 'Vente #VENTE-20260411-0001', '2026-04-11 22:11:03', 29, 1, '20000.00', 10, NULL, 10, 19),
(28, 'sale_out', 4, 'Vente #VENTE-20260411-0001', '2026-04-11 22:11:03', 29, 1, '20000.00', 10, NULL, 13, 19),
(29, 'sale_out', 6, 'Vente #VENTE-20260411-0001', '2026-04-11 22:11:03', 29, 1, '6000.00', 10, NULL, 18, 19),
(30, 'sale_out', 14, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:03', 29, 1, '20000.00', 10, NULL, NULL, 19),
(31, 'sale_out', 6, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:03', 29, 1, '20000.00', 11, NULL, NULL, 19),
(32, 'sale_out', 3, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:04', 29, 1, '15000.00', 12, NULL, NULL, 19),
(33, 'sale_out', 3, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:04', 29, 1, '20000.00', 13, NULL, NULL, 19),
(34, 'sale_out', 60, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:04', 29, 1, '30000.00', 14, NULL, NULL, 19),
(35, 'sale_out', 60, 'Vente #VENTE-20260411-0001 (déduction directe - aucun lot disponible)', '2026-04-11 22:11:05', 29, 1, '50000.00', 15, NULL, NULL, 19),
(36, 'sale_out', 600, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:18', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(37, 'sale_out', 2, 'Vente #VENTE-20260412-0001', '2026-04-12 21:58:23', 29, 2, '2000.00', 6, NULL, 15, 19),
(38, 'sale_out', 1, 'Vente #VENTE-20260412-0001', '2026-04-12 21:58:23', 29, 2, '4500.00', 6, NULL, 16, 19),
(39, 'sale_out', 150, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:23', 29, 2, '20000.00', 7, NULL, NULL, 19),
(40, 'sale_out', 150, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:23', 29, 2, '20000.00', 9, NULL, NULL, 19),
(41, 'sale_out', 30, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:24', 29, 2, '20000.00', 10, NULL, NULL, 19),
(42, 'sale_out', 6, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:24', 29, 2, '20000.00', 11, NULL, NULL, 19),
(43, 'sale_out', 3, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:24', 29, 2, '15000.00', 12, NULL, NULL, 19),
(44, 'sale_out', 3, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:24', 29, 2, '20000.00', 13, NULL, NULL, 19),
(45, 'sale_out', 60, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:25', 29, 2, '30000.00', 14, NULL, NULL, 19),
(46, 'sale_out', 60, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 21:58:25', 29, 2, '50000.00', 15, NULL, NULL, 19),
(47, 'sale_out', 200, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:18:58', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(48, 'sale_out', 1, 'Vente #VENTE-20260412-0001', '2026-04-12 22:18:58', 29, 3, '4500.00', 6, NULL, 16, 19),
(49, 'sale_out', 50, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:18:59', 29, 3, '20000.00', 7, NULL, NULL, 19),
(50, 'sale_out', 50, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:18:59', 29, 3, '20000.00', 9, NULL, NULL, 19),
(51, 'sale_out', 10, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:18:59', 29, 3, '20000.00', 10, NULL, NULL, 19),
(52, 'sale_out', 2, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:18:59', 29, 3, '20000.00', 11, NULL, NULL, 19),
(53, 'sale_out', 1, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:18:59', 29, 3, '15000.00', 12, NULL, NULL, 19),
(54, 'sale_out', 1, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:19:00', 29, 3, '20000.00', 13, NULL, NULL, 19),
(55, 'sale_out', 20, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:19:00', 29, 3, '30000.00', 14, NULL, NULL, 19),
(56, 'sale_out', 20, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:19:00', 29, 3, '50000.00', 15, NULL, NULL, 19),
(57, 'sale_out', 400, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:55', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(58, 'sale_out', 2, 'Vente #VENTE-20260412-0001', '2026-04-12 22:33:56', 29, 4, '4500.00', 6, NULL, 16, 19),
(59, 'sale_out', 100, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:56', 29, 4, '20000.00', 7, NULL, NULL, 19),
(60, 'sale_out', 100, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:56', 29, 4, '20000.00', 9, NULL, NULL, 19),
(61, 'sale_out', 20, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:57', 29, 4, '20000.00', 10, NULL, NULL, 19),
(62, 'sale_out', 4, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:57', 29, 4, '20000.00', 11, NULL, NULL, 19),
(63, 'sale_out', 2, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:57', 29, 4, '15000.00', 12, NULL, NULL, 19),
(64, 'sale_out', 2, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:57', 29, 4, '20000.00', 13, NULL, NULL, 19),
(65, 'sale_out', 40, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:57', 29, 4, '30000.00', 14, NULL, NULL, 19),
(66, 'sale_out', 40, 'Vente #VENTE-20260412-0001 (déduction directe - aucun lot disponible)', '2026-04-12 22:33:58', 29, 4, '50000.00', 15, NULL, NULL, 19),
(67, 'sale_out', 400, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:51', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(68, 'sale_out', 1, 'Vente #VENTE-20260413-0001', '2026-04-13 00:35:52', 29, 5, '4500.00', 6, NULL, 16, 19),
(69, 'sale_out', 1, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:52', 29, 5, '5000.00', 6, NULL, NULL, 19),
(70, 'sale_out', 100, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:52', 29, 5, '20000.00', 7, NULL, NULL, 19),
(71, 'sale_out', 100, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:52', 29, 5, '20000.00', 9, NULL, NULL, 19),
(72, 'sale_out', 20, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:52', 29, 5, '20000.00', 10, NULL, NULL, 19),
(73, 'sale_out', 4, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:53', 29, 5, '20000.00', 11, NULL, NULL, 19),
(74, 'sale_out', 2, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:53', 29, 5, '15000.00', 12, NULL, NULL, 19),
(75, 'sale_out', 2, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:53', 29, 5, '20000.00', 13, NULL, NULL, 19),
(76, 'sale_out', 40, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:53', 29, 5, '30000.00', 14, NULL, NULL, 19),
(77, 'sale_out', 40, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 00:35:53', 29, 5, '50000.00', 15, NULL, NULL, 19),
(78, 'sale_out', 400, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:13', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(79, 'sale_out', 2, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:13', 29, 6, '5000.00', 6, NULL, NULL, 19),
(80, 'sale_out', 100, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:13', 29, 6, '20000.00', 7, NULL, NULL, 19),
(81, 'sale_out', 100, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:14', 29, 6, '20000.00', 9, NULL, NULL, 19),
(82, 'sale_out', 20, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:14', 29, 6, '20000.00', 10, NULL, NULL, 19),
(83, 'sale_out', 4, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:14', 29, 6, '20000.00', 11, NULL, NULL, 19),
(84, 'sale_out', 2, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:14', 29, 6, '15000.00', 12, NULL, NULL, 19),
(85, 'sale_out', 2, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:14', 29, 6, '20000.00', 13, NULL, NULL, 19),
(86, 'sale_out', 40, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:15', 29, 6, '30000.00', 14, NULL, NULL, 19),
(87, 'sale_out', 40, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:40:15', 29, 6, '50000.00', 15, NULL, NULL, 19),
(88, 'sale_out', 200, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:01', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(89, 'sale_out', 1, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:02', 29, 7, '5000.00', 6, NULL, NULL, 19),
(90, 'sale_out', 50, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:02', 29, 7, '20000.00', 7, NULL, NULL, 19),
(91, 'sale_out', 50, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:02', 29, 7, '20000.00', 9, NULL, NULL, 19),
(92, 'sale_out', 10, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:02', 29, 7, '20000.00', 10, NULL, NULL, 19),
(93, 'sale_out', 2, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:02', 29, 7, '20000.00', 11, NULL, NULL, 19),
(94, 'sale_out', 1, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:03', 29, 7, '15000.00', 12, NULL, NULL, 19),
(95, 'sale_out', 1, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:03', 29, 7, '20000.00', 13, NULL, NULL, 19),
(96, 'sale_out', 20, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:03', 29, 7, '30000.00', 14, NULL, NULL, 19),
(97, 'sale_out', 20, 'Vente #VENTE-20260413-0001 (déduction directe - aucun lot disponible)', '2026-04-13 01:52:04', 29, 7, '50000.00', 15, NULL, NULL, 19),
(98, 'sale_out', 400, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:46', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(99, 'sale_out', 2, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:48', 29, 8, '5000.00', 6, NULL, NULL, 19),
(100, 'sale_out', 100, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:48', 29, 8, '20000.00', 7, NULL, NULL, 19),
(101, 'sale_out', 100, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:48', 29, 8, '20000.00', 9, NULL, NULL, 19),
(102, 'sale_out', 20, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:49', 29, 8, '20000.00', 10, NULL, NULL, 19),
(103, 'sale_out', 4, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:49', 29, 8, '20000.00', 11, NULL, NULL, 19),
(104, 'sale_out', 2, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:49', 29, 8, '15000.00', 12, NULL, NULL, 19),
(105, 'sale_out', 2, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:49', 29, 8, '20000.00', 13, NULL, NULL, 19),
(106, 'sale_out', 40, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:49', 29, 8, '30000.00', 14, NULL, NULL, 19),
(107, 'sale_out', 40, 'Vente #VENTE-20260414-0001 (déduction directe - aucun lot disponible)', '2026-04-14 00:36:49', 29, 8, '50000.00', 15, NULL, NULL, 19),
(108, 'sale_out', 200, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:42', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(109, 'sale_out', 1, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:42', 29, 9, '5000.00', 6, NULL, NULL, 19),
(110, 'sale_out', 50, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:42', 29, 9, '20000.00', 7, NULL, NULL, 19),
(111, 'sale_out', 50, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:42', 29, 9, '20000.00', 9, NULL, NULL, 19),
(112, 'sale_out', 10, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:42', 29, 9, '20000.00', 10, NULL, NULL, 19),
(113, 'sale_out', 2, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:43', 29, 9, '20000.00', 11, NULL, NULL, 19),
(114, 'sale_out', 1, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:43', 29, 9, '15000.00', 12, NULL, NULL, 19),
(115, 'sale_out', 1, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:43', 29, 9, '20000.00', 13, NULL, NULL, 19),
(116, 'sale_out', 20, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:43', 29, 9, '30000.00', 14, NULL, NULL, 19),
(117, 'sale_out', 20, 'Vente #VENTE-20260414-d420b9 (déduction directe - aucun lot disponible)', '2026-04-14 00:51:43', 29, 9, '50000.00', 15, NULL, NULL, 19),
(118, 'sale_out', 400, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:23', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(119, 'sale_out', 2, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:23', 29, 10, '5000.00', 6, NULL, NULL, 19),
(120, 'sale_out', 100, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:23', 29, 10, '20000.00', 7, NULL, NULL, 19),
(121, 'sale_out', 100, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:24', 29, 10, '20000.00', 9, NULL, NULL, 19),
(122, 'sale_out', 20, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:24', 29, 10, '20000.00', 10, NULL, NULL, 19),
(123, 'sale_out', 4, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:24', 29, 10, '20000.00', 11, NULL, NULL, 19),
(124, 'sale_out', 2, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:24', 29, 10, '15000.00', 12, NULL, NULL, 19),
(125, 'sale_out', 2, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:24', 29, 10, '20000.00', 13, NULL, NULL, 19),
(126, 'sale_out', 40, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:25', 29, 10, '30000.00', 14, NULL, NULL, 19),
(127, 'sale_out', 40, 'Vente #VENTE-20260414-e9b027 (déduction directe - aucun lot disponible)', '2026-04-14 00:54:25', 29, 10, '50000.00', 15, NULL, NULL, 19),
(128, 'sale_out', 200, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:45', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(129, 'sale_out', 1, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:45', 29, 11, '5000.00', 6, NULL, NULL, 19),
(130, 'sale_out', 50, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:45', 29, 11, '20000.00', 7, NULL, NULL, 19),
(131, 'sale_out', 50, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:45', 29, 11, '20000.00', 9, NULL, NULL, 19),
(132, 'sale_out', 10, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:46', 29, 11, '20000.00', 10, NULL, NULL, 19),
(133, 'sale_out', 2, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:46', 29, 11, '20000.00', 11, NULL, NULL, 19),
(134, 'sale_out', 1, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:46', 29, 11, '15000.00', 12, NULL, NULL, 19),
(135, 'sale_out', 1, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:46', 29, 11, '20000.00', 13, NULL, NULL, 19),
(136, 'sale_out', 20, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:46', 29, 11, '30000.00', 14, NULL, NULL, 19),
(137, 'sale_out', 20, 'Vente #VENTE-20260414-09a806 (déduction directe - aucun lot disponible)', '2026-04-14 01:07:46', 29, 11, '50000.00', 15, NULL, NULL, 19),
(138, 'sale_out', 400, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:56', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(139, 'sale_out', 2, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:56', 29, 12, '5000.00', 6, NULL, NULL, 19),
(140, 'sale_out', 100, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:57', 29, 12, '20000.00', 7, NULL, NULL, 19),
(141, 'sale_out', 100, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:57', 29, 12, '20000.00', 9, NULL, NULL, 19),
(142, 'sale_out', 20, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:58', 29, 12, '20000.00', 10, NULL, NULL, 19),
(143, 'sale_out', 4, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:58', 29, 12, '20000.00', 11, NULL, NULL, 19),
(144, 'sale_out', 2, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:58', 29, 12, '15000.00', 12, NULL, NULL, 19),
(145, 'sale_out', 2, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:58', 29, 12, '20000.00', 13, NULL, NULL, 19),
(146, 'sale_out', 40, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:58', 29, 12, '30000.00', 14, NULL, NULL, 19),
(147, 'sale_out', 40, 'Vente #VENTE-20260414-f15e85 (déduction directe - aucun lot disponible)', '2026-04-14 01:30:59', 29, 12, '50000.00', 15, NULL, NULL, 19),
(148, 'sale_out', 200, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:49', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(149, 'sale_out', 1, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:50', 29, 13, '5000.00', 6, NULL, NULL, 19),
(150, 'sale_out', 50, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:50', 29, 13, '20000.00', 7, NULL, NULL, 19),
(151, 'sale_out', 50, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:50', 29, 13, '20000.00', 9, NULL, NULL, 19),
(152, 'sale_out', 10, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:50', 29, 13, '20000.00', 10, NULL, NULL, 19),
(153, 'sale_out', 2, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:50', 29, 13, '20000.00', 11, NULL, NULL, 19),
(154, 'sale_out', 1, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:51', 29, 13, '15000.00', 12, NULL, NULL, 19),
(155, 'sale_out', 1, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:51', 29, 13, '20000.00', 13, NULL, NULL, 19),
(156, 'sale_out', 20, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:51', 29, 13, '30000.00', 14, NULL, NULL, 19),
(157, 'sale_out', 20, 'Vente #VENTE-20260414-d3071d (déduction directe - aucun lot disponible)', '2026-04-14 01:37:51', 29, 13, '50000.00', 15, NULL, NULL, 19),
(158, 'sale_out', 200, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:22', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(159, 'sale_out', 1, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:23', 29, 14, '5000.00', 6, NULL, NULL, 19),
(160, 'sale_out', 50, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:23', 29, 14, '20000.00', 7, NULL, NULL, 19),
(161, 'sale_out', 50, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:23', 29, 14, '20000.00', 9, NULL, NULL, 19),
(162, 'sale_out', 10, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:23', 29, 14, '20000.00', 10, NULL, NULL, 19),
(163, 'sale_out', 2, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:23', 29, 14, '20000.00', 11, NULL, NULL, 19),
(164, 'sale_out', 1, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:24', 29, 14, '15000.00', 12, NULL, NULL, 19),
(165, 'sale_out', 1, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:24', 29, 14, '20000.00', 13, NULL, NULL, 19),
(166, 'sale_out', 20, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:24', 29, 14, '30000.00', 14, NULL, NULL, 19),
(167, 'sale_out', 20, 'Vente #VENTE-20260414-5da771 (déduction directe - aucun lot disponible)', '2026-04-14 02:04:24', 29, 14, '50000.00', 15, NULL, NULL, 19),
(168, 'sale_out', 400, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:06', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(169, 'sale_out', 2, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:08', 29, 15, '5000.00', 6, NULL, NULL, 19),
(170, 'sale_out', 100, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:08', 29, 15, '20000.00', 7, NULL, NULL, 19),
(171, 'sale_out', 100, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:08', 29, 15, '20000.00', 9, NULL, NULL, 19),
(172, 'sale_out', 20, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:09', 29, 15, '20000.00', 10, NULL, NULL, 19),
(173, 'sale_out', 4, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:09', 29, 15, '20000.00', 11, NULL, NULL, 19),
(174, 'sale_out', 2, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:10', 29, 15, '15000.00', 12, NULL, NULL, 19),
(175, 'sale_out', 2, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:10', 29, 15, '20000.00', 13, NULL, NULL, 19),
(176, 'sale_out', 40, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:10', 29, 15, '30000.00', 14, NULL, NULL, 19),
(177, 'sale_out', 40, 'Vente #VENTE-20260417-4ab0af (déduction directe - aucun lot disponible)', '2026-04-17 02:00:10', 29, 15, '50000.00', 15, NULL, NULL, 19),
(178, 'sale_out', 600, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:12', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(179, 'sale_out', 3, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:12', 29, 16, '5000.00', 6, NULL, NULL, 19),
(180, 'sale_out', 150, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:12', 29, 16, '20000.00', 7, NULL, NULL, 19),
(181, 'sale_out', 150, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:13', 29, 16, '20000.00', 9, NULL, NULL, 19),
(182, 'sale_out', 30, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:13', 29, 16, '20000.00', 10, NULL, NULL, 19),
(183, 'sale_out', 6, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:13', 29, 16, '20000.00', 11, NULL, NULL, 19),
(184, 'sale_out', 3, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:13', 29, 16, '15000.00', 12, NULL, NULL, 19),
(185, 'sale_out', 3, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:14', 29, 16, '20000.00', 13, NULL, NULL, 19),
(186, 'sale_out', 60, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:14', 29, 16, '30000.00', 14, NULL, NULL, 19),
(187, 'sale_out', 60, 'Vente #VENTE-20260417-735d59 (déduction directe - aucun lot disponible)', '2026-04-17 22:57:14', 29, 16, '50000.00', 15, NULL, NULL, 19),
(188, 'sale_out', 400, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:15', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(189, 'sale_out', 2, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:15', 29, 17, '5000.00', 6, NULL, NULL, 19),
(190, 'sale_out', 100, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:15', 29, 17, '20000.00', 7, NULL, NULL, 19),
(191, 'sale_out', 100, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:15', 29, 17, '20000.00', 9, NULL, NULL, 19),
(192, 'sale_out', 20, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:15', 29, 17, '20000.00', 10, NULL, NULL, 19),
(193, 'sale_out', 4, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:16', 29, 17, '20000.00', 11, NULL, NULL, 19),
(194, 'sale_out', 2, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:16', 29, 17, '15000.00', 12, NULL, NULL, 19),
(195, 'sale_out', 2, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:16', 29, 17, '20000.00', 13, NULL, NULL, 19),
(196, 'sale_out', 40, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:16', 29, 17, '30000.00', 14, NULL, NULL, 19),
(197, 'sale_out', 40, 'Vente #VENTE-20260417-259d76 (déduction directe - aucun lot disponible)', '2026-04-17 23:03:17', 29, 17, '50000.00', 15, NULL, NULL, 19),
(198, 'sale_out', 600, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:42', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(199, 'sale_out', 3, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:42', 29, 18, '5000.00', 6, NULL, NULL, 19),
(200, 'sale_out', 150, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:42', 29, 18, '20000.00', 7, NULL, NULL, 19),
(201, 'sale_out', 150, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:42', 29, 18, '20000.00', 9, NULL, NULL, 19),
(202, 'sale_out', 30, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:43', 29, 18, '20000.00', 10, NULL, NULL, 19),
(203, 'sale_out', 6, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:43', 29, 18, '20000.00', 11, NULL, NULL, 19),
(204, 'sale_out', 3, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:43', 29, 18, '15000.00', 12, NULL, NULL, 19),
(205, 'sale_out', 3, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:43', 29, 18, '20000.00', 13, NULL, NULL, 19),
(206, 'sale_out', 60, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:44', 29, 18, '30000.00', 14, NULL, NULL, 19),
(207, 'sale_out', 60, 'Vente #VENTE-20260418-d5ad54 (déduction directe - aucun lot disponible)', '2026-04-18 01:15:44', 29, 18, '50000.00', 15, NULL, NULL, 19),
(208, 'sale_out', 2, 'Vente #VENTE-20260419-705a8b (déduction directe - aucun lot disponible)', '2026-04-19 03:25:59', 20, NULL, '1250.00', 1, NULL, NULL, 13),
(210, 'return_in', 1, 'Retour #RETOUR-20260423-0001 - RETURN_PRODUCT (produit sans lot)', '2026-04-23 18:10:04', 20, 8, '1250.00', 1, NULL, NULL, 13),
(211, 'sale_out', 2, 'Vente #VENTE-20260423-55d429 (déduction directe - aucun lot disponible)', '2026-04-23 22:26:30', 29, NULL, '300.00', 18, NULL, NULL, 19),
(212, 'sale_out', 2, 'Vente #VENTE-20260424-192798 (déduction directe - aucun lot disponible)', '2026-04-24 17:36:18', 20, NULL, '1250.00', 1, NULL, NULL, 13),
(213, 'sale_out', 3, 'Vente #VENTE-20260425-540d82 (déduction directe - aucun lot disponible)', '2026-04-25 16:14:00', 20, NULL, '25000.00', 2, NULL, NULL, 13),
(214, 'sale_out', 2, 'Vente #VENTE-20260425-540d82 (déduction directe - aucun lot disponible)', '2026-04-25 16:14:01', 20, 22, '1250.00', 1, NULL, NULL, 13),
(215, 'sale_out', 400, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:39', 29, NULL, '15000.00', 17, NULL, NULL, 19),
(216, 'sale_out', 2, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:40', 29, 23, '5000.00', 6, NULL, NULL, 19),
(217, 'sale_out', 100, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:40', 29, 23, '20000.00', 7, NULL, NULL, 19),
(218, 'sale_out', 100, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:40', 29, 23, '20000.00', 9, NULL, NULL, 19),
(219, 'sale_out', 20, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:40', 29, 23, '20000.00', 10, NULL, NULL, 19),
(220, 'sale_out', 4, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:41', 29, 23, '20000.00', 11, NULL, NULL, 19),
(221, 'sale_out', 2, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:41', 29, 23, '15000.00', 12, NULL, NULL, 19),
(222, 'sale_out', 2, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:41', 29, 23, '20000.00', 13, NULL, NULL, 19),
(223, 'sale_out', 40, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:41', 29, 23, '30000.00', 14, NULL, NULL, 19),
(224, 'sale_out', 40, 'Vente #VENTE-20260427-e9e160 (déduction directe - aucun lot disponible)', '2026-04-27 02:14:42', 29, 23, '50000.00', 15, NULL, NULL, 19),
(227, 'transfer_in', 1, 'Ajustement suite à l\'avoir n°AVR-202605-0001 - Quantité: 1 (ancien: 2, nouveau: 1)', '2026-05-21 02:21:54', 29, 13, '15000.00', 8, NULL, 33, 19),
(228, 'sale_out', 2, 'Vente #VENTE-20260629-55a8d3 (déduction directe)', '2026-06-29 19:29:59', 29, 24, '1.00', 18, NULL, NULL, 19),
(229, 'sale_out', 25, 'Vente #VENTE-20260629-26b04f (lot: LOT-20260510-1-69673)', '2026-06-29 20:16:19', 20, 25, '1250.00', 1, NULL, 34, 13),
(230, 'sale_out', 2, 'Vente #VENTE-20260629-ab66bb (déduction directe)', '2026-06-29 20:50:19', 29, 26, '1.00', 18, NULL, NULL, 19),
(231, 'sale_out', 2, 'Vente #VENTE-20260629-f33bf7 (déduction directe)', '2026-06-29 20:52:00', 29, 27, '1.00', 18, NULL, NULL, 19),
(232, 'sale_out', 25, 'Vente #VENTE-20260629-eccec2 (lot: LOT-20260510-1-69673)', '2026-06-29 20:53:35', 20, 28, '1250.00', 1, NULL, 34, 13),
(233, 'sale_out', 25, 'Vente #VENTE-20260629-92a014 (lot: LOT-20260510-1-69673)', '2026-06-29 21:03:53', 20, 29, '1250.00', 1, NULL, 34, 13),
(234, 'purchase_in', 25, 'Réception commande ACH-20260701-0001', '2026-07-01 20:23:58', 20, 71, '1250.00', 1, 68, 37, 13),
(235, 'purchase_in', 1, 'Réception commande ACH-20260701-0001', '2026-07-01 20:28:55', 20, 72, '1250.00', 1, 69, 38, 13),
(236, 'sale_out', 5, 'Vente #VENTE-20260701-75247c (lot: LOT-20260701-1-94745)', '2026-07-01 20:45:44', 20, 30, '1250.00', 1, NULL, 36, 13),
(237, 'sale_out', 25, 'Vente #VENTE-20260701-75247c (lot: LOT-20260701-1-74362)', '2026-07-01 20:45:44', 20, 30, '1250.00', 1, NULL, 37, 13),
(238, 'sale_out', 1, 'Vente #VENTE-20260701-75247c (lot: LOT-20260701-1-29889)', '2026-07-01 20:45:45', 20, 30, '1250.00', 1, NULL, 38, 13),
(239, 'sale_out', 2, 'Vente #VENTE-20260701-75247c (déduction directe)', '2026-07-01 20:45:45', 20, 30, '1250.00', 1, NULL, NULL, 13),
(240, 'purchase_in', 2, 'Réception commande ACH-20260702-0001', '2026-07-02 01:25:24', 20, 73, '1250.00', 1, 70, 39, 13),
(241, 'sale_out', 2, 'Vente #VENTE-20260713-ac314e (déduction directe)', '2026-07-13 23:35:38', 19, 31, '3500.00', 19, NULL, NULL, 20),
(242, 'sale_out', 3, 'Vente #VENTE-20260718-e24673 (déduction directe)', '2026-07-18 02:33:18', 19, 32, '3500.00', 19, NULL, NULL, 20),
(243, 'sale_out', 1, 'Vente #CMD-20260801-6E75DF (déduction directe)', '2026-08-01 02:00:23', 19, 47, '3500.00', 20, NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Structure de la table `stock_transfer`
--

DROP TABLE IF EXISTS `stock_transfer`;
CREATE TABLE IF NOT EXISTS `stock_transfer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transfer_number` varchar(50) NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `reason` longtext,
  `received_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `stock_batch_id` int NOT NULL,
  `source_location_id` int NOT NULL,
  `destination_location_id` int NOT NULL,
  `created_by_id` int NOT NULL,
  `received_by_id` int DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FF2F782F3834267` (`transfer_number`),
  KEY `IDX_FF2F782BC58EA38` (`stock_batch_id`),
  KEY `IDX_FF2F7823A32712E` (`source_location_id`),
  KEY `IDX_FF2F782237FCAB5` (`destination_location_id`),
  KEY `IDX_FF2F782B03A8386` (`created_by_id`),
  KEY `IDX_FF2F7826F8DDD17` (`received_by_id`),
  KEY `IDX_FF2F78271879AED` (`hma_service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `billing_period` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `starts_at` datetime DEFAULT NULL,
  `ends_at` datetime DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_plan_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A3C664D371879AED` (`hma_service_id`),
  KEY `IDX_A3C664D39B8CE200` (`subscription_plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subscription`
--

INSERT INTO `subscription` (`id`, `billing_period`, `status`, `starts_at`, `ends_at`, `payment_method`, `transaction_id`, `notes`, `created_at`, `updated_at`, `hma_service_id`, `subscription_plan_id`, `subscription_active`) VALUES
(34, 'monthly', 'expired', '2026-02-19 01:18:02', '2026-03-19 01:18:02', 'fedapay', '413827', NULL, '2026-02-19 01:18:02', NULL, 13, 3, 0),
(35, 'monthly', 'active', '2026-03-09 01:18:02', '2046-04-09 01:18:02', 'fedapay', '413832', NULL, '2026-03-09 01:17:19', NULL, 20, 3, 1),
(36, 'monthly', 'active', '2026-06-28 19:15:18', '2026-07-28 19:15:18', 'fedapay', '462591', NULL, '2026-06-28 19:12:58', NULL, 13, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `subscription_plan`
--

DROP TABLE IF EXISTS `subscription_plan`;
CREATE TABLE IF NOT EXISTS `subscription_plan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `price_monthly` decimal(10,2) NOT NULL,
  `price_yearly` decimal(10,2) NOT NULL,
  `max_products` int DEFAULT NULL,
  `description` longtext,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `max_users_per_role` int DEFAULT NULL,
  `max_orders_per_month` int DEFAULT NULL,
  `max_categories` int DEFAULT NULL,
  `max_suppliers` int DEFAULT NULL,
  `features` json DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `max_recipes` int DEFAULT NULL,
  `max_recipe_categories` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EA664B635E237E06` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subscription_plan`
--

INSERT INTO `subscription_plan` (`id`, `name`, `display_name`, `price_monthly`, `price_yearly`, `max_products`, `description`, `is_active`, `created_at`, `max_users_per_role`, `max_orders_per_month`, `max_categories`, `max_suppliers`, `features`, `updated_at`, `max_recipes`, `max_recipe_categories`) VALUES
(2, 'freemium', 'Freemium', '0.00', '0.00', 50, 'Plan Freemium (gratuit) :\n- Utilisateurs par rôle : 1\n- Produits : 50 max\n- Commandes par mois : 100 max\n- Catégories : 10 max\n- Fournisseurs : 5 max\nFonctionnalités incluses : inventaire basique, rapports basiques.\nIdéal pour découvrir l\'application.', 1, '2026-02-25 00:33:33', 1, 100, 10, 5, '[\"basic_inventory\", \"basic_reports\"]', '2026-06-08 02:44:20', 50, 10),
(3, 'basic', 'Basic', '25000.00', '250000.00', 200, 'Plan Basic :\n- Utilisateurs par rôle : 2\n- Produits : 200 max\n- Commandes par mois : 500 max\n- Catégories : 20 max\n- Fournisseurs : 15 max\nFonctionnalités : inventaire avancé, rapports détaillés, accès API.\nParfait pour les petites entreprises en croissance.', 1, '2026-02-26 00:57:18', 2, 500, 25, 15, '[\"inventaire avancé\", \"rapports détaillés\", \"accès API\"]', '2026-06-09 00:19:20', 200, 20),
(4, 'premium', 'Premium', '90000.00', '900000.00', NULL, 'Plan Premium : tout est illimité !\n- Utilisateurs par rôle : illimité\n- Produits : illimité\n- Commandes par mois : illimité\n- Catégories : illimité\n- Fournisseurs : illimité\nFonctionnalités : toutes, support prioritaire, domaine personnalisé, marque blanche.\nLa solution complète pour les entreprises exigeantes.', 1, '2026-02-26 01:00:06', NULL, NULL, NULL, NULL, '[\"toutes\", \"support prioritaire\", \"domaine personnalisé\", \"marque blanche\"]', '2026-02-26 01:13:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `IDX_9B2A6C7E71879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact_person`, `phone`, `email`, `adress`, `is_active`, `created_at`, `updated_at`, `hma_service_id`, `subscription_active`) VALUES
(1, 'AMADOU Dine', 'Jean Koffi', '0197187212', 'abiolaelamir@gmail.com', 'Cotonou/Avenue-Bénin', 1, '2021-01-01 00:00:00', '2021-01-01 00:00:00', 19, 1),
(2, 'ALOUGBI Faozane', 'ALABI Antif', '0197412437', 'faozane@gmail.com', 'Cotonou/Avenue-Bénin', 1, '2026-05-10 01:45:03', '2026-05-10 01:45:03', 13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `supplier_credit_note`
--

DROP TABLE IF EXISTS `supplier_credit_note`;
CREATE TABLE IF NOT EXISTS `supplier_credit_note` (
  `id` int NOT NULL AUTO_INCREMENT,
  `credit_note_number` varchar(50) NOT NULL,
  `issue_type` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `declared_amount` decimal(12,2) NOT NULL,
  `recovered_amount` decimal(12,2) DEFAULT NULL,
  `lost_amount` decimal(12,2) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `attachments` json DEFAULT NULL,
  `reported_at` datetime NOT NULL,
  `supplier_response` longtext,
  `supplier_response_at` datetime DEFAULT NULL,
  `supplier_proposed_amount` decimal(12,2) DEFAULT NULL,
  `supplier_decision` varchar(50) DEFAULT NULL,
  `supplier_reference` varchar(100) DEFAULT NULL,
  `internal_notes` longtext,
  `resolved_at` datetime DEFAULT NULL,
  `resolution_notes` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `stock_batch_id` int NOT NULL,
  `purchase_id` int NOT NULL,
  `supplier_id` int NOT NULL,
  `reported_by_id` int DEFAULT NULL,
  `resolved_by_id` int DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `affected_quantity` int DEFAULT NULL,
  `stock_action` varchar(20) DEFAULT 'none',
  `stock_action_applied` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_11C8EE38A268AEB0` (`credit_note_number`),
  KEY `IDX_11C8EE38BC58EA38` (`stock_batch_id`),
  KEY `IDX_11C8EE38558FBEB9` (`purchase_id`),
  KEY `IDX_11C8EE382ADD6D8C` (`supplier_id`),
  KEY `IDX_11C8EE3871CE806` (`reported_by_id`),
  KEY `IDX_11C8EE386713A32B` (`resolved_by_id`),
  KEY `IDX_11C8EE3871879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplier_credit_note`
--

INSERT INTO `supplier_credit_note` (`id`, `credit_note_number`, `issue_type`, `description`, `declared_amount`, `recovered_amount`, `lost_amount`, `status`, `priority`, `attachments`, `reported_at`, `supplier_response`, `supplier_response_at`, `supplier_proposed_amount`, `supplier_decision`, `supplier_reference`, `internal_notes`, `resolved_at`, `resolution_notes`, `created_at`, `updated_at`, `stock_batch_id`, `purchase_id`, `supplier_id`, `reported_by_id`, `resolved_by_id`, `hma_service_id`, `affected_quantity`, `stock_action`, `stock_action_applied`) VALUES
(13, 'AVR-202605-0001', 'quality', 'La qualité du produit est mauvaise', '15000.00', '15000.00', NULL, 'recovered', 'medium', '[\"62c8a7cf2ab6f532163926-6a0e6b703223b.jpg\"]', '2026-05-21 02:20:18', 'J\'accepte le retour', '2026-05-21 02:21:53', NULL, 'accept_full', '', NULL, NULL, NULL, '2026-05-21 02:20:18', NULL, 33, 68, 1, 29, NULL, 19, 1, 'reduce', 1);

-- --------------------------------------------------------

--
-- Structure de la table `supplier_credit_note_history`
--

DROP TABLE IF EXISTS `supplier_credit_note_history`;
CREATE TABLE IF NOT EXISTS `supplier_credit_note_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action` varchar(50) NOT NULL,
  `old_value` longtext,
  `new_value` longtext,
  `performed_at` datetime NOT NULL,
  `notes` longtext,
  `credit_note_id` int NOT NULL,
  `performed_by_id` int DEFAULT NULL,
  `performed_by_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F67E265F1C696F7A` (`credit_note_id`),
  KEY `IDX_F67E265F2E65C292` (`performed_by_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplier_credit_note_history`
--

INSERT INTO `supplier_credit_note_history` (`id`, `action`, `old_value`, `new_value`, `performed_at`, `notes`, `credit_note_id`, `performed_by_id`, `performed_by_name`) VALUES
(15, 'supplier_responded', 'pending', 'recovered', '2026-05-21 02:21:54', 'Réponse fournisseur: J\'accepte le retour | Décision: accept_full | Montant proposé: N/A | Action stock: ✅ Stock réduit de 1 g (ancien: 2, nouveau: 1).', 13, NULL, 'AMADOU Dine (Fournisseur)'),
(14, 'created', NULL, NULL, '2026-05-21 02:20:19', 'Création de l\'avoir. 🔧 ACTION STOCK RECOMMANDÉE: Réduire le stock de 1 g (quantité concernée).', 13, 29, 'Zitawi');

-- --------------------------------------------------------

--
-- Structure de la table `supplier_credit_note_token`
--

DROP TABLE IF EXISTS `supplier_credit_note_token`;
CREATE TABLE IF NOT EXISTS `supplier_credit_note_token` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `expires_at` datetime NOT NULL,
  `used_at` datetime DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `credit_note_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4DFBE775F37A13B` (`token`),
  KEY `IDX_4DFBE771C696F7A` (`credit_note_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplier_credit_note_token`
--

INSERT INTO `supplier_credit_note_token` (`id`, `token`, `expires_at`, `used_at`, `ip_address`, `user_agent`, `credit_note_id`) VALUES
(12, 'e3e72153f7a4d92f8184bab4647a6bed1bbbbf898a83ee2b20cf6b8ce591dad6', '2026-06-20 02:20:19', '2026-05-21 02:21:54', '197.234.221.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:150.0) Gecko/20100101 Firefox/150.0', 13);

-- --------------------------------------------------------

--
-- Structure de la table `type_promotion`
--

DROP TABLE IF EXISTS `type_promotion`;
CREATE TABLE IF NOT EXISTS `type_promotion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hma_service_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75DB3CC171879AED` (`hma_service_id`),
  KEY `IDX_75DB3CC1A76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_promotion`
--

INSERT INTO `type_promotion` (`id`, `name`, `description`, `is_active`, `created_at`, `updated_at`, `hma_service_id`, `user_id`) VALUES
(2, 'Pourcentage', 'Réduction en pourcentage sur le prix d’un produit, d’une catégorie ou du panier.', 1, '2026-04-03 19:45:16', NULL, 19, 29),
(3, 'Montant fixe', 'Réduction d’un montant précis (en devise locale : FCFA, EUR, USD…).', 1, '2026-04-03 19:47:56', NULL, 19, 29),
(7, 'Deuxième à -X%', 'Achat de deux articles, le second bénéficie d’un pourcentage de réduction.', 1, '2026-04-03 20:00:43', NULL, 13, 29),
(11, 'Achat multiple', 'Réduction pour l\'achat de plusieurs articles (ex: 2 achetés = 1 offert)', 1, '2026-04-03 20:10:11', '2026-04-15 03:11:33', 19, 29),
(12, 'Fidélité', 'Réduction réservée aux clients fidèles (points, carte de fidélité).', 1, '2026-04-03 20:11:39', NULL, 19, 29);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_super_admin` tinyint NOT NULL,
  `is_hma_owner` tinyint NOT NULL,
  `employment_date` date DEFAULT NULL,
  `hma_service_id` int DEFAULT NULL,
  `password_changed` tinyint NOT NULL,
  `subscription_active` tinyint NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `failed_login_attempts` int DEFAULT NULL,
  `locked_until` datetime DEFAULT NULL,
  `last_failed_attempt_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`),
  KEY `IDX_8D93D64971879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `full_name`, `phone`, `is_active`, `created_at`, `updated_at`, `photo`, `is_super_admin`, `is_hma_owner`, `employment_date`, `hma_service_id`, `password_changed`, `subscription_active`, `login_at`, `logout_at`, `last_activity`, `failed_login_attempts`, `locked_until`, `last_failed_attempt_at`) VALUES
(20, 'abiolahaqq@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$RCWKHaUFsceGki0DfWm5ZeqfR4Itt58X.Hep0kxKA3IcE9kqz3A/6', 'GBAGUIDI Jack', '0191186655', 1, '2026-02-13 19:54:11', '2026-07-08 02:28:09', 'pexels-andrewperformance1-1322481-69934cf9a63c4.jpg', 0, 1, '2026-02-13', 13, 1, 1, '2026-07-07 01:57:16', '2026-06-09 23:59:07', '2026-07-08 02:28:09', 0, NULL, NULL),
(19, 'abiolaelamir@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$yZj/e/72mSDds5lEG072wefxYuCWw6YlI4UTO1QRd65PtmJz0scZC', 'ABIOLA EL-Amir', '0156139200', 1, '2026-02-13 18:59:09', '2026-08-01 01:15:26', 'Photo-d-identite-6994aa753baeb.jpg', 1, 0, '2026-02-13', 20, 1, 1, '2026-07-27 22:46:36', '2026-06-22 22:01:59', '2026-08-01 01:15:26', 0, NULL, NULL),
(21, 'michou@gmail.com', '[\"ROLE_MANAGER\"]', '$2y$13$2ZhQynRTpU1.DZXL3bTEFu04mvAbviSH4m.ESbFF0hPLyN/QcUeh.', 'ABIOLA Michkath', '0197127223', 1, '2026-02-16 01:28:37', '2026-03-26 22:40:28', 'chiro-699bab565e60f.png', 0, 0, '2017-06-16', 13, 1, 1, '2026-03-26 22:40:28', '2026-03-14 01:12:45', '2026-03-26 22:40:28', NULL, NULL, NULL),
(23, 'mike@gmail.com', '[\"ROLE_STOCK_MANAGER\"]', '$2y$13$nuZsuB40pTsEqnLRjD1sCePbhQczO7TewvKeYVXgpnBYiAk7eJeym', 'AHOYO Mike', '0142301991', 1, '2026-02-20 17:41:03', '2026-03-01 15:33:45', NULL, 0, 0, '2018-02-18', 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'dilane@gmail.com', '[\"ROLE_CASHIER\"]', '$2y$13$Kb981NdV9N/mAMFQpJEFIeIwxN5Ol5.0OWvAECpG6H/4/K.3woU6u', 'DASILVA Dilane', '0197453108', 1, '2026-03-01 01:15:39', '2026-04-11 01:08:14', NULL, 0, 0, '2026-03-01', 13, 0, 1, '2026-04-09 22:35:22', '2026-04-09 21:08:31', '2026-04-11 01:08:14', 0, NULL, NULL),
(29, 'zitawi@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$iQv8XtuRwQ7y1GI1xgpzHObE4EFswobz5iz1H6BucRdNgOxmkVHT.', 'Zitawi', '0197514234', 1, '2026-03-16 17:29:09', '2026-08-24 01:31:55', NULL, 0, 1, '2026-03-16', 19, 1, 1, '2026-08-24 01:31:52', '2026-06-30 20:28:52', '2026-08-24 01:31:55', 0, NULL, NULL),
(30, 'amanath@gmail.com', '[\"ROLE_MANAGER\"]', '$2y$13$YG1yTwBiYh5TpV8iAjOjM.fJO7WP0PVnp177sOz9utvimMh1lKame', 'Amanath Tidjani', '0197451234', 1, '2026-03-27 20:27:29', '2026-04-18 20:37:51', 'LOOK-03-0322-V2-330-1920-x1280-69c6e995f3232.jpg', 0, 0, '2015-04-11', 19, 1, 1, '2026-04-18 20:05:38', '2026-03-27 22:24:52', '2026-04-18 20:37:51', 0, NULL, NULL),
(31, 'agnike@gmail.com', '[\"ROLE_STOCK_MANAGER\"]', '$2y$13$LgUCbm8iJ81lpnd531P5EOLTfM6kR3cna4UA1yM4TiructQ2KDtny', 'ALABI Agnikè', '0197541239', 1, '2026-03-27 21:52:01', '2026-04-18 01:44:42', NULL, 0, 0, '2018-06-10', 19, 1, 1, '2026-04-18 01:40:19', '2026-04-18 01:44:42', '2026-04-18 01:43:33', 0, NULL, NULL),
(33, 'merveille@gmail.com', '[\"ROLE_CASHIER\"]', '$2y$13$.uI5ewNUhB3YShnENFaml.dZtoagN2G70ubMwQgpIG29OkBjs9qWC', 'Hounssou Merveille', '0197421473', 1, '2026-04-09 16:03:24', '2026-04-18 02:33:26', NULL, 0, 0, '2022-04-22', 19, 1, 1, '2026-04-18 01:45:10', '2026-04-09 16:15:35', '2026-04-18 02:33:26', 0, NULL, NULL),
(34, 'djamal@gmail.com', '[\"ROLE_CUSTOMER\"]', '$2y$13$RsNSSz.trpEM9iufS9fUru5VEjh1j2IBidtm.nwojeghTNkgDmaXG', 'FASSASSI Djamal', '0197453524', 1, '2026-07-27 02:41:55', NULL, NULL, 0, 0, NULL, 13, 0, 1, NULL, NULL, NULL, 0, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
