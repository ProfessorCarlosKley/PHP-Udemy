<?php 
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl; //A classe Rpl está dentro do namespace Rain

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
    //"debug"         => true, // set to false to improve the speed
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "CARVALHO DESENVOLVIMENTO" );
$tpl->assign( "version", PHP_VERSION);

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$html = $tpl->draw("index", true);
//Como padrão já é html para esse template, não precisamos colocar.
//draw usa o arquivo index.html como templates e escreve o conteúdo das variáveis.
//true para poder armazenar conteúdo gerado pelo método draw na var sql. Caso contrário ele dá um echo na tela. 

/*Inicio do projeto de envio de email..........................................*/

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

//Defina de quem a mensagem deve ser enviada
$mail->setFrom('karloskley@gmail.com', 'Programador Carlos Kley');
//Defina um endereço de resposta alternativo
$mail->addReplyTo('suportad@hotmail.com', 'Não visualizarei');
//Defina para quem a mensagem deve ser enviada
$mail->addAddress('karloskley@hotmail.com', 'Carlos Kley');
$mail->addAddress('geaoaraci@gmail.com', 'Carlos Kley');
//Defina a linha de assunto
$mail->Subject = 'Testando PHPMailer GMail SMTP';
/* Leia o corpo de uma mensagem HTML de um arquivo externo, converta imagens referenciadas em incorporadas, converter HTML em um corpo alternativo de texto simples básico */
$mail->msgHTML($html);
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
