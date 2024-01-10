<?php  
session_start();
if(isset($_POST["boutton-Valider"])){
    if(isset($_POST['email'])&&isset($_POST['mdp'])){
        echo "";
    }
    else
    echo "Veuillez rentrer vos informations ";
    
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $erreur="";
    $nom_serveur ="localhost";
    $user="root";
    $mot_de_passe="";
    $nom_base_données="form";
    //connexion avec la bdd
    $con = mysqli_connect($nom_serveur,$user,$mot_de_passe,$nom_base_données );
    //requete
    $req = mysqli_query($con," SELECT * FROM client where email='$email' AND mdp='$mdp'  ");
    $num_ligne= mysqli_num_rows($req);
    if($num_ligne>1){
        header("Location: Bienvenue.php");
        $_SESSION['email']=$email;
      
    }
    else{
        $erreur="Votre email ou bien mot de passe incorrecte !";
    }
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title> Commander</title>
    <link rel="stylesheet" href="Commander.css">
</head>

<body>
<?php
if(isset($erreur))
echo "<p class='Erreur'>".$erreur." </p>" ;  
?>
    <form action="" method="POST">
        <h5>Saisir Vos Informations :</h5>
        <fieldset>
            <legend> Les informations de client: </legend>
            <div class="d1">
                <label for="f">Email:</label>
                <input type="email" id="in1" name="email" required invalid valid>
            </div></br>
            <div class="d2">
                <label for="f">Mot de passe:</label>
                <input type="Paaseword" name="mdp" id="in2" minlength="8" maxlength="15" required invalid valid>
            </div></br>

            <div class="d3">
<input type="submit"  value="Valider" name="boutton-Valider" id="b1">
              
            </div>
        </fieldset>
    </form>

</body>