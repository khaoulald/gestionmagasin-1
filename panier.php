<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST["addToCard"])){
    if(isset($_SESSION["card"])){

      $produits = array_column($_SESSION['card'],'libelle');
      if(in_array($_POST["libelle"],$produits)){
        echo'<script>alert("cette ptoduit deja en panier");window.location.href="produit.php";</script>';

      }
      else{
          $count = count($_SESSION['card']);
      $_SESSION["card"][$count]=array('libelle'=>$_POST['libelle'],'prix'=>$_POST['prix'],'quantite'=>45);
      echo'<script>alert("cette ptoduit add en panier");window.location.href="produit.php";</script>';  
      
      }
     
     
    }
    else{
      $_SESSION["card"][0]=array('libelle'=>$_POST['libelle'],'prix'=>$_POST['prix'],'quantite'=>45);
      echo'<script>alert("cette ptoduit add en panier");window.location.href="produit.php";</script>';  

    }
  }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="panier.css" rel="stylesheet">
    <title>Panier</title>
</head>
<body>
  <div>
    <ul id="firstul" class="list-group list-group-horizontal">
        <li >LIVRAISON OFFERTE DÈS 40€</li>
        <li class="li2">RETOURS ET ÉCHANGES PENDANT 60 JOURS</li>
        <li class="li3">FAQ CORONAVIRUS</li>
      </ul>

</div>
</div>
<nav id="navbar" class="navbar">
    <div class="container-fluid">
      <a href="produit.php"><img id="logo" src="images/logo.png"></a>
        

    
    </div>
  </nav>
  <header>

    <img src="images/nav (2).png">
    </header>
    <main>
      <section class="bigsection">
      <section class="firstscc">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Produit</th>
            <th scope="col">Prix</th>
            <th scope="col-2">Quantité</th>
            <th scope="col-2">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if(isset($_SESSION['card'])){
              foreach($_SESSION['card']as $key =>$value){
                echo'
                    <td scope="col">'.$value["libelle"].' </td>
                    <td scope="col">'.$value["prix"].'</td>
                    <td scope="col">
                        
                        <div class="wrapper">
                          <span class="minus">-</span>
                          <span class="num">01</span>
                          <span class="plus">+</span>
                        </div>              
                        <script>
               const plus = document.querySelector(".plus"),
                minus = document.querySelector(".minus"),
                num = document.querySelector(".num");
                let a = 1;
                plus.addEventListener("click", ()=>{
                  a++;
                  a = (a < 10) ? "0" + a : a;
                  num.innerText = a;
                });

                minus.addEventListener("click", ()=>{
                  if(a > 1){
                    a--;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                  }
                });

              </script>
</td>';
          }
          }

          ?>


          <th scope="col"></th>
          <td  scope="col"><a href="#" class="btn btn-primary">Effacer</a></td>
        </tbody>
      </table>
    </section>
    <section class="secondsc">
      <h3>Carte Total</h3>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <div class="card-title">
            <h5>Subtotals:</h5>
            <h5>100$</h5>
          </div>
          <hr>
          <div class="card-title">
            <h5>Totals</h5>
            <h5>200$</h5>
          </div>
          <hr>
          <p class="card-text">Shipping & taxes calculated at checkout</p>
          <a href="#" class="btn btn-primary">Passer a la caisse</a>
        </div>
      </div>
      
    </section>
  </section>

    </main>










    
</body>
</html>