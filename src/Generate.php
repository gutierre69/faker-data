<?php 

namespace FakerData;

use FakerData\Data\Address;
use FakerData\Data\Category;
use FakerData\Data\Common;
use FakerData\Data\Content;
use FakerData\Data\Company;
use FakerData\Data\Email;
use FakerData\Data\Locale;
use FakerData\Data\Person;
use FakerData\Data\Phone;

class Generate extends Common 
{


    public $address;
    public $category;
    public $content;
    public $email;
    public $locale;
    public $person;
    public $phone;
    public $company;

    public $common;

    public function __construct($lang = "en_us")
    {
        $address    = new Address($lang);
        $category   = new Category($lang);
        $content    = new Content($lang);
        $email      = new Email($lang);
        $locale     = new Locale($lang);
        $person     = new Person($lang);
        $phone      = new Phone($lang);
        $company    = new Company($lang);

        $this->address      = $address->address;
        $this->category     = $category->category;
        $this->content      = $content->content;
        $this->email        = $email->email;
        $this->locale       = $locale->locale;
        $this->person       = $person->person;
        $this->phone        = $phone->phone;
        $this->company      = $company->company;
  
    }

    public function __call($method, $attributes)
    {
        
    }



    
}