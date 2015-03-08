<?php

require_once __DIR__.'/../vendor/autoload.php';

include_once "../functions/company.php" ;


use Respect\Rest\Router;
$r3 = new Router('/80startups/api/index.php');

$r3->get('/hello', function() {
        return 'Hello from Path';}
);

$r3->get( '/addcompany' ,  'Add Company' );
$r3->get('/add/*', function($companyname) {
      /** do something */
      addcompany($companyname);
});

$r3->get('/list', function() {
      listcompany();
});



?>
