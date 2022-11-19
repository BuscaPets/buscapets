<?php
session_start();
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BuscaPet - Login</title>
  <link rel="stylesheet" href="css/loga_cliente.css">
</head>
<body>
  <section>
    <div class="box-img">
      <img src="img/bg-pets.jpg" alt="Imagem de fundo">
    </div>

    <div class="box-content">
      <div class="box-form">
        <h2>Login</h2>
        
        <form action="checar_login.php" method="post">
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
          <div class="box-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email">
          </div>

          <div class="box-input">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
          </div>
          <div class="esqueceusenha">
            <p>Esqueceu a senha?</p>
            </div>
          
          <div class="box-input">
            <p>Não tem uma conta <a href="cadastrar_cliente.php">Cadastre-se</a></p>

          <div class="box-input">
            <input type="submit" name="submit" value="Enviar">
          </div>
        </form>
      </div>
    </div>
  </section>
  </div>
</body>
</html>