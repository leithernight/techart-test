<?php 
require __DIR__ . '/app/controllers/NewsController.php';

switch($_SERVER['REQUEST_URI']) {
    case preg_match('/^\/news\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches) ? true : false:
        $news = new NewsController();
        $news->show($matches[1]);
        break;

    case preg_match('/^\/(news(?:\/?|[?&]page=[0-9]+))$/i', $_SERVER['REQUEST_URI'], $matches) ? true : false:    
        $news = new NewsController();
        if (isset($_GET['page'])) {
            $news->index($_GET['page']);
        } else {
            $news->index(1);
        }
        break;
}