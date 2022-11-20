<?php 

namespace FakerData\Data;


class Common 
{

    public static function random($arr = array())
    {
        return rand(0, count($arr)-1);
    }

    public static function randomElement($arr = array())
    {
        return $arr[ rand(0, count($arr)-1) ];
    }

    public static function replaceChar($str = "")
    {
        $letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","W","Y","Z");

        for($i=0; $i<strlen($str); $i++){
            $str[$i] = str_replace("#", rand(0,9), $str[$i]);
            $str[$i] = str_replace("@", $letters[ self::random($letters) ], $str[$i]);
        }

        return $str;
    }

    public static function replaceCharFromStringSequence($str_to_replace = "", $str_with_data = ""){
        $sequence = 0;
        for($i=0; $i<strlen($str_to_replace); $i++){
            if($str_to_replace[$i]=="#" || $str_to_replace[$i]=="@"){
                $str_to_replace[$i] = str_replace("#", $str_with_data[$sequence], $str_to_replace[$i]);
                $str_to_replace[$i] = str_replace("@", $str_with_data[$sequence], $str_to_replace[$i]);
                $sequence++;
            }
        }
        return $str_to_replace;
    }

    public static function replaceTag($string, $tags, $force_lower = false)
    {
        return preg_replace_callback('/\\{\\{([^{}]+)\}\\}/',
            function($matches) use ($force_lower, $tags)
            {
                $key = $force_lower ? strtolower($matches[1]) : $matches[1];
                return array_key_exists($key, $tags) 
                    ? $tags[$key] 
                    : ''
                    ;
            }
            , $string);
    }

}