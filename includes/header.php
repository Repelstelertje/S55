<?php

  $companyName = "Sex55.net";
  include('includes/nav_items.php');

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="nl-NL">

<head>

<meta http-equiv="content-type" content-type="text/html" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Gratis dating - Ben jij op zoek naar een partner of een leuke gratis date? Hier vind je meer dan 10.000 vrijgezellen. Aanmelding is 100% gratis.">
<meta name="author" content="Oproepjes Nederland">
<meta http-equiv="Content-Security-Policy" content="
  default-src *; 
  font-src 'self' https://fonts.gstatic.com ;
  img-src 'self' https://16hl07csd16.nl/ https://region1.google-analytics.com www.googletagmanager.com https://ssl.gstatic.com https://www.gstatic.com https://www.google-analytics.com https://20fhbe2020.be/;
  style-src 'self' https://tagmanager.google.com https://fonts.googleapis.com/ 'unsafe-inline'; 
  style-src-elem 'self' https://tagmanager.google.com https://fonts.googleapis.com/ 'unsafe-inline'; 
  connect-src 'self' https://region1.google-analytics.com https://tagmanager.google.com/ https://www.google-analytics.com https://16hl07csd16.nl/ https://20fhbe2020.be/;
  script-src 'self' http://* https://www.googletagmanager.com https://www.google-analytics.com https://ssl.google-analytics.com https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/ https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/ 'nonce-googletagmanager' 'nonce-2726c7f26c' 'sha256-WwSlXI54tpz3oRisOne8KKEqXFjbTYCI2AzKef7+7nE=' 'unsafe-inline' 'unsafe-eval'
  " >

<link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
<link rel="manifest" href="img/fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php
if(isset($_GET['item'])){
  echo '<link rel="canonical" href="https://sex55.net/sexdate-'.$_GET['item'].'" >';
  echo '<title>Sexdate '.$_GET['item'].' | Sex55.net</title>';
} else if(isset($_GET['id'])){
  echo '<link rel="canonical" href="https://sex55.net/profile?id='.$_GET['id'].'" >';
  echo '<title>Sexdate met '.$_GET['id'].' | Sex55.net</title>';
} else {
  echo '<link rel="canonical" href="https://sex55.net" >';
  echo '<title>55+ Sexdating | Sex55.net</title>';
}
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TFQ77HGPY0" nonce="2726c7f26c" SameSite=None; Secure></script>
<script nonce="2726c7f26c" SameSite=None; Secure>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TFQ77HGPY0');
</script>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">

</head>

<body id="top">
  <div id="oproepjes">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="https://sex55.net/"><img class="logo" src="img/logo.png" alt="Sex55.net"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu</button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
            include('includes/nav.php');
          ?>
        </div>
      </div>
    </nav>




