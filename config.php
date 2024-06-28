<?php

date_default_timezone_set('Europe/London');

//composer
require_once __DIR__. '/vendor/autoload.php';

//dotenv
$dotEnv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotEnv->load();

$string = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}";

//RedBeanPHP
require_once __DIR__.'/libs/rb.php';
R::setup($string, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
if (!R::testConnection()) {
  die('Error connecting to the database');
}
R::freeze(false);

//twig
$loader = new \Twig\Loader\FilesystemLoader('templates');

$twig = new \Twig\Environment($loader, ['cache' => '/templates/cache']);

session_start();