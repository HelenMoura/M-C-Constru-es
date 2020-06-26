<?php /*require_once '../verificar.php';*/ ?>

<!DOCTYPE html>
<html lang="pt-br">
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Vibur" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/meuestilo.css">
        <script src="js/acoes.js"></script>
        <title>Cadastro</title>
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
                    <li style="float: right;"><a href="http://www.tumblr.com" class="icone"><img src="img/tumb.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.facebook.com" class="icone"><img src="img/face.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.twitter.com" class="icone"><img src="img/tw.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.youtube.com" class="icone"><img src="img/yt.png" alt="" width="42px" height="42px"></a></li>
                    <li style="float: right;"><a href="http://www.pinterest.com" class="icone"><img src="img/pit.png" alt="" width="42px" height="42px"></a></li>
                </ul>
            </nav>
        </header>
        <main>
                <p id="resultado"></p>
                <div class="quadroprincipal">
                        <h2>Cadastro no Site</h2>
                        <blockquote>
                           Somente pessoas cadastradas tem permissão de adicionar novos usuários. 
                        </blockquote>
         <div class="caixaformulario">
         <form action="cadastro.php" method="post">
        <fieldset>
        <legend>Informações Pessoais</legend>
        
        <label for="nome">Nome</label><BR>
        <input type="text" id="nome" name="nome"><BR>

        <label for="sobrenome">Sobrenome</label><BR>
        <input type="text" id="sobrenome" name="sobrenome"><BR>

        <label for="email">E-mail</label><BR>
        <input type="text" id="email" name="email"><BR>

        <label for="telefone">Telefone</label><BR>
        <input type="text" id="telefone" name="telefone"><BR>

        <label for="senha">Senha</label><BR>
        <input type="password" id="senha" name="senha"><BR><BR>

        <label for="senha">Gênero</label><BR>
        <input type="text" id="genero" name="genero"><BR><BR> 
   
        <center>
        <input type="reset" id="limpar" value="Limpar">
        <input type="submit" id="enviar" value="Enviar">
        <button id="verificar" onclick="verificaCampos();">Verificar</button>
        <BR> <BR> <BR>
        <a class ="btn_cad" href = "admin/usuario/index_us.php"> Visualizar usuários </a> 
        <a class= "btn_cad" href="../logout.php"> Sair </a>
        </center>
        </fieldset>
    </form>
    </div>
 </div>
</main>

    
</body>
</html>