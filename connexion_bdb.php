<?php
$connection = new mysqli(
    "localhost", "root",
"", "admin_simplon");
if($connection->connect_error){
echo "connexion echouee";
}

else{
    echo " connexion etablie avec succes";
    
}
?>