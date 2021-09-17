<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210816124830 extends AbstractMigration
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
        $this->addSql('ALTER TABLE accounts_managers CHANGE name name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE function function INT DEFAULT NULL');
        $this->addSql('ALTER TABLE certificates ADD projects LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE renewal_date renewal_date DATE NOT NULL');
        $this->addSql('ALTER TABLE clients ADD server_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE clients ADD CONSTRAINT FK_C82E741844E6B7 FOREIGN KEY (server_id) REFERENCES servers (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C82E741844E6B7 ON clients (server_id)');
        $this->addSql('ALTER TABLE domains DROP INDEX IDX_8C7BBF9D19EB6921, ADD UNIQUE INDEX UNIQ_8C7BBF9D19EB6921 (client_id)');
        $this->addSql('ALTER TABLE domains DROP has_certificate');
        $this->addSql('ALTER TABLE hosts DROP FOREIGN KEY FK_D8CD66B999223FFD');
        $this->addSql('DROP INDEX UNIQ_D8CD66B999223FFD ON hosts');
        $this->addSql('ALTER TABLE hosts ADD certificate LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP certificate_id, CHANGE sites sites LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE databases_links databases_links LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE backups backups LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE servers DROP FOREIGN KEY FK_4F8AF5F719EB6921');
        $this->addSql('DROP INDEX IDX_4F8AF5F719EB6921 ON servers');
        $this->addSql('ALTER TABLE servers DROP client_id, DROP identifier, CHANGE project_public_cloud project_public_cloud VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE subscription subscription VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
