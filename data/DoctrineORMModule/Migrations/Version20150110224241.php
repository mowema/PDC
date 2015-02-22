<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150110224241 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE app_registro_produccion (id INT AUTO_INCREMENT NOT NULL, tipo INT DEFAULT 1 NOT NULL, nombre VARCHAR(255) DEFAULT NULL, frecuencia LONGTEXT DEFAULT NULL, cpostal LONGTEXT DEFAULT NULL, estado INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_organismos (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, parent_id INT DEFAULT NULL, sigla VARCHAR(255) DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_37AF03431C23F534 (usr_crea_id), INDEX IDX_37AF0343B809E73 (usr_modi_id), INDEX IDX_37AF0343727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE tbl_organismos ADD CONSTRAINT FK_37AF03431C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_organismos ADD CONSTRAINT FK_37AF0343B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_organismos ADD CONSTRAINT FK_37AF0343727ACA70 FOREIGN KEY (parent_id) REFERENCES tbl_organismos (id)");
        $this->addSql("ALTER TABLE users ADD organismo_id INT DEFAULT NULL, DROP loged");
        $this->addSql("ALTER TABLE users ADD CONSTRAINT FK_1483A5E93260D891 FOREIGN KEY (organismo_id) REFERENCES tbl_organismos (id)");
        $this->addSql("CREATE INDEX IDX_1483A5E93260D891 ON users (organismo_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE users DROP FOREIGN KEY FK_1483A5E93260D891");
        $this->addSql("ALTER TABLE tbl_organismos DROP FOREIGN KEY FK_37AF0343727ACA70");
        $this->addSql("DROP TABLE app_registro_produccion");
        $this->addSql("DROP TABLE tbl_organismos");
        $this->addSql("DROP INDEX IDX_1483A5E93260D891 ON users");
        $this->addSql("ALTER TABLE users ADD loged INT DEFAULT 0, DROP organismo_id");
    }
}
