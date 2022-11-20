<?php 

namespace FakerData\Data\en_us;

class Address 
{

    public $street_prefix           = array("Avenue", "Street");

    public $street_names            = array("Grimwith Garth", "Waterside Path", "Cricketers Gate", "Peverill Close", "Carrville Road West", "Patterdale Meadow", "Lulworth Close", "Grasmere Moor", "Holmwood Hawthorns", "Ross Terrace", "Pinfold Birches", "Southfield Orchards", "Moss Drift", "Conifer Esplanade", "Llyswen Lane", "Wye Brook", "Poppy Cedars", "Princess Close", "Cumber Road", "Harrow Knoll");

    public $number                  = 0;
    public $number_complement       = array("","A","B","C","D","E");

    public $complement              = array("");

    public $zipcode                 = array("#####");

    public $format                  = "{{number}} {{street_name}} {{prefix}}";

}