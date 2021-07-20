<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="images/logo-color.png">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/lightslider.css">
  <!-- Bootstrap Project -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Font Awesome - Material Design-->
  <script src="https://kit.fontawesome.com/e04169252f.js" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/mec4tub.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Manrope&display=swap" rel="stylesheet">
  <!--JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/JQuery3.3.1.js" charset="utf-8"></script>
  <script src="js/lightslider.js" charset="utf-8"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-202757131-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-202757131-1');
</script>
</head>

<body>
  <section class="menu-white">
    <div class="buscar">
      <button type="button" name="submit"><i class="fas fa-search"></i></button>
      <input class="buscar-input" type="text" name="articulos_buscar" id="articulos_buscar" placeholder="BUSCAR ARTÍCULO..." autocomplete="off">
      <div class="lista-articulos" id="listaArticulos">

      </div>
    </div>
    <div class="redes">
      <a href="https://www.facebook.com/viveenlibertad.pe" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/viveenlibertad.pe/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </section>

  <section class="header">
    <a href="index.php"><img class="logo-blanco" src="images/logo-blanco.png"></a>
    <div class="row g-0">
      <div class="col-lg-6">
        <img src="images/banner-nube.png" class="banner-nube">
      </div>
      <div class="col-lg-6">
        <img src="images/banner-frase.png" class="banner-frase">
      </div>
    </div>
  </section>
