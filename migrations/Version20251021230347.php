<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251021230347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE barrio (id SERIAL NOT NULL, comunidad_id INT NOT NULL, barrio VARCHAR(80) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_AFDD2901B824C74B ON barrio (comunidad_id)');
        $this->addSql('CREATE TABLE comunidad (id SERIAL NOT NULL, comunidad VARCHAR(255) NOT NULL, direccion VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE grupo (id SERIAL NOT NULL, comunidad_id INT NOT NULL, grupo VARCHAR(80) NOT NULL, periodo INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8C0E9BD3B824C74B ON grupo (comunidad_id)');
        $this->addSql('CREATE TABLE localidad (id SERIAL NOT NULL, provincia_id INT NOT NULL, comunidad_id INT NOT NULL, localidad VARCHAR(80) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_4F68E0104E7121AF ON localidad (provincia_id)');
        $this->addSql('CREATE INDEX IDX_4F68E010B824C74B ON localidad (comunidad_id)');
        $this->addSql('CREATE TABLE persona (id SERIAL NOT NULL, tipo_documento_id INT NOT NULL, comunidad_id INT NOT NULL, barrio_id INT DEFAULT NULL, nombres VARCHAR(80) NOT NULL, apellido VARCHAR(80) NOT NULL, nro_documento VARCHAR(20) NOT NULL, fecha_nacimiento DATE DEFAULT NULL, direccion VARCHAR(255) DEFAULT NULL, fecha_ingreso DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_51E5B69BF6939175 ON persona (tipo_documento_id)');
        $this->addSql('CREATE INDEX IDX_51E5B69BB824C74B ON persona (comunidad_id)');
        $this->addSql('CREATE INDEX IDX_51E5B69BDBA79E2A ON persona (barrio_id)');
        $this->addSql('CREATE TABLE provincia (id SERIAL NOT NULL, comunidad_id INT NOT NULL, provincia VARCHAR(80) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D39AF213B824C74B ON provincia (comunidad_id)');
        $this->addSql('CREATE TABLE responsabilidad (id SERIAL NOT NULL, comunidad_id INT NOT NULL, responsabilidad VARCHAR(40) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DBB7ACE8B824C74B ON responsabilidad (comunidad_id)');
        $this->addSql('CREATE TABLE tipo_documento (id SERIAL NOT NULL, comunidad_id INT NOT NULL, tipo_documento VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_54DF9189B824C74B ON tipo_documento (comunidad_id)');
        $this->addSql('CREATE TABLE usuario (id SERIAL NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, apellido VARCHAR(255) DEFAULT NULL, nombres VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON usuario (email)');
        $this->addSql('ALTER TABLE barrio ADD CONSTRAINT FK_AFDD2901B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE grupo ADD CONSTRAINT FK_8C0E9BD3B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE localidad ADD CONSTRAINT FK_4F68E0104E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE localidad ADD CONSTRAINT FK_4F68E010B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE persona ADD CONSTRAINT FK_51E5B69BF6939175 FOREIGN KEY (tipo_documento_id) REFERENCES tipo_documento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE persona ADD CONSTRAINT FK_51E5B69BB824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE persona ADD CONSTRAINT FK_51E5B69BDBA79E2A FOREIGN KEY (barrio_id) REFERENCES barrio (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE provincia ADD CONSTRAINT FK_D39AF213B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE responsabilidad ADD CONSTRAINT FK_DBB7ACE8B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tipo_documento ADD CONSTRAINT FK_54DF9189B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE barrio DROP CONSTRAINT FK_AFDD2901B824C74B');
        $this->addSql('ALTER TABLE grupo DROP CONSTRAINT FK_8C0E9BD3B824C74B');
        $this->addSql('ALTER TABLE localidad DROP CONSTRAINT FK_4F68E0104E7121AF');
        $this->addSql('ALTER TABLE localidad DROP CONSTRAINT FK_4F68E010B824C74B');
        $this->addSql('ALTER TABLE persona DROP CONSTRAINT FK_51E5B69BF6939175');
        $this->addSql('ALTER TABLE persona DROP CONSTRAINT FK_51E5B69BB824C74B');
        $this->addSql('ALTER TABLE persona DROP CONSTRAINT FK_51E5B69BDBA79E2A');
        $this->addSql('ALTER TABLE provincia DROP CONSTRAINT FK_D39AF213B824C74B');
        $this->addSql('ALTER TABLE responsabilidad DROP CONSTRAINT FK_DBB7ACE8B824C74B');
        $this->addSql('ALTER TABLE tipo_documento DROP CONSTRAINT FK_54DF9189B824C74B');
        $this->addSql('DROP TABLE barrio');
        $this->addSql('DROP TABLE comunidad');
        $this->addSql('DROP TABLE grupo');
        $this->addSql('DROP TABLE localidad');
        $this->addSql('DROP TABLE persona');
        $this->addSql('DROP TABLE provincia');
        $this->addSql('DROP TABLE responsabilidad');
        $this->addSql('DROP TABLE tipo_documento');
        $this->addSql('DROP TABLE usuario');
    }
}
