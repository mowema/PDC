<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140506203512 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE app_boletines (id INT AUTO_INCREMENT NOT NULL, usuario_c_id INT DEFAULT NULL, usuario_m_id INT DEFAULT NULL, grupo_id INT DEFAULT NULL, plantilla_id INT DEFAULT NULL, titulo VARCHAR(255) NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_modificado DATETIME NOT NULL, estado INT NOT NULL, INDEX IDX_F8A44F1EF8ADE1C3 (usuario_c_id), INDEX IDX_F8A44F1E187296F0 (usuario_m_id), INDEX IDX_F8A44F1E9C833003 (grupo_id), INDEX IDX_F8A44F1EA08F3969 (plantilla_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, created_id INT DEFAULT NULL, modified_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, alias VARCHAR(255) NOT NULL, path VARCHAR(255) NOT NULL, extension VARCHAR(255) NOT NULL, created_date DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, modified_date DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, state VARCHAR(255) NOT NULL, INDEX IDX_64C19C1727ACA70 (parent_id), INDEX IDX_64C19C15EE01E44 (created_id), INDEX IDX_64C19C1A50BFD10 (modified_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE app_grupo_trabajo (id INT AUTO_INCREMENT NOT NULL, usuario_c_id INT DEFAULT NULL, usuario_m_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_modificado DATETIME NOT NULL, estado INT NOT NULL, INDEX IDX_38A20B01F8ADE1C3 (usuario_c_id), INDEX IDX_38A20B01187296F0 (usuario_m_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE app_imagenes (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) DEFAULT NULL, ruta_orginal VARCHAR(255) DEFAULT NULL, ruta_crop VARCHAR(255) DEFAULT NULL, fecha_creacion DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE app_noticias (id INT AUTO_INCREMENT NOT NULL, imagen_id INT DEFAULT NULL, usuario_c_id INT DEFAULT NULL, usuario_m_id INT DEFAULT NULL, grupo_id INT DEFAULT NULL, tipo INT DEFAULT 1 NOT NULL, titulo VARCHAR(255) DEFAULT NULL, cuerpo LONGTEXT DEFAULT NULL, fecha_creacion DATETIME NOT NULL, fecha_modificado DATETIME NOT NULL, estado INT NOT NULL, INDEX IDX_AD3B988763C8AA7 (imagen_id), INDEX IDX_AD3B988F8ADE1C3 (usuario_c_id), INDEX IDX_AD3B988187296F0 (usuario_m_id), INDEX IDX_AD3B9889C833003 (grupo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE app_noticia_boletin (id INT AUTO_INCREMENT NOT NULL, noticia_id INT DEFAULT NULL, boletin_id INT DEFAULT NULL, posicion INT NOT NULL, INDEX IDX_EC1D8AA199926010 (noticia_id), INDEX IDX_EC1D8AA1ADE0E201 (boletin_id), UNIQUE INDEX noticia_boletin_idx (noticia_id, boletin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE app_plantilla (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, estado INT NOT NULL, ruta VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE app_usuario_grupot (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, grupo_id INT DEFAULT NULL, INDEX IDX_BFD4A6AADB38439E (usuario_id), INDEX IDX_BFD4A6AA9C833003 (grupo_id), UNIQUE INDEX noticia_boletin_idx (usuario_id, grupo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE app_boletines ADD CONSTRAINT FK_F8A44F1EF8ADE1C3 FOREIGN KEY (usuario_c_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_boletines ADD CONSTRAINT FK_F8A44F1E187296F0 FOREIGN KEY (usuario_m_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_boletines ADD CONSTRAINT FK_F8A44F1E9C833003 FOREIGN KEY (grupo_id) REFERENCES app_grupo_trabajo (id)");
        $this->addSql("ALTER TABLE app_boletines ADD CONSTRAINT FK_F8A44F1EA08F3969 FOREIGN KEY (plantilla_id) REFERENCES app_plantilla (id)");
        $this->addSql("ALTER TABLE category ADD CONSTRAINT FK_64C19C1727ACA70 FOREIGN KEY (parent_id) REFERENCES category (id)");
        $this->addSql("ALTER TABLE category ADD CONSTRAINT FK_64C19C15EE01E44 FOREIGN KEY (created_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE category ADD CONSTRAINT FK_64C19C1A50BFD10 FOREIGN KEY (modified_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_grupo_trabajo ADD CONSTRAINT FK_38A20B01F8ADE1C3 FOREIGN KEY (usuario_c_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_grupo_trabajo ADD CONSTRAINT FK_38A20B01187296F0 FOREIGN KEY (usuario_m_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_noticias ADD CONSTRAINT FK_AD3B988763C8AA7 FOREIGN KEY (imagen_id) REFERENCES app_imagenes (id)");
        $this->addSql("ALTER TABLE app_noticias ADD CONSTRAINT FK_AD3B988F8ADE1C3 FOREIGN KEY (usuario_c_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_noticias ADD CONSTRAINT FK_AD3B988187296F0 FOREIGN KEY (usuario_m_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_noticias ADD CONSTRAINT FK_AD3B9889C833003 FOREIGN KEY (grupo_id) REFERENCES app_grupo_trabajo (id)");
        $this->addSql("ALTER TABLE app_noticia_boletin ADD CONSTRAINT FK_EC1D8AA199926010 FOREIGN KEY (noticia_id) REFERENCES app_noticias (id)");
        $this->addSql("ALTER TABLE app_noticia_boletin ADD CONSTRAINT FK_EC1D8AA1ADE0E201 FOREIGN KEY (boletin_id) REFERENCES app_boletines (id)");
        $this->addSql("ALTER TABLE app_usuario_grupot ADD CONSTRAINT FK_BFD4A6AADB38439E FOREIGN KEY (usuario_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_usuario_grupot ADD CONSTRAINT FK_BFD4A6AA9C833003 FOREIGN KEY (grupo_id) REFERENCES app_grupo_trabajo (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE app_noticia_boletin DROP FOREIGN KEY FK_EC1D8AA1ADE0E201");
        $this->addSql("ALTER TABLE category DROP FOREIGN KEY FK_64C19C1727ACA70");
        $this->addSql("ALTER TABLE app_boletines DROP FOREIGN KEY FK_F8A44F1E9C833003");
        $this->addSql("ALTER TABLE app_noticias DROP FOREIGN KEY FK_AD3B9889C833003");
        $this->addSql("ALTER TABLE app_usuario_grupot DROP FOREIGN KEY FK_BFD4A6AA9C833003");
        $this->addSql("ALTER TABLE app_noticias DROP FOREIGN KEY FK_AD3B988763C8AA7");
        $this->addSql("ALTER TABLE app_noticia_boletin DROP FOREIGN KEY FK_EC1D8AA199926010");
        $this->addSql("ALTER TABLE app_boletines DROP FOREIGN KEY FK_F8A44F1EA08F3969");
        $this->addSql("DROP TABLE app_boletines");
        $this->addSql("DROP TABLE category");
        $this->addSql("DROP TABLE app_grupo_trabajo");
        $this->addSql("DROP TABLE app_imagenes");
        $this->addSql("DROP TABLE app_noticias");
        $this->addSql("DROP TABLE app_noticia_boletin");
        $this->addSql("DROP TABLE app_plantilla");
        $this->addSql("DROP TABLE app_usuario_grupot");
    }
}
