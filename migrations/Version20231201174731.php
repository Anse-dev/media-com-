<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231201174731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrateur (id INT NOT NULL, privilege VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE albumn (id INT AUTO_INCREMENT NOT NULL, artist_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, songs VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, created_date DATE NOT NULL, INDEX IDX_97E42B96B7970CF8 (artist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artist (id INT NOT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE musique (id INT AUTO_INCREMENT NOT NULL, artist_id INT DEFAULT NULL, albumn_id INT DEFAULT NULL, created_date DATE NOT NULL, titre VARCHAR(255) NOT NULL, number_of_download INT DEFAULT NULL, INDEX IDX_EE1D56BCB7970CF8 (artist_id), INDEX IDX_EE1D56BC4EC8DAED (albumn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, discr VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE administrateur ADD CONSTRAINT FK_32EB52E8BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE albumn ADD CONSTRAINT FK_97E42B96B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_1599687BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE musique ADD CONSTRAINT FK_EE1D56BCB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('ALTER TABLE musique ADD CONSTRAINT FK_EE1D56BC4EC8DAED FOREIGN KEY (albumn_id) REFERENCES albumn (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE administrateur DROP FOREIGN KEY FK_32EB52E8BF396750');
        $this->addSql('ALTER TABLE albumn DROP FOREIGN KEY FK_97E42B96B7970CF8');
        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_1599687BF396750');
        $this->addSql('ALTER TABLE musique DROP FOREIGN KEY FK_EE1D56BCB7970CF8');
        $this->addSql('ALTER TABLE musique DROP FOREIGN KEY FK_EE1D56BC4EC8DAED');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE albumn');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE musique');
        $this->addSql('DROP TABLE user');
    }
}
