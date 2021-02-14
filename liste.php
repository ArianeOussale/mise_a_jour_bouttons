
<?php
/*
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
<table class="table col-lg-10 col-sm-12 col-md-12 offset-1">
  <thead>
    <tr>
      <th scope="col">EMAIL</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NAISSANCE</th>
      <th scope="col">FORMATION</th>
      <th scope="col">Action 1</th>
      <th scope="col">Action 2</th>
      <th scope="col">Action 3</th>
      
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        try{
            $afficher=$db->query('SELECT*FROM monprojet order by EMAIL ASC');
            while($reccuperation=$afficher ->fetch()){
                echo "<tr>";
                echo "<td>" .$reccuperation['EMAIL']."</td>";
                echo "<td>" .$reccuperation['NOM']."</td>";
                echo "<td>" .$reccuperation['PRENOM']."</td>";
                echo "<td>" .$reccuperation['DATE']."</td>";
                echo "<td>" .$reccuperation['FORMATION']."</td>";
                echo "<td><a href=''class='btn btn-success'>details</a>";
                echo "<td><a href=''class='btn btn-warning'>modifier</a>";
                echo "<td><a href=''class='btn btn-info'>supprimer</a>";
     
     
                echo "</tr>";
            }
            $afficher->closecursor();

            }

        catch(PDOException $e) {
            print "erreur !:" . $e->getMessage() . "</br>";
            die();}
        
    ?>
        
    </tr>
        </table>
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
*/?>