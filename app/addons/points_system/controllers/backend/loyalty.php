<?php
    use Tygh\Registry;

if(!defined('BOOTSTRAP')) {die('Access denied');}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($mode == 'manage'){
        //ir a BD buscar os dados de utilizador
        $chainTotal = "Select distinct(fk_user_id) id_user, sum(pontos) pontos_ganhos, firstname, lastname from cscart_points_system as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id group by user_id";

        $points_list = db_get_array($chainTotal);

        Tygh::$app['view'] -> assign('dados', $points_list);  
    }
    
    if($mode == 'update'){
        $id_passado = $_GET['id_user']; 
        $chainPessoa = "Select firstname, lastname, pontos, data from cscart_points_system as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id where user_id='$id_passado'";
        
        $points_pessoa_list = db_get_array($chainPessoa);

        Tygh::$app['view'] -> assign('dados', $points_pessoa_list);
    }

    if($mode == 'UTpoints'){
        $user = $_SESSION['user'];
        $loggeduserid = $user['id'];

        $chainPessoaLogIn = "Select firstname, lastname, pontos, data from cscart_points_system as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id where user_id='$loggeduserid'";
        
        $points_pessoa_list_frontend = db_get_array($chainPessoaLogIn);

        Tygh::$app['view'] -> assign('dados', $points_pessoa_list_frontend);
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($mode == 'manage'){
        $quantity = $_POST['quantityPoints'];
        $id_adicionar = $_POST['idescondido'];

        $chainAtribuirPontos = "Insert into cscart_points_system(fk_user_id, pontos) values ('$id_adicionar', '$quantity')";
        
        if (empty($_POST['quantityPoints']) || $quantity == 0){
            echo "Invalid Value";
        }else{
            db_query($chainAtribuirPontos);
        }

        $chainTotal2 = "Select distinct(fk_user_id) id_user, sum(pontos) pontos_ganhos, firstname, lastname from cscart_points_system as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id group by user_id";

        $points_list = db_get_array($chainTotal2);

        Tygh::$app['view'] -> assign('dados', $points_list); 
    }
}