-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 avr. 2026 à 02:20
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
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C1989D9B62` (`slug`),
  KEY `IDX_64C19C1A76ED395` (`user_id`),
  KEY `IDX_64C19C1727ACA70` (`parent_id`),
  KEY `IDX_64C19C171879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `description`, `image`, `is_active`, `created_at`, `updated_at`, `parent_id`, `user_id`, `hma_service_id`, `subscription_active`) VALUES
(1, 'Produits alimentaires', 'produits-alimentaires', 'Idéale pour le déjeuner', '18900d7e-adbb-4530-ae71-f27216a5839b-53f369ca53cb1bd7d914c17103a9eb92-Copie-6977fe085273a.webp', 1, '2026-01-26 23:51:00', '2026-01-27 01:05:50', NULL, 21, 13, 1),
(2, 'Riz et pâtes', 'riz-et-pates', 'Idéale pour le déjeuner', NULL, 1, '2026-01-27 01:08:47', '2026-03-12 23:03:19', 1, 21, 13, 1),
(13, 'Poulet', 'poulet', NULL, NULL, 1, '2026-03-26 00:37:54', '2026-03-26 00:38:06', 11, 29, 19, 1),
(7, 'Légumes', 'legumes', NULL, NULL, 1, '2026-03-25 00:57:02', '2026-03-25 00:57:12', NULL, 29, 19, 1),
(8, 'Épices', 'epices', NULL, NULL, 1, '2026-03-25 00:59:01', '2026-03-26 00:19:47', NULL, 29, 19, 1),
(9, 'Pain', 'pain', NULL, NULL, 1, '2026-03-25 01:00:48', '2026-03-26 00:18:41', NULL, 29, 19, 1),
(10, 'Sauces', 'sauces', NULL, NULL, 1, '2026-03-25 01:01:13', '2026-03-26 00:17:36', NULL, 29, 19, 1),
(11, 'Viandes', 'viandes', NULL, NULL, 1, '2026-03-25 01:02:00', '2026-03-26 00:15:45', NULL, 29, 19, 1),
(14, 'Tomates', 'tomates', NULL, NULL, 1, '2026-03-26 00:45:45', '2026-03-26 00:45:55', 7, 29, 19, 1),
(15, 'Oignons', 'oignons', NULL, NULL, 1, '2026-03-26 00:46:43', '2026-03-26 00:46:53', 7, 29, 19, 1),
(16, 'Sauce blanche', 'sauce-blanche', NULL, NULL, 1, '2026-03-26 00:49:27', '2026-03-26 00:49:36', 10, 29, 19, 1),
(17, 'Sauce piquante', 'sauce-piquante', NULL, NULL, 1, '2026-03-26 00:50:16', '2026-03-26 00:50:25', 10, 29, 19, 1),
(18, 'Salades', 'salades', NULL, '69c5d208cd8ce.jpg', 1, '2026-03-26 00:50:59', '2026-03-27 00:40:40', 7, 29, 19, 0);

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
(5, 'Sandwiches', 'sandwiches', NULL, NULL, 1, '2026-03-27 17:57:42', '2026-03-27 17:57:50', 1, 4, 29, 19);

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
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EAD21C9971879AED` (`hma_service_id`)
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1E667870E7927C74` (`email`),
  UNIQUE KEY `UNIQ_1E6678705F6607D3` (`subscription_number`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `hma_service`
--

INSERT INTO `hma_service` (`id`, `company_name`, `company_type`, `phone`, `email`, `password`, `address`, `city`, `country`, `longitude`, `latitude`, `logo`, `is_active`, `trial_ends_at`, `created_at`, `updated_at`, `subscription_number`, `activated_at`, `subscription_plan`, `subscription_start_at`, `subscription_ends_at`, `product_count`, `order_count`, `user_count`, `category_count`, `supplier_count`, `recipe_count`, `hma_active`) VALUES
(13, 'Dodji Pharmacie', 'pharmacy', '0191186655', 'abiolahaqq@gmail.com', '$2y$13$RCWKHaUFsceGki0DfWm5ZeqfR4Itt58X.Hep0kxKA3IcE9kqz3A/6', 'Situé non loin du commesariat de Dodji', 'Porto-Novo', 'BJ', '2.41500000', '6.36690000', 'pharmacie-1024x620-698f81400fb49.jpg', 1, NULL, '2026-02-10 19:53:38', '2026-03-09 01:18:13', 'JV76849420', '2026-02-13 19:54:08', 'basic', '2026-03-09 01:18:02', '2026-04-09 01:18:02', 0, 0, 4, 0, 0, 0, 1),
(19, 'Zitawi', 'restaurant', '0197514234', 'zitawi@gmail.com', '$2y$13$iQv8XtuRwQ7y1GI1xgpzHObE4EFswobz5iz1H6BucRdNgOxmkVHT.', 'Situé non loin de l\'ancien pont Ganhi', 'Cotonou', 'BJ', NULL, NULL, 'istockphoto-981368726-612x612-69b83d958de14.jpg', 1, '2026-03-30 17:27:51', '2026-03-16 17:27:51', '2026-03-16 17:36:46', 'KE93008092', '2026-03-16 17:29:07', 'trial', NULL, NULL, 0, 0, 1, 0, 0, 0, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_number`, `amount_fcfa`, `period_start`, `period_end`, `status`, `due_date`, `pdf_path`, `sent_at`, `paid_at`, `created_at`, `hma_service_id`, `subscription_id`) VALUES
(8, 'INV-202603-0001', '25000.00', '2026-03-09', '2026-04-09', 'paid', '2026-04-09', 'C:\\wamp64\\www\\Mes projets en Symfony\\hma_market/public/uploads/recus-abonnement/facture_INV-202603-0001.pdf', '2026-03-09 01:18:13', '2026-03-09 01:18:02', '2026-03-09 01:18:02', 13, 34);

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
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `IDX_F5299398A76ED395` (`user_id`),
  KEY `IDX_F529939871879AED` (`hma_service_id`)
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
  `recipe_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_52EA1F097DC7170A` (`vente_id`),
  KEY `IDX_52EA1F0959D8A214` (`recipe_id`)
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
  `hma_service_id` int NOT NULL,
  `subscription_id` int NOT NULL,
  `subscription_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6D28840D71879AED` (`hma_service_id`),
  KEY `IDX_6D28840D9A1887DC` (`subscription_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `payment_method`, `transaction_id`, `status`, `payment_date`, `invoice_number`, `notes`, `created_at`, `hma_service_id`, `subscription_id`, `subscription_number`) VALUES
(33, '25000.00', 'fedapay', '413827', 'completed', '2026-03-09 01:18:01', 'INV-202603-0001', 'Plan: basic, Période: monthly', '2026-03-09 01:17:19', 13, 34, 'JV76849420');

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
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`),
  KEY `IDX_D34A04ADA76ED395` (`user_id`),
  KEY `idx_hma_service` (`hma_service_id`),
  KEY `idx_is_active` (`is_active`),
  KEY `idx_subscription_active` (`subscription_active`),
  KEY `idx_barcode` (`barcode`(250)),
  KEY `idx_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `description`, `barcode`, `sale_price`, `purchase_price`, `stock_quantity`, `min_quantity`, `image`, `is_active`, `created_at`, `updated_at`, `category_id`, `user_id`, `has_expiry_date`, `dosage`, `form`, `prescription_required`, `hma_service_id`, `subscription_active`, `unit`) VALUES
(1, 'Riz parfumé 5 Kg', 'riz-parfume-5-kg', 'Idéale pour les soirées', 'PROD-20260127-727660', '1500.00', '1250.00', 35, 10, 'Cliches-de-Saveurs-Ines-Millet-Prise-Direct-Noel-1-6979169991878.jpg', 1, '2026-01-27 19:11:59', '2026-03-15 18:59:34', 2, 21, 0, NULL, NULL, 0, 13, 1, 'pièce'),
(2, 'Adidas 350 SPLY', 'adidas-350-sply', 'Idéale pour les sories', 'PROD-20260314-684737', '30000.00', '25000.00', 12, 5, 'default-product.png', 1, '2026-03-14 22:40:33', '2026-03-15 19:12:51', 1, 20, 0, NULL, NULL, 0, 13, 1, 'pièce'),
(5, 'Poulet', 'poulet', NULL, 'PROD-20260326-174368', NULL, '50000.00', 50, 20, 'default-product.png', 1, '2026-03-26 01:00:23', NULL, 13, 29, 0, NULL, NULL, NULL, 19, 1, 'g'),
(6, 'Pain pita', 'pain-pita', NULL, 'PROD-20260326-142181', NULL, '5000.00', 110, 10, 'default-product.png', 1, '2026-03-26 01:01:41', NULL, 9, 29, 0, NULL, NULL, NULL, 19, 1, 'pièce'),
(7, 'Tomate', 'tomate', NULL, 'PROD-20260326-409834', NULL, '20000.00', 2000, 500, 'default-product.png', 1, '2026-03-26 01:03:01', NULL, 14, 29, 0, NULL, NULL, NULL, 19, 1, 'g'),
(8, 'Oignon', 'oignon', NULL, 'PROD-20260326-837873', NULL, '15000.00', 3025, 500, 'default-product.png', 1, '2026-03-26 01:04:21', '2026-03-26 01:07:02', 15, 29, 1, NULL, NULL, NULL, 19, 1, 'g'),
(9, 'Sauce blanche', 'sauce-blanche', NULL, 'PROD-20260326-956849', NULL, '20000.00', 5007, 1000, 'default-product.png', 1, '2026-03-26 01:06:10', NULL, 16, 29, 0, NULL, NULL, NULL, 19, 1, 'ml'),
(10, 'Sauce piquante', 'sauce-piquante', NULL, 'PROD-20260326-333810', NULL, '20000.00', 2016, 100, 'default-product.png', 1, '2026-03-26 01:10:55', NULL, 17, 29, 0, NULL, NULL, NULL, 19, 1, 'ml'),
(11, 'Curcuma', 'curcuma', NULL, 'PROD-20260326-834664', NULL, '20000.00', 500, 100, 'default-product.png', 1, '2026-03-26 01:12:44', NULL, 8, 29, 0, NULL, NULL, NULL, 19, 1, 'g'),
(12, 'Cumin', 'cumin', NULL, 'PROD-20260326-324680', NULL, '15000.00', 30, 10, 'default-product.png', 1, '2026-03-26 01:15:06', NULL, 8, 29, 0, NULL, NULL, NULL, 19, 1, 'g'),
(13, 'Paprika', 'paprika', NULL, 'PROD-20260326-390307', NULL, '20000.00', 500, 100, 'default-product.png', 1, '2026-03-26 01:26:28', NULL, 8, 29, 0, NULL, NULL, NULL, 19, 1, 'g'),
(14, 'Salade verte', 'salade-verte', NULL, 'PROD-20260326-904863', NULL, '30000.00', 1000, 100, 'default-product.png', 1, '2026-03-26 01:28:44', NULL, 18, 29, 0, NULL, NULL, NULL, 19, 1, 'g'),
(15, 'Cornichon', 'cornichon', NULL, 'PROD-20260326-731823', NULL, '50000.00', 1000, 200, '69c5da7c91b25.jpg', 1, '2026-03-26 01:31:41', '2026-03-27 01:16:44', 7, 29, 0, NULL, NULL, NULL, 19, 1, 'pièce'),
(17, 'Blanc de poulet', 'blanc-de-poulet', NULL, 'PROD-20260327-627187', NULL, '15000.00', 5000, 1000, 'default-product.png', 1, '2026-03-27 17:48:03', NULL, 13, 29, 0, NULL, NULL, NULL, 19, 1, 'g');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `name`, `description`, `value`, `start_date`, `end_date`, `is_active`, `created_at`, `updated_at`, `hma_service_id`, `user_id`, `image`, `type_promotion_id`) VALUES
(2, 'Promo Chawarma', 'Profitez de 1000 FCFA de réduction sur notre délicieux Chawarma', '1000.00', '2026-04-05 00:00:00', '2027-04-05 00:00:00', 1, '2026-04-04 02:36:41', '2026-04-06 02:15:21', 19, 29, NULL, 3),
(3, 'Promotion Rabais', NULL, '2000.00', '2026-04-04 00:00:00', '2026-04-07 00:00:00', 1, '2026-04-04 18:33:11', '2026-04-06 01:26:33', 13, 20, NULL, 7);

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

--
-- Déchargement des données de la table `promotion_category_recipe`
--

INSERT INTO `promotion_category_recipe` (`id`, `promotion_id`, `category_recipe_id`) VALUES
(2, 2, 5);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(54, 'ACH-20260402-0001', '81000.00', 'received', 'Aucune', '2026-04-02 17:01:39', '2026-04-02 17:01:39', 1, 29, '2026-04-02 17:03:18', NULL, NULL, NULL, NULL, 'bon_commande_ACH-20260402-0001.pdf', 'recu_achat_ACH-20260402-0001.pdf', 19);

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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `purchase_item`
--

INSERT INTO `purchase_item` (`id`, `batch_number`, `quantity`, `unit_price`, `total_price`, `expiry_date`, `manufacturing_date`, `created_at`, `purchase_id`, `product_id`) VALUES
(39, 'LOT-20260328-10-19243', 6, '20000.00', '120000.00', NULL, NULL, '2026-03-28 20:14:36', 46, 10),
(40, 'LOT-20260328-8-00590', 10, '15000.00', '150000.00', NULL, NULL, '2026-03-28 20:37:26', 47, 8),
(41, 'LOT-20260330-9-87528', 4, '20000.00', '80000.00', NULL, NULL, '2026-03-30 19:12:33', 48, 9),
(42, 'LOT-20260330-10-20317', 4, '20000.00', '80000.00', NULL, NULL, '2026-03-30 19:12:33', 48, 10),
(43, 'LOT-20260330-8-31021', 10, '1200.00', '12000.00', NULL, NULL, '2026-03-30 19:12:33', 48, 8),
(44, 'LOT-20260401-6-87826', 2, '3000.00', '6000.00', NULL, NULL, '2026-04-01 20:21:35', 49, 6),
(45, 'LOT-20260401-6-54980', 5, '2000.00', '10000.00', NULL, NULL, '2026-04-01 20:59:09', 50, 6),
(46, 'LOT-20260402-6-06721', 5, '4500.00', '22500.00', NULL, NULL, '2026-04-02 16:46:28', 51, 6),
(47, 'LOT-20260402-10-96798', 10, '5000.00', '50000.00', NULL, NULL, '2026-04-02 16:51:32', 52, 10),
(48, 'LOT-20260402-8-07700', 3, '5000.00', '15000.00', '2026-04-18', '2026-04-08', '2026-04-02 16:57:58', 53, 8),
(50, 'LOT-20260402-9-20524', 3, '15000.00', '45000.00', NULL, NULL, '2026-04-02 17:01:39', 54, 9),
(51, 'LOT-20260402-10-40017', 6, '6000.00', '36000.00', NULL, NULL, '2026-04-02 17:01:39', 54, 10);

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
  PRIMARY KEY (`id`),
  KEY `IDX_DA88B13771879AED` (`hma_service_id`),
  KEY `IDX_DA88B13712469DE2` (`category_id`),
  KEY `IDX_DA88B137A76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `description`, `selling_price`, `created_at`, `updated_at`, `is_active`, `hma_service_id`, `subscription_active`, `category_id`, `user_id`, `image`, `instructions`) VALUES
(5, 'Chawarma', 'Plat oriental à base de poulet mariné, servi dans un pain pita avec légumes et sauces.', '2500.00', '2026-03-27 18:07:07', '2026-03-27 18:20:18', 1, 19, 1, 5, 29, '69c6ca62b098e.jpg', '1. Couper le poulet en fines lamelles.\n2. Mélanger les épices et enrober le poulet.\n3. Cuire le poulet à la poêle.\n4. Garnir le pain pita de laitue, tomate, oignon et cornichons.\n5. Ajouter le poulet et les sauces.');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(14, 20, 'pièce', 5, 15);

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `hma_service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_641B4E259B59827` (`purchase_item_id`),
  KEY `IDX_641B4E254584665A` (`product_id`),
  KEY `IDX_641B4E2571879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stock_batch`
--

INSERT INTO `stock_batch` (`id`, `batch_number`, `unit_price`, `expiry_date`, `manufacturing_date`, `created_at`, `purchase_item_id`, `product_id`, `initial_quantity`, `current_quantity`, `is_active`, `hma_service_id`) VALUES
(10, 'LOT-20260328-10-19243', '20000.00', NULL, NULL, '2026-03-28 20:24:44', 39, 10, 6, 6, 1, 19),
(11, 'LOT-20260328-8-00590', '15000.00', '2026-04-19', '2026-02-26', '2026-03-28 20:39:13', 40, 8, 10, 10, 1, 19),
(12, 'LOT-20260330-9-87528', '20000.00', NULL, NULL, '2026-03-30 19:19:13', 41, 9, 4, 4, 1, 19),
(13, 'LOT-20260330-10-20317', '20000.00', NULL, NULL, '2026-03-30 19:19:13', 42, 10, 4, 4, 1, 19),
(14, 'LOT-20260330-8-31021', '1200.00', '2026-04-24', '2026-03-30', '2026-03-30 19:19:13', 43, 8, 10, 10, 1, 19),
(15, 'LOT-20260401-6-54980', '2000.00', NULL, NULL, '2026-04-01 22:45:25', 45, 6, 5, 5, 1, 19),
(16, 'LOT-20260402-6-06721', '4500.00', NULL, NULL, '2026-04-02 16:49:33', 46, 6, 5, 5, 1, 19),
(17, 'LOT-20260402-9-20524', '15000.00', NULL, NULL, '2026-04-02 17:03:18', 50, 9, 3, 3, 1, 19),
(18, 'LOT-20260402-10-40017', '6000.00', NULL, NULL, '2026-04-02 17:03:18', 51, 10, 6, 6, 1, 19),
(19, 'LOT-20260402-8-07700', '5000.00', '2026-04-18', '2026-04-08', '2026-04-02 17:11:52', 48, 8, 3, 3, 1, 19);

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stock_movement`
--

INSERT INTO `stock_movement` (`id`, `movement_type`, `quantity`, `notes`, `created_at`, `user_id`, `reference_id`, `unit_price`, `product_id`, `purchase_item_id`, `stock_batch_id`, `hma_service_id`) VALUES
(11, 'PURCHASE', 6, 'Réception commande ACH-20260328-0001', '2026-03-28 20:24:44', 29, NULL, '20000.00', 10, 39, 10, 19),
(12, 'PURCHASE', 10, 'Réception commande ACH-20260328-0001', '2026-03-28 20:39:13', 29, NULL, '15000.00', 8, 40, 11, 19),
(13, 'PURCHASE', 4, 'Réception commande ACH-20260330-0001', '2026-03-30 19:19:13', 29, NULL, '20000.00', 9, 41, 12, 19),
(14, 'PURCHASE', 4, 'Réception commande ACH-20260330-0001', '2026-03-30 19:19:13', 29, NULL, '20000.00', 10, 42, 13, 19),
(15, 'PURCHASE', 10, 'Réception commande ACH-20260330-0001', '2026-03-30 19:19:13', 29, NULL, '1200.00', 8, 43, 14, 19),
(16, 'PURCHASE', 5, 'Réception commande ACH-20260401-0001', '2026-04-01 22:45:25', 29, 50, '2000.00', 6, 45, 15, 19),
(17, 'PURCHASE', 5, 'Réception commande ACH-20260402-0001', '2026-04-02 16:49:33', 29, 51, '4500.00', 6, 46, 16, 19),
(18, 'PURCHASE', 3, 'Réception commande ACH-20260402-0001', '2026-04-02 17:03:18', 29, 54, '15000.00', 9, 50, 17, 19),
(19, 'PURCHASE', 6, 'Réception commande ACH-20260402-0001', '2026-04-02 17:03:18', 29, 54, '6000.00', 10, 51, 18, 19),
(20, 'PURCHASE', 3, 'Réception commande ACH-20260402-0001', '2026-04-02 17:11:52', 29, 53, '5000.00', 8, 48, 19, 19);

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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subscription`
--

INSERT INTO `subscription` (`id`, `billing_period`, `status`, `starts_at`, `ends_at`, `payment_method`, `transaction_id`, `notes`, `created_at`, `updated_at`, `hma_service_id`, `subscription_plan_id`, `subscription_active`) VALUES
(34, 'monthly', 'active', '2026-03-09 01:18:02', '2026-04-09 01:18:02', 'fedapay', '413827', NULL, '2026-03-09 01:17:19', NULL, 13, 3, 1);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EA664B635E237E06` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subscription_plan`
--

INSERT INTO `subscription_plan` (`id`, `name`, `display_name`, `price_monthly`, `price_yearly`, `max_products`, `description`, `is_active`, `created_at`, `max_users_per_role`, `max_orders_per_month`, `max_categories`, `max_suppliers`, `features`, `updated_at`) VALUES
(2, 'freemium', 'Freemium', '0.00', '0.00', 50, 'Plan Freemium (gratuit) :\n- Utilisateurs par rôle : 1\n- Produits : 50 max\n- Commandes par mois : 100 max\n- Catégories : 10 max\n- Fournisseurs : 5 max\nFonctionnalités incluses : inventaire basique, rapports basiques.\nIdéal pour découvrir l\'application.', 1, '2026-02-25 00:33:33', 1, 100, 10, 5, '[\"basic_inventory\", \"basic_reports\"]', '2026-02-26 00:38:07'),
(3, 'basic', 'Basic', '25000.00', '250000.00', 200, 'Plan Basic :\n- Utilisateurs par rôle : 2\n- Produits : 200 max\n- Commandes par mois : 500 max\n- Catégories : 20 max\n- Fournisseurs : 15 max\nFonctionnalités : inventaire avancé, rapports détaillés, accès API.\nParfait pour les petites entreprises en croissance.', 1, '2026-02-26 00:57:18', 2, 500, 20, 15, '[\"inventaire avancé\", \"rapports détaillés\", \"accès API\"]', '2026-02-26 01:02:01'),
(4, 'premium', 'Premium', '90000.00', '900000.00', NULL, 'Plan Premium : tout est illimité !\n- Utilisateurs par rôle : illimité\n- Produits : illimité\n- Commandes par mois : illimité\n- Catégories : illimité\n- Fournisseurs : illimité\nFonctionnalités : toutes, support prioritaire, domaine personnalisé, marque blanche.\nLa solution complète pour les entreprises exigeantes.', 1, '2026-02-26 01:00:06', NULL, NULL, NULL, NULL, '[\"toutes\", \"support prioritaire\", \"domaine personnalisé\", \"marque blanche\"]', '2026-02-26 01:13:27');

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
  `hma_service_id` int NOT NULL,
  `subscription_active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `IDX_9B2A6C7E71879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact_person`, `phone`, `email`, `adress`, `is_active`, `created_at`, `updated_at`, `hma_service_id`, `subscription_active`) VALUES
(1, 'AMADOU Dine', 'Jean Koffi', '0197187212', 'abiolaelamir@gmail.com', 'Cotonou/Avenue-Bénin', 1, '2021-01-01 00:00:00', '2021-01-01 00:00:00', 19, 1);

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
(4, 'Livraison offerte', 'Frais de livraison gratuits (sans montant).', 1, '2026-04-03 19:50:13', NULL, 19, 29),
(6, 'Troisième gratuit', 'Achat de trois articles, le troisième est gratuit.', 1, '2026-04-03 19:58:44', NULL, 19, 29),
(7, 'Deuxième à -X%', 'Achat de deux articles, le second bénéficie d’un pourcentage de réduction.', 1, '2026-04-03 20:00:43', NULL, 13, 29),
(8, 'Achat groupé', 'Réduction si la quantité achetée atteint un seuil (ex: -10% dès 5 pièces).', 0, '2026-04-03 20:02:14', '2026-04-03 20:17:41', 19, 29),
(11, 'Code promo', 'Réduction applicable via un code spécifique (montant fixe ou pourcentage).', 1, '2026-04-03 20:10:11', NULL, 19, 29),
(12, 'Fidélité', 'Réduction réservée aux clients fidèles (points, carte de fidélité).', 1, '2026-04-03 20:11:39', NULL, 19, 29),
(13, 'Offre saisonnière', 'Réduction valable sur une période spécifique (été, Noël, rentrée).', 1, '2026-04-03 20:13:20', NULL, 19, 29);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`),
  KEY `IDX_8D93D64971879AED` (`hma_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `full_name`, `phone`, `is_active`, `created_at`, `updated_at`, `photo`, `is_super_admin`, `is_hma_owner`, `employment_date`, `hma_service_id`, `password_changed`, `subscription_active`, `login_at`, `logout_at`, `last_activity`) VALUES
(20, 'abiolahaqq@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$RCWKHaUFsceGki0DfWm5ZeqfR4Itt58X.Hep0kxKA3IcE9kqz3A/6', 'GBAGUIDI Jack', '0191186655', 1, '2026-02-13 19:54:11', '2026-04-06 02:02:15', 'pexels-andrewperformance1-1322481-69934cf9a63c4.jpg', 0, 1, '2026-02-13', 13, 1, 1, '2026-04-02 22:44:18', '2026-03-26 22:48:49', '2026-04-06 02:02:15'),
(19, 'abiolaelamir@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$yZj/e/72mSDds5lEG072wefxYuCWw6YlI4UTO1QRd65PtmJz0scZC', 'ABIOLA EL-Amir', '0156139200', 1, '2026-02-13 18:59:09', '2026-03-12 17:02:16', 'Photo-d-identite-6994aa753baeb.jpg', 1, 0, '2026-02-13', NULL, 1, 1, '2026-03-12 17:02:08', NULL, '2026-03-12 17:02:16'),
(21, 'michou@gmail.com', '[\"ROLE_MANAGER\"]', '$2y$13$2ZhQynRTpU1.DZXL3bTEFu04mvAbviSH4m.ESbFF0hPLyN/QcUeh.', 'ABIOLA Michkath', '0197127223', 1, '2026-02-16 01:28:37', '2026-03-26 22:40:28', 'chiro-699bab565e60f.png', 0, 0, '2017-06-16', 13, 1, 1, '2026-03-26 22:40:28', '2026-03-14 01:12:45', '2026-03-26 22:40:28'),
(23, 'mike@gmail.com', '[\"ROLE_STOCK_MANAGER\"]', '$2y$13$nuZsuB40pTsEqnLRjD1sCePbhQczO7TewvKeYVXgpnBYiAk7eJeym', 'AHOYO Mike', '0142301991', 1, '2026-02-20 17:41:03', '2026-03-01 15:33:45', NULL, 0, 0, '2018-02-18', 13, 1, 1, NULL, NULL, NULL),
(26, 'dilane@gmail.com', '[\"ROLE_CASHIER\"]', '$2y$13$TViqKWuFc/bNjGigWfgYeO.WnjaOeOdhYz05W5MWQNQDIQxrlWN3G', 'DASILVA Dilane', '0197453108', 1, '2026-03-01 01:15:39', '2026-03-01 01:15:24', NULL, 0, 0, '2026-03-01', 13, 0, 1, NULL, NULL, NULL),
(29, 'zitawi@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$iQv8XtuRwQ7y1GI1xgpzHObE4EFswobz5iz1H6BucRdNgOxmkVHT.', 'Zitawi', '0197514234', 1, '2026-03-16 17:29:09', '2026-04-06 02:15:06', NULL, 0, 1, '2026-03-16', 19, 1, 1, '2026-04-02 22:42:14', '2026-03-31 02:13:28', '2026-04-06 02:15:06'),
(30, 'amanath@gmail.com', '[\"ROLE_MANAGER\"]', '$2y$13$YG1yTwBiYh5TpV8iAjOjM.fJO7WP0PVnp177sOz9utvimMh1lKame', 'Amanath Tidjani', '0197451234', 1, '2026-03-27 20:27:29', '2026-04-02 22:41:45', 'LOOK-03-0322-V2-330-1920-x1280-69c6e995f3232.jpg', 0, 0, '2015-04-11', 19, 1, 1, '2026-04-02 22:41:30', '2026-03-27 22:24:52', '2026-04-02 22:41:45'),
(31, 'agnike@gmail.com', '[\"ROLE_STOCK_MANAGER\"]', '$2y$13$LgUCbm8iJ81lpnd531P5EOLTfM6kR3cna4UA1yM4TiructQ2KDtny', 'ALABI Agnikè', '0197541239', 1, '2026-03-27 21:52:01', '2026-04-05 21:50:12', NULL, 0, 0, '2018-06-10', 19, 1, 1, '2026-04-05 21:50:12', '2026-03-29 16:43:07', '2026-04-05 21:50:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
