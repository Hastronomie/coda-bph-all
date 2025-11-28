<?php
class Member extends AbstractUser
{
    private array $favorites=[];
    public function __construct(protected string $username, protected string $password, protected string $role, private string $biography )
    {
        parent::__construct($username, $password, "MEMBER");
    }

    public function getBiography()
    {
        return $this->biography;
    }
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }

    public function getFavorites()
    {
        return $this->favorites;
    }
    public function setFavorites($favorites)
    {
        $this->favorites = $favorites;
    }
}
?>