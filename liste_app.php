<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
require_once 'connexion.php';
?>
<?php include ('header.php');?>
<div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="liste_tableau">
                    <table width=100%>
                        <tr>
                            <th>Identifiant</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>EMAIL</th>
                            <th>ACTION 1</th>
                            <th>ACTION 2</th>
                            <th>ACTION 3</th>
                        </tr>
                        <tr>
                            <?php
                            $afficher=$db->query('SELECT*FROM monprojet order by EMAIL ASC');
                                while($ligne = $afficher->fetch()){
                                    echo "<tr>
                                            <td>$ligne[0]</td>
                                            <td>$ligne[1]</td>
                                            <td>$ligne[2]</td>
                                            <td>$ligne[3]</td>
                                            <td><a class='btn btn-success' href='details.php'>Voir détails</a></td>
                                            <td><a class='btn btn-warning' href=''>modifier</a></td>
                                            <td><a class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cet apprenant?\")'; href='suppr.php?ID=$ligne[0]'>Supprimer</a></td>
                                        </tr>";
                                }
                            ?>
                        </tr> 
                    </table>
                </div> 
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <style>
        td{
            color:white;
        }
        
    </style>
    </body>
</html></body>
</html>
    <a href="index.html"><p class='text-center'><button type="button" class="btn btn-outline-warning">Retour</button></p></a>

    <?php include ('footer.php');
    
    
?>
