<?php 

require __DIR__ . '/../vendor/autoload.php';
use App\Router;

// define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(__DIR__ . '/../views/');

$router
	->get("/blog", "post/index", "blog")
	->get("/blog/category", "category/show", "category")
	->get("/blog/[*:slug]-[i:id]", "post/show", "post")
	->run();
