<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Fiax tecnologia</title>
</head>
<body bgcolor="#efefef">

<?php

// Variaveis originadas no email_form.php
$nome 			= $_POST['nome'];
$cidade 		= $_POST['cidade'];
$telefone		= $_POST['telefone'];
$email  		= $_POST['email'];
$assunto		= $_POST['assunto'];
$mensagem 		= $_POST['mensagem'];

// adicionei a captura do ip do remetente 
$ip = $_SERVER['REMOTE_ADDR'];

//Seu email, para onde irao as informações do formulário
$mail_destino = "isaacuchoa@gmail.com";


//Mensagem para o email de resposta
$msg_reply = "Prezado(a) $nome - Recebemos o seu email!\n\n a Fiax agradece o seu contato e responderemos em breve.\n\n";

// assunto do e-mail
$assunto_form = "CONTATO";

//Proprietario do site
    $prop ="Fiax";
	$msg.="Mensagem enviada do site: $prop"."\n";
	$msg.="$mail_header"."\n";
	$msg.="Nome: $nome"."\n";
	$msg.="Cidade: $cidade"."\n";
	$msg.="Telefone: $telefone"."\n";
	$msg.="E-mail: $email"."\n";
	$msg.="Assunto: $assunto"."\n";
	$msg.="mensagem: $mensagem"."\n\n\n";
	$msg.="Ip da origem: $ip"."\n";
	$msg.="\n\n";
	
	@mail($mail_destino, "$assunto_form", $msg, "From:$nome<$email>");

if($email != ""){
	@mail($email, "Re: $assunto_form $prop", $msg_reply, "From:<$mail_destino>");
}

?>
<script>
	alert("Sua mensagem foi enviada com sucesso!");
	this.location = "contato.php";
</script>

</body>
</html>