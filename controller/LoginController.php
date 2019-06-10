<?php

require_once "model/People.php";
require_once "model/User.php";
require_once "model/conMySQL.php";
require_once "model/Employee.php";


class LoginController{

	public function view($server){
           global $con;
        switch ($server) {
            case 'GET':
                require_once "view/login.php";
                break;
            
            case 'POST':
                $user = $_POST['user'];
                $password = $_POST['password'];

                $query = $con->prepare("SELECT * FROM users WHERE users=?");
                $query-> execute([$user]);

                $result = $query->fetch(PDO::FETCH_ASSOC);
             
                if(count($result) <= 0){
                    echo "Usuário ou senha não encontrados, verifique e tente novamente.";
            
                } else {

                    if(password_verify($password, $result['password'])){
                                                                    
                            $people = new Users(
                                $result['name'],
                                $result['age'],
                                $result['cpf'],
                                $result['users'],
                                $result['password']
                            );

                         $_REQUEST['person'] = $people;
                         require_once "view/success.php";

                    } else{
                        echo "User or Login error";
                    }
                }


              break;  
        }   
    
        }}





?>