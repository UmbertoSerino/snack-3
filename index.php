<!-- Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.) -->
<?php
include_once __DIR__ . '/Classes/Type.php';
class Pokemon
{
    public $name;
    public $attack;
    public $defense;
    public $skill;
    public $health;
    public $type;


    public function __construct($_name, $_attack, $_defense,  $_skill, $_health, $_type = null)
    {
        $this->name = $_name;
        $this->attack = $_attack;
        $this->defense = $_defense;
        $this->skill = $_skill;
        $this->health = $_health;
        $this->type = $_type;
    }
}

$airCategory = new Type('Air', 'https://pixelmonmod.com/w/images/0/0d/FlyingType.png');
$groundCategory = new Type('Ground', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Pok%C3%A9mon_Ground_Type_Icon.svg/768px-Pok%C3%A9mon_Ground_Type_Icon.svg.png');
$waterCategory = new Type('Water', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Pok%C3%A9mon_Water_Type_Icon.svg/768px-Pok%C3%A9mon_Water_Type_Icon.svg.png');
$fireCategory = new Type('Fire', 'https://www.giantbomb.com/a/uploads/scale_medium/16/164924/3083931-8746743194-flat%2C.jpg');
$pokemon_1 = new Pokemon('First Name', 15, 12, 'Basic Attack', 10, $fireCategory);
$pokemon_2 = new Pokemon('Second Name', 11, 10, 'Basic Attack', 5, $waterCategory);
$pokemon_3 = new Pokemon('Third Name', 15, 12, 'Basic Attack', 10, $groundCategory);
$pokemon_4 = new Pokemon('Fourth Name', 15, 12, 'Basic Attack', 10, $airCategory);


var_dump($pokemon_1, $pokemon_2, $pokemon_3, $pokemon_4);
?>