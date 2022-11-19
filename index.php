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
   <title>BuscaPet | Início</title>
   <link rel="shortcut icon" href="img/logo_buscapet.ico" type="image/x-icon">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="index.css">

</head>
<body>
   
<header class="header">

    <h1 class="logo"><a href="../index.php"><img src="./imgs/logo.p.png" alt="" width="50px"></a></h1>
    <nav class="navbar">
      <a href="index.php">Início</a>
      <a href="painel_de_pets/paineldepets.php">Painel de Pets</a>
      <a href="loja/loja.php">Loja</a>
      <a href="ajuda.html">Ajuda</a>
   <?php
   if (isset($_SESSION['email'])){
      if ($_SESSION['acesso'] === 'Administrador'){?>
      <a href="paineladm/paineladm.php">Painel Adm</a>
    <?php }
    }  ?>
    </nav>

    <div class="icones">
    <?php
    if (isset($_SESSION['email'])){?>
    <div class="pstn" >
      <button class="btn_opcoes" id="btn_opcoes">
         <a href="perfil/perfil.php?id=<?=$_SESSION['id']; ?>"><i class="fa-solid fa-user"></i></a>
      </button>
   </div> 
    <?php 
    } else{?> 
    <a href="logar_cliente.php"><button class="btn_login">Login</button></a>
    <?php
    }
    ?> 
    </div>
  </header>
<div class="opcoes" id="opcoes" style="display: none;">
   <a href="perfil/perfil/perfil.php"><i class="fa-regular fa-user"></i>Perfil</a>
   <hr>
   <a href="deslogar_cliente.php"><i class="fa-solid fa-right-from-bracket"></i>Deslogar</a>
</div>
<script>
      var btn = document.getElementById('btn_opcoes');

      var opcoes = document.getElementById('opcoes');

      btn.addEventListener('click', function() {
         if(opcoes.style.display != 'block') {
            opcoes.style.display = 'block';
            return;
         }
         opcoes.style.display = 'none';
      });
   </script>
   <script src="indexx.js"></script>
   <main>
   <!--Home -->
<section class="home" id="home">
         <section class="slide">
         <img src="imgs/Nossos amiguinhos precisam de ajuda.png" alt="">
            <div class="content">
               <a href="#" class="btn-1">Comece agora mesmo</a>
            </div>
         </section>
      </div>
</section>

<!-- Sobre nós  -->
<section class="about" id="about">

   <h2 class="heading">Sobre nós</h2>

   <div class="image">
      <img src="imgs/img-s.jpg" alt="">
   </div>
      <div class="content">
         <h3>Somos o melhor serviço online de busca por animais!</h3>
         <a href="#" class="btn">Saiba mais</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <h4>880+</h4>
         <p>pets encontrados</p>
      </div>
      <div class="box">
         <h4>540+</h4>
         <p>pets perdidos</p>
      </div>
      <div class="box">
         <h4>290+</h4>
         <p>pets devolvidos</p>
      </div>
   </div>
</section>

<!--Nossos serviços -->
<section class="services" id="services">

   <h2 class="heading"> Nossos serviços </h2>

   <div class="box-container">

      <div class="box">
         <a href="painel_de_pets/paineldepets.php">
            <img src="imgs/painel.png"></a>
         <h3>Painel de Pets</h3>
      </div>

      <div class="box">
         <a href="loja/loja.php">
            <img src="imgs/sacolas-de-compras.png" alt=""></a>
         <h3>Loja</h3>
      </div>
   </div>

</section>
<!--Equipe-->

<section class="projects" id="projects">

   <h2 class="heading"> Nossa equipe </h2>
   <h5>Nós aqui da BuscaPet adoramos fazer reencontros felizes para os pais de pets 
e  seus amigos peludos. Confira nossa equipe amantes de animais de estimação 
que ajudam a reunir os pets com suas famílias.</h5>

   <div class="box-container">
      
      <div class="galeria">
         <img src="imgs/equipe/Alison.jpg">
         <div class="desc">
            <h3>Alison</h3>
         </div>
      </div>

         <div class="galeria">
            <img class="image-2" src="imgs/equipe/Beatriz.jpg">
            <div class="desc" style="position:relative; top:-68px;left:-66px;">
               <h3>Beatriz</h3>
            </div>
         </div>

         <div class="galeria">
            <img src="imgs/equipe/Luis.jpg" style="height: 250px; left:-100px; position: relative; top: -17px">
            <div class="desc" style="position:relative;top:-56px; left: -100px;">
               <h3>Luís Miguel</h3>
            </div>
         </div>

         <div class="galeria">
            <img  src="imgs/equipe/Maria.jpg" style="width: 83%; position: relative; left: 900px; top: -253px;">
            <div class="desc" style="position:relative; top:-284px; left: 900px;">
               <h3>Maria Luísa</h3>
            </div>
         </div>

      <div class="galeria" style="position: relative;left: 244px; top: 6px; left:
      -88px;">
         <img src="imgs/equipe/Matheus.jpg" style="position: relative; top: 8px;">
         <div class="desc" style="position:relative; top:6px;">
            <h3>Matheus</h3>
         </div>
      </div>
	  
      <div class="galeria" style="position: relative;left: -120px;">
         <img src="imgs/equipe/Patricia.jpg" alt="">
         <div class="desc" style="position:relative; top:-13px;">
            <h3>Patrícia</h3>
         </div>
      </div>
	  
      <div class="galeria" style="position: relative;left: 881px; top: -255px;">
         <img src="imgs/equipe/Sofia.jpg" style="position:relative; top:-6px; width:177px;">
         <div class="desc" style="position:relative; top:-37px; left: 0px;">
            <h3>Sofia</h3>
         </div>
      </div>

      
</section>


<!-- Rodapé -->
<section class="footer">

   <div class="box-container">

       <div class="box">
           <img src="imgs/logo.p.png" class="logo">
           <p>Siga nossas redes sociais para acompanhar nosso dia a dia. Seu apoio faz faz toda a diferença!</p>
           <div class="share">
               <a href="" class="btn fab fa-facebook-f"></a>
               <a href="" class="btn fab fa-twitter"></a>
               <a href="" class="btn fab fa-instagram"></a>
           </div>
       </div>
       
       <div class="box">
           <h3>Links Úteis</h3>
           <div class="links">
               <a href="#">Site BuscaPet</a>
               <a href="login.php">Login</a>
               <a href="cadastro.php">Cadastre-se</a>
           </div>
       </div>

       <div class="box">
           <h3>Mapa do Site</h3>
           <div class="links">
               <a href="#home">Início</a>
               <a href="#category">Ajuda</a>
               <a href="loja.html">Produtos</a>
               <a href="ajuda.html">Contato</a>
           </div>
       </div>
   </div>

   <div class="credit">Busca<span>Pet</span></div>

</section>
</main>




<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="js/index.js"></script>
<!-- js/search -->

<script>

</script>

</body>
</html>
</body>
</html>