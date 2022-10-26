<?php 

namespace FakerData\Data;


class Locale extends Common {

    public $locale;
    public $data;

    public function __construct($lang = "pt_br"){
        $data_class             = "FakerData\\Data\\$lang\\Locales"; 
        $this->data             = new $data_class;

        $this->locale           = $this->create();
    }

    public function create(){
        $data = array();

        $city                               = $this->data->cities[ $this->random( $this->data->cities ) ];
        $state                              = $this->data->states[ $city['state']-1 ];

        $data['city']                       = $city['name'];
        $data['state']                      = $state['name'];
        $data['state_initials']             = $state['initials'];

        return (object) $data;
    }

}