<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => 'crm',
    'user' => 'root',
    'password' => ''
  ],
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'isInstalled' => true,
  'microtimeInternal' => 1649677455.1226708889007568359375,
  'passwordSalt' => '3ee66b124a4047e3',
  'cryptKey' => '6dae45dc1c911bb634499607160fe79f',
  'hashSecretKey' => '0fcc7f1e1f2de71b4435d8dd41c6788a',
  'defaultPermissions' => [
    'user' => 1,
    'group' => 1
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.24'
];
