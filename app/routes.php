<?php

// Home page
$app->get('/', function () use ($app) {
    $articles = $app['dao.article']->findAll();    
//    return $app['twig']->render('index.html.twig', array('articles' => $articles));

    $categories = $app['dao.category']->findAll();
    return $app['twig']->render('index.html.twig', array(
	'articles' => $articles,
	'categories' => $categories
    ));

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});
