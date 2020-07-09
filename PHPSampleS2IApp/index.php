
<?php
require_once 'vendor/autoload.php';
  
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);
echo $twig->render('main.html.twig', ['name' => 'This is a hello world Test Application, running on', 
    'osV' => 'OpenShift']);
?>
