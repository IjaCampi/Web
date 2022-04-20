<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414101308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE moyen_transport CHANGE id_transport id_transport INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation_moyen_transport CHANGE id_reservation id_reservation INT AUTO_INCREMENT NOT NULL, CHANGE id_transport id_transport INT DEFAULT NULL, CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateurs CHANGE id_user id_user INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE moyen_transport CHANGE id_transport id_transport INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_moyen_transport CHANGE id_reservation id_reservation INT NOT NULL, CHANGE id_transport id_transport INT NOT NULL, CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs CHANGE id_user id_user INT NOT NULL');
    }
}
