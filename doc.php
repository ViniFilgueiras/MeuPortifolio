<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "viniciusmffilgueiras@gmail.com";
    $assunto = "Contato - Meu Portifólio";
    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;
    $cabecalho = "From: viniciusmffilgueiras@gmail.com"."\n"."Reply-To: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabecalho)){
        echo("Email enviado com sucesso!");
    } else {
        echo("O email não pode ser enviado.");
    }
?>
