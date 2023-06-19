<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230530220301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE6D72B15C');
        $this->addSql('ALTER TABLE coupons DROP FOREIGN KEY FK_F56411183DDD47B7');
        $this->addSql('ALTER TABLE localisations DROP FOREIGN KEY FK_66B6827467B3B43D');
        $this->addSql('ALTER TABLE orders_details DROP FOREIGN KEY FK_835379F16C8A81A9');
        $this->addSql('ALTER TABLE orders_details DROP FOREIGN KEY FK_835379F1CFFE9AD6');
        $this->addSql('DROP TABLE coupons');
        $this->addSql('DROP TABLE coupons_types');
        $this->addSql('DROP TABLE localisations');
        $this->addSql('DROP TABLE orders_details');
        $this->addSql('DROP INDEX UNIQ_E52FFDEEAEA34913 ON orders');
        $this->addSql('DROP INDEX IDX_E52FFDEE6D72B15C ON orders');
        $this->addSql('ALTER TABLE orders DROP coupons_id, DROP reference');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coupons (id INT AUTO_INCREMENT NOT NULL, coupons_types_id INT NOT NULL, code VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, discount INT NOT NULL, max_usage INT NOT NULL, validity DATETIME NOT NULL, is_valid TINYINT(1) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_F56411183DDD47B7 (coupons_types_id), UNIQUE INDEX UNIQ_F564111877153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE coupons_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE localisations (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_66B6827467B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE orders_details (orders_id INT NOT NULL, products_id INT NOT NULL, quantity INT NOT NULL, price INT NOT NULL, INDEX IDX_835379F16C8A81A9 (products_id), INDEX IDX_835379F1CFFE9AD6 (orders_id), PRIMARY KEY(orders_id, products_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE coupons ADD CONSTRAINT FK_F56411183DDD47B7 FOREIGN KEY (coupons_types_id) REFERENCES coupons_types (id)');
        $this->addSql('ALTER TABLE localisations ADD CONSTRAINT FK_66B6827467B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE orders_details ADD CONSTRAINT FK_835379F16C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE orders_details ADD CONSTRAINT FK_835379F1CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE orders ADD coupons_id INT DEFAULT NULL, ADD reference VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6D72B15C FOREIGN KEY (coupons_id) REFERENCES coupons (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E52FFDEEAEA34913 ON orders (reference)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE6D72B15C ON orders (coupons_id)');
    }
}
