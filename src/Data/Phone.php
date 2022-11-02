<?php 

namespace FakerData\Data;


class Phone extends Common {

    public $phone;
    public $data;

    public function __construct($lang = "pt_br"){
        $data_class             = "FakerData\\Data\\$lang\\Phone";
        $this->data             = new $data_class;

        $this->phone         = $this->create();
    }

    public function create(){
        $data = array();

        $data['country_code']       = $this->country_code();
        $data['area_code']          = $this->area_code();
        $data['landline']           = $this->landline();
        $data['cellphone']          = $this->cellphone();

        return (object)  $data;
    }

    public function country_code(){
        return $this->data->country[ $this->random( $this->data->country ) ];
    }

    public function area_code(){
        return $this->data->area_code[ $this->random( $this->data->area_code ) ];
    }

    public function landline(){
        return $this->changeChar( $this->data->landline[ $this->random( $this->data->landline ) ] );
    }

    public function cellphone(){
        return $this->changeChar( $this->data->cellphone[ $this->random( $this->data->cellphone ) ] );
    }

}