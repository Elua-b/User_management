<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$telephone = $_POST['telephone'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$userName = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$temporary_filename = $_FILES['image_dir']['tmp_name'];
$final_filename = $_FILES['image_dir']['name'];
$role = $_POST['role'];

// $dir = 'public/';
// $file_target = $dir . basename($_FILES["image_dir"]["name"]);

//if (move_uploaded_file($temporary_filename,'uploads/'.$final_filename)) {
    //echo "Successfully saved the file";
//} else {
  //  die("Failed to save the file");
//}

// $filename = $file_target;

if (($firstName == "") || ($lastName == "") || ($Email == "") || ($password !== $confirm_password)) {
    echo "You don't have full details";
} else {
    define("HOST", "localhost");
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "designdb";
    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_name);
    if (!$connection) {

        echo "Connection not successfull" . mysqli_connect_error();
    } else {
        $insertQuery = "INSERT INTO users ( firstName , lastName , telephone , username ,gender, nationality, Email,password,confirm_password,image_dir,Role) VALUES('$firstName','$lastName','$telephone','$userName','$gender','$nationality','$Email','$password','$confirm_password','$final_filename','$role' )";
        $insert =  mysqli_query($connection, $insertQuery) or die("Error occured" . mysqli_error($connection));
        if (!$insert) {
            header('location: display.php');
        }
        // echo "Connected";

    }
}


    ?>
    <html>
        <style>
            button{
                padding: 20px 90px;
                background-color: rgb(95, 127, 179);
                color: white;
                border-radius: 5px;
                border: none;
                position: absolute;
                top: 30%;
                left: 40%;

            }
            a{
            text-decoration: none;
            text-align: center;
            color: white;
            font-size: 20px;
            }
        </style>
       <button> <a href="display.php">View Details</a></button>
    </html>