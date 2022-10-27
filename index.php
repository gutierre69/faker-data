<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/vendor/autoload.php';

use FakerData\Generate;


$FakerData = new Generate();

print_r( $FakerData->phone );

// echo $FakerData->person->first_name."<br>";
// echo $FakerData->person->last_name."<br>";
// echo $FakerData->person->complete_name."<br>";
// echo $FakerData->person->picture."<br>";

// echo nl2br( print_r($FakerData->person, true) );

// echo $FakerData->content->title."<br><br>";
// echo $FakerData->content->text;

// echo $FakerData->phone->country_code."<br>";
// echo $FakerData->phone->area_code."<br>";
// echo $FakerData->phone->landline."<br>";
// echo $FakerData->phone->cellphone."<br>";