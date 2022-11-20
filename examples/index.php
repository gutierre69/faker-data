<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

require '../vendor/autoload.php';

use FakerData\Generate;
use FakerData\Data\Person;
use FakerData\Data\Phone;

$FakerData = new Generate("en_us");
// $person = new Person();
// $phone = new Phone();

echo "<h4>Person</h4>";
echo "<pre><code>". print_r( $FakerData->person, true )."</code></pre>";

echo "<h4>Locale</h4>";
echo "<pre><code>". print_r( $FakerData->locale, true )."</code></pre>";

echo "<h4>Address</h4>";
echo "<pre><code>". print_r( $FakerData->address, true )."</code></pre>";

echo "<h4>Phones</h4>";
echo "<pre><code>". print_r( $FakerData->phone, true )."</code></pre>";

echo "<h4>Category</h4>";
echo "<pre><code>". print_r( $FakerData->category, true )."</code></pre>";

echo "<h4>Content</h4>";
echo "<pre><code>". print_r( $FakerData->content, true )."</code></pre>";

echo "<h4>Email</h4>";
echo "<pre><code>". print_r( $FakerData->email, true )."</code></pre>";

echo "<h4>Company</h4>";
echo "<pre><code>". print_r( $FakerData->company, true )."</code></pre>";
