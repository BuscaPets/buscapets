<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/loga_cliente.css">
</head>
<body>
     <section>
    <div class="box-img">
      <img src="img/bg-pets.jpg" alt="Imagem de fundo">
    </div>

    <div class="box-content">
      <div class="box-form">
        <h2>Cadastre-se</h2>
        
        <form action="checar_cadastro.php" method="post">
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['sucesso'])) {?>
            <p class="sucesso" id="sucesso"><?php echo $_GET['sucesso']; ?></p>
        <?php } ?>
        <div class="box-input">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome">   
        </div>
        
        <div class="box-input">
        <label for="nome">CPF</label>
        <input type="text" name="cpf" \
			pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
			title="Digite um CPF no formato: xxx.xxx.xxx-xx" placeholder="Digite seu CPF">
        </div>
        
        <div class="box-input">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Digite seu email">
        </div>
        
        <div class="box-input">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        
        <div class="box-input">
        <label for="confirm_senha">Confirmar senha</label>
        <input type="password" name="confirm_senha" placeholder="Confirme sua senha">
        
        
          <div class="box-input">
            <p><a href="logar_cliente.php">Já tem uma conta?</a></p>

          <div class="box-input">
            <input type="submit" name="submit" value="Enviar">
          </div>
        </form>
      </div>
      </div>
    </div>
  </section>
  </div>
</body>
</html>