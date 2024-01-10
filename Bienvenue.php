<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
 <link rel="stylesheet" href="Commander.css">
</head>
<body>
    <?php  
    echo "<p class='message'> Bonjour"." ".$_SESSION['email']." "."votre commande enregister"."</p>";
    ?>
</body>
</html>