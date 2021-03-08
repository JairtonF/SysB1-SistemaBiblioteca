<?php
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