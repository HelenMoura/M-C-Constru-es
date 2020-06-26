<?php 
     /*require_once '../verificar.php';*/
     require_once '../bd.php'; 
     $sql = "SELECT id,nome,email FROM usuario";
     $resultado = mysqli_query($banco,$sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Vibur" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/meuestilo.css">
    <title> Visualizar Usuários </title>
   
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

    <h1>Visualizar Usuários</h1>
    <a class ="btn" a href="../../cadastro_p.php"> Novo usuário + </a> 
    <hr>
 
 <table class="tab_us">
        <tr>
            <th class="tab_us">ID</th>
            <th class="tab_us">Nome</th>
            <th class="tab_us">E-mail</th>
            <th class="tab_us">Opções</th>
        </tr>

        <?php
        while($usuario = mysqli_fetch_assoc($resultado)): 

        ?>

        <tr>
            <td class="tab_us"><?= $usuario['id']?></td>
            <td class="tab_us"><?= $usuario['nome']?></td>
            <td class="tab_us"><?= $usuario['email']?></td>
            <td class="tab_us"> 
               <a class ="btn" href = "editar_us.php?id=<?=$usuario['id']?>"> Editar </a> 
               <a class ="btn" href = "excluir.php?id=<?= $usuario['id']?>"> Excluir </td> 
        </tr>

        <?php endwhile; ?>

    </table>
        </div>
</body>
</html>