<?php
require_once 'vendor/autoload.php';
  
echo "Hello World, this is a test application.";
echo "It should compile with composer automatically";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

echo $twig->render('main.html.twig', ['name' => 'John Doe', 
    'occupation' => 'gardener']);




?>
