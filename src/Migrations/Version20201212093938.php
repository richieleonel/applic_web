<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201212093938 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE filiere_cours (filiere_id INT NOT NULL, cours_id INT NOT NULL, INDEX IDX_849ACE3A180AA129 (filiere_id), INDEX IDX_849ACE3A7ECF78B0 (cours_id), PRIMARY KEY(filiere_id, cours_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE filiere_cours ADD CONSTRAINT FK_849ACE3A180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE filiere_cours ADD CONSTRAINT FK_849ACE3A7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE utilisateurs_cours');
        $this->addSql('ALTER TABLE commentaires CHANGE cours_id cours_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE modified_at modified_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C180AA129');
        $this->addSql('DROP INDEX IDX_FDCA8C9C180AA129 ON cours');
        $this->addSql('ALTER TABLE cours DROP filiere_id, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE modified_at modified_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE fichier ADD path VARCHAR(255) NOT NULL, CHANGE cours_id cours_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE modified_at modified_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateurs CHANGE roles roles JSON NOT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE utilisateurs_cours (utilisateurs_id INT NOT NULL, cours_id INT NOT NULL, INDEX IDX_1E4209631E969C5 (utilisateurs_id), INDEX IDX_1E4209637ECF78B0 (cours_id), PRIMARY KEY(utilisateurs_id, cours_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE utilisateurs_cours ADD CONSTRAINT FK_1E4209631E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_cours ADD CONSTRAINT FK_1E4209637ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE filiere_cours');
        $this->addSql('ALTER TABLE commentaires CHANGE cours_id cours_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE modified_at modified_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE cours ADD filiere_id INT NOT NULL, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE modified_at modified_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C180AA129 ON cours (filiere_id)');
        $this->addSql('ALTER TABLE fichier DROP path, CHANGE cours_id cours_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE modified_at modified_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE utilisateurs CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
