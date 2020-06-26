<?php 
   session_start();
   require_once 'bd.php';

   $email = filter_input(INPUT_POST,'email',FILTER_DEFAULT);
   $senha = filter_input(INPUT_POST,'senha',FILTER_DEFAULT);

$email = mysqli_real_escape_string($banco,$email); 

$sql = "SELECT id,senha 
FROM usuario
WHERE email = '$email'"; 

$resultado = mysqli_query($banco,$sql); 


if($resultado->num_rows >= 1){
   $usuario = mysqli_fetch_assoc($resultado); 

   if(password_verify($senha,$usuario['senha'])){
      $_SESSION['usuario'] = $usuario['id'];
      header('location: ../index_us.php');
   } else {
       header('location: email.php?erro=1');
   }
} else {
      header('location: email.php?erro=2');
   }



var_dump($resultado);
exit();