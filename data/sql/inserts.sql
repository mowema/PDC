
INSERT  INTO `role`(`id`,`parent_id`,`roleId`) VALUES (2,NULL,'Gestor Noticias'),(3,NULL,'Gestor Boletines'),(4,NULL,'Publicador'),(1,4,'Administrador'),(5,NULL,'Gestor Certificaciones'),(6,NULL,'Gestor Eventos');

INSERT  INTO `users`(`id`,`username`,`email`,`displayName`,`password`, `estado`) VALUES (1,'admin','admin@jefatura.gob.ar','Admin','$2y$14$lHTek5OnjRZTFwWOLKbobumrfib7dze.wJ1V.Pq8F4xeAV1UqD0Te','1'),
(2,'Juan','juan@eventos.com.ar','Juan','$2y$14$lHTek5OnjRZTFwWOLKbobumrfib7dze.wJ1V.Pq8F4xeAV1UqD0Te','1');

INSERT  INTO `users_roles`(`user_id`,`role_id`) VALUES (1,1),(2,6);

INSERT INTO `app_grupo_trabajo` (`id`, `usuario_c_id`, `usuario_m_id`, `nombre`, `descripcion`, `fecha_creacion`, `fecha_modificado`, `estado`) VALUES('1','1','1','Usi','Grupo de trabajo Usi','2013-07-22 17:57:04','2013-07-22 17:57:04','1');
INSERT INTO `app_grupo_trabajo` (`id`, `usuario_c_id`, `usuario_m_id`, `nombre`, `descripcion`, `fecha_creacion`, `fecha_modificado`, `estado`) VALUES('2','1','1','Dat','grupo de trabajo Dat','2013-07-22 17:57:14','2013-07-22 17:57:14','1');

INSERT INTO `app_noticias` (`id`, `usuario_c_id`, `usuario_m_id`, `grupo_id`, `titulo`, `cuerpo`, `fecha_creacion`, `fecha_modificado`, `estado`) VALUES('1','1','1','1','Esto es una noticia','Noticia destacada','2013-07-18 11:52:29','2013-07-18 11:52:29','1');
INSERT INTO `app_noticias` (`id`, `usuario_c_id`, `usuario_m_id`, `grupo_id`, `titulo`, `cuerpo`, `fecha_creacion`, `fecha_modificado`, `estado`) VALUES('2','1','1','1','Noticia 2','asdadsadasd','2013-07-18 11:52:43','2013-07-18 11:52:43','1');
INSERT INTO `app_noticias` (`id`, `usuario_c_id`, `usuario_m_id`, `grupo_id`, `titulo`, `cuerpo`, `fecha_creacion`, `fecha_modificado`, `estado`) VALUES('3','1','1','1','Noticia Ale','Noticia Ale','2013-07-22 19:13:41','2013-07-22 19:13:41','1');
INSERT INTO `app_noticias` (`id`, `usuario_c_id`, `usuario_m_id`, `grupo_id`, `titulo`, `cuerpo`, `fecha_creacion`, `fecha_modificado`, `estado`) VALUES('4','1','1','1','Noticia Ale','Noticia Ale','2013-07-22 19:13:43','2013-07-22 19:13:43','1');

INSERT  INTO `app_boletines`(`id`,`usuario_c_id`,`usuario_m_id`,`titulo`,`fecha_creacion`,`fecha_modificado`,`estado`) VALUES (1,1,1,'Revista demográfica','2013-07-18 12:14:04','2013-07-18 12:14:04',1);

INSERT INTO `app_usuario_grupot` (`id`, `usuario_id`, `grupo_id`) VALUES('1','1','1');
INSERT INTO `app_usuario_grupot` (`id`, `usuario_id`, `grupo_id`) VALUES('2','1','2');

INSERT  INTO `app_plantilla`(`id`,`nombre`,`descripcion`,`estado`) VALUES (1,'Plantilla 1','Plantilla 1','1'),(2,'Plantilla 2','Plantilla 2','1'),(3,'Plantilla 3','Plantilla 3','1'),(4,'Plantilla 4','Plantilla 4','1'),(5,'Plantilla 5','Plantilla 5','1'),(6,'Plantilla 6','Plantilla 6','1');
