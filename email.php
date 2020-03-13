<?php

if(isset($_POST(['email']) && !empty($_POST(['email'])) {

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['msg']);

$to = "world.solucoes.eletrica@hotmail.com";
$subject = "Contato - World Soluções Elétrica";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$msg;
$header = "from: world.solucoes.eletrica@hotmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();  
            
if(mail($to,$subject,$body,Sheader)){
   
    echo("Email enviado com sucesso!");
} else {
    echo("O Email não pode ser enviado!");
}



}



?>