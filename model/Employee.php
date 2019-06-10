<?php

class Employee extends Users{
    private $money;

    function __construct($name, $age, $cpf, $login, $password, $money){
        parent::__construct($name, $age, $cpf, $login, $password);
        $this->money = $money;
    }

    public function getMoney(){
        return $this->money;
    }

    public function setMoney($money){
        $this->money = $money;
    }


public function registerEmployee($con, $person){
    try{
        $query = $con->prepare("INSERT INTO employee(name, age, cpf, users, password, money) VALUES(?,?,?,?,?,?)");
        $query->execute([
            $person->getName(),
            $person->getAge(),
            $person->getCpf(),
            $person->getLogin(),
            $person->getPassword(),
            $person->getMoney()
        ]);

        return $query;
   } catch(PDOException $e){
     echo $e->getMessage();
       return false;
   }
}
}