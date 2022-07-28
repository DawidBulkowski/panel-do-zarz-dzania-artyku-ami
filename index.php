<?php

require 'vendor/autoload.php';
require 'app/config.php';

use Repository\ArticleRepository;


$router = new \Bramus\Router\Router();

include "views/parts/header.php";
include "views/parts/nav.php";

$router->get('/', function() {
    header('Location: /articles');
});

$router->get('articles', function() {
    $articleRepository = new ArticleRepository;
    $articles = $articleRepository->getAll();
    include "views/list.php";
});

$router->get('article/add', function() {
    include "views/add.php";
});

$router->post('article/add', function() {

});

$router->get('article/(\d+)/delete', function($id) {
    $articleRepository = new ArticleRepository;
    $articleRepository->delete($id);
    header('Location: /article');
});

include "views/parts/footer.php";

$router->run();
