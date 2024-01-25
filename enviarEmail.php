<?php

session_start();

if (filter_input(INPUT_POST, 'enviar', FILTER_DEFAULT)):

    $nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_DEFAULT);
    $txr = filter_input(INPUT_POST, 'mensagem', FILTER_DEFAULT);

    $to = "curadobrom@gmail.com";
    #$to = "graffitedesign@gmail.com";
    $subject = "Formulário do Site";

    $message = "Nome: " . $nome . " | Email: " . $email . " | Telefone: " . $telefone . "<br><br>" . $txt . "<br><br>Mensagem enviada em: " . date("d/m/Y");

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <contato@curadobrom.adv.br>' . "\r\n";

    $headers .= 'Reply-To: ' . $email;

    if (mail($to, $subject, $message, $headers)):
        $_SESSION['mensagem'] = "Seu email foi enviado com sucesso!<br>Em breve um de nossos especialistas estrará em contato.";
        header("Location: ./index.php?#form");
        exit();
    else:
        echo "Ocorreu um erro ao enviar o email";
    endif;

endif;