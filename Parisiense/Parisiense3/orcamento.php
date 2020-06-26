<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Vibur" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/meuestilo.css">
        <script src="js/acoes.js"></script>
        <title>Orçamento</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                <li><a href="index.php" class="logo">A PARISIENSE</a></li>
                    <li><a href="metro.php">METRÔ</a></li>
                    <li><a href="bistro.php">BISTRÔS</a></li>
                    <li><a href="cadastro_p.php">CADASTRO</a></li>
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
            <div class="quadroprincipal" style="width: 70%; margin-left: 15%;">
                    <div class="painelimagem" style="background-image: url(img/louvre.jpg); background-position: -250px -250px;">
                    </div>
                    <h3>Planos de Turismo</h3>
                    <label>
                        <br>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="500">
                        Passeio de carruagem pelo Park D'Prince [500 &euro;]
                    </label><br>
                    <label>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="630">
                        Tarde de história no Museu do Louvre [630 &euro;]
                    </label><br>
                    <label>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="460">
                        Jantar no Bistrô de Marquê Blanche [460 &euro;]
                    </label><br>
                    <label>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="890">
                        Passeio exclusivo no Palácio de Versales [890 &euro;]
                    </label><br>
                    <label>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="770">
                        Branch na Vila dos Carmezzins Estádio Olimpico de Paris [770 &euro;]
                    </label><br>
                    <label>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="1650" checked>
                        Passagens Aéreas via Air France (Ida e Volta Aeroporto Charles Degoulet) [1650 &euro;]
                    </label><br>
                    <label>
                        <input type="checkbox" name="opcional[]" class="etiquetas" value="960" checked>
                        Hospedagem Hotel Charlemagne (7 dias e 6 noites, 4 estrelas) [960 &euro;]
                    </label><br>
                    <iframe class="painelimagem" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.6105903510156!2d2.2564443946282093!3d48.88469959264908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6722398ad6911%3A0xf03fc3c05b5dcd44!2sHotel+Charlemagne!5e0!3m2!1spt-BR!2sbr!4v1541779197896" frameborder="0" allowfullscreen></iframe>
                   <br>
                    <label>
                        <input type="text" name="valorfinal" id="soma" value="0" placeholder="0" style="width: 30%;">
                    </label><br>
                    <span id="orcamento"></span>
                        <button id="calcularTurismo" onclick="coletarValores()">Calcular Valor Total</button> 
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>