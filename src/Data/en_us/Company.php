<?php 

namespace FakerData\Data\en_us;

require ('document_generator.php');


class Company {

    public $types           = array("Ltda.", "MEI", "ME", "S.A.");

    public $categories      = array(
        array(
            "name"              => "Beleza e Cosméticos",
            "business_name"     => array("2beauty", "Academia dos cabelos", "Acqua Hair", "Afrodite", "Bazar da Beleza", "Beauty Company", "Beauty Style", "Beaux cheveux", "Bela & Bonita", "Beleza da hora", "Beleza natural", "Beleza&Companhia", "Belezas do brasil", "Belíssima", "Belíssima Flor", "BellaDonna", "BelloHair", "Bétis Hair", "Bonita sempre", "Brilho de crystal", "Brilho de mulher ", "Brosse et brushing", "Cabelos", "Cabelos & Cia", "Capricho", "Chic & Bela", "Chiquérrima", "Companhia da beleza", "Salone", "Sempre Bela", "Sempre Linda", "Sempre mara", "Seu brilho", "Studio & Estética hair", "Studio de Beleza", "Studio de Beleza Fashion", "Studio Mara", "Studio Oficina da Beleza", "Stylu`s hair", "Sua Beleza", "Tesoura Mágica", "Tesouras da Beleza", "Tô Chic", "Toda bonita", "Tok`s de Beleza", "Top salão da beleza", "Tutti Belli", "Vaidosa", "Wonder Hair", "Wonder Woman", "Beauty and Makeup", "Nails", "Esmalteria da", "Esmalteria Sempre Bela", "Esmalteria Style", "Nails Style", "Belle du Jour", "Bela Mania", "Studio", "Studio Beauté", "Studio Puro Glamour", "Scissors Studio", "Cheia de Charme", "Charme&Glamour", "Toda bela", "Beleza Pura", "Beleza delas", "Beleza Celestial", "Beleza Solo", "Cosmésticos Uau", "Womans's Beauty", "Espaço Beleza", "Studio Hair", "Studio Glow", "Universo da esmaltaria", "Universo das unhas")
        ),
        array(
            "name"              => "Roupas e Acessórios",
            "business_name"     => array("Mia Boutique", "Madame Chic", "De moda", "Boutique ID", "Elegance Store", "Fashion Shop", "Seu estilo", "Sua moda", "Fashion Style", "Da moda", "Be You", "_Fashionistas", "It girl Store", "Loja da Moda", "looks", "Mania de moda", "Do seu jeito", "Vista-se", "My Fashion", "Viva fashion", "Moda POP", "Style Urbano", "Loja Manequim", "Loja Passarela", "Loja Cat", "Modelle", "Fresh Fashion", "Toda Linda", "Tá linda! Modas", "Toda Chic", "Bem Vestida", "Chic Chic", "Sempre Bela", "Bela Moda", "Moda Fashion", "Flor de Liz", "Lótus", "Hortênsias Moda", "Bella Chic", "Pom Pom", "Ela Bela", "Joia rara", "Divino Armário", "Rosa Moda", "Bela Fashion", "Divina Elegância", "Elegance Modas", "Glamour Rosa", "Lolita", "Elas Belas", "TodaBela", "Bela & Bela", "Bela Boutique", "Belo Encanto", "Looks", "Luxo Looks", "Luxo", "Luxo", "Looks", "Modas", "Store", "Dona de Mim", "Boutique", "Tô na moda", "Toda moda", "Chame&Look", "Charmes", "Charmô", "A moda dela", "Constelação Roupas", "Roupas Top de Linha", "Rainha das Roupas", "Atração Roupas", "Ponto Certo Acessórios", "Bela Boutique", "Divina Boutique", "Look a look", "In look", "Veste")
        ),

        array(
            "name"              => "Bares e Restaurantes",
            "business_name"     => array("Alegria & Gastronomia", "Colher Criativa", "Panela de Ferro", "Sabor & Afeto", "Tempero de Vó", "Cantina", "Feito com Amor", "Sabor de Casa", "Cozinha & Afeto", "Casa de Vó", "Cozinha da VoVó", "Cumbuca de Ferro", "Marmitaria de Pedreiro", "Forneria de Lenha", "Forneria", "Cantina", "Marmitaria", "Lanchô", "Comidaria de Ponta", "Cozinha com Amor", "Tasty", "Menu", "Box", "Natural", "Culinária Artesanal", "Delicious", "Refeições", "Cozinha Urbana", "Artesanal", "Gourmet", "Lounge & Food", "Fast Food", "Fresh", "Food", "Chef Touro", "Bistrô", "Bollô", "Burger Top", "Divinus Bar", "Comida Virtuosa", "Nova Vida Restaurante", "Doutora do Sabor", "Cantina da Mamãe", "Massas", "Up Burger")
        ),
    );

    public $suffix          = array("", "Comercial", "e Família", "e Filhos", "e Amigos");

    public $document_format = "##.###.###/####-##";

    public $formats         = array(
        "{{first_name}} {{last_name}} {{suffix}} {{type}}",
        "{{last_name}} e {{last_name}} {{suffix}} {{type}}",
    );

    public function generateCNPJ(){
        return cnpj(false);
    }


}