
<?php
$conn = new mysqli("localhost", "root", "", "sds_bdd");

if ($conn ->connect_error) {
    echo "Connexion echouer";
    
}

