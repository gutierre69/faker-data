<?php 

namespace FakerData;

use FakerData\Data\Address;
use FakerData\Data\Category;
use FakerData\Data\Content;
use FakerData\Data\Locale;
use FakerData\Data\Person;

class Generate {

    public $lang = "pt_br";
    public $address;
    public $locale;
    public $person;
    public $content;
    public $category;


    public function __construct($lang = "pt_br"){
        $address    = new Address($lang);
        $locale     = new Locale($lang);
        $person     = new Person($lang);
        $content    = new Content($lang);
        $category   = new Category($lang);

        $this->address      = $address->address;
        $this->locale       = $locale->locale;
        $this->person       = $person->person;
        $this->content      = $content->content;
        $this->category      = $category->category;
    }



    
}