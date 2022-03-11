<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="frontend/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <ul id="firstul" class="list-group list-group-horizontal">
            <li >LIVRAISON OFFERTE DÈS 40€</li>
            <li class="li2">RETOURS ET ÉCHANGES PENDANT 60 JOURS</li>
            <li class="li3">FAQ CORONAVIRUS</li>
          </ul>

    </div>
    <nav id="navbar" class="navbar">
        <div class="container-fluid">
            <img class="logo" src="images/logo.png">

          <form class="d-flex">
              <ul id="scul">
                <a href="login.php" >
                  <svg class='logIn' xmlns="http://www.w3.org/2000/svg" width="20" height="22" color="white" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg></a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" color="white" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                  </svg>
                
                <li></li>
                <li></li>
              </ul>
          </form>
        </div>
      </nav>
      <header>
          <div class="text"><h1><strong>Ǝ</strong>LLE</h1>
        <h2>you deserve to feel beautiful</h2></div>
        <div class="video">
            <video autoplay muted loop class="video">
                <source src="images/header.mp4">
             </video>
        </div>
    </header>
    <main>
      <!-- ----------firstprds----------- -->
      <H1>Meilleur ventes</H1>
      <section  style="display:grid;grid-template-columns:repeat(3,1fr);">
      
      <?php
        include('connect.php');

          $selectProduits= $connect->prepare("SELECT * FROM produit LIMIT  3");
          $selectProduits->execute();
          foreach($selectProduits as $result){
            echo'
            <form action="detailCommande.php" action method="post">
            <div class="container">
                    <div class="card" style="width: 18rem;">
                    <a href="detailCommande.php?id='.$result["idProduit"].'">
                      <img class="card-img-top" id="pr1" src='.$result["image"].' alt="Card image cap">
                    </a>
                        <div class="card-body">
                          <h5 class="card-title">'.$result["libelle"].'</h5>
                          <h6 class="card-title">'.$result["prix"].'$</h6>
                          <a href="detailCommande.php?id='.$result["idProduit"].'" class="btn btn-light">Ajouter au panier</a> 
                        </div>
                      </div>
                  </div>
                  </form>';

         
          }
      ?>
      </section>
   <br><br>
<!-- ---------col--------- -->
    <div class="container-fluid">
        <div class="row">
          <div id="leftmain" class="col-md-5">
              <img src="images/levre.png">
          </div>
          <div id="rightmain" class="col-md-7">
              <div id="text">
              <h1>Découvrez les Double Touch<br>Lipstick Kit en édition limitée</h1></div>
              <a href="http://localhost/produit%20cosm%C3%A9tique/detailCommande.php?id=10" id="btnx" class="btn">ACHETER</a>
          </div>

        </div>
      </div>
      
      <!-- ----------secondprds----------- -->


<section   style="display:grid;
                  grid-template-columns:repeat(3,1fr);">
    
    <?php
    include("connect.php");

    $selectProduits2=$connect->prepare("SELECT * FROM produit LIMIT 3,6 ");
    $selectProduits2->execute();
    foreach($selectProduits2 as $result){
      echo'
        <form action="detailCommande.php" method="post">
          <div id="sccontainer" class="container">
                
                      <div class="card" style="width: 18rem;">
                      <a href="detailCommande.php?id='.$result["idProduit"].'">
                          <img class="card-img-top" id="pr4" src='.$result["image"].' alt="Card image cap">
                        </a>
                          <div class="card-body">
                            <h5 class="card-title">'.$result["libelle"].'</h5>
                            <h6 class="card-title">'.$result["prix"].'$</h6>
                            <a href="detailCommande.php?id='.$result["idProduit"].'" class="btn btn-light">Ajouter au panier </a> 
                            </div>
                      </div>
                  
          </div>
        </form>
      ';
    }
    ?>
</main>
<?php include('frontend/footer.php'); ?>
</body>
</html>