<?php
include('_start.php');
$databasemanagar->addConnection([
    'driver'    => 'mysql',
    'host'      => 'ec2-54-235-132-192.compute-1.amazonaws.com',
    'database'  => 'dfqaeq78ooec20',
    'username'  => 'rbvpfxvyrnljdv',
    'password'  => 'q2v2KDHn4CKLYm1WNRM9LU_etO',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$debug = false;
include('_load.php');
