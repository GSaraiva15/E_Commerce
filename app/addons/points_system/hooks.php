<?php

function give_points_register($id_adicionar){
    if($id_adicionar > 0){

        $Pontos_ao_Registo = $_POST['num_point_registation'];

        $chainAtribuirPontos_Registo = "Insert into cscart_points_system(fk_user_id, pontos) values ('$id_adicionar', '$Pontos_ao_Registo')";

        db_query($chainAtribuirPontos_Registo);
    }
}

function give_points_on_buy(){
    //id do user Loged in
    $user = $_SESSION['user'];
    $loggeduserid = $user['id'];

    $chainQuantosRegisPontos = "Select count(*) from cscart_points_system where fk_user_id ='$loggeduserid'";

    $registosPontos = db_query($chainQuantosRegisPontos);

    if($registosPontos < 3){
        //query para ir buscar o id do referenciado
        //tenho o id do user -> quero ir buscar o emailref desse id e depois o id desse mail
        $MailReferenciado = "Select email_referencia from cscart_users where user_id = '$loggeduserid'";

        $MailRefRecebido = db_select($MailReferenciado);

        $IdReferenciado = "Select user_id from cscart_users where email_referencia = '$MailRefRecebido'";

        $idRecebido = db_select($IdReferenciado);

        if($idRecebido > 0){
            $Pontos_ao_Comprar = $_POST['num_point_inpurchase'];

            $chainAtribuirPontos_Registo = "Insert into cscart_points_system(fk_user_id, pontos) values ('$idRecebido', '$Pontos_ao_Comprar')";

            db_query($chainAtribuirPontos_Registo);
        }
    }
}