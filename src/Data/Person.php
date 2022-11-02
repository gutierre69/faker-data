<?php 

namespace FakerData\Data;

use FakerData\Data\Locale;
use FakerData\Data\Address;
use FakerData\Data\Email;

class Person extends Common {

    public $person;
    public static $data;

    public function __construct($lang = "pt_br"){
        $data_class             = "FakerData\\Data\\$lang\\Person"; 
        self::$data             = new $data_class;
        $this->person           = $this->CompletePerson();
    }

    public static function create($males = 1, $females = 1){
        $data = array();
        $data['gender']         = self::gender();
        $data['first_name']     = self::name();
        $data['middle_name']    = self::middle_name();
        $data['last_name']      = self::last_name();
        $data['complete_name']  = $data['first_name']." ".($data['middle_name']!=""?$data['middle_name']." ":"").$data['last_name'];

        return (object) $data;
    }

    public static function CompletePerson($males = 1, $females = 1){

        // create a simple complete name and gender
        $data       = (array) self::create();

        $data['age']                     = self::age();
        $data['birthdate']               = self::birthdate($data['age']);

        $data['picture']                 = self::picture($data['gender']);

        $email                           = new Email();
        $data['email']                   = $email->email->email;
        
        $locale                          = new Locale();

        $data['city']                    = $locale->locale->city;
        $data['state']                   = $locale->locale->state;
        $data['state_initials']          = $locale->locale->state_initials;

        $address                         = new Address();

        $data['street_prefix']           = $address->address->street_prefix;
        $data['street_name']             = $address->address->street_name;
        $data['number']                  = $address->address->number;
        $data['complement']              = $address->address->complement;
        $data['zipcode']                 = $address->address->zipcode;

        $complete_address                = $address->address->complete_address;
        $data['complete_address']        = $complete_address.", ".$data['city']." - ".$data['state_initials'];

        return (object) $data;
    }

    public static function gender(){
        $rand_gender = array("male","female");
        return $rand_gender[ rand(0,1) ];
    }

    public static function name(){
        $gender = self::gender()??'male';
        if($gender=="male") return self::$data->male_names[rand(0,self::$data->total_male_names)];
        if($gender=="female") return self::$data->female_names[rand(0,self::$data->total_female_names)];
    }

    public static function middle_name(){
        $gender = self::gender()??'male';
        if(rand(0,5)==3) {
            if($gender=="male") return self::$data->male_names[rand(0,self::$data->total_male_names)];
            if($gender=="female") return self::$data->female_names[rand(0,self::$data->total_female_names)];
        }
    }

    public static function last_name(){
        return self::$data->last_names[rand(0,self::$data->total_last_names)];
    }

    public static function complete_name(){
        $name           = self::name();
        $middle_name    = self::middle_name();
        $last_name      = self::last_name();
        return $name." ".($middle_name!=""?$middle_name." ":"").$last_name;
    }

    public static function age(){
        return rand(18,60);
    }

    public static function birthdate($age = 0){
        if($age == 0) $age = self::age();

        $birth_year     = date("Y")-$age;
        $birth_month    = rand(1,12);
            if($birth_month<10) $birth_month = "0".$birth_month;
        $birth_day      = rand(1,date("t", strtotime($birth_year."-".$birth_month."-01")));
            if($birth_day<10) $birth_day = "0".$birth_day;

        return $birth_year."-".$birth_month."-".$birth_day;
    }

    public static function picture($gender = ""){
        if($gender=="") $gender = self::gender();

        if($gender=="male")      $picture = "male/".self::$data->male_pictures[ rand(0, self::$data->total_male_pictures) ];
        if($gender=="female")    $picture = "female/".self::$data->female_pictures[ rand(0, self::$data->total_female_pictures) ];

        return "https://fakerdata.io/images/person-pics/".$picture;
    }

}