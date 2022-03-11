<?php
require ("inscription.php");
require ("connection.php");
    
           $nom = $_POST["nom"];
           $prenom = $_POST["prenom"];
           $adresse = $_POST["adresse"];
           $number = $_POST["telephone"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $sql = "INSERT INTO client (idClient, nom, prenom, adresse, telephone, email, pass)
            VALUES ( null,'$nom','$prenom','$adresse','$number','$email','$password'
            );";

mysqli_query($db,$sql);
       ?>