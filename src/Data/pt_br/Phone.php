<?php 

namespace FakerData\Data\pt_br;


class Phone {

    public $country             = array("+55");

    public $area_code           = array("11","12","13","14","15","16","17","18","19","21","22","24","27","28","31","32","33","34","35","37","38","41","42","43","44","45","46","47","48","49","51","53","54","55","61","62","63","64","65","66","67","68","69","71","73","74","75","77","79","81","82","83","84","85","86","87","88","89","91","92","93","94","95","96","97","98","99");

    public $landline            = array("3###-####");
    public $cellphone           = array("9 ####-####");

    public $format_landline     = "{{country_code}} ({{area_code}}) {{landline}}";

    public $format_cellphone    = "{{country_code}} ({{area_code}}) {{cellphone}}";

    public $total_area_code     = 0;

    public function __construct(){
        $this->total_area_code         = count($this->area_code) - 1;
    }

}