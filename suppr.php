<?php

require_once 'connexion.php';

    if(isset($_GET["ID"]))
    {
        $id = $_GET["ID"];
        if(!empty($id) && is_numeric ($id))
        {
            $query = "DELETE FROM monprojet WHERE ID=$id";
            $db->exec($query);
            header("Location:liste_app.php");
        }
    }
               
?>