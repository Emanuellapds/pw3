<?php

require "Usuario.class.php";
$usuario = new Usuario ();
$conecta = $usuario -> con();

if ($conecta ){
   $user = $usuario-> checkUser ("admin@gmail.com");
   if ($user){
    echo " P A R A B E N S ! usuario nao encontrado no banco de dados!";
   } else {
      echo " Não existe usuario com esse email cadastrado no banco!";
   }
   $user = checkPass("admin@gmail.com", "123");
   echo"<script>alert("Usuario e senha cadastrados")

}else{
    echo "<h1>erro ao conectar. tente novamente mais tarde";
}