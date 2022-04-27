   <?php

   $Db_host="localhost";
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "designdb";
    $connection = mysqli_connect($Db_host, $DB_user, $DB_password, $DB_name);
    if (!$connection) {

        echo "Connection not successfull" . mysqli_connect_error();

    }
    else{
        echo "connected!";
    }
    ?>