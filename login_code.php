<!-- <?php

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST ['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM client WHERE email='$email' AND pass='$pwd'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_assoc($result);
	
		$id = $row["idClient"];
		$email = $row["email"];
		session_start();
		$_SESSION['idClient'] = $id;
		$_SESSION['email'] = $email;
	
	header('location:produit.php');
}
else
{
	echo "<div>
	email ou mot de passe incorrect
	</div>";
}
?> -->