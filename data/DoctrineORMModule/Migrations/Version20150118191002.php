<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150118191002 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE app_registro_produccion (id INT AUTO_INCREMENT NOT NULL, tipo INT DEFAULT 1 NOT NULL, nombre VARCHAR(255) DEFAULT NULL, frecuencia LONGTEXT DEFAULT NULL, cpostal LONGTEXT DEFAULT NULL, estado INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE app_registro CHANGE creado creado LONGTEXT DEFAULT NULL, CHANGE cantIntegrantes cantIntegrantes LONGTEXT DEFAULT NULL, CHANGE cantMilitantes cantMilitantes LONGTEXT DEFAULT NULL, CHANGE cantProfesionales cantProfesionales LONGTEXT DEFAULT NULL, CHANGE cantOcacionales cantOcacionales LONGTEXT DEFAULT NULL, CHANGE cantParticipantes cantParticipantes LONGTEXT DEFAULT NULL, CHANGE espacioInicio espacioInicio LONGTEXT DEFAULT NULL, CHANGE espacioMtsCubiertos espacioMtsCubiertos LONGTEXT DEFAULT NULL, CHANGE espacioMtsDescubiertos espacioMtsDescubiertos LONGTEXT DEFAULT NULL, CHANGE sectoresCubiertos sectoresCubiertos LONGTEXT DEFAULT NULL, CHANGE sectoresDescubiertos sectoresDescubiertos LONGTEXT DEFAULT NULL, CHANGE salaTeatroMts salaTeatroMts LONGTEXT DEFAULT NULL, CHANGE salaTeatroButacas salaTeatroButacas LONGTEXT DEFAULT NULL, CHANGE salaCineMts salaCineMts LONGTEXT DEFAULT NULL, CHANGE salaCineButacas salaCineButacas LONGTEXT DEFAULT NULL, CHANGE salaRadioMts salaRadioMts LONGTEXT DEFAULT NULL, CHANGE salaRadioEquip salaRadioEquip LONGTEXT DEFAULT NULL, CHANGE salaGrabaMts salaGrabaMts LONGTEXT DEFAULT NULL, CHANGE salaGrabaEquip salaGrabaEquip LONGTEXT DEFAULT NULL, CHANGE nreg nreg LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE users DROP loged");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("DROP TABLE app_registro_produccion");
        $this->addSql("ALTER TABLE app_registro CHANGE creado creado INT DEFAULT NULL, CHANGE cantIntegrantes cantIntegrantes INT DEFAULT NULL, CHANGE cantMilitantes cantMilitantes INT DEFAULT NULL, CHANGE cantProfesionales cantProfesionales INT DEFAULT NULL, CHANGE cantOcacionales cantOcacionales INT DEFAULT NULL, CHANGE cantParticipantes cantParticipantes INT DEFAULT NULL, CHANGE espacioInicio espacioInicio INT DEFAULT NULL, CHANGE espacioMtsCubiertos espacioMtsCubiertos INT DEFAULT NULL, CHANGE espacioMtsDescubiertos espacioMtsDescubiertos INT DEFAULT NULL, CHANGE sectoresCubiertos sectoresCubiertos INT DEFAULT NULL, CHANGE sectoresDescubiertos sectoresDescubiertos INT DEFAULT NULL, CHANGE salaTeatroMts salaTeatroMts INT DEFAULT NULL, CHANGE salaTeatroButacas salaTeatroButacas INT DEFAULT NULL, CHANGE salaCineMts salaCineMts INT DEFAULT NULL, CHANGE salaCineButacas salaCineButacas INT DEFAULT NULL, CHANGE salaRadioMts salaRadioMts INT DEFAULT NULL, CHANGE salaRadioEquip salaRadioEquip INT DEFAULT NULL, CHANGE salaGrabaMts salaGrabaMts INT DEFAULT NULL, CHANGE salaGrabaEquip salaGrabaEquip INT DEFAULT NULL, CHANGE nreg nreg INT DEFAULT NULL");
        $this->addSql("ALTER TABLE users ADD loged INT DEFAULT 0");
    }
}
