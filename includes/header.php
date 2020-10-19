<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/sidebar.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
</head>
<body>   
    
    <!-- nav bar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg  navbar-light  bg-transparent" id="lce-nav">
        <a class="navbar-brand" href="#">
          <span class="lce-primary">
            LCE-SHOP
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav offset-8">
            <li class="nav-item active lce-space">
              <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item lce-space">
              <a class="nav-link" href="#">Link</a>
            </li>-->
            <li class="nav-item dropdown lce-space">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catégorie
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="list-product.html">Biens Consommables</a>
                <a class="dropdown-item" href="list-product.html">Biens Non-consommables</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="list-product.html">Tous les articles</a>
              </div>
            </li>
            <li class="nav-item lce-space">
              <a class="nav-link"  href="cart.html">
                <i class="material-icons lce-primary">shopping_cart</i>
                <span class="number">0</span>
              </a>
            </li>
          </ul>          
        </div>
      </nav>
    </div>
      <!-- end of nav bar-->