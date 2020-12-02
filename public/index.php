<?php

use App\Router;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require '../vendor/autoload.php';

define('DEBUG_TIME', microtime(true));

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__).DIRECTORY_SEPARATOR.'views');

$router
    -> get('/','/explorer/index','home')
    //ADMIN
    ->match('/login', 'auth/login', 'login')
    -> post('/logout', 'auth/logout', 'logout')
    //Gestion des fichiers
    -> get('/admin','/admin/index','admin_home')
    -> match('/admin/upload','/admin/upload','admin_upload')
    ->run();