
<!DOCTYPE htmlhtml lang="en">
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
<div class=" container text-center"  >
                     <h1 >LISTES DES APPRENANTS</h1>
                        </div>
<div class="container-fluid">

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div >
               
                    <table width=100%>
                        <div container-fluid text-center >
                       
                           
                        </div>
                        <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>NOM</th>
                                    <th>PRENOM(S)</th>
                                    <th>DATE 
                                         NAISSANCE</th>
                                    <th>FORMATION</th>
                                    <th>ACTIONS </th>
                                    <th>MODIFIER </th>
                                    <th>SUPPRIMER </th>

                                   
                               
                                </tr>

                                 <tr>
                            <?php
                            $afficher=$db->query('SELECT*FROM monprojet ORDER BY ID ASC');
                                while($ligne = $afficher->fetch()){
                                    echo "<tr>
                                            <td>$ligne[0]</td>
                                            <td>$ligne[1]</td>
                                            <td>$ligne[2]</td>
                                            <td>$ligne[3]</td> 
                                            <td>$ligne[4]</td>
                                            <td>$ligne[5]</td>
                                            <td><a class='btn btn-success' href='details.php?ID=$ligne[0]'>DETAILS</a></td> 
                                            <td><a class='btn btn-warning'onclick='return confirm(\"voulez vous vraiment modifier?\")' href='modifier.php?ID=$ligne[0]'>MODIFIER</a></td> 
                                            <td><a class='btn btn-danger' onclick='return confirm(\"voulez vous vraiment supprimer?\")' href='suppr.php?ID=$ligne[0]'>DELETE</a></td>   
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
</html>
    <a href="index.html"><p class='text-center'><button type="button" class="btn btn-outline-warning">Retour</button></p></a>

    <div class="text-center">
              <div class="container-fluid">
                
              </div>
                
            </div>

   
    <?php include ('footer.php')


?>
  <p class="text-center mt-3"><a href="index.html">cliquez ici pour retourner</a></p>
    
  
</div> 
</body>
</html>
