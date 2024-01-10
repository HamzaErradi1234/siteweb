<?php
require 'Liv.php';
if(isset($_POST['bouton'])){
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];


$query = "INSERT INTO livraison VALUES ('','$ville','$adresse')";
mysqli_query($conn,$query);
echo
"
<script> alert('votre demande de livraison est valider');</script>
";
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title> Livraison</title>
    <link rel="stylesheet" href="Livraison.css">
</head>

<body>
    <h5>Saisir Vos Informations :</h5>
    <fieldset>
        <legend> Les informations de client: </legend>
        <form action="" method="post" autocomplete="off" id="myForm">
            <div class="ville">
                <label for="aa">Ville:</label>
                <input type="text" id="V" name="ville" required>
            </div> </br>
            <div class="adresse">
                <label for="aa">Adresse:</label>
                <input type="text" id="Ad" name="adresse" required>
            </div>
            <div class="b">
                <input type="submit" name="bouton" value="Envoyer" id="b1">
               
            </div>
        </form>
    </fieldset>
    
</body>