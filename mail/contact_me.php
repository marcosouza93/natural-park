<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message']) )
   {
	echo "Informações insuficientes!";
	return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'contato@naturalparkresidencial.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato via Web Site:  $name";
$email_body = "Você recebeu uma nova mensagem do formulário de contato do Web Site.\n\n"."Detalhes da mensagem:\n\nNome: $name\n\nE-mail: $email_address\n\nMensagem:\n$message";
$headers = "De: noreply@naturalparkresidencial.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder-Para: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
