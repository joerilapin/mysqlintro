<?php
//Developers can turn strict types on by placing the declare(strict_types=1);
// method at the top of a PHP file. This implementation means that PHP will 'ignore'
// type hints and return types unless the declare(strict_types=1); statement appears at the top of the file
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//models en controllers en
require 'Model/connection.php';
require 'Model/post.php';
require 'Model/statement.php';
require 'Controller/homepagecontroller.php';
require 'Model/UserInformation.php';

//homepage laten zien , we maken object aan
$controller = new HomePageController();
//controller 'invoques''roept op' krijgt toegang tot de methode render vd klasse homepagecontroller
$controller->render($_POST);



