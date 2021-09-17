<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210809064943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE domains DROP FOREIGN KEY FK_8C7BBF9DB00092E6');
        $this->addSql('ALTER TABLE domains DROP FOREIGN KEY FK_8C7BBF9D10B8E53F');
        $this->addSql('ALTER TABLE domains DROP FOREIGN KEY FK_8C7BBF9DF4595BF2');
        $this->addSql('ALTER TABLE hosts DROP FOREIGN KEY FK_D8CD66B9B00092E6');
        $this->addSql('ALTER TABLE hosts DROP FOREIGN KEY FK_D8CD66B910B8E53F');
        $this->addSql('ALTER TABLE hosts DROP FOREIGN KEY FK_D8CD66B9F4595BF2');
        $this->addSql('ALTER TABLE servers DROP FOREIGN KEY FK_4F8AF5F7B00092E6');
        $this->addSql('ALTER TABLE servers DROP FOREIGN KEY FK_4F8AF5F710B8E53F');
        $this->addSql('ALTER TABLE servers DROP FOREIGN KEY FK_4F8AF5F7F4595BF2');
        $this->addSql('ALTER TABLE domains DROP FOREIGN KEY FK_8C7BBF9D19EB6921');
        $this->addSql('ALTER TABLE servers DROP FOREIGN KEY FK_4F8AF5F719EB6921');
        $this->addSql('ALTER TABLE certificates DROP FOREIGN KEY FK_8D26FB5F115F0EE5');
        $this->addSql('ALTER TABLE domains DROP FOREIGN KEY FK_8C7BBF9D166D1F9C');
        $this->addSql('ALTER TABLE projects DROP FOREIGN KEY FK_5C93B3A41844E6B7');
        $this->addSql('DROP TABLE accounts_managers');
        $this->addSql('DROP TABLE certificates');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE domains');
        $this->addSql('DROP TABLE hosts');
        $this->addSql('DROP TABLE projects');
        $this->addSql('DROP TABLE servers');
        $this->addSql('DROP TABLE user');
    }
}
