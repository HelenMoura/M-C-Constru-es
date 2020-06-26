<?php
/*require_once '../verificar.php';*/
require_once '../bd.php'; 

$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$nome = filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST,'sobrenome',FILTER_DEFAULT);
$email = filter_input(INPUT_POST,'email',FILTER_DEFAULT);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_DEFAULT);
$senha = filter_input(INPUT_POST,'senha',FILTER_DEFAULT);
$genero = filter_input(INPUT_POST,'genero',FILTER_DEFAULT);

$senha = password_hash($senha,PASSWORD_DEFAULT);

$sql = "UPDATE usuario SET nome = ?, sobrenome = ?, email = ?, telefone = ?, senha = ?, genero = ? 
WHERE id = ?";

$rs = mysqli_prepare($banco,$sql);
mysqli_stmt_bind_param($rs,'ssssssi',$nome,$sobrenome,$email,$telefone,$senha,$genero,$id); 

mysqli_stmt_execute($rs); 

/* echo mysqli_stmt_affected_rows($rs); 
exit(); */

header('location: ../../index.php');  