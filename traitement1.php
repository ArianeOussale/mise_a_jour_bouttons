<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php require_once 'connexion.php';

function securisation($donnees){
    $donnees=trim($donnees);
    $donnees=strip_tags($donnees);
    $donnees=stripslashes($donnees);
    return $donnees;
}

$nom= securisation($_POST['nom']);
$prenom = securisation($_POST['prenom']);
$NomUtilisateur = securisation($_POST['NomUtilisateur']);
$MotDePasse= securisation($_POST['MotDePasse']);
$confirm_MotDePasse= securisation($_POST['confirm_MotDePasse']);

$preparation=$db->prepare('INSERT INTO connect VALUES(:nom,:prenom,:NomUtilisateur,:MotDePasse,:confirm_MotDePasse)');

$preparation->bindParam(':nom',$nom);
$preparation->bindParam(':prenom',$prenom);
$preparation->bindParam(':NomUtilisateur',$NomUtilisateur);
$preparation->bindParam(':MotDePasse',$MotDePasse);
$preparation->bindParam(':confirm_MotDePasse',$confirm_MotDePasse);



if($MotDePasse!=$confirm_MotDePasse){
   header('Location:inscription.php');
  die();
}
?>
<div class="alert alert-success mt-4" role="alert">
  <h4 class="alert-heading text-center">Feleicitations!!! compte bien cree</h4>
  <p class="text-center mt-3"><a href="connect.php">cliquez ici pour vous connecter</a></p>
  <p class="text-center mt-3"><a href="inscription.php"> Ajouter</a></p>
</div>
</body>
</html>