<?php
$env = (getenv('APPLICATION_ENV') ?: 'production');

$params = array(
            'host'     => '127.0.0.1',
            'port'     => '3306',
            'user'     => 'pdc',
            'password' => 'pdc',
            'dbname'   => 'pdc',
            'charset' => 'utf8',
          );



return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => $params
            )
        )
    ),
);
