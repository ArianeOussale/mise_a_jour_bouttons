<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rechercher un apprenant</title>
</head>
<body>

  <?php
            $user = "root";
            $pass ="";
            $db = new PDO("mysql:host=localhost; dbname=mabase", $user, $pass);
            $allapprenant = $db->query('SELECT * FROM monprojet ORDER BY id DESC');
            if(isset($_GET['R']) AND !empty($_GET['R'])){
              $recherche = htmlspecialchars($_GET['R']);
              $allapprenant =  $dbh->query('SELECT NOM FROM mabase where NOM ='.$recherche);
              echo $allapprenant;

            }
  
  ?>
  <section>
      <?php
      if($allapprenant){
        while($apprenant = $allapprenant->fetch()){
          ?>
            
          <p><?= $apprenant; ?></p>
          <?php
        }

      }
      else{
        ?>
        <p> le nom de cet apprenant ne figure pas dans la base de données</p>
    <?php
      
    }
    ?> 
  </section>  
</body>
</html>