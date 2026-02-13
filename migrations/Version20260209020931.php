<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209020931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1727ACA70 FOREIGN KEY (parent_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C13F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE daily_usage ADD CONSTRAINT FK_50CA3FA43F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE employee_role_count ADD CONSTRAINT FK_EAD21C993F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517443F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744857C9F24 FOREIGN KEY (subscription_id_id) REFERENCES subscription (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993983F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE order_item ADD CONSTRAINT FK_52EA1F097DC7170A FOREIGN KEY (vente_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D857C9F24 FOREIGN KEY (subscription_id_id) REFERENCES subscription (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B2ADD6D8C FOREIGN KEY (supplier_id) REFERENCES supplier (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B187B2D12 FOREIGN KEY (cancelled_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE purchase_item ADD CONSTRAINT FK_6FA8ED7D558FBEB9 FOREIGN KEY (purchase_id) REFERENCES purchase (id)');
        $this->addSql('ALTER TABLE purchase_item ADD CONSTRAINT FK_6FA8ED7D4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE stock_batch ADD CONSTRAINT FK_641B4E254584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE stock_batch ADD CONSTRAINT FK_641B4E259B59827 FOREIGN KEY (purchase_item_id) REFERENCES purchase_item (id)');
        $this->addSql('ALTER TABLE stock_batch ADD CONSTRAINT FK_641B4E253F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B54584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B59B59827 FOREIGN KEY (purchase_item_id) REFERENCES purchase_item (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B5BC58EA38 FOREIGN KEY (stock_batch_id) REFERENCES stock_batch (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B571879AED FOREIGN KEY (hma_service_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D33F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D3EE079BCE FOREIGN KEY (subscription_plan_id_id) REFERENCES subscription_plan (id)');
        $this->addSql('ALTER TABLE supplier ADD CONSTRAINT FK_9B2A6C7E3F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493F09F2A1 FOREIGN KEY (hma_service_id_id) REFERENCES hma_service (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1727ACA70');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1A76ED395');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C13F09F2A1');
        $this->addSql('ALTER TABLE daily_usage DROP FOREIGN KEY FK_50CA3FA43F09F2A1');
        $this->addSql('ALTER TABLE employee_role_count DROP FOREIGN KEY FK_EAD21C993F09F2A1');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517443F09F2A1');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744857C9F24');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993983F09F2A1');
        $this->addSql('ALTER TABLE order_item DROP FOREIGN KEY FK_52EA1F097DC7170A');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D3F09F2A1');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D857C9F24');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADA76ED395');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD3F09F2A1');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B2ADD6D8C');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B187B2D12');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BA76ED395');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B3F09F2A1');
        $this->addSql('ALTER TABLE purchase_item DROP FOREIGN KEY FK_6FA8ED7D558FBEB9');
        $this->addSql('ALTER TABLE purchase_item DROP FOREIGN KEY FK_6FA8ED7D4584665A');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE stock_batch DROP FOREIGN KEY FK_641B4E254584665A');
        $this->addSql('ALTER TABLE stock_batch DROP FOREIGN KEY FK_641B4E259B59827');
        $this->addSql('ALTER TABLE stock_batch DROP FOREIGN KEY FK_641B4E253F09F2A1');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B54584665A');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B59B59827');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B5BC58EA38');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B5A76ED395');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B571879AED');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D33F09F2A1');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D3EE079BCE');
        $this->addSql('ALTER TABLE supplier DROP FOREIGN KEY FK_9B2A6C7E3F09F2A1');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493F09F2A1');
    }
}
