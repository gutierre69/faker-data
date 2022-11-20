<?php 

namespace FakerData\Data;

use FakerData\Data\Person;

class Company extends Common 
{

    public $default_language = "";

    public $company;
    public $data;

    public function __construct($lang = "en_us")
    {
        $this->default_language = $lang;

        $data_class             = "FakerData\\Data\\$lang\\Company"; 
        $this->data             = new $data_class;

        $this->company          = $this->create();
    }

    public function create()
    {
        $simple             = $this->simpleData();
        $data               = $this->completeData( $simple );

        return (object)  $data;
    }

    public function simpleData()
    {
        $data = array();

        $category = self::randomElement( $this->data->categories );

        $data['category']               = $category['name'];
        $data['name']                   = self::randomElement( $category['business_name'] );
        $data['document']               = $this->data->generateDocument();
        $data['formated_document']      = self::replaceCharFromStringSequence($this->data->document_format, $data['document']);

        return $data;
    }

    public function completeData($data = array())
    {
        if(!isset($data['document'])) $data = $this->simpleData();

        $person                     = new Person($this->default_language);

        $replace_data               = array(
            "first_name"            => $person->person->first_name,
            "last_name"             => $person->person->last_name,
            "type"                  => self::randomElement( $this->data->types ),
            "suffix"                => self::randomElement( $this->data->suffix )
        );
        $data['title']              = self::replaceTag( self::randomElement( $this->data->formats ), $replace_data);

        $data['city']               = $person->person->city;
        $data['state']              = $person->person->state;
        $data['state_initials']     = $person->person->state_initials;

        $data['street_prefix']      = $person->person->street_prefix;
        $data['street_name']        = $person->person->street_name;
        $data['number']             = $person->person->number;
        $data['complement']         = $person->person->complement;
        $data['zipcode']            = $person->person->zipcode;

        return $data;
    }

}