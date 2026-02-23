-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 13 fév. 2026 à 20:43
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
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C1989D9B62` (`slug`),
  KEY `IDX_64C19C1A76ED395` (`user_id`),
  KEY `IDX_64C19C1727ACA70` (`parent_id`),
  KEY `IDX_64C19C13F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `description`, `image`, `is_active`, `created_at`, `updated_at`, `parent_id`, `user_id`, `hma_service_id_id`) VALUES
(1, 'Produits alimentaires', 'produits-alimentaires', 'Idéale pour le déjeuner', '18900d7e-adbb-4530-ae71-f27216a5839b-53f369ca53cb1bd7d914c17103a9eb92-Copie-6977fe085273a.webp', 1, '2026-01-26 23:51:00', '2026-01-27 01:05:50', NULL, 4, 0),
(2, 'Riz et pâtes', 'riz-et-pates', 'Idéales pour le déjeuner', 'riz-gras-697810270a75e.jpg', 1, '2026-01-27 01:08:47', '2026-01-27 01:08:55', 1, 4, 0);

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
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_50CA3FA43F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EAD21C993F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1E667870E7927C74` (`email`),
  UNIQUE KEY `UNIQ_1E6678705F6607D3` (`subscription_number`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `hma_service`
--

INSERT INTO `hma_service` (`id`, `company_name`, `company_type`, `phone`, `email`, `password`, `address`, `city`, `country`, `longitude`, `latitude`, `logo`, `is_active`, `trial_ends_at`, `created_at`, `updated_at`, `subscription_number`, `activated_at`) VALUES
(13, 'Dodji Pharmacie', 'pharmacy', '0191186655', 'abiolahaqq@gmail.com', '$2y$13$3yrTn20PRLcrxKSNu0cC6O2N9CaziG7PW5a7DtwnmCs4XLESzvyrW', 'Situé non loin du commesariat de Dodji', 'Porto-Novo', 'BJ', '2.41500000', '6.36690000', 'pharmacie-1024x620-698f81400fb49.jpg', 1, '2026-02-27 19:53:38', '2026-02-13 19:53:38', '2026-02-13 20:29:18', 'JV76849420', '2026-02-13 19:54:08');

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
  `hma_service_id_id` int NOT NULL,
  `subscription_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_906517443F09F2A1` (`hma_service_id_id`),
  KEY `IDX_90651744857C9F24` (`subscription_id_id`)
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
  `notes` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int NOT NULL,
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5299398A76ED395` (`user_id`),
  KEY `IDX_F52993983F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  PRIMARY KEY (`id`),
  KEY `IDX_52EA1F097DC7170A` (`vente_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `hma_service_id_id` int NOT NULL,
  `subscription_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6D28840D3F09F2A1` (`hma_service_id_id`),
  KEY `IDX_6D28840D857C9F24` (`subscription_id_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `sale_price` decimal(12,2) NOT NULL,
  `purchase_price` decimal(12,2) NOT NULL,
  `stock_quantity` int NOT NULL,
  `min_quantity` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int NOT NULL,
  `user_id` int NOT NULL,
  `has_expiry_date` tinyint NOT NULL,
  `is_pharmacy` tinyint NOT NULL,
  `dosage` varchar(50) DEFAULT NULL,
  `form` varchar(100) DEFAULT NULL,
  `prescription_required` tinyint NOT NULL,
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`),
  KEY `IDX_D34A04ADA76ED395` (`user_id`),
  KEY `IDX_D34A04AD3F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `description`, `barcode`, `sale_price`, `purchase_price`, `stock_quantity`, `min_quantity`, `image`, `is_active`, `created_at`, `updated_at`, `category_id`, `user_id`, `has_expiry_date`, `is_pharmacy`, `dosage`, `form`, `prescription_required`, `hma_service_id_id`) VALUES
(1, 'Riz parfumé 5 Kg', 'riz-parfume-5-kg', 'Idéale pour les soirées', 'PROD-20260127-727660', '1500.00', '1200.00', 35, 10, 'Cliches-de-Saveurs-Ines-Millet-Prise-Direct-Noel-1-6979169991878.jpg', 1, '2026-01-27 19:11:59', '2026-01-29 01:20:01', 2, 4, 0, 0, NULL, NULL, 0, 0);

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
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6117D13B2ADD6D8C` (`supplier_id`),
  KEY `IDX_6117D13BA76ED395` (`user_id`),
  KEY `IDX_6117D13B187B2D12` (`cancelled_by_id`),
  KEY `IDX_6117D13B3F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `purchase_item`
--

DROP TABLE IF EXISTS `purchase_item`;
CREATE TABLE IF NOT EXISTS `purchase_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `batch_number` varchar(50) NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` decimal(12,2) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `manufacturing_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `purchase_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6FA8ED7D558FBEB9` (`purchase_id`),
  KEY `IDX_6FA8ED7D4584665A` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `purchase_item_id` int NOT NULL,
  `product_id` int NOT NULL,
  `initial_quantity` int NOT NULL,
  `current_quantity` int NOT NULL,
  `is_active` tinyint DEFAULT NULL,
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_641B4E259B59827` (`purchase_item_id`),
  KEY `IDX_641B4E254584665A` (`product_id`),
  KEY `IDX_641B4E253F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `user_id` int NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `billing_period` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `starts_at` datetime NOT NULL,
  `ends_at` datetime NOT NULL,
  `trial_ends_at` datetime DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `notes` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hma_service_id_id` int NOT NULL,
  `subscription_plan_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A3C664D33F09F2A1` (`hma_service_id_id`),
  KEY `IDX_A3C664D3EE079BCE` (`subscription_plan_id_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `max_employees_per_role` int DEFAULT NULL,
  `max_daily_sales` int DEFAULT NULL,
  `max_products` int DEFAULT NULL,
  `is_unlimited` tinyint NOT NULL,
  `description` longtext,
  `is_active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `updated_at` datetime NOT NULL,
  `hma_service_id_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9B2A6C7E3F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact_person`, `phone`, `email`, `adress`, `is_active`, `created_at`, `updated_at`, `hma_service_id_id`) VALUES
(1, 'AMADOU Dine', 'Jean Koffi', '019741397', 'abiolaelamir@gmail.com', 'Cotonou/Avenue-Bénin', 1, '2021-01-01 00:00:00', '2021-01-01 00:00:00', 0);

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
  `hma_service_id_id` int DEFAULT NULL,
  `password_changed` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`),
  KEY `IDX_8D93D6493F09F2A1` (`hma_service_id_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `full_name`, `phone`, `is_active`, `created_at`, `updated_at`, `photo`, `is_super_admin`, `is_hma_owner`, `employment_date`, `hma_service_id_id`, `password_changed`) VALUES
(20, 'abiolahaqq@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$3yrTn20PRLcrxKSNu0cC6O2N9CaziG7PW5a7DtwnmCs4XLESzvyrW', 'Dodji Pharmacie', '0191186655', 1, '2026-02-13 19:54:11', '2026-02-13 20:21:30', NULL, 0, 1, '2026-02-13', 13, 1),
(19, 'abiolaelamir@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$MMSkyN/LrywETaYVcfKNresFdwPXoToh9gWaxgL27VG1ryuqd03pW', 'ABIOLA EL-Amir', '0156139200', 1, '2026-02-13 18:59:09', '2026-02-13 19:24:24', NULL, 1, 0, '2026-02-13', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
