<?php 

namespace FakerData\Data;


class Category extends Common {

    public $category;
    public $data;

    public function __construct($lang = "pt_br"){
        $data_class             = "FakerData\\Data\\$lang\\Category"; 
        $this->data             = new $data_class;

        $this->category         = $this->create();
    }

    public function create(){
        $data = array();

        $data['title_blah']      = $this->data->blah_titles[ $this->random( $this->data->blah_titles ) ];

        // title lorem
        $title = [];
        for($i=0; $i<rand(3,8); $i++){
            $title[] = $this->data->lorem_words[ $this->random($this->data->lorem_words) ];
        }
        $data['title'] = ucfirst( implode(" ",$title) );

        return (object)  $data;
    }

}