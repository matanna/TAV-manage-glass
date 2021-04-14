<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414095546 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_C293A6F2F46CD258');
        $this->addSql('CREATE TEMPORARY TABLE __temp__chute AS SELECT id, matiere_id, longueur, largeur, quantite FROM chute');
        $this->addSql('DROP TABLE chute');
        $this->addSql('CREATE TABLE chute (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matiere_id INTEGER DEFAULT NULL, longueur INTEGER NOT NULL, largeur INTEGER NOT NULL, quantite INTEGER NOT NULL, used BOOLEAN DEFAULT NULL, CONSTRAINT FK_C293A6F2F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO chute (id, matiere_id, longueur, largeur, quantite) SELECT id, matiere_id, longueur, largeur, quantite FROM __temp__chute');
        $this->addSql('DROP TABLE __temp__chute');
        $this->addSql('CREATE INDEX IDX_C293A6F2F46CD258 ON chute (matiere_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_C293A6F2F46CD258');
        $this->addSql('CREATE TEMPORARY TABLE __temp__chute AS SELECT id, matiere_id, longueur, largeur, quantite FROM chute');
        $this->addSql('DROP TABLE chute');
        $this->addSql('CREATE TABLE chute (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matiere_id INTEGER DEFAULT NULL, longueur INTEGER NOT NULL, largeur INTEGER NOT NULL, quantite INTEGER NOT NULL)');
        $this->addSql('INSERT INTO chute (id, matiere_id, longueur, largeur, quantite) SELECT id, matiere_id, longueur, largeur, quantite FROM __temp__chute');
        $this->addSql('DROP TABLE __temp__chute');
        $this->addSql('CREATE INDEX IDX_C293A6F2F46CD258 ON chute (matiere_id)');
    }
}
