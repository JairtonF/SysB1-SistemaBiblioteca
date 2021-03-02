<?php

include('php_action/create.php');

//sessão

session_start();

if(isset($_SESSION['mensagem'])): ?>
    

<script>
    
    //mensagemde status do cadastro

    window.onload = function(){
        M.toast({html: ' <?php echo $_SESSION['mensagem']; ?> '});
    };

</script>

<?php

endif;

session_unset();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link com o css-->
    <link rel="stylesheet" href="css/materialize.css">

    <!--Fontes vindas do google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>

</head>

<body>

    <div class="row">

        <div class="col s12 m6 push-m3">

            <h3 class="light">Autores</h3>

            <!--Tabela onde ficarão os dados-->
            <table class="striped">
            
                <thead>

                    <tr>

                        <th>Nome:</th>
                        <th>Sobrenome:</th>

                    </tr>

                </thead>
                
                <tbody>
                    
                    <?php

                        $sql ="SELECT * FROM autores";

                        $resultado = mysqli_query($connect, $sql);

                        while($dados = mysqli_fetch_array($resultado)):

                    ?>

                    <tr>

                        <td> <?php echo $dados['Primeiro_Nome']; ?> </td>
                        <td> <?php echo $dados['Segundo_Nome']; ?> </td>

                        <td><a  href="editar.php?id= <?php echo $dados['id']; ?>" class="btn-floating orange"> <i class="material-icons"> edit </i> </a> </td>
                        <td><a  href="" class="btn-floating red"> <i class="material-icons"> delete </i> </a> </td>
                    </tr>
                
                    <?php 

                        endwhile;
                    
                    ?>

                </tbody>
            
            </table>

            <br>

            <a href="adicionar.php" class="btn"> Adicionar cliente </a>

        </div>
        
    </div>

    <script src="js/materialize.js"></script>

</body>
</html>