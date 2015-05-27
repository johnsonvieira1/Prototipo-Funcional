<?php  	
require_once("PHPMailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
$name 	= $_POST['name'];
$email 	= $_POST['email'];
$texto 	= $_POST['texto'];

$mail->SMTPAuth 	= true; 					// Define que a mensagem será SMTP
$mail->Host 		= "smtp.site.com.br"; // Endereço do servidor SMTP
$mail->Port 		= '587';					// $mail->SMTPSecure = ssl;
$mail->Username 	= 'site@site.com.br'; // Usuário do servidor SMTP
$mail->Password 	= '123';				// Senha da caixa postal utilizada

// Define o remetente
$mail->From 	= "site@site.com.br";
$mail->FromName = "Site";

// Define os destinatário(s)
$mail->AddAddress('contato@site.com.br');
$mail->AddCC('eu@site.com.br', 'Copia');

// Define os dados técnicos da Mensagem
$mail->IsHTML(true); 		// Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8';	// Charset da mensagem (opcional)

// Texto e Assunto
$mail->IsHTML(true);
$mail->CharSet 	= 'UTF-8';
$mail->Subject 	= "Mensagem do site"; // Assunto da mensagem
$mail->Body 	= 'Esta é uma mensagem enviada do site!<br /> <br /> <b>Nome:</b> '.$name.' <br /> <br /><b>E-mail:</b> '.$email.' <br /> <br /><b>Mensagem:</b> '.$texto.' <br /><br />';
$mail->AltBody 	= ''.$name.' <br /> '.$email.' <br /> '.$texto.' <br />';

// Envio da Mensagem
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) { echo "<script> alert('Mensagem Enviada!'); location.replace(document.referrer);</script>"; }

else {echo "Não foi possível enviar o e-mail.";

echo "Informações do erro:" . $mail->ErrorInfo;

}

?>
