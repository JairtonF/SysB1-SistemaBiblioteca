<?php

    //sessão
    
    session_start();

    //conexão
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="biblioteca";

    $connect=mysqli_connect($servername, $username, $password, $db_name);

    //inserção de valores

    if(isset($_POST['btn-cadastrar'])){

        $nome =  $_POST['nome'];

        $sobrenome = $_POST['sobrenome'];
        

        $sql = "INSERT INTO autores (Primeiro_Nome, Segundo_Nome) VALUES ('$nome','$sobrenome')";

        if(mysqli_query( $connect, $sql)):
            
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";

            header('location:../inserir.php');
        
        else:

            $_SESSION['mensagem'] = "Erro ao cadastrar";

            header('location:../inserir.php');

        endif;

    }

?>