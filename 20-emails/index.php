<?php 
	require_once ("vendor/autoload.php");
	/*
    "vendor/autoload.php" importando autloado padrão da dependencia.
	Para baixar os arquivos do projetos neste exemplo, criamos o arquivo composer.json com o requerimento do pacote que queremos baixar, neste caso, utsamos "require": {"phpmailer/phpmailer": "^6.2"}. Esse comando para require, pegamos na pasta do pacote https://github.com/PHPMailer/PHPMailer, que também tem a instrução para o comando composer na linha de comando: composer require phpmailer/phpmailer.
	O compose permite gerenciar dependências, ou seja, ao baixarmos um prjeto como modelo, todas as suas dependências de bibliotecas já são automaticamente baixadas.

	- Neste exemplo, estamos utilizando um pacote para trabalharmos com emails. Baixamos via composer já com todas as suas bilibotecas ramificadas.

	- Para enviarmos emails precisamos ter um servidor de emails, normalmente fornecido pelo site de hospedagem. Existem vários servidores de emails, o padão do windows é o exchange.

	Aqui vamos trabalhar com o gratuito do gmail.
	*/
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//Cria uma nova instância do PHPMailer
$mail = new PHPMailer();
//Diga ao PHPMailer para usar SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 SMTP::DEBUG_OFF = desligado (para uso em produção)
// 1 SMTP::DEBUG_CLIENT = mensagem do cliente
// 2 SMTP::DEBUG_SERVER = mensagens de cliente e servidor
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
#$email -> Debugoutput = 'HTML';
//Defina o nome do host do servidor de e-mail
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// se a sua rede não suportar SMTP sobre IPv6

//Defina o número da porta SMTP - 587 para TLS autenticado, também conhecido como RFC4409 envio SMTP. Porta padrão do Gmail 587.
$mail->Port = 587;

//Defina o mecanismo de criptografia a ser usado - STARTTLS ou SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
#$mail->SMTPSecure = 'tls';

//Se deve usar autenticação SMTP
$mail->SMTPAuth = true;

//Nome de usuário a ser usado para autenticação SMTP - use endereço de e-mail completo para gmail
$mail->Username = "karloskley@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "mwxxcgpvtqjvvubi";
//Senha gerada pelo google. Senha de Aplcativo.
//End. que gerei: https://accounts.google.com/IssuedAuthSubTokens?hide_authsub=1
//Depois de gerada, ir nas configurações e reconhecer a senha.

//Defina de quem está saindo o email, remetente.
$mail->setFrom('karloskley@gmail.com', 'Programador Carlos Kley');
//Defina um endereço que receberá o email caso respondam.
$mail->addReplyTo('suportad@hotmail.com', 'Não visualizarei');
//Defina para quem a mensagem deve ser enviada. Pode ser vários emails por linha.
$mail->addAddress('karloskley@hotmail.com', 'Carlos Kley');
$mail->addAddress('geaoaraci@gmail.com', 'Carlos Kley');
//Defina a linha de assunto
$mail->Subject = 'Testando PHPMailer GMail SMTP';
/* Leia o corpo de uma mensagem HTML de um arquivo externo, converta imagens referenciadas em incorporadas, converter HTML em um corpo alternativo de texto simples básico; contents.html o arquivo que será incorporado à mensagem. */
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Substitua o corpo do texto simples por um criado manualmente
$mail->AltBody = 'Esse texto apareceu devido ao não funcinamento do HTML';

//Anexe um arquivo de imagem
#$mail->addAttachment('image/google.png');

//send the message, check for errors
if (!$mail->send()) { //Se não foi enviado, ou seja, retorno false.
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
 ?>