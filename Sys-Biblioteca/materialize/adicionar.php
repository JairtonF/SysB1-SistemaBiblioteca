
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/materialize.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    

    <title>Document</title>
    
</head>

<body>

    <div class="row">

        <div class="col s12 m6 push-m3">

            <h3 class="light">Novo Autor</h3>

            <form action="php_action/create.php" method="POST">
                
                <div class="input-field col s12">

                    <input type="text" name="nome" id="nome">

                    <label for="nome">Nome</label>
                
                </div>

                <div class="input-field col s12">

                    <input type="text" name="sobrenome" id="sobrenome">

                    <label for="sobrenome">Sobrenome</label>
                
                </div>

                <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>

                <a href="inserir.php" type="submit" class="btn green"> Voltar </a>

            </form>

        </div>

    </div>

<script src="js/materialize.js"></script>

</body>
</html>