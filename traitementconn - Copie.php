<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
   <?php 
include('./connexion.php');

if(isset($_POST["connecter"])) {

$email= $_REQUEST["email"];
$pass = $_REQUEST["pass"];
// cpass = $_POST["$cpass"];
$query= "SELECT * FROM `sds_admin` WHERE 'email'='$email' AND 'pass'='$pass' ";

$verif=mysqli_query($conn,$query)or die( mysql_error());
$rows = mysqli_num_rows($verif);
if($rows==1){
    $_SESSION["email"]=$email;
    header("Location: ./formulaire.php");
       }

        else{
            $message="vous n'etes pas inscrit.";
            echo $message; 
}
}
?> 