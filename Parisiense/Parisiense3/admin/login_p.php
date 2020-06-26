<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/meuestilocss">
</head>
<body>
<div class="caixaformulario">
    <form class="login" action="login.php" method="post">
    <fieldset>
        <?php
           if(isset($_GET['erro'])){
               if($_GET['erro'] == 1){
                   echo '<strong> Senha está errada! </strong>';
               } else{
                   echo '<strong> Login está errado! </strong>';
               }
               echo '<br><br>';
           }
             

        ?>
        <h2> Login </h2>
        <input type="text" name="login" placeholder="E-mail">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <button type="submit">Acessar</button>
        </fieldset>
    </form>
        </div>
</body>
</html>