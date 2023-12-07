<?php

    if(isset($_POST['duvida'])
    
        $destinatario = 'DailyTechProcess@gmail.com';
        $assunto = 'Duvida';
        $Mensagem = $_POST['duvida'];

        mail($destinatario,$assunto,$Mensagem);

        header('location: ' . $_SERVER['HTTP_REFERER']);

        exit;

    )

?>