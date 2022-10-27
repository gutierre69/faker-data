# FakerData
Is a more complete PHP library to generate fake data. If you need populate your data base, this is way.

Complete user data (including the picture for male or female person), phones, address, locales, categories, enterprises, contents and the famous "blah blah blah generator".

All the data generated here doesn't really exist.
Persons, pictures, address and phones **ARE FAKE**!

## Language Support
pt_br: Portuguese (BRAZIL)

## Basic Usage
This library support PSR-4 autoloaders only. 
But... is very simple!

To use via composer:
```php
<?php
require_once 'vendor/autoload.php';

use FakerData\Generate;

$FakerData = new Generate();

echo $FakerData->person->first_name;
    // Carlos
echo $FakerData->person->last_name;
    // de Nóbrega
echo $FakerData->person->complete_name;
    // Carlos Alberto de Nóbrega
```

## Fakers Providers
### Persons
The provider PERSON return a many fake data random for male or female, with picture.
This picture is random previously created on famous website "This Person Does Not Exist" ( [https://thispersondoesnotexist.com/](https://thispersondoesnotexist.com/) ).
```php
<?php
echo $FakerData->person->gender; // male
echo $FakerData->person->first_name; // Carlos
echo $FakerData->person->middle_name; // Alberto
echo $FakerData->person->last_name; // de Nóbrega
echo $FakerData->person->complete_name; // Carlos Alberto de Nóbrega

echo $FakerData->person->age; // 42
echo $FakerData->person->birthdate; // 1979-12-20

echo $FakerData->person->picture; // https://fakerdata.io/images/person-pics/male/1666636504.jpg

echo $FakerData->person->locale->city; // Conquista D`Oeste
echo $FakerData->person->locale->state; // Minas Gerais
echo $FakerData->person->locale->state_initials; // MG

echo $FakerData->person->address->street_prefix; // Rua
echo $FakerData->person->address->street_name; // Getúlio Vargas
echo $FakerData->person->address->number; // 1160E
echo $FakerData->person->address->complement; // Apto 53

echo $FakerData->person->complete_address; // Rua Getúlio Vargas, 1160E, Apto 53, Conquista D`Oeste - MG
```
Many times "middlename" is empty.
Age is a random number (18-60).
In address, the complement is many time empty.

## Categories
This provider generate two types: "lorem ipsum" and "blah blah blah".
In "lorem ipsum" type, the category title is formated with Lorem style text.
In "blah blah blah" type, the category title is fomated with realy text.
```php
<?php
echo $FakerData->category->title_blah; // Teoria de controle
echo $FakerData->category->title; // Cras ornare tellus consequat viverra
```

## Contents
This provider generate two types too: "lorem ipsum" and "blah blah blah".
In "lorem ipsum" type, the title and content are formated with Lorem style text.
In "blah blah blah" type, the title and content are fomated with realy text (or almost).
```php
<?php
echo $FakerData->content->title_blah; // Combustível: entenda como funciona e os usos para o setor!
echo $FakerData->content->text_blah;
    // É preciso dizer que a consulta aos diversos militantes agrega valor ao 
    // estabelecimento das diversas correntes de pensamento.No entanto, não podemos 
    // esquecer que o surgimento do comércio virtual desafia a capacidade de 
    // equalização do orçamento setorial.Todavia, o julgamento imparcial das 
    // eventualidades representa uma abertura para a melhoria do processo de comunicação 
    // como um todo.É claro que a valorização de fatores subjetivos é uma das 
    // consequências dos índices pretendidos.Acima de tudo, é fundamental ressaltar 
    // que o desafiador cenário globalizado faz parte de um processo de gerenciamento 
    // das condições financeiras e administrativas exigidas.

    // Todavia, a estrutura atual da organização deve passar por modificações 
    // independentemente do sistema de formação de quadros que corresponde às 
    // necessidades.Não obstante, a execução dos pontos do programa apresenta tendências 
    // no sentido de aprovar a manutenção das condições inegavelmente apropriadas.
    // Acima de tudo, é fundamental ressaltar que o comprometimento entre as equipes 
    // oferece uma interessante oportunidade para verificação do impacto na agilidade 
    // decisória.Não obstante, o consenso sobre a necessidade de qualificação estende 
    // o alcance e a importância do processo de comunicação como um todo.Neste sentido, 
    // o acompanhamento das preferências de consumo garante a contribuição de um grupo 
    // importante na determinação das condições financeiras e administrativas exigidas.

echo $FakerData->content->title; // Vulputate lacinia imperdiet conubia consectetur dapibus ac ut vel velit
echo $FakerData->content->text;
    // Fames elit laoreet commodo donec est. Nam viverra ante pellentesque adipiscing nisi. 
    // Risus vestibulum mattis nulla etiam. Elementum dictumst sapien dictumst taciti 
    // habitant. Egestas vivamus etiam aenean varius sociosqu ex. Proin erat curae molestie 
    // aptent gravida pellentesque. Dignissim class urna a laoreet eget sem imperdiet posuere. 
    // Nisl amet leo sollicitudin arcu fringilla dignissim sagittis. Platea cubilia 
    // quam tempus non. Sollicitudin enim ullamcorper duis platea mi sociosqu. 
    // Sapien netus per taciti sed platea aliquet auctor. Risus semper feugiat morbi hac 
    // praesent felis scelerisque facilisis. Purus ligula lacinia aenean consequat curae curae. 
    // Duis quis tincidunt et duis placerat. Porta eget arcu quam dictumst mattis risus 
    // eget. Ad ullamcorper iaculis sodales tristique id. Aliquam nisl laoreet nulla 
    // interdum fringilla lectus. Magna scelerisque fames porta augue taciti. Aenean 
    // sed ex dapibus mauris pretium eleifend vitae nullam.

    // Est condimentum maximus finibus magna hac laoreet. Class efficitur tristique 
    // egestas mattis volutpat. Hendrerit phasellus in lectus nunc. Nisi himenaeos 
    // nullam cubilia mi quis ut blandit. Netus mauris lacinia habitasse conubia habitasse 
    // pretium. Facilisis ad himenaeos enim vivamus bibendum. Blandit purus commodo maximus 
    // imperdiet et lobortis euismod. Ornare a litora tempor nam adipiscing sagittis 
    // ultrices dictumst massa. Iaculis cras libero sollicitudin aptent nibh pharetra. Eget 
    // lobortis turpis felis quisque malesuada et inceptos. Nostra feugiat aliquet iaculis 
    // eros lobortis erat. Lectus porta nec pellentesque primis elementum nam egestas. 
```

## Phones
This provider generate a complete phones (landline and cellphone), with area code and country code.
```php
<?php
echo $FakerData->phone->country_code; // +55
echo $FakerData->phone->area_code; // +41
echo $FakerData->phone->landline; // 3225-5071
echo $FakerData->phone->cellphone; // 9 8401-1234
```