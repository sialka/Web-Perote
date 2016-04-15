<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nome'];
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'comercial@perotesoft.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
//$ddd      	   	   = $_POST['ddd'];
$telefone      	   = $_POST['telefone'];
//$assunto          = $_POST['assunto'];
$assunto          = 'Contato';
//$outros          = $_POST['outros'];
$mensagem          = $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<h2>www.perotesoft.com.br</h2><hr><h3>Pedido de Contato</h3>
<p><b>Nome:</b> '.$nome.'</p>
<p><b>e-mail:</b> '.$email.'</p>
<p><b>Telefone:</b> '.$telefone.'</p>
<p><b>Assunto:</b> '.$assunto.'</p>
<p><b>Mensagem:</b> '.$mensagem.'</p><br>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
if($envio) echo "<script>location.href='index.html#contato'</script>"; // Página que será redirecionada

?>
