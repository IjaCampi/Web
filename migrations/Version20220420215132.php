<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420215132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sos (id_c INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, telephone INT NOT NULL, id_g INT NOT NULL, desc_cas VARCHAR(50) NOT NULL, PRIMARY KEY(id_c)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499B902AD');
        $this->addSql('DROP INDEX idu ON reclamation');
        $this->addSql('CREATE INDEX IDX_CE60640499B902AD ON reclamation (idu)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640499B902AD FOREIGN KEY (idu) REFERENCES user (iduser)');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY vote_ibfk_1');
        $this->addSql('ALTER TABLE vote CHANGE idu idu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A10856499B902AD FOREIGN KEY (idu) REFERENCES user (iduser)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sos');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499B902AD');
        $this->addSql('DROP INDEX idx_ce60640499b902ad ON reclamation');
        $this->addSql('CREATE INDEX idu ON reclamation (idu)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640499B902AD FOREIGN KEY (idu) REFERENCES user (iduser)');
        $this->addSql('ALTER TABLE user DROP email');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A10856499B902AD');
        $this->addSql('ALTER TABLE vote CHANGE idu idu INT NOT NULL');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT vote_ibfk_1 FOREIGN KEY (idu) REFERENCES user (iduser) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
