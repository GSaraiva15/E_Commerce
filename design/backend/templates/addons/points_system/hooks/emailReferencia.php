<?php

include('/design/backend/templates/addons/points_system/hooks.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($mode == 'profile_fields'){
        //ir a BD buscar os dados de utilizador

        $emailReferencia = $_POST['elm_emailReferencia'];

        $chainEmailRef = "Select user_id, email from cscart_users where email = '$emailReferencia'";
        
        //ver se é o pretendido
        $RegistoRecebido = get_record($chainEmailRef);

        give_points_register($RegistoRecebido.user_id);
        
    }
}

?>