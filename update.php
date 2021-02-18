

<?php
require_once "connexion.php";

$EMAIL =  $_POST['EMAIL'];
$NOM =  $_POST['NOM'];
$PRENOM =  $_POST['PRENOM'];
$DATE =  $_POST['DATE'];
$FORMATION =  $_POST['FORMATION'];

$update = $db->prepare('UPDATE monprojet SET EMAIL=?, NOM=?, PRENOM=?, DATE=?, FORMATION=? WHERE EMAIL=?' );
 $update->execute(array($EMAIL, $NOM, $PRENOM, $DATE, $FORMATION,$EMAIL));

if($update){
    header("Location:liste_app.php");

}

?>