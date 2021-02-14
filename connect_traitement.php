<?php
require_once 'connexion.php';


if(isset($_POST['NomUtilisateur']) && isset($_POST['MotDePasse']))
{
    $NomUtilisateur=htmlspecialchars($_POST['NomUtilisateur']);
    $MotDePasse=htmlspecialchars($_POST['MotDePasse']);

$preparation =$db -> prepare("INSERT INTO monprojet(NomUtilisateur,MotDePasse) VALUES(?, ?)");
$data=array($NomUtilisateur,$MotDePasse);
 = $db -> execute($data);



    $data=$verify->fetch();
    $row=$verify->rowcount();

    if($row==1){
             if($data['MotDePasse']===$MotDePasse){
                header('Location:index.html');
                
             }else header('Location:connect.php');
    }else header('Location:connect.php');
}else header('Location:connect.php');


?>