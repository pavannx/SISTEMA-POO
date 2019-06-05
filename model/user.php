<?php

  class Users extends People {

     private $login;
     private $password;

     function __construct($name, $age, $cpf, $login, $password){
         parent::__construct($name, $age, $cpf);
         $this->login = $login;
         $this->password = $password;
     }
     // LOGIN
     public function getLogin(){
            return $this->login;
     }
     public function setLogin($login){
            $this->login = $login;
     }

     // PASSWORD

     public function getPassword(){
        return $this->password;
     }
     public function setPassword($password){
        $this->password = $password;
     }
     public function registerPeople($con, $person){
        try{
            $query = $con->prepare("INSERT INTO users(name, age, cpf, users, password) VALUES(?,?,?,?,?)");
            $query->execute([
                $person->getName(),
                $person->getAge(),
                $person->getCpf(),
                $person->getLogin(),
                $person->getPassword()
            ]);

            return $query;
       } catch(PDOException $e){
         echo $e->getMessage();
           return false;
       }

     }
    }
