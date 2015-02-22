<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150110223011 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE app_registro_produccion (id INT AUTO_INCREMENT NOT NULL, tipo INT DEFAULT 1 NOT NULL, nombre VARCHAR(255) DEFAULT NULL, frecuencia LONGTEXT DEFAULT NULL, cpostal LONGTEXT DEFAULT NULL, estado INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE sip_adjuntos (id INT AUTO_INCREMENT NOT NULL, solicitud INT DEFAULT NULL, caso INT DEFAULT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, titulo VARCHAR(255) DEFAULT NULL, archivo VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_B7AAEB96D27CC0 (solicitud), INDEX IDX_B7AAEB98DD701A (caso), INDEX IDX_B7AAEB1C23F534 (usr_crea_id), INDEX IDX_B7AAEBB809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE sip_casos (id INT AUTO_INCREMENT NOT NULL, solicitud INT DEFAULT NULL, identificador INT DEFAULT NULL, sector INT DEFAULT NULL, firmante INT DEFAULT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, pregunta LONGTEXT DEFAULT NULL, rubro VARCHAR(255) DEFAULT NULL, itinerario VARCHAR(255) DEFAULT NULL, posderivacion LONGTEXT DEFAULT NULL, prorroga VARCHAR(255) DEFAULT NULL, respuesta LONGTEXT DEFAULT NULL, condirespuesta VARCHAR(255) DEFAULT NULL, fecharespuesta DATETIME DEFAULT NULL, dias INT DEFAULT NULL, file VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_D1E5263B96D27CC0 (solicitud), UNIQUE INDEX UNIQ_D1E5263BA8255881 (identificador), INDEX IDX_D1E5263B4BA3D9E8 (sector), INDEX IDX_D1E5263BFD983F3C (firmante), INDEX IDX_D1E5263B1C23F534 (usr_crea_id), INDEX IDX_D1E5263BB809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_feriados (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, concepto VARCHAR(255) DEFAULT NULL, fecha DATETIME DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_C8FEEEB81C23F534 (usr_crea_id), INDEX IDX_C8FEEEB8B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_formaspedido (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_6ABAF9471C23F534 (usr_crea_id), INDEX IDX_6ABAF947B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_identificador (id INT AUTO_INCREMENT NOT NULL, sigla VARCHAR(255) NOT NULL, numero INT NOT NULL, anio INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_nivelestudio (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_27FCEAC51C23F534 (usr_crea_id), INDEX IDX_27FCEAC5B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_organismos (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, parent_id INT DEFAULT NULL, sigla VARCHAR(255) DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_37AF03431C23F534 (usr_crea_id), INDEX IDX_37AF0343B809E73 (usr_modi_id), INDEX IDX_37AF0343727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_paises (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(255) DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_perfil (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_1BC31FF81C23F534 (usr_crea_id), INDEX IDX_1BC31FF8B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_profesion (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_3935C2991C23F534 (usr_crea_id), INDEX IDX_3935C299B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_provincias (id INT AUTO_INCREMENT NOT NULL, pais INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, INDEX IDX_F6205EB67E5D2EFF (pais), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_puntosingreso (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_1D0912521C23F534 (usr_crea_id), INDEX IDX_1D091252B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_rubros (id INT AUTO_INCREMENT NOT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_A68FDF311C23F534 (usr_crea_id), INDEX IDX_A68FDF31B809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_solicitantes (id INT AUTO_INCREMENT NOT NULL, provincia INT DEFAULT NULL, pais INT DEFAULT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, perfil VARCHAR(255) DEFAULT NULL, perfilotro VARCHAR(255) DEFAULT NULL, razonsocial VARCHAR(255) DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, tipodocumento VARCHAR(255) DEFAULT NULL, numerodocumento VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, mail VARCHAR(255) DEFAULT NULL, calle_numero VARCHAR(255) DEFAULT NULL, ciudad VARCHAR(255) DEFAULT NULL, codigo_postal VARCHAR(255) DEFAULT NULL, sexo VARCHAR(255) DEFAULT NULL, edad VARCHAR(255) DEFAULT NULL, profesion VARCHAR(255) DEFAULT NULL, estudios VARCHAR(255) DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, state INT DEFAULT NULL, INDEX IDX_3491E9ED39AF213 (provincia), INDEX IDX_3491E9E7E5D2EFF (pais), INDEX IDX_3491E9E1C23F534 (usr_crea_id), INDEX IDX_3491E9EB809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE sip_solicitudes (id INT AUTO_INCREMENT NOT NULL, organismo INT DEFAULT NULL, formapedido INT DEFAULT NULL, puntoingreso INT DEFAULT NULL, solicitante INT DEFAULT NULL, usr_crea_id INT DEFAULT NULL, usr_modi_id INT DEFAULT NULL, expediente VARCHAR(255) DEFAULT NULL, estado VARCHAR(255) DEFAULT NULL, file VARCHAR(255) DEFAULT NULL, fechaenorganismo DATETIME DEFAULT NULL, fechaenenlace DATETIME DEFAULT NULL, fecha_crea DATETIME DEFAULT NULL, fecha_modi DATETIME DEFAULT NULL, INDEX IDX_7FF31A5E3DDAAC2D (organismo), INDEX IDX_7FF31A5E3E5E1C6F (formapedido), INDEX IDX_7FF31A5EEAB75646 (puntoingreso), INDEX IDX_7FF31A5E77F7024F (solicitante), INDEX IDX_7FF31A5E1C23F534 (usr_crea_id), INDEX IDX_7FF31A5EB809E73 (usr_modi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE sip_adjuntos ADD CONSTRAINT FK_B7AAEB96D27CC0 FOREIGN KEY (solicitud) REFERENCES sip_solicitudes (id)");
        $this->addSql("ALTER TABLE sip_adjuntos ADD CONSTRAINT FK_B7AAEB98DD701A FOREIGN KEY (caso) REFERENCES sip_casos (id)");
        $this->addSql("ALTER TABLE sip_adjuntos ADD CONSTRAINT FK_B7AAEB1C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE sip_adjuntos ADD CONSTRAINT FK_B7AAEBB809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE sip_casos ADD CONSTRAINT FK_D1E5263B96D27CC0 FOREIGN KEY (solicitud) REFERENCES sip_solicitudes (id)");
        $this->addSql("ALTER TABLE sip_casos ADD CONSTRAINT FK_D1E5263BA8255881 FOREIGN KEY (identificador) REFERENCES tbl_identificador (id)");
        $this->addSql("ALTER TABLE sip_casos ADD CONSTRAINT FK_D1E5263B4BA3D9E8 FOREIGN KEY (sector) REFERENCES tbl_organismos (id)");
        $this->addSql("ALTER TABLE sip_casos ADD CONSTRAINT FK_D1E5263BFD983F3C FOREIGN KEY (firmante) REFERENCES tbl_organismos (id)");
        $this->addSql("ALTER TABLE sip_casos ADD CONSTRAINT FK_D1E5263B1C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE sip_casos ADD CONSTRAINT FK_D1E5263BB809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_feriados ADD CONSTRAINT FK_C8FEEEB81C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_feriados ADD CONSTRAINT FK_C8FEEEB8B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_formaspedido ADD CONSTRAINT FK_6ABAF9471C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_formaspedido ADD CONSTRAINT FK_6ABAF947B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_nivelestudio ADD CONSTRAINT FK_27FCEAC51C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_nivelestudio ADD CONSTRAINT FK_27FCEAC5B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_organismos ADD CONSTRAINT FK_37AF03431C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_organismos ADD CONSTRAINT FK_37AF0343B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_organismos ADD CONSTRAINT FK_37AF0343727ACA70 FOREIGN KEY (parent_id) REFERENCES tbl_organismos (id)");
        $this->addSql("ALTER TABLE tbl_perfil ADD CONSTRAINT FK_1BC31FF81C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_perfil ADD CONSTRAINT FK_1BC31FF8B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_profesion ADD CONSTRAINT FK_3935C2991C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_profesion ADD CONSTRAINT FK_3935C299B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_provincias ADD CONSTRAINT FK_F6205EB67E5D2EFF FOREIGN KEY (pais) REFERENCES tbl_paises (id)");
        $this->addSql("ALTER TABLE tbl_puntosingreso ADD CONSTRAINT FK_1D0912521C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_puntosingreso ADD CONSTRAINT FK_1D091252B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_rubros ADD CONSTRAINT FK_A68FDF311C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_rubros ADD CONSTRAINT FK_A68FDF31B809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_solicitantes ADD CONSTRAINT FK_3491E9ED39AF213 FOREIGN KEY (provincia) REFERENCES tbl_provincias (id)");
        $this->addSql("ALTER TABLE tbl_solicitantes ADD CONSTRAINT FK_3491E9E7E5D2EFF FOREIGN KEY (pais) REFERENCES tbl_paises (id)");
        $this->addSql("ALTER TABLE tbl_solicitantes ADD CONSTRAINT FK_3491E9E1C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE tbl_solicitantes ADD CONSTRAINT FK_3491E9EB809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE sip_solicitudes ADD CONSTRAINT FK_7FF31A5E3DDAAC2D FOREIGN KEY (organismo) REFERENCES tbl_organismos (id)");
        $this->addSql("ALTER TABLE sip_solicitudes ADD CONSTRAINT FK_7FF31A5E3E5E1C6F FOREIGN KEY (formapedido) REFERENCES tbl_formaspedido (id)");
        $this->addSql("ALTER TABLE sip_solicitudes ADD CONSTRAINT FK_7FF31A5EEAB75646 FOREIGN KEY (puntoingreso) REFERENCES tbl_puntosingreso (id)");
        $this->addSql("ALTER TABLE sip_solicitudes ADD CONSTRAINT FK_7FF31A5E77F7024F FOREIGN KEY (solicitante) REFERENCES tbl_solicitantes (id)");
        $this->addSql("ALTER TABLE sip_solicitudes ADD CONSTRAINT FK_7FF31A5E1C23F534 FOREIGN KEY (usr_crea_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE sip_solicitudes ADD CONSTRAINT FK_7FF31A5EB809E73 FOREIGN KEY (usr_modi_id) REFERENCES users (id)");
        $this->addSql("ALTER TABLE app_registro ADD tipoSinPJ LONGTEXT DEFAULT NULL, ADD produccionGrafItem1 LONGTEXT DEFAULT NULL, CHANGE tipoe tipoConPJ LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE users ADD organismo_id INT DEFAULT NULL, DROP loged");
        $this->addSql("ALTER TABLE users ADD CONSTRAINT FK_1483A5E93260D891 FOREIGN KEY (organismo_id) REFERENCES tbl_organismos (id)");
        $this->addSql("CREATE INDEX IDX_1483A5E93260D891 ON users (organismo_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE sip_adjuntos DROP FOREIGN KEY FK_B7AAEB98DD701A");
        $this->addSql("ALTER TABLE sip_solicitudes DROP FOREIGN KEY FK_7FF31A5E3E5E1C6F");
        $this->addSql("ALTER TABLE sip_casos DROP FOREIGN KEY FK_D1E5263BA8255881");
        $this->addSql("ALTER TABLE users DROP FOREIGN KEY FK_1483A5E93260D891");
        $this->addSql("ALTER TABLE sip_casos DROP FOREIGN KEY FK_D1E5263B4BA3D9E8");
        $this->addSql("ALTER TABLE sip_casos DROP FOREIGN KEY FK_D1E5263BFD983F3C");
        $this->addSql("ALTER TABLE tbl_organismos DROP FOREIGN KEY FK_37AF0343727ACA70");
        $this->addSql("ALTER TABLE sip_solicitudes DROP FOREIGN KEY FK_7FF31A5E3DDAAC2D");
        $this->addSql("ALTER TABLE tbl_provincias DROP FOREIGN KEY FK_F6205EB67E5D2EFF");
        $this->addSql("ALTER TABLE tbl_solicitantes DROP FOREIGN KEY FK_3491E9E7E5D2EFF");
        $this->addSql("ALTER TABLE tbl_solicitantes DROP FOREIGN KEY FK_3491E9ED39AF213");
        $this->addSql("ALTER TABLE sip_solicitudes DROP FOREIGN KEY FK_7FF31A5EEAB75646");
        $this->addSql("ALTER TABLE sip_solicitudes DROP FOREIGN KEY FK_7FF31A5E77F7024F");
        $this->addSql("ALTER TABLE sip_adjuntos DROP FOREIGN KEY FK_B7AAEB96D27CC0");
        $this->addSql("ALTER TABLE sip_casos DROP FOREIGN KEY FK_D1E5263B96D27CC0");
        $this->addSql("DROP TABLE app_registro_produccion");
        $this->addSql("DROP TABLE sip_adjuntos");
        $this->addSql("DROP TABLE sip_casos");
        $this->addSql("DROP TABLE tbl_feriados");
        $this->addSql("DROP TABLE tbl_formaspedido");
        $this->addSql("DROP TABLE tbl_identificador");
        $this->addSql("DROP TABLE tbl_nivelestudio");
        $this->addSql("DROP TABLE tbl_organismos");
        $this->addSql("DROP TABLE tbl_paises");
        $this->addSql("DROP TABLE tbl_perfil");
        $this->addSql("DROP TABLE tbl_profesion");
        $this->addSql("DROP TABLE tbl_provincias");
        $this->addSql("DROP TABLE tbl_puntosingreso");
        $this->addSql("DROP TABLE tbl_rubros");
        $this->addSql("DROP TABLE tbl_solicitantes");
        $this->addSql("DROP TABLE sip_solicitudes");
        $this->addSql("ALTER TABLE app_registro ADD tipoE LONGTEXT DEFAULT NULL, DROP tipoConPJ, DROP tipoSinPJ, DROP produccionGrafItem1");
        $this->addSql("DROP INDEX IDX_1483A5E93260D891 ON users");
        $this->addSql("ALTER TABLE users ADD loged INT DEFAULT 0, DROP organismo_id");
    }
}
