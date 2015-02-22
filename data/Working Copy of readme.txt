ir al directorio /vendor/bin \

doctrine-module orm:schema-tool:drop --force [para dropear la base]

doctrine-module orm:schema-tool:create [genera la base]

doctrine-module migration:diff

doctrine-module migration:execute ###### --up [--down]



los parámetros de conexión a la base están en /config/autoload/doctrine.local.php

<VirtualHost *:80>
   DocumentRoot "C:\WWW\SVN\ssiapn\trunk\public"
   ServerName ssiapn.local
   SetEnv APPLICATION_ENV development
   <Directory "C:\WWW\SVN\ssiapn\trunk\public">
       Options Indexes MultiViews FollowSymLinks
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>
</VirtualHost>


C:\Users\kteruel.JGM\Desktop\Root\vendor\bin