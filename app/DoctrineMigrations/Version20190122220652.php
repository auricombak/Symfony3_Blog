<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190122220652 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__blog_article AS SELECT id, title, author, published, picture, content FROM blog_article');
        $this->addSql('DROP TABLE blog_article');
        $this->addSql('CREATE TABLE blog_article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, published DATETIME NOT NULL, picture VARCHAR(255) NOT NULL COLLATE BINARY, content CLOB NOT NULL COLLATE BINARY, author VARCHAR(255) DEFAULT \'Lapin anonyme\' NOT NULL)');
        $this->addSql('INSERT INTO blog_article (id, title, author, published, picture, content) SELECT id, title, author, published, picture, content FROM __temp__blog_article');
        $this->addSql('DROP TABLE __temp__blog_article');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__blog_article AS SELECT id, title, author, published, picture, content FROM blog_article');
        $this->addSql('DROP TABLE blog_article');
        $this->addSql('CREATE TABLE blog_article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, published DATETIME NOT NULL, picture VARCHAR(255) NOT NULL, content CLOB NOT NULL, author VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO blog_article (id, title, author, published, picture, content) SELECT id, title, author, published, picture, content FROM __temp__blog_article');
        $this->addSql('DROP TABLE __temp__blog_article');
    }
}
