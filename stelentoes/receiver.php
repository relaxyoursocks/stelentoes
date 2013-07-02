<?php
require_once('db/connect.php');

require_once 'twig/lib/Twig/Autoloader.php';


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(TWIG_TEMPLATE_ROOT);
$twig = new Twig_Environment($loader, array(
    'cache' => '/path/to/compilation_cache',
));

$template = $twig->loadTemplate('bootstrap.html');

echo $template->render(array('pageTitle' => 'doet twig het?'));
