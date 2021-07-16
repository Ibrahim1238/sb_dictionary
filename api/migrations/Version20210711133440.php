<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210711133440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sentence (id INT AUTO_INCREMENT NOT NULL, related_word_id INT DEFAULT NULL, schw VARCHAR(255) NOT NULL, de VARCHAR(255) NOT NULL, en VARCHAR(255) NOT NULL, INDEX IDX_9D664ED5DC4E8928 (related_word_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE word (id INT AUTO_INCREMENT NOT NULL, schw_text VARCHAR(255) NOT NULL, pronounciation VARCHAR(255) NOT NULL, de_text VARCHAR(255) NOT NULL, en_text VARCHAR(255) NOT NULL, published TINYINT(1) DEFAULT \'0\' NOT NULL, publish_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sentence ADD CONSTRAINT FK_9D664ED5DC4E8928 FOREIGN KEY (related_word_id) REFERENCES word (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sentence DROP FOREIGN KEY FK_9D664ED5DC4E8928');
        $this->addSql('DROP TABLE sentence');
        $this->addSql('DROP TABLE word');
    }
}
