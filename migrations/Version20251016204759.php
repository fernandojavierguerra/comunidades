<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251016204759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE localidad (id SERIAL NOT NULL, provincia_id INT NOT NULL, comunidad_id INT NOT NULL, localidad VARCHAR(80) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_4F68E0104E7121AF ON localidad (provincia_id)');
        $this->addSql('CREATE INDEX IDX_4F68E010B824C74B ON localidad (comunidad_id)');
        $this->addSql('CREATE TABLE provincia (id SERIAL NOT NULL, comunidad_id INT NOT NULL, provincia VARCHAR(80) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D39AF213B824C74B ON provincia (comunidad_id)');
        $this->addSql('ALTER TABLE localidad ADD CONSTRAINT FK_4F68E0104E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE localidad ADD CONSTRAINT FK_4F68E010B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE provincia ADD CONSTRAINT FK_D39AF213B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE localidad DROP CONSTRAINT FK_4F68E0104E7121AF');
        $this->addSql('ALTER TABLE localidad DROP CONSTRAINT FK_4F68E010B824C74B');
        $this->addSql('ALTER TABLE provincia DROP CONSTRAINT FK_D39AF213B824C74B');
        $this->addSql('DROP TABLE localidad');
        $this->addSql('DROP TABLE provincia');
    }
}
