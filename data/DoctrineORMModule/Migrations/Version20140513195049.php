<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140513195049 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE tbl_enlaces (id INT AUTO_INCREMENT NOT NULL, id_organismos INT DEFAULT NULL, created_id INT DEFAULT NULL, modified_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL, created_date DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, modified_date DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, state VARCHAR(255) NOT NULL, INDEX IDX_69001A55FB66C905 (id_organismos), INDEX IDX_69001A555EE01E44 (created_id), INDEX IDX_69001A55A50BFD10 (modified_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE tbl_enlaces ADD CONSTRAINT FK_69001A55FB66C905 FOREIGN KEY (id_organismos) REFERENCES tbl_organismos (id)");
        $this->addSql("ALTER TABLE tbl_enlaces ADD CONSTRAINT FK_69001A555EE01E44 FOREIGN KEY (created_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_enlaces ADD CONSTRAINT FK_69001A55A50BFD10 FOREIGN KEY (modified_id) REFERENCES users (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("DROP TABLE tbl_enlaces");
    }
}
