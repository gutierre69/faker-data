<?php 

namespace FakerData\Data;


class Common {

    public static function random($arr = array()){
        return rand(0, count($arr)-1);
    }

    public static function changeChar($str = ""){
        $letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","W","Y","Z");

        for($i=0; $i<strlen($str); $i++){
            $str[$i] = str_replace("#", rand(0,9), $str[$i]);
            $str[$i] = str_replace("@", $letters[ self::random($letters) ], $str[$i]);
        }

        return $str;
    }

}