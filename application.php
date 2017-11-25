<?php 

include 'vendor/autoload.php';

$app = new Jebrini\Compressor\Compressor('/path/to/cdn.kenz.com');
$app->run([
  Jebrini\Compressor\ImageTypes::JPG , 
  Jebrini\Compressor\ImageTypes::JPEG,
  Jebrini\Compressor\ImageTypes::PNG,
]);