<?php

class UserManager extends AbstractManager{
    public function __construct(){

    }

    public function findByEmail(string $email){

        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if($user !== null){
            $item = new User($user["username"], $user["email"], $user["password"], $user["role"], DateTime::createFromFormat('Y-m-d H:i:s', $user["created_at"]));
            $item->setId($user['id']) ;
        }
        else{
            $item = new User("","","","",new DateTime(""));
        }
        return $item;
    }
    
    public function create(User $user):void{
        $currentDateTime = date("Y-m-d H:i:s");
        $query = $this->db->prepare("INSERT INTO users (id, username, email, password, role, created_at) VALUES (NULL, :username, :email, :password, :role, :created_at) ");
        $parameters = [
            "username"=> $user->getUsername(),
            "password" => $user->getPassword(),
            "email"=> $user->getEmail(),
            "role" => $user->getRole(),
            "created_at"=> $currentDateTime,
        ];
        $query->execute($parameters);
        $user->setId($this->db->lastInsertId());
    }
}