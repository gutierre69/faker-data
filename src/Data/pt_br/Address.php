<?php 

namespace FakerData\Data\pt_br;

class Address {

    public $street_prefix           = array("Avenida", "Rua", "Alameda", "Travessa", "Av.", "R.", "Al.", "Tr.");

    public $street_names            = array("#","@","##@","Getúlio Vargas","Expedicionários da Pátria","Voluntários da Pátria","Brasil","Osório","Duque de Caxias","Juscelino Kubitschek","Dom Pedro I","Dom Pedro II","Princesa Isabel","Floriano Peixoto","Deodoro da Fonseca","Marechal Deodoro da Fonseca","Tiradentes","Ipiranga","Kennedy","Presidente Kennedy","Pres. Kennedy","Castro Alves","Machado de Assis","Rui Barbosa","7 de Setembro","15 de Novembro","XV de Novembro","13 de Maio","9 de Julho","São José","São Pedro","São Paulo","São Francisco","São Sebastião","Santa Luzia","São Jorge","Santa Maria","Sao Luiz","Santa Rita","Santo Antônio");

    public $number                  = 0;
    
    public $number_complement       = array("","A","B","C","D","E");

    public $complement              = array("","Casa", "Casa #", "Apto ##", "Bloco #@", "Bloco @", "Bloco ##", "## Andar");

    public $zipcode                 = array("#####-###");

    public $format                  = "{{street_prefix}} {{street_name}}, {{number}}, {{complement}}, CEP: {{zipcode}}";

}