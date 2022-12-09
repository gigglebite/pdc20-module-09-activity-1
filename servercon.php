<?php

// details for connecting admin and database
$dbconnect = mysqli_connect("localhost", "pdc20user", "hoho1434", "pdc20");
if (mysqli_connect_error()){
    echo "Failed to connect tp MYSQL: " . mysqli_connect_error();
    die();
}


?>