<?php

// Home page
$app->get('/', "Mycv\Controller\HomeController::indexAction");

// Detailed info about an article
$app->match('/article/{id}', "Mycv\Controller\HomeController::articleAction");

// Login form
$app->get('/login', "Mycv\Controller\HomeController::loginAction")
->bind('login');  // named route so that path('login') works in Twig templates

// Admin zone
$app->get('/admin', "Mycv\Controller\AdminController::indexAction");

// Add a new article
$app->match('/admin/article/add', "Mycv\Controller\AdminController::addArticleAction");

// Edit an existing article
$app->match('/admin/article/{id}/edit', "Mycv\Controller\AdminController::editArticleAction");

// Remove an article
$app->get('/admin/article/{id}/delete', "Mycv\Controller\AdminController::deleteArticleAction");

// Edit an existing comment
$app->match('/admin/comment/{id}/edit', "Mycv\Controller\AdminController::editCommentAction");

// Remove a comment
$app->get('/admin/comment/{id}/delete', "Mycv\Controller\AdminController::deleteCommentAction");

// Add a user
$app->match('/admin/user/add', "Mycv\Controller\AdminController::addUserAction");

// Edit an existing user
$app->match('/admin/user/{id}/edit', "Mycv\Controller\AdminController::editUserAction");

// Remove a user
$app->get('/admin/user/{id}/delete', "Mycv\Controller\AdminController::deleteUserAction");

// API : get all articles
$app->get('/api/articles', "Mycv\Controller\ApiController::getArticlesAction");

// API : get an article
$app->get('/api/article/{id}', "Mycv\Controller\ApiController::getArticleAction");

// API : create an article
$app->post('/api/article', "Mycv\Controller\ApiController::addArticleAction");

// API : remove an article
$app->delete('/api/article/{id}', "Mycv\Controller\ApiController::deleteArticleAction");
