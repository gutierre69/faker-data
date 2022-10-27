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

        $data['country_code']       = $this->data->country[ $this->random( $this->data->country ) ];
        $data['area_code']          = $this->data->area_code[ $this->random( $this->data->area_code ) ];
        $data['landline']           = $this->changeChar( $this->data->landline[ $this->random( $this->data->landline ) ] );
        $data['cellphone']          = $this->changeChar( $this->data->cellphone[ $this->random( $this->data->cellphone ) ] );

        return (object)  $data;
    }

}