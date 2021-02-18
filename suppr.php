

<?php

   require_once 'connexion.php';
   $id = $_GET['ID'];
   $en = $db->prepare('DELETE FROM monprojet WHERE ID=?');
   $en->execute(array($id));
   if ($en){
    header("Location:liste_app.php");
   }   

?>