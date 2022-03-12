<?php
require ("inscription.php");
require ("connection.php");

if(isset($_POST['submit'])){           
       $email = $_POST["email"];
       $checkEmail = "SELECT * FROM client WHERE email ='$email'";
       $Result = mysqli_query($db, $checkEmail);
       if(mysqli_num_rows($Result)>0){
              echo'cet compte est exists';
              
       }
       else
       {
              $nom = $_POST["nom"];
              $prenom = $_POST["prenom"];
              $adresse = $_POST["adresse"];
              $number = $_POST["telephone"];
              $email = $_POST["email"];
              $password = $_POST["password"];

       $detailClient = "INSERT INTO client (idClient, nom, prenom, adresse, telephone, email, pass)
            VALUES ( null,'$nom','$prenom','$adresse','$number','$email','$password'
            );";
            mysqli_query($db,$detailClient);
              echo'ok';
       }

}





       ?>