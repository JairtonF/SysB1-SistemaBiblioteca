<?php

include('php_action/update.php');

if(isset($_GET['id'])):

    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM autores WHERE id = '$id' ";

    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);

endif;

?>

<?php

include_once 'includes/header.php';

?>

    <div class="row">

        <div class="col s12 m6 push-m3">

            <h3 class="light">Editar Autor</h3>

            <form action="php_action/update.php" method="POST">
                
                <input type="hidden" name="id" value="<?php echo $dados['id']?>">

                <div class="input-field col s12">

                    <input type="text" name="nome" id="nome" value="<?php echo $dados['Primeiro_Nome']; ?>">

                    <label for="nome">Nome</label>
                
                </div>

                <div class="input-field col s12">

                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['Segundo_Nome']; ?>">

                    <label for="sobrenome">Sobrenome</label>
                
                </div>

                <button type="submit" name="btn-editar" class="btn"> Atualizar </button>

                <a href="inserir.php" type="submit" class="btn green"> Voltar </a>

            </form>

        </div>

    </div>

<?php

    include_once 'includes/footer.php';

?>