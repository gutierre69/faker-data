<?php 

namespace FakerData\Data;


class Address extends Common {

    public $address;
    public $data;

    public function __construct($lang = "pt_br"){
        $data_class             = "FakerData\\Data\\$lang\\Address"; 
        $this->data             = new $data_class;

        $this->address          = $this->create();
    }

    public function create(){
        $data = array();

        $data['street_prefix']      = $this->data->street_prefix[ $this->random( $this->data->street_prefix ) ];
        $data['street_name']        = $this->changeChar( $this->data->street_names[ $this->random( $this->data->street_names ) ] );
        $data['number']             = rand(1,3000)."".$this->data->number_complement[ $this->random( $this->data->number_complement ) ];
        $data['complement']         = $this->changeChar( $this->data->complement[ $this->random( $this->data->complement ) ] );
        $data['zipcode']            = $this->changeChar( $this->data->zipcode[ $this->random( $this->data->zipcode ) ] );

        $data['complete_address']   = $data['street_prefix']." ".$data['street_name'].", ".$data['number'].($data['complement']!=""?", ".$data['complement']:'').", CEP: ".$data['zipcode'];

        return (object)  $data;
    }

}