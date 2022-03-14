<?php
session_start();
if(isset($_SESSION['email'])){
  // header('location:produit.php');

}
require_once('connection.php');
$email = $password = $pwd = '';
if(isset($_POST['seConnecter'])){
$email = $_POST['email'];
$pwd = $_POST ['password'];
$password = sha1($pwd);
$sql = "SELECT email,pass FROM client WHERE email='$email' AND pass='$password'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_assoc($result);
	
		$id = $row["idClient"];
		$email = $row["email"];
		$_SESSION['idClient'] = $id;
		$_SESSION['email'] = $email;
    header('location:produit.php');
	
}else{
        $message[] = 'incorrect password or email!';

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
    <link href="frontend/loginstyle.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
  
    <div class="container-fluid">
        <div class="row">
          <div id="leftmain" class="col-md-8">
            <a href="produit.php">
          <img id="logo" src="images/logo.png"></a>
          <h1>Bonjour, beauté !<strong > Connectez-vous.</strong></h1>
          <h3>Connexion</h3>
          <form method="POST" action="">
          <input type ="text" name="email" id="email" placeholder="Adresse e-mail" required><br>
          <input type ="password" name="password" id="mdp" placeholder="Mot de passe" required><br>
          <div id="svn"><a><input type="checkbox" id="ho"> Se souvenir de moi</a><br></div>
          <button name="seConnecter">Se Connecter</button><br>
          <div id="comm"><a>Vous n'avez pas de compte?</a>
          <a href="inscription.php" id="Commencer"><strong >&nbsp Commencer</strong></a></div>
          </form>
          </div> 
          <div id="rightmain" class="col-md-4">
             <img src="images/img1.jpg" id="img">

          <script>

          let image=document.getElementById('img');
          let images=['images/img1.jpg','images/img2.jpg','images/img3.jpg','images/img4.jpg']
          setInterval(function(){
             let random=Math.floor(Math.random()*4);
             image.src=images[random];
          },750);
          </script></div>



         








    
</body>
</html>