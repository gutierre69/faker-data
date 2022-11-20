<?php 

namespace FakerData\Data;


class COmpany extends Common {

    public $company;
    public $data;

    public function __construct($lang = "en_us"){
        $data_class             = "FakerData\\Data\\$lang\\Company"; 
        $this->data             = new $data_class;

        $this->company          = $this->create();
    }

    public function create(){
        $data = array();

        $data['simple'] = $this->simpleData();

        return (object)  $data;
    }

    public function simpleData(){
        $data = array();

        $category = self::randomElement( $this->data->categories );

        $data['category']               = $category['name'];
        $data['name']                   = self::randomElement( $category['business_name'] );
        $data['document']               = $this->data->generateCNPJ();
        $data['formated_document']      = self::replaceCharFromStringSequence($this->data->document_format, $data['document']);

        return $data;
    }

    public function completeData($person = array()){
        $data = $this->simpleData();

        return $data;
    }

}