<?php

include 'ContainerInterface.php';
include 'Container.php';

$container = new Container();

$pdo = new PDO('mysql:host=localhost;dbname=MicroFramework;', 'root', '');

$container->add('database', $pdo);

/*var_dump($container);*/
