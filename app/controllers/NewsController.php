<?php

require __DIR__ . '/../models/News.php';

class NewsController {
    
    public function show($id) {
        $model = new News();
        $data = $model->getSingle($id);
        $template = 'single.php';
        require __DIR__ . '/../views/layout.php';
    }

    public function index($page) {
        $model = new News();
        $data = $model->getAll($page);
        $last = $model->getLast();
        $count = $model->getCount();
        $template = 'all.php';
        require __DIR__ . '/../views/layout.php';
    }
}