<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Vibur" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/meuestilo.css">
        <script src="js/acoes.js"></script>
        <title>Álbum</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php" class="logo">A PARISIENSE</a></li>
                    <li><a href="metro.php">METRÔ</a></li>
                    <li><a href="bistro.php">BISTRÔS</a></li>
                    <li><a href="admin/usuario/cadastro_p.php">CADASTRO</a></li>
                    <li><a href="album.php">ALBUM</a></li>
                    <li><a href="dica.php">DICAS</a></li>
                    <li><a href="orcamento.php">ORÇAMENTO</a></li>
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
            <div class="quadroprincipal">
            <label for="figura">Selecionador de Imagens: </label>
            <select name="imagensAlbum" id="selecionador" onchange="trocaImagem();">
                <option value="0">Selecione um lugar</option>
                <option value="1">Museu I'Orangerie</option>
                <option value="2">Musée Britânico</option>
                <option value="3">Musée Rodin</option>
                <option value="4">Museu National Gallery</option>
                <option value="5">Museu Pérgamo</option>
                <option value="6">Museu Prado</option>
            </select>
            <br>
            <center>
            <span id="imagemAlbum">
            </span>
            </center>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>