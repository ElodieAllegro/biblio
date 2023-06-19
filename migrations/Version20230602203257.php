<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230602203257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupons ADD code VARCHAR(10) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F564111877153098 ON coupons (code)');
        $this->addSql('ALTER TABLE orders ADD transporters_name VARCHAR(255) NOT NULL, ADD transporters_price DOUBLE PRECISION NOT NULL, ADD delivery LONGTEXT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E52FFDEEAEA34913 ON orders (reference)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_F564111877153098 ON coupons');
        $this->addSql('ALTER TABLE coupons DROP code');
        $this->addSql('DROP INDEX UNIQ_E52FFDEEAEA34913 ON orders');
        $this->addSql('ALTER TABLE orders DROP transporters_name, DROP transporters_price, DROP delivery');
    }
}
