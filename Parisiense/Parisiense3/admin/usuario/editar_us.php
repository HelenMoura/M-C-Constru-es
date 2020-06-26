<?php
     /*require_once '../verificar.php';*/
     require_once '../bd.php'; 
     $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT); 
     $id = intval($id); 
     $sql = "SELECT * FROM usuario
             Where id = $id"; 
     $resultado = mysqli_query($banco,$sql); 
     $usuario = mysqli_fetch_assoc($resultado); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Vibur" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/meuestilo.css">
        <script src="js/acoes.js"></script>

    <title>Editar usuário</title>
</head>
<body>
<header>
            <nav>
                <ul>
                    <li><a href="../../index.php" class="logo">A PARISIENSE</a></li>
                    <li><a href="../../metro.php">METRÔ</a></li>
                    <li><a href="../../bistro.php">BISTRÔS</a></li>
                    <li><a href="cadastro_p.php">CADASTRO</a></li>
                    <li><a href="../../album.php">ALBUM</a></li>
                    <li><a href="../../dica.php">DICAS</a></li>
                    <li><a href="../../orcamento.php">ORÇAMENTO</a></li>
                    <li style="float: right;">
                        <form action="">
                            <input type="text" id="busca" class="lupa" placeholder="BUSCAR">
                        </form>
                    </li>
                    <li style="float: right;"><a href="http://www.tumblr.com" class="icone"><img src="../../img/tumb.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.facebook.com" class="icone"><img src="../../img/face.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.twitter.com" class="icone"><img src="../../img/tw.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.youtube.com" class="icone"><img src="../../img/yt.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.pinterest.com" class="icone"><img src="../../img/pit.png" alt="" width="42px" height="42px"></a></li>
                </ul>
            </nav>
        </header>
        <main>
                <p id="resultado"></p>
                <div class="quadroprincipal">
  
    
    <div class="caixaformulario">
    <form action="editar.php" method="post">
    <fieldset>
    <legend>Alterar dados</legend>

        <label for="nome">Nome</label>
        <input value="<?=$usuario['nome']?>" type="text" id="nome" name="nome">

        <label for="sobrenome">Sobrenome</label>
        <input value="<?=$usuario['sobrenome']?>" type="text" id="sobrenome" name="sobrenome">

        <label for="email">E-mail</label>
        <input value="<?=$usuario['email']?>" type="text" id="email" name="email">

        <label for="telefone">Telefone</label>
        <input value="<?=$usuario['telefone']?>" type="text" id="telefone" name="telefone">

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha">

        <label for="genero">Gênero</label>
        <input value="<?=$usuario['genero']?>" type="text" id="senha" name="senha">

        <input type="hidden" name ="id" value="<?=$usuario['id']?>">
        
        <center>
        <button type="submit">Alterar</button>
        </center>
    
        </fieldset>
    </form>
    </div>
 </div>
</main>

    
</body>
</html>