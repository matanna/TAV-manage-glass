<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210413122222 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chute (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matiere_id INTEGER DEFAULT NULL, longueur INTEGER NOT NULL, largeur INTEGER NOT NULL, quantite INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_C293A6F2F46CD258 ON chute (matiere_id)');
        $this->addSql('CREATE TABLE matiere (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE chute');
        $this->addSql('DROP TABLE matiere');
    }
}
