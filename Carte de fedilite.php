<?php
require 'creation_carte.php';
if(isset($_POST['envoi'])){
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$cin = $_POST['cin'];
$tel = $_POST['tel'];

$query = "INSERT INTO visiteur VALUES ('','$prenom','$nom','$cin','$tel')";
mysqli_query($conn,$query);
echo
"
<script> alert('la carte de fèdilite est terminé avec le succès');</script>
";

}
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title> carte de fedilite</title>
   <link rel="stylesheet" href="carte de fedilite.css">
</head>

<body>
    <h5>Saisir Vos Informations :</h5>
    <fieldset>
        <legend> Les informations de client: </legend>
        <form action="" method="POST" autocomplete="off">
            <div class="prenom">
                <label for="aa">Prenom:</label>
                <input type="text" name="prenom" id="Pr" >
            </div> </br>
            <div class="nom">
                <label for="aa">Nom:</label>
                <input type="text" name="nom" id="No" >
            </div></br>
            <div class="cin">
                <label for="aa">CIN:</label>
                <input type="text" name="cin" id="Ci" >
            </div></br>
            <div class="telephone">
                <label for="aa">Telephone:</label>
                <input type="tel" name="tel"id="Te" >
            </div></br>
            <div class=" prix">
                le prix d'abonnement est 1000.00 DH par l'annèe. </br>le paiment par ce lien : <a
                    href="file:///C:/Users/pc/Desktop/Projet-DevWeb/Projet%20TP%20de%20WEB.html">la page d'acceuil</a> </div></br>
            <div class="b">
                <input type="submit" class="QQ" value="Valider" name="envoi">
                <a href="file:///C:/Users/pc/Desktop/Projet-DevWeb/Projet%20TP%20de%20WEB.html"><button
                        class="WW">Annuler</button>
                </a>

            </div>
        </form>
    </fieldset>
</body>