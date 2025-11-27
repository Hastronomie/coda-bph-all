<?php 
class User
{
    public function __construct(public int $id, public string $username, public string $password)
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

    public function getUsername() : string
    {
        return $this->username;
    }

    public function setUsername(string $username) : void
    {
        $this ->username = $username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setPassword(string $password) : void
    {
        $this ->password = $password;
    }

    public function sePresenter() : string
    {
        return "je suis {$this->id}, {$this->username}, et j'ai {$this->password}";
    }
}
?>