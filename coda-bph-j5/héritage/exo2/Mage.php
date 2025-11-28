<?php
require_once "Character.php";
class Mage extends Character
{
    public function __construct(private int $mana, string $name, int $life)
    {
        parent::__construct($name, $life);
    }

    public function getMana() : int
    {
        return $this->mana;
    }
    public function setMana(string $mana) : void
    {
        $this ->mana = $mana;
    }
}
?>