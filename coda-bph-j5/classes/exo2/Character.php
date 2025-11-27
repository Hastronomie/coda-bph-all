<?php 
class Character
{
    public string $firstName = "Jane";
    public string $lastName = "Doe";

    public function __construct(public int $id)
    {

    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this ->id = $id;
    }

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) : void
    {
        $this ->firstName = $firstName;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName) : void
    {
        $this ->lastName = $lastName;
    }

    public function getFullName() : string
    {
        return "Je suis {$this->firstName} {$this->lastName}, incognito<br>";
    }

}
?>