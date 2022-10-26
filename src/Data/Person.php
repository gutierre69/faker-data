<?php 

namespace FakerData\Data;

use FakerData\Data\Locale;
use FakerData\Data\Address;


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

        $person             = self::$data;
        $male_names         = $person->male_names;
        $female_names       = $person->female_names;
        $last_names         = $person->last_names;

        $rand_gender        = array("male","female");
        $data['gender']     = $rand_gender[ rand(0,1) ];

        if($data['gender']=="male"){
            $data['first_name'] = $male_names[rand(0,$person->total_male_names)];
            if(rand(0,5)==3) $data['middle_name'] = $male_names[rand(0,$person->total_male_names)];
        }

        if($data['gender']=="female"){
            $data['first_name'] = $female_names[rand(0,$person->total_female_names)];
            if(rand(0,5)==3) $data['middle_name'] = $female_names[rand(0,$person->total_female_names)];
        }

        $data['last_name'] = $last_names[rand(0,$person->total_last_names)];

        $data['complete_name']  = $data['first_name']." ".(isset($data['middle_name'])?$data['middle_name']." ":"").$data['last_name'];


        return (object) $data;
    }

    public static function CompletePerson($males = 1, $females = 1){

        $persons    = self::create($males, $females);
        $data       = (array) $persons;

        $person     = self::$data;


                $age            = rand(18,60);
                $birth_year     = date("Y")-$age;
                $birth_month    = rand(1,12);
                    if($birth_month<10) $birth_month = "0".$birth_month;
                $birth_day      = rand(1,date("t", strtotime($birth_year."-".$birth_month."-01")));
                    if($birth_day<10) $birth_day = "0".$birth_day;

                $data['age']                     = $age;
                $data['birthdate']               = $birth_year."-".$birth_month."-".$birth_day;

                if($data['gender']=="male")      $picture = "male/".$person->male_pictures[ rand(0, $person->total_male_pictures) ];
                if($data['gender']=="female")    $picture = "female/".$person->female_pictures[ rand(0, $person->total_female_pictures) ];

                $data['picture']                 = "https://fakerdata.io/images/person-pics/".$picture;
               
                $locale                          = new Locale();
                $data['locale']                  = $locale->locale;

                $data['city']                    = $data['locale']->city;
                $data['state']                   = $data['locale']->state;
                $data['state_initials']          = $data['locale']->state_initials;

                
                $address                         = new Address();
                $data['address']                 = $address->address;

                $complete_address                = "";
                $complete_address                .= $data['address']->street_prefix;
                $complete_address                .= " ".$data['address']->street_name;
                $complete_address                .= ", ".$data['address']->number;

                if(!empty($data['address']->complement))
                    $complete_address            .= ", ".$data['address']->complement;

                $data['complete_address']        = $complete_address.", ".$data['city']." - ".$data['state_initials'];
  



        

        return (object) $data;
    }

}