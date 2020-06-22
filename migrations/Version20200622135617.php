<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200622135617 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE velo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE velo (id INT NOT NULL, marque VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, annee INT DEFAULT NULL, etat VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, nbvitesse INT DEFAULT NULL, typefrein VARCHAR(255) DEFAULT NULL, modele VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE velo_id_seq CASCADE');
        $this->addSql('DROP TABLE velo');
    }
}
