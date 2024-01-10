<?php
require 'paie.php';
if(isset($_POST['Enregister'])){
$nom = $_POST['nom'];
$numero = $_POST['numero'];
$num = $_POST['num'];
$CVV2= $_POST['CVV2'];
$query = "INSERT INTO paiement VALUES ('','$nom','$numero','$num','$CVV2')";
mysqli_query($conn,$query);
echo
"
<script> alert('payer enregistrer');</script>
";
}
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title> Paiement</title>
 <link rel="stylesheet" href="Style.css">
</head>

<body>
    <h5>Carte de débit ou de de crédit </h5>
    <h1>Informations de la carte </h1>
    <form action="" method="post" autocomplete="off" id="">
        <div class="nom1">
            <input type="text" id="nom" name="nom" placeholder="Nom figurant sur la carte" required>
        </div> </br>
        <div class="numero1">
            <input type="number" id="num1" name="numero" placeholder="Numèro de carte" required>
        </div> </br>

        <input type="number" id="num2" name="num" placeholder="MM/AA"  required>


        <input type="number" id="CVV1" name="CVV2" maxlength=3  placeholder="CVV"  required>
        </br>
        <div class="butt">
            <input type="submit" name="Enregister" value="Enregister" class="butto">
        </div>
    </form>

</body>