<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'mycv',
    'user'     => 'mycv',
    'password' => 'mycv',
);

// define log level
$app['monolog.level'] = 'WARNING';
