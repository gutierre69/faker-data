<?php 

namespace FakerData\Data;


class Email extends Common {

    public $email;
    public $data;

    public function __construct($lang = "en_us"){
        $data_class             = "FakerData\\Data\\$lang\\Email";
        $this->data             = new $data_class;

        $this->email         = $this->create();
    }

    public function create(){
        $data = array();

        $data['email']       = $this->email();

        return (object)  $data;
    }

    public function email($seed=""){
        $server = $this->data->email_server[ $this->random( $this->data->email_server ) ];

        $preffix = "";
        if($seed==""){

            if(rand(0,5)==3) $preffix .= "##";
            if(rand(0,5)==3) $preffix .= "@";

            $p              = $this->data->randomPreffix[ $this->random( $this->data->randomPreffix ) ];
            $p              = substr($p, 0, rand(3,strlen($p)));
            $preffix       .= ucwords( $p );
            
            $separator      = array("",".","-","_","@","#");
            $preffix       .= $separator[rand(0, count($separator)-1)];

            $p              = $this->data->randomPreffix[ $this->random( $this->data->randomPreffix ) ];
            $p              = substr($p, 0, rand(3,strlen($p)));
            $preffix       .= ucwords( $p );

            if(rand(0,1)==1) $preffix .= "##";

        }
        $preffix = $this->changeChar( $preffix );

        return strtolower($preffix.$server);
    }

}