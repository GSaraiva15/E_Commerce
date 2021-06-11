<?php

include('hooks.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($mode == 'profile_fields'){
        //ir a BD buscar os dados de utilizador
        $chainEmailRef = "Select user_id, email from cscart_users where email = '$emailReferencia'";
    
        $emailReferencia = $_POST['elm_emailReferencia'];

        
    }
}

?>