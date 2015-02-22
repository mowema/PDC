<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version000 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        $pass= '$2y$14$lHTek5OnjRZTFwWOLKbobumrfib7dze.wJ1V.Pq8F4xeAV1UqD0Te';
        $this->addSql("insert  into `role`(`id`,`parent_id`,`roleId`) values (2,NULL,'Enlace')");
        $this->addSql("insert  into `role`(`id`,`parent_id`,`roleId`) values (10,NULL,'Administrador')");
        $this->addSql("insert  into `users`(`id`,`username`,`email`,`displayName`,`password`,`permisos`,`ruta`,`state`) values (1,'admin','info@jefatura.gob.ar','Admin',$pass,NULL,NULL,1)");
        $this->addSql("insert  into `users_roles`(`user_id`,`role_id`) values (1,10)");

    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
    }
}
