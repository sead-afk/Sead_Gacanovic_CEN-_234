<?php
require 'vendor/autoload.php';

Flight::route('/', function(){
  echo 'Jello world';
});

Flight::start();
?>
