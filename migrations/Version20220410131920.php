<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220410131920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis CHANGE idu idu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande CHANGE id_utilisateur id_utilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE id_user id_user INT DEFAULT NULL, CHANGE id_equipement id_equipement INT DEFAULT NULL, CHANGE id_transport id_transport INT DEFAULT NULL, CHANGE id_hebergement id_hebergement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_commande CHANGE id_equipement id_equipement INT DEFAULT NULL, CHANGE id_commande id_commande INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participement_event CHANGE id_user id_user INT DEFAULT NULL, CHANGE id_Event id_Event INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE idu idu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservationevenement CHANGE id_evenement id_evenement INT DEFAULT NULL, CHANGE id_h id_h INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservationsimple CHANGE id_h id_h INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vote CHANGE idu idu INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis CHANGE idu idu INT NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE id_utilisateur id_utilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE id_hebergement id_hebergement INT NOT NULL, CHANGE id_user id_user INT NOT NULL, CHANGE id_equipement id_equipement INT NOT NULL, CHANGE id_transport id_transport INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_commande CHANGE id_commande id_commande INT NOT NULL, CHANGE id_equipement id_equipement INT NOT NULL');
        $this->addSql('ALTER TABLE participement_event CHANGE id_user id_user INT NOT NULL, CHANGE id_Event id_Event INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE idu idu INT NOT NULL');
        $this->addSql('ALTER TABLE reservationevenement CHANGE id_h id_h INT NOT NULL, CHANGE id_evenement id_evenement INT NOT NULL');
        $this->addSql('ALTER TABLE reservationsimple CHANGE id_h id_h INT NOT NULL');
        $this->addSql('ALTER TABLE vote CHANGE idu idu INT NOT NULL');
    }
}
