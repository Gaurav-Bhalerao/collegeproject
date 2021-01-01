<?php
    // Hostname
    $DB_hostname = "localhost";

    // Database Name
    $DB_name = "eventomaniadb";

    // Database Username
    $DB_username = "postgres";

    // Database Password
    $DB_password = "Gaurav";

    // Create connection
    $conn = pg_connect("host = $DB_hostname dbname = $DB_name user = $DB_username password = $DB_password");

    if($conn == false) {
        echo"Kahitari Chuklay";
    }

?>