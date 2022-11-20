<?php 

namespace FakerData\Data;


class Address extends Common {

    public $address;
    public $data;

    public function __construct($lang = "en_us"){
        $data_class             = "FakerData\\Data\\$lang\\Address"; 
        $this->data             = new $data_class;

        $this->address          = $this->create();
    }

    public function create(){
        $data = array();

        $data['street_prefix']      = $this->data->street_prefix[ $this->random( $this->data->street_prefix ) ];
        $data['street_name']        = $this->replaceChar( $this->data->street_names[ $this->random( $this->data->street_names ) ] );
        $data['number']             = rand(1,3000)."".$this->data->number_complement[ $this->random( $this->data->number_complement ) ];
        $data['complement']         = $this->replaceChar( $this->data->complement[ $this->random( $this->data->complement ) ] );
        $data['zipcode']            = $this->replaceChar( $this->data->zipcode[ $this->random( $this->data->zipcode ) ] );

        $data['complete_address']   = $this->replaceTag($this->data->format, $data);

        return (object)  $data;
    }

}