<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('aluno', 'Home::aluno');
$routes->get('produto', 'Home::produto');
$routes->get('veraluno', 'Aluno::veraluno');
# Fazendo rotas, o from é o parametro para chamar a view, quando digitado por exemplo, quando for digitado produto na url, ele vai
# acessar a classe home
