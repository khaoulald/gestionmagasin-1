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