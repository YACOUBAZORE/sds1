<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=ajout.css">
    <title>Document</title>
</head>
<body>
    

<?php


include("./connexion.php");

$conn=mysqli_connect('localhost','root','','ufr_sds')or die("error");

if(isset($_POST["submit"])) {
    
    $nom=( $_POST["nom"]);
    $prenom=($_POST["prenom"]);
    $email=($_POST["email"]);
   $telephone=($_POST["telephone"]);

    


 if(!empty($nom) AND !empty($prenom)
  AND !empty($email) AND !empty($telephone)){
      
   
 

$query= ' INSERT INTO tuteur ( nom , prenom , email , telephone )
      VALUES ( "'.$nom.'", "'.$prenom.'",  "'.$email.'","'.$telephone.'")'
        or die('erreur:'.mysql_error());

      $res=mysqli_query($conn, $query);
  
     
     
    }


  } 
  header("location: ./index.php"); 
 
  

   

    


?>
</body>
</html>
