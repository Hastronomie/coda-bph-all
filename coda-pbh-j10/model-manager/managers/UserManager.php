<?php
class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function create(User $user)
    {
        $query = $this->db->prepare('INSERT INTO users (firstName, lastName, email, password, created_at) VALUES 
        (:firstName, :lastName, :email, :password, :created_at);');
        $parameters = [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'created_at' => $user->getCreatedAt()->format('Y-m-d H:i:s')
        ];

        $query->execute($parameters);
        $user->setId($this->db->lastInsertId());
        return $user;
    }

    public function update(User $user)
    {
        $query = $this->db->prepare(' UPDATE users SET firstName=:firstName, lastName=:lastName, email=:email, password=:password, created_at=:created_at WHERE id = :id');
        $parameters = [
            'id' => $user->getId(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'created_at' => $user->getCreatedAt()->format('Y-m-d H:i:s')
        ];

        $query->execute($parameters);
        return $user;
    }

    public function delete(User $user)
    {
        $query = $this->db->prepare('DELETE FROM users WHERE users.id = :id');
        $parameters = [
            'id' => $user->getId(),
        ];

        $query->execute($parameters);
        $users = $query->fetch(PDO::FETCH_ASSOC);
    }

    public function findOne(int $id) : ?User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $id,
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result)
        {
            return new User($result["firstName"], $result["lastName"], $result["email"], $result["password"], new DateTime($result["created_at"]), $result["id"]);
        }

        else
        {
            return null;
        }
    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $parameters = [

        ];
        $query->execute($parameters);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = [];

        foreach($results as $result)
        {
            $user = new User($result["firstName"], $result["lastName"], $result["email"], $result["password"], DateTime::createFromFormat('Y-m-d H:i:s', $result["created_at"]), $result['id']);

            // $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
            // $parameters = [
            //     'id' => $user->getId(),
            // ];
            // $query->execute($parameters);
            // $resultBooks = $query->fetch(PDO::FETCH_ASSOC);
            $users[]=$user;
        }

        return($users);
    }
} ?>