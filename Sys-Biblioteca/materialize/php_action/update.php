<?php

    //sessão
    
    session_start();

    //conexão
    
    require_once 'db_connect.php';

    //inserção de valores

    if(isset($_POST['btn-editar'])){

        $nome = mysqli_escape_string($connect, $_POST['nome']);

        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);

        $id = mysqli_escape_string($connect,$_POST['id']);

        $sql = "UPDATE autores SET Primeiro_Nome = '$nome', Segundo_Nome = '$sobrenome' WHERE id = '$id'";

        if(mysqli_query( $connect, $sql)):
            
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";

            header('location:../inserir.php');
        
        else:

            $_SESSION['mensagem'] = "Erro ao cadastrar";

            header('location:../inserir.php');

        endif;

    }

?>