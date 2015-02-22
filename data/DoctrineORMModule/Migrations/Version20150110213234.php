<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150110213234 extends AbstractMigration
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
        $this->addSql("ALTER TABLE app_registro ADD cpostal LONGTEXT DEFAULT NULL, ADD provincia LONGTEXT DEFAULT NULL, ADD localidad LONGTEXT DEFAULT NULL, ADD telefono LONGTEXT DEFAULT NULL, ADD movil LONGTEXT DEFAULT NULL, ADD email LONGTEXT DEFAULT NULL, ADD web LONGTEXT DEFAULT NULL, ADD blog LONGTEXT DEFAULT NULL, ADD facebook LONGTEXT DEFAULT NULL, ADD twitter LONGTEXT DEFAULT NULL, ADD flickr LONGTEXT DEFAULT NULL, ADD vimeo LONGTEXT DEFAULT NULL, ADD youtube LONGTEXT DEFAULT NULL, ADD referente LONGTEXT DEFAULT NULL, ADD referentel LONGTEXT DEFAULT NULL, ADD tienePJ LONGTEXT DEFAULT NULL, ADD npj LONGTEXT DEFAULT NULL, ADD ncuit LONGTEXT DEFAULT NULL, ADD tipoE LONGTEXT DEFAULT NULL, ADD tipoOtro LONGTEXT DEFAULT NULL, ADD creado LONGTEXT DEFAULT NULL, ADD alcance LONGTEXT DEFAULT NULL, ADD perfil LONGTEXT DEFAULT NULL, ADD perfilotro LONGTEXT DEFAULT NULL, ADD cantIntegrantes LONGTEXT DEFAULT NULL, ADD cantMilitantes LONGTEXT DEFAULT NULL, ADD cantProfesionales LONGTEXT DEFAULT NULL, ADD cantOcacionales LONGTEXT DEFAULT NULL, ADD ejeTematico1 LONGTEXT DEFAULT NULL, ADD ejeTematico2 LONGTEXT DEFAULT NULL, ADD ejeTematico3 LONGTEXT DEFAULT NULL, ADD actividadesOtro LONGTEXT DEFAULT NULL, ADD descActividades LONGTEXT DEFAULT NULL, ADD cantParticipantes LONGTEXT DEFAULT NULL, ADD descOrg LONGTEXT DEFAULT NULL, ADD espacioInfo LONGTEXT DEFAULT NULL, ADD espacioInicio LONGTEXT DEFAULT NULL, ADD espacioTipoUso LONGTEXT DEFAULT NULL, ADD espacioTipoCompartido LONGTEXT DEFAULT NULL, ADD espacioMtsCubiertos LONGTEXT DEFAULT NULL, ADD espacioMtsDescubiertos LONGTEXT DEFAULT NULL, ADD sectoresCubiertos LONGTEXT DEFAULT NULL, ADD sectoresDescubiertos LONGTEXT DEFAULT NULL, ADD sectoresOtro LONGTEXT DEFAULT NULL, ADD salaTeatroMts LONGTEXT DEFAULT NULL, ADD salaTeatroButacas LONGTEXT DEFAULT NULL, ADD salaCineMts LONGTEXT DEFAULT NULL, ADD salaCineButacas LONGTEXT DEFAULT NULL, ADD salaRadioMts LONGTEXT DEFAULT NULL, ADD salaRadioEquip LONGTEXT DEFAULT NULL, ADD salaGrabaMts LONGTEXT DEFAULT NULL, ADD salaGrabaEquip LONGTEXT DEFAULT NULL, ADD equipAVOtro LONGTEXT DEFAULT NULL, ADD equipInformaticoOtro LONGTEXT DEFAULT NULL, ADD equipSonidoOtro LONGTEXT DEFAULT NULL, ADD equipEscenOtro LONGTEXT DEFAULT NULL, ADD equipOtroOtro LONGTEXT DEFAULT NULL, ADD accsInternet LONGTEXT DEFAULT NULL, ADD accsTipo LONGTEXT DEFAULT NULL, ADD wifi LONGTEXT DEFAULT NULL, ADD produccionAVOtro LONGTEXT DEFAULT NULL, ADD produccionRadioOtro LONGTEXT DEFAULT NULL, ADD produccionRadioItem1 LONGTEXT DEFAULT NULL, ADD produccionRadioItemFrec1 LONGTEXT DEFAULT NULL, ADD produccionRadioItem2 LONGTEXT DEFAULT NULL, ADD produccionRadioItemFrec2 LONGTEXT DEFAULT NULL, ADD produccionRadioItem3 LONGTEXT DEFAULT NULL, ADD produccionRadioItemFrec3 LONGTEXT DEFAULT NULL, ADD produccionMultimediaOtro LONGTEXT DEFAULT NULL, ADD produccionGraficaOtro LONGTEXT DEFAULT NULL, ADD produccionGrafItemFrec1 LONGTEXT DEFAULT NULL, ADD produccionGrafItem2 LONGTEXT DEFAULT NULL, ADD produccionGrafItemFrec2 LONGTEXT DEFAULT NULL, ADD produccionGrafItem3 LONGTEXT DEFAULT NULL, ADD produccionGrafItemFrec3 LONGTEXT DEFAULT NULL, ADD espectaculosOtro LONGTEXT DEFAULT NULL, ADD muestrasOtro LONGTEXT DEFAULT NULL, ADD talleresArtisticos LONGTEXT DEFAULT NULL, ADD talleresDidacticos LONGTEXT DEFAULT NULL, ADD talleresComunicPopular LONGTEXT DEFAULT NULL, ADD talleresOficio LONGTEXT DEFAULT NULL, ADD talleresOtros LONGTEXT DEFAULT NULL, ADD contexto LONGTEXT DEFAULT NULL, ADD contextoOtro LONGTEXT DEFAULT NULL, ADD comparteOtro LONGTEXT DEFAULT NULL, ADD descComparte LONGTEXT DEFAULT NULL, ADD articulacionGOtro LONGTEXT DEFAULT NULL, ADD descArticulacionG LONGTEXT DEFAULT NULL, ADD articulacionNGOtro LONGTEXT DEFAULT NULL, ADD descArticulacionNG LONGTEXT DEFAULT NULL, ADD nreg LONGTEXT DEFAULT NULL, ADD code LONGTEXT DEFAULT NULL, CHANGE titulo nombre VARCHAR(255) DEFAULT NULL, CHANGE cuerpo direccion LONGTEXT DEFAULT NULL");
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
        $this->addSql("ALTER TABLE app_registro ADD cuerpo LONGTEXT DEFAULT NULL, DROP direccion, DROP cpostal, DROP provincia, DROP localidad, DROP telefono, DROP movil, DROP email, DROP web, DROP blog, DROP facebook, DROP twitter, DROP flickr, DROP vimeo, DROP youtube, DROP referente, DROP referentel, DROP tienePJ, DROP npj, DROP ncuit, DROP tipoE, DROP tipoOtro, DROP creado, DROP alcance, DROP perfil, DROP perfilotro, DROP cantIntegrantes, DROP cantMilitantes, DROP cantProfesionales, DROP cantOcacionales, DROP ejeTematico1, DROP ejeTematico2, DROP ejeTematico3, DROP actividadesOtro, DROP descActividades, DROP cantParticipantes, DROP descOrg, DROP espacioInfo, DROP espacioInicio, DROP espacioTipoUso, DROP espacioTipoCompartido, DROP espacioMtsCubiertos, DROP espacioMtsDescubiertos, DROP sectoresCubiertos, DROP sectoresDescubiertos, DROP sectoresOtro, DROP salaTeatroMts, DROP salaTeatroButacas, DROP salaCineMts, DROP salaCineButacas, DROP salaRadioMts, DROP salaRadioEquip, DROP salaGrabaMts, DROP salaGrabaEquip, DROP equipAVOtro, DROP equipInformaticoOtro, DROP equipSonidoOtro, DROP equipEscenOtro, DROP equipOtroOtro, DROP accsInternet, DROP accsTipo, DROP wifi, DROP produccionAVOtro, DROP produccionRadioOtro, DROP produccionRadioItem1, DROP produccionRadioItemFrec1, DROP produccionRadioItem2, DROP produccionRadioItemFrec2, DROP produccionRadioItem3, DROP produccionRadioItemFrec3, DROP produccionMultimediaOtro, DROP produccionGraficaOtro, DROP produccionGrafItemFrec1, DROP produccionGrafItem2, DROP produccionGrafItemFrec2, DROP produccionGrafItem3, DROP produccionGrafItemFrec3, DROP espectaculosOtro, DROP muestrasOtro, DROP talleresArtisticos, DROP talleresDidacticos, DROP talleresComunicPopular, DROP talleresOficio, DROP talleresOtros, DROP contexto, DROP contextoOtro, DROP comparteOtro, DROP descComparte, DROP articulacionGOtro, DROP descArticulacionG, DROP articulacionNGOtro, DROP descArticulacionNG, DROP nreg, DROP code, CHANGE nombre titulo VARCHAR(255) DEFAULT NULL");
        $this->addSql("DROP INDEX IDX_1483A5E93260D891 ON users");
        $this->addSql("ALTER TABLE users ADD loged INT DEFAULT 0, DROP organismo_id");
    }
}
