<?php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('save_passport', new Routing\Route('/passport/save'));
$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'World']));
$routes->add('bye', new Routing\Route('/bye'));

$routes->add('leap_year', 
    new Routing\Route('/is_leap_year/{year}', [
        'year' => date('Y'),
        '_controller' => 'App\Controller\LeapYearController::index'
    ])
);

return $routes;