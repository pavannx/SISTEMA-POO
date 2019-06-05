<?php

require_once "model/People.php";
require_once "model/User.php";
require_once "model/conMySQL.php";

class PeopleController{
	public function view($server){
           global $con;
        switch ($server) {
            case 'GET':
                require_once "view/register.php";
                break;
            
            case 'POST':

                $typePerson = $_POST['typePerson'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $cpf = $_POST['cpf'];
                $user = $_POST['user'];
                $password = password_hash ($_POST['password'], PASSWORD_DEFAULT);

                if ($typePerson == "user") {
                    $newUser = new Users($name, $user, $cpf, $user, $password);

                

               
             if($newUser->registerPeople($con,$newUser)){
                $_REQUEST['person'] = $newUser;

                require_once "view/success.php";
             } 
             
             else {
                 echo "ADIVINHA MEU IRMAO DEU ERRO ESSA PORRA";
             }
            
            
        
              break;  
        }
    
        }}


}


?>