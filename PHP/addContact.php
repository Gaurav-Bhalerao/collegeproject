<?php
    require 'contactConnection.php';
    
        if($_SERVER['REQUEST_METHOD'] == "POST") {

        $custFName = $_POST['CFname'];
        $custLName = $_POST['CLname'];
        $custEmail = $_POST['CEmail'];
        $custPhone = $_POST['CPhone'];
        $custMessege = $_POST['CMessege'];
        
        $addContactSql = "INSERT INTO customer_contact (custfname,custlname,custemail,custphone,custmessege) VALUES ('{$custFName}','{$custLName}','{$custEmail}','{$custPhone}','{$custMessege}')";

        $result = pg_query($conn, $addContactSql) or die("Cannot execute query: $query\n");

        header('Location: http://localhost/CollegeProject/EventoMania/index.html');

        pg_close($conn);
    }
?>
