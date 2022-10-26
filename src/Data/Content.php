<?php 

namespace FakerData\Data;

class Content extends Common {

    public $content;
    public $data;

    public function __construct($lang = "pt_br"){
        $data_class             = "FakerData\\Data\\$lang\\Content"; 
        $this->data             = new $data_class;

        $this->content          = $this->create(); 
    }

    public function create(){
        $data = array();

        // title lorem
        $title = [];
        for($i=0; $i<rand(8,15); $i++){
            $title[] = $this->data->lorem_words[ $this->random($this->data->lorem_words) ];
        }
        $data['title'] = ucfirst( implode(" ",$title) );

        // text lorem
        $qty            = rand(3,6);
        $text           = [];
        for($x=0; $x<$qty; $x++){
            $paragraphs = [];
            for($f=0; $f<rand(10,30); $f++){
                $sentences = [];
                for($i=0; $i<rand(5,10); $i++){
                    $sentences[] = $this->data->lorem_words[ $this->random($this->data->lorem_words) ];
                }
                $paragraphs[] = ucfirst( implode(" ",$sentences) ).". ";
            }
            $text[] = ucfirst( implode(" ",$paragraphs) ).".";
        }
        $data['text'] = implode("<br><br>",$text);

        // paragraph lorem
        $qty            = 1;
        $text           = [];
        for($x=0; $x<$qty; $x++){
            $paragraphs = [];
            for($f=0; $f<rand(10,30); $f++){
                $sentences = [];
                for($i=0; $i<rand(5,10); $i++){
                    $sentences[] = $this->data->lorem_words[ $this->random($this->data->lorem_words) ];
                }
                $paragraphs[] = ucfirst( implode(" ",$sentences) ).". ";
            }
            $text[] = ucfirst( implode(" ",$paragraphs) ).".";
        }
        $data['paragraph'] = implode("<br><br>",$text);

        // title blah
        $data['title_blah'] = ucfirst( $this->data->blah_titles[ $this->random($this->data->blah_titles) ] );

        // -----

        // text Blah
        $qty                = rand(3,6);
        $text_blah          = "";
        $paragraphs         = [];
        for($i=0; $i<$qty; $i++){
            $content = "";
            for($a=0; $a<5; $a++){
                $content .= $this->data->blah_sentences[0][ $this->random($this->data->blah_sentences[0]) ];
                $content .= $this->data->blah_sentences[1][ $this->random($this->data->blah_sentences[1]) ];
                $content .= $this->data->blah_sentences[2][ $this->random($this->data->blah_sentences[2]) ];
                $content .= $this->data->blah_sentences[3][ $this->random($this->data->blah_sentences[3]) ];
            }
            $paragraphs[] = $content;
        }

        foreach($paragraphs AS $p){
            $text_blah .= $p."<br><br>";
        }
        $data['text_blah'] = $text_blah;
        // -----

        // paragraph Blah
        $qty                = rand(3,6);
        $text_blah          = "";
        $paragraphs         = [];
        for($i=0; $i<$qty; $i++){
            $content = "";
            for($a=0; $a<5; $a++){
                $content .= $this->data->blah_sentences[0][ $this->random($this->data->blah_sentences[0]) ];
                $content .= $this->data->blah_sentences[1][ $this->random($this->data->blah_sentences[1]) ];
                $content .= $this->data->blah_sentences[2][ $this->random($this->data->blah_sentences[2]) ];
                $content .= $this->data->blah_sentences[3][ $this->random($this->data->blah_sentences[3]) ];
            }
            $paragraphs[] = $content;
        }

        foreach($paragraphs AS $p){
            $text_blah .= $p."<br><br>";
        }
        $data['paragraph_blah'] = $text_blah;
        // -----

        return (object)  $data;
    }

}