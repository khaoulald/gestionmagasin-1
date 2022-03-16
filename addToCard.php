<!-- <?php include('connect.php');
session_start(); 
include('header.php');
?>
<?php if (isset($_POST['addToCard'])){

    if(isset($_SESSION['addToCard'])){
        
    }else{
        $SESSION_array = array(
            'idProduit' => $_POST['idProduit'],
            'nom' => $_POST['libelle'],
            'prix' => $_POST['prix']
        );
        $_SESSION['addToCard'] = $SESSION_array;
    }


  $checkProduit = $connect->prepare("SELECT * FROM produit  WHERE idProduit = '$idProduit'");
  $checkProduit->bindParam($idProduit,$_POST['addToCard']);
  $checkProduit->execute();
  foreach($checkProduit as $resultCard){

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

<?php 
    var_dump($_SESSION['addToCard'])?>
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
          <th scope="col"><?php echo $resultCard['image']?></th>
          <th scope="col">Prix</th>
          <th scope="col">
              
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
</th>
          <th scope="col">Total</th>
          <th  scope="col"><a href="#" class="btn btn-primary">Effacer</a></th>
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
</html> -->



<!-- 
<?php 

class DB{
    private $serverN = 'localhost';
    private $userN = 'root';
    private $passwordN ="";
    private $database = "gestionmagasin";
    private $conne;


    function _construct() {
        $this->conne = $this->connectDB();
    }
    
    function connectDB() {
        $conne = mysqli_connect($this->serverN,$this->userN,$this->password);
        return $conne;
    }
    function runQuery(){
    $result = mysqli_query($this->conne,$this->query);
    while($row = mysqli_fetch_array($result)){
        $result[]= $row;
    }
    if(!empty($resultTst)){
        return $resultTst;
    
    }
    function numRow($query){
        $result = mysqli_query($this->conne,$query);
        $rowCount = mysqli_num_rows($result);
        return$rowCount;
    }
}


?> -->