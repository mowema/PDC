<?php
$env = (getenv('APPLICATION_ENV') ?: 'production');

$modules = array(
        'ZfcBase',
        'DoctrineModule',
        'DoctrineORMModule',
        'ZfcUser',
        'BjyAuthorize',
    	'Application',
       	'ZfcUserDoctrineORM',
    	'ZfcTwitterBootstrap',
    	'GoogleMaps',
     // 'GoalioMailService',
     // 'GoalioForgotPassword'
   );


return array(
    'modules' => $modules,
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
         //   'config/autoload/{,*.}' . (getenv('APPLICATION_ENV') ?: 'production') . '.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
