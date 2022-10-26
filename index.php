<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/vendor/autoload.php';

use FakerData\Generate;


$fakerData = new Generate();


echo $fakerData->person->first_name."<br>";
echo $fakerData->person->last_name."<br>";
echo $fakerData->person->complete_name."<br>";

// echo nl2br( print_r($fakerData->person, true) );

// echo $fakerData->content->title."<br><br>";
// echo $fakerData->content->text;

