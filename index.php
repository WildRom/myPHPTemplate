<?php 
require_once __DIR__ . '/config.php';

// Render the template
echo $twig->render('login.html', ['view' => $view]);
