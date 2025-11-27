<?php 
class Weapon
{
    // private string $name;
    // private int $damages;

    public function __construct(private string $name, private int $damages)
    {

    }

    public function getName() : string
    {
        return $this ->name;
    }
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getDamage() : int
    {
        return $this ->damage;
    }
    public function setDamage(int $damage) : void
    {
        $this->damage = $damage;
    }

    public function strike() : string
    {
        return "Mais aïeuh! <br>";
    }
}
?>