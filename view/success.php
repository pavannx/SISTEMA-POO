<?php
    if($_REQUEST){
        $person = $_REQUEST['person'];
        
    }else{
        header("Location:index.php?People");
    }


?>

<h1>Olá <?php echo $person->getName(); ?> seu cadastro foi concluido</h1>