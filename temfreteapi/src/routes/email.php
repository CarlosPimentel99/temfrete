<?php

header('Content-Type: text/html; charset=UTF-8');

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Motorista;
use \Firebase\JWT\JWT;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$app->group('/api/v1', function(){

    $this->post('/email/suporte', function($request, $response){

		$dados = $request->getParsedBody();

		$nome = $dados['nome'] ?? null;
		$email = $dados['email'] ?? null;
        $telefone = $dados['telefone'] ?? null;
        $mensagem = $dados['mensagem'] ?? null;
        
        $mail = new PHPMailer(true);

        try {            
            
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'Temfretecarga@gmail.com';                     //SMTP username
            $mail->Password   = 'jaelgblxyfvnaxif';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`     
            

            //Recipients
            $mail->setFrom('Temfretecarga@gmail.com', 'Suporte Tem Frete');
            $mail->addAddress('andrepereiradequeiroz@hotmail.com', 'Andre'); 
            $mail->addAddress('carlospimentel77@hotmail.com', 'Carlos');   //Add a recipient                    
              //Add a recipient                    
            $mail->addReplyTo('Temfretecarga@gmail.com', 'Information');            

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Aqui Estara o assunto que o usuário deseja tratar';

            $body = "Aqui ficará o conteudo da mensagem que o usuário irá colocar, exemplo disso é o problema dele, as informações de telefone e bla bla bla";
            // Convertendo o body para UTF-8
            $body = mb_convert_encoding($body, 'UTF-8', 'UTF-8');            

            $mail->Body     = $body;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $mensagemail = "Mensagem enviada com sucesso!";
        } catch (Exception $e) {
            echo "Não foi possível enviar email: {$mail->ErrorInfo}";
        }
		
        // return $response->withJson([
        //     'nome' => $nome,
        //     'email'  => $email,
        //     'telefone' => $telefone,
        //     'mensagem' => $mensagemail
        // ]);	
	});
}); 