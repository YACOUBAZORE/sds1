<?php


include("./connexion_bdb.php");

if(isset($_POST["submit"])){
    $prenom= $_POST["prenom"];
    $date_naissance= $_POST["date_naissance"];
    $email= $_POST["email"];
    $telephone= $_POST["telephone"];
    $tuteur= $_POST["tuteur"];
    $query="INSERT INTO `etudiant` (`nom`, `prenom`, `date_naissance`, `email`, `telephone`, `tuteur`)
     VALUES ('$nom', '$prenom', '$date_naissance', '$email', '$telephone', '$tuteur')";
     $resultat=mysqli_query($connection, $query);
     if($resultat){
         echo "etudiant inscrit avec succes";
         header("location:./inscription.php");
        exit;
     }
     else{
         echo "etudiant n'a pas pu sinscrir";
     }
}
?>