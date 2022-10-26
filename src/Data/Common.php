<?php 

namespace FakerData\Data;


class Common {

    public static function random($arr = array()){
        return rand(0, count($arr)-1);
    }

    public static function changeChar($str = ""){
        $letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","W","Y","Z");

        $str = str_replace("#", rand(0,9), $str);
        $str = str_replace("@", $letters[ self::random($letters) ], $str);

        return $str;
    }

}