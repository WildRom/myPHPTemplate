<?php 
require_once __DIR__ . '/config.php';





//var_dumper in action
dump($_ENV);

// Render the template
echo $twig->render('index.html', ['title' => 'Hello World']);