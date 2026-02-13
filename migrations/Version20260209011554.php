<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209011554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE daily_usage (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, sales_count INT DEFAULT NULL, created_at DATETIME NOT NULL, hma_service_id_id INT NOT NULL, INDEX IDX_50CA3FA43F09F2A1 (hma_service_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE employee_role_count (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(50) NOT NULL, current_count INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, hma_service_id_id INT NOT NULL, INDEX IDX_EAD21C993F09F2A1 (hma_service_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE hma_service (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, company_type VARCHAR(50) NOT NULL, phone VARCHAR(30) DEFAULT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, address LONGTEXT DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, longitude NUMERIC(10, 8) DEFAULT NULL, latitude NUMERIC(11, 8) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, is_active TINYINT NOT NULL, trial_ends_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, invoice_number VARCHAR(50) NOT NULL, amount_fcfa NUMERIC(10, 2) NOT NULL, period_start DATE NOT NULL, period_end DATE NOT NULL, status VARCHAR(20) NOT NULL, due_date DATE NOT NULL, pdf_path VARCHAR(255) DEFAULT NULL, sent_at DATETIME DEFAULT NULL, paid_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, hma_service_id_id INT NOT NULL, subscription_id_id INT NOT NULL, INDEX IDX_906517443F09F2A1 (hma_service_id_id), INDEX IDX_90651744857C9F24 (subscription_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, amount NUMERIC(10, 2) NOT NULL, payment_method VARCHAR(50) NOT NULL, transaction_id VARCHAR(100) DEFAULT NULL, status VARCHAR(50) NOT NULL, payment_date DATETIME NOT NULL, invoice_number VARCHAR(100) DEFAULT NULL, notes LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, hma_service_id_id INT NOT NULL, subscription_id_id INT NOT NULL, INDEX IDX_6D28840D3F09F2A1 (hma_service_id_id), INDEX IDX_6D28840D857C9F24 (subscription_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE subscription (id INT AUTO_INCREMENT NOT NULL, billing_period VARCHAR(15) NOT NULL, status VARCHAR(25) NOT NULL, starts_at DATETIME NOT NULL, ends_at DATETIME NOT NULL, trial_ends_at DATETIME DEFAULT NULL, payment_method VARCHAR(50) DEFAULT NULL, transaction_id VARCHAR(100) DEFAULT NULL, notes LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, hma_service_id_id INT NOT NULL, subscription_plan_id_id INT NOT NULL, INDEX IDX_A3C664D33F09F2A1 (hma_service_id_id), INDEX IDX_A3C664D3EE079BCE (subscription_plan_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE subscription_plan (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, display_name VARCHAR(100) NOT NULL, price_monthly NUMERIC(10, 2) NOT NULL, price_yearly NUMERIC(10, 2) NOT NULL, max_employees_per_role INT DEFAULT NULL, max_daily_sales INT DEFAULT NULL, max_products INT DEFAULT NULL, is_unlimited TINYINT NOT NULL, description LONGTEXT DEFAULT NULL, is_active TINYINT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE daily_usage ADD CONSTRAINT FK_50CA3FA43F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE employee_role_count ADD CONSTRAINT FK_EAD21C993F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517443F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744857C9F24 FOREIGN KEY (subscription_id_id) REFERENCES subscription (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D857C9F24 FOREIGN KEY (subscription_id_id) REFERENCES subscription (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D33F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D3EE079BCE FOREIGN KEY (subscription_plan_id_id) REFERENCES subscription_plan (id)');
        $this->addSql('ALTER TABLE category ADD hma_service_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1727ACA70 FOREIGN KEY (parent_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C13F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_64C19C13F09F2A1 ON category (hma_service_id_id)');
        $this->addSql('ALTER TABLE `order` ADD hma_service_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993983F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_F52993983F09F2A1 ON `order` (hma_service_id_id)');
        $this->addSql('ALTER TABLE order_item ADD CONSTRAINT FK_52EA1F097DC7170A FOREIGN KEY (vente_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE product ADD is_pharmacy TINYINT NOT NULL, ADD dosage VARCHAR(50) DEFAULT NULL, ADD form VARCHAR(100) DEFAULT NULL, ADD prescription_required TINYINT NOT NULL, ADD hma_service_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD3F09F2A1 ON product (hma_service_id_id)');
        $this->addSql('ALTER TABLE purchase ADD hma_service_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B2ADD6D8C FOREIGN KEY (supplier_id) REFERENCES supplier (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B187B2D12 FOREIGN KEY (cancelled_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_6117D13B3F09F2A1 ON purchase (hma_service_id_id)');
        $this->addSql('ALTER TABLE purchase_item ADD CONSTRAINT FK_6FA8ED7D558FBEB9 FOREIGN KEY (purchase_id) REFERENCES purchase (id)');
        $this->addSql('ALTER TABLE purchase_item ADD CONSTRAINT FK_6FA8ED7D4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE stock_batch ADD hma_service_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE stock_batch ADD CONSTRAINT FK_641B4E254584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE stock_batch ADD CONSTRAINT FK_641B4E259B59827 FOREIGN KEY (purchase_item_id) REFERENCES purchase_item (id)');
        $this->addSql('ALTER TABLE stock_batch ADD CONSTRAINT FK_641B4E253F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_641B4E253F09F2A1 ON stock_batch (hma_service_id_id)');
        $this->addSql('ALTER TABLE stock_movement ADD hma_service_id INT NOT NULL');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B54584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B59B59827 FOREIGN KEY (purchase_item_id) REFERENCES purchase_item (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B5BC58EA38 FOREIGN KEY (stock_batch_id) REFERENCES stock_batch (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B571879AED FOREIGN KEY (hma_service_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_BB1BC1B571879AED ON stock_movement (hma_service_id)');
        $this->addSql('ALTER TABLE supplier ADD hma_service_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE supplier ADD CONSTRAINT FK_9B2A6C7E3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_9B2A6C7E3F09F2A1 ON supplier (hma_service_id_id)');
        $this->addSql('ALTER TABLE user ADD is_super_admin TINYINT NOT NULL, ADD is_hma_owner TINYINT NOT NULL, ADD employment_date DATE DEFAULT NULL, ADD hma_service_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493F09F2A1 ON user (hma_service_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE daily_usage DROP FOREIGN KEY FK_50CA3FA43F09F2A1');
        $this->addSql('ALTER TABLE employee_role_count DROP FOREIGN KEY FK_EAD21C993F09F2A1');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517443F09F2A1');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744857C9F24');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D3F09F2A1');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D857C9F24');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D33F09F2A1');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D3EE079BCE');
        $this->addSql('DROP TABLE daily_usage');
        $this->addSql('DROP TABLE employee_role_count');
        $this->addSql('DROP TABLE hma_service');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE subscription');
        $this->addSql('DROP TABLE subscription_plan');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1727ACA70');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1A76ED395');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C13F09F2A1');
        $this->addSql('DROP INDEX IDX_64C19C13F09F2A1 ON category');
        $this->addSql('ALTER TABLE category DROP hma_service_id_id');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993983F09F2A1');
        $this->addSql('DROP INDEX IDX_F52993983F09F2A1 ON `order`');
        $this->addSql('ALTER TABLE `order` DROP hma_service_id_id');
        $this->addSql('ALTER TABLE order_item DROP FOREIGN KEY FK_52EA1F097DC7170A');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADA76ED395');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD3F09F2A1');
        $this->addSql('DROP INDEX IDX_D34A04AD3F09F2A1 ON product');
        $this->addSql('ALTER TABLE product DROP is_pharmacy, DROP dosage, DROP form, DROP prescription_required, DROP hma_service_id_id');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B2ADD6D8C');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B187B2D12');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BA76ED395');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B3F09F2A1');
        $this->addSql('DROP INDEX IDX_6117D13B3F09F2A1 ON purchase');
        $this->addSql('ALTER TABLE purchase DROP hma_service_id_id');
        $this->addSql('ALTER TABLE purchase_item DROP FOREIGN KEY FK_6FA8ED7D558FBEB9');
        $this->addSql('ALTER TABLE purchase_item DROP FOREIGN KEY FK_6FA8ED7D4584665A');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE stock_batch DROP FOREIGN KEY FK_641B4E254584665A');
        $this->addSql('ALTER TABLE stock_batch DROP FOREIGN KEY FK_641B4E259B59827');
        $this->addSql('ALTER TABLE stock_batch DROP FOREIGN KEY FK_641B4E253F09F2A1');
        $this->addSql('DROP INDEX IDX_641B4E253F09F2A1 ON stock_batch');
        $this->addSql('ALTER TABLE stock_batch DROP hma_service_id_id');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B54584665A');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B59B59827');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B5BC58EA38');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B5A76ED395');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B571879AED');
        $this->addSql('DROP INDEX IDX_BB1BC1B571879AED ON stock_movement');
        $this->addSql('ALTER TABLE stock_movement DROP hma_service_id');
        $this->addSql('ALTER TABLE supplier DROP FOREIGN KEY FK_9B2A6C7E3F09F2A1');
        $this->addSql('DROP INDEX IDX_9B2A6C7E3F09F2A1 ON supplier');
        $this->addSql('ALTER TABLE supplier DROP hma_service_id_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493F09F2A1');
        $this->addSql('DROP INDEX IDX_8D93D6493F09F2A1 ON user');
        $this->addSql('ALTER TABLE user DROP is_super_admin, DROP is_hma_owner, DROP employment_date, DROP hma_service_id_id');
    }
}
