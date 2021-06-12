<?php

function give_points_register($id_adicionar){
    if($id_adicionar > 0){

        $Pontos_ao_Registo = $_POST['num_point_registation'];

        $chainAtribuirPontos_Registo = "Insert into cscart_points_system(fk_user_id, pontos) values ('$id_adicionar', '$Pontos_ao_Registo')";

        db_query($chainAtribuirPontos_Registo);
    }
}

function give_points_on_buy(/*id_user_logado*/){
    //select do email referenciado do id_user_logado 

    if($id_adicionar > 0){
        $Pontos_ao_Comprar = $_POST['num_point_inpurchase'];

        $chainAtribuirPontos_Registo = "Insert into cscart_points_system(fk_user_id, pontos) values ('$id_adicionar', '$Pontos_ao_Comprar')";

        db_query($chainAtribuirPontos_Registo);
    }
}