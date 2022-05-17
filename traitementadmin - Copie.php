<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php








include("./connexion.php");

$conn=mysqli_connect('localhost','root','','sds_bds')or die("error");

if(isset($_POST["Register"])) {
    
    $nom=( $_POST["nom"]);
    $prenom=($_POST["prenom"]);
    $telephone=($_POST["email"]);
   $email=($_POST["telephone"]);
   $pass=($_POST["mot_pass"]);
   $cpass=($_POST["conf_mot_pass"]);
    
    

if($mot_pass != $conf_mot_pass ){
 echo " mot de pass different";
 exit;
 
} 


 if(!empty($nom) AND !empty($prenom)
 AND !empty($telephone) AND !empty($email) AND !empty($mot_pass) AND !empty($conf_mot_pass)){
      
   

$query=' INSERT INTO `admin` (`nom`, `prenom`, `email`, `mot_pass`, `conf_mot_pass`) VALUES ('zore', 'yacou', 'em', '12', '12')';
        or die('erreur:'.mysql_error());
      
        $res=mysqli_query($conn, $query);
    
    
   
}
}
header("location: authentification.php");
 
//  else {
//      echo"c'est pas bien"


     
//    exit;
// }


    // echo"erreur sur le mot de pass";
    
    // header("location: ./index.php"); 
    // exit;

    


?>
</body>
</html>
<!-- header('location:login.php?inscription=1');
        }
        else{
            $non = 1; -->