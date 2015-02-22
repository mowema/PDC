<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130528054136 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE noticias (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, descripcion LONGTEXT NOT NULL, descripcion_larga LONGTEXT NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_modificado DATETIME NOT NULL, estado INT NOT NULL, id_usuario_c INT NOT NULL, id_usuario_m INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, usuario VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL, id_rol INT NOT NULL, organismo VARCHAR(255) NOT NULL, fecha_creacion DATETIME NOT NULL, estado INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("DROP TABLE noticias");
        $this->addSql("DROP TABLE usuarios");
    }
}
