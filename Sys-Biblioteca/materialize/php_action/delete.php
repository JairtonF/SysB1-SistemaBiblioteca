<?php

    //sessão
    
    session_start();

    //conexão
    require_once 'db_connect.php';

    //inserção de valores

    if(isset($_POST['btn-deletar'])){

        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "DELETE FROM autores WHERE id = '$id' ";

        if(mysqli_query( $connect, $sql)):
            
            $_SESSION['mensagem'] = "Deletado com sucesso!";

            header('location:../inserir.php');
        
        else:

            $_SESSION['mensagem'] = "Erro ao deletar";

            header('location:../inserir.php');

        endif;

    }

?>