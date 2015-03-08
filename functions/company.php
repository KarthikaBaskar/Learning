<?php


require_once __DIR__.'/../vendor/autoload.php';

use Respect\Relational\Mapper;



function addcompany($companyname){

  echo $companyname ;
}



function listcompany(){

  $mapper = new Mapper(new PDO('mysql:host=localhost;port=3306;dbname=80startups','80startups','10gXWOqeaf'));
  $companies = $mapper->company->fetchAll();
  foreach ($companies as $company) {
      echo $company->companyname . PHP_EOL;
  }

}




?>
