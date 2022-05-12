<?php

include ("./connexion_bdb.php")
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AUF</title>
  </head>
  <body>
  <h2>liste des abonnés</h2>

  <?php
$query = "SELECT * FROM `etudiant`";
$result = mysqli_query ($connection,$query);
if ($result){
    echo '
    <table class="table caption-top">
    <thead>
    <tr>
      
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">date_naissance</th>
      <th scope="col">email</th>
      <th scope="col">telephone</th>
      <th scope="col">tuteur</th>
    </tr>
  </thead>
    ';
    while ($data= mysqli_fetch_assoc($result)){
        echo '
        <tr>
        
        <td>'.$data["nom"].'</td>
        <td>'.$data["prenom"].'</td>
        <td>'.$data["date_naissance"].'</td>
        <td>'.$data["email"].'</td>
        <td>'.$data["telephone"].'</td>
        <td>'.$data["tuteur"].'</td>
      </tr>
        ';
    }
    echo '
    </tbody>
</table>
    ';
}


?>

  
<a href="./index.html" class="retour"> Retour </a>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>