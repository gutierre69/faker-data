<?php 

namespace FakerData;

use FakerData\Data\Address;
use FakerData\Data\Category;
use FakerData\Data\Content;
use FakerData\Data\Email;
use FakerData\Data\Locale;
use FakerData\Data\Person;
use FakerData\Data\Phone;

class Generate {

    public $lang = "pt_br";

    public $address;
    public $category;
    public $content;
    public $email;
    public $locale;
    public $person;
    public $phone;


    public function __construct($lang = "pt_br"){
        $address    = new Address($lang);
        $category   = new Category($lang);
        $content    = new Content($lang);
        $email      = new Email($lang);
        $locale     = new Locale($lang);
        $person     = new Person($lang);
        $phone      = new Phone($lang);

        $this->address      = $address->address;
        $this->category     = $category->category;
        $this->content      = $content->content;
        $this->email      = $email->email;
        $this->locale       = $locale->locale;
        $this->person       = $person->person;
        $this->phone        = $phone->phone;
    }

    public function __call($method, $attributes){
        
    }



    
}