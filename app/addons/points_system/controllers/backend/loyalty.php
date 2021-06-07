<?php
    use Tygh\Registry;

if(!defined('BOOTSTRAP')) {die('Access denied');}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($mode == 'manage'){
        //ir a BD buscar os dados de utilizador
        $chain = "Select distinct(fk_user_id) id_user, sum(pontos) pontos_ganhos, firstname, lastname from cscart_points_system as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id group by user_id";

        $points_list = db_get_array($chain);

        Tygh::$app['view'] -> assign('dados', $points_list);  
    }
    
    if($mode == 'update'){
        $id_passado = $_GET['id_user']; 
        $chain = "Select firstname, lastname, pontos, data from cscart_points_system as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id where user_id='$id_passado'";
        
        $points_pessoa_list = db_get_array($chain);

        Tygh::$app['view'] -> assign('dados', $points_pessoa_list);
    }
}