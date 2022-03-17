<?php
session_start();
include('connection.php');
if(isset($_POST['passerCommand'])){
    $emailClient = $_SESSION['email'];
$select='SELECT * FROM client WHERE email="$email"';
$result= mysqli_query($db, $select);
foreach($result as $row){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="frontend/insc.css" rel="stylesheet">
        <title>Detail Adress</title>
    </head>
    <body>
        
                    <form>
                <div class="mb-3">
                    <label for="nom" class="form-label">NOM:</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row['email']?>"required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom:</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="mb-3">
                    <label for="num" class="form-label">Telephone:</label>
                    <input type="text" class="form-control" id="num" name="telephone" required>
                </div>                
                <div class="mb-3">
                    <label for="adr" class="form-label">Adresse:</label>
                    <input type="text" class="form-control" id="adr" name="adresse" required>
                </div>                
                <div class="mb-3">
                    <label for="ville" class="form-label">ville:</label>
                    <input type="text" class="form-control" id="ville" name="ville" required>
                </div>
                <button type="submit" name="confirmerCommande" class="btn btn-primary">Submit</button>
                </form>
    </body>
    </html>
