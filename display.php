<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table,
        td,
        th {
        border-collapse: collapse;
        }

        table {
            border-collapse: collapse;
        }
        h1{
            color: white;
            background-color:rgb(95, 127, 179);
            position: absolute;
            
            top: 20px;
            height: 50px;
            width: 50rem;
            padding: 5px 220px;
            margin-left: 25rem;
            border-radius: 15px;


            
        }
        table{
            position: absolute;
            left: 5%;
            
            margin-top: 90px;
            height: 250px;
            border-collapse: collapse;
            background-color: black;
            color: white;
            border-radius: 15px;
        }
        tr{
            padding: 10px;
        }
        td{
            padding: 3px 25px;
        }
        th{
            padding: 5px;
            background-color: rgb(95, 127, 179);
        }
        a{
            text-decoration: none;
            background-color: rgb(95, 127, 179);
            border-radius: 10px;
            padding: 5px 10px;
            color: white;
        }
        a:hover{
            background-color: white;
            color: black;
        }
        #image{
            height: 60px;
            width: 60px;
            border-radius: 50%;
        }
        
    </style>

</head>

<body>
    <?php

    define("HOST", "localhost");
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "designdb";
    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_name);
    if (!$connection) {
        echo "Connection not successfull" . mysqli_connect_error();
    } else {
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($connection , $sql)
        // echo "<table><tr><th>ID</th><th>FirtName</th><th>lastName</th><th>Gender</th><th>telephone</th></tr>";
        // while($row=mysqli_fetch_assoc($select)){
        //     echo "<td>$row[user_id]</td>";
        //     echo "<td>$row[firstName]</td>";
        //     echo "<td>$row[lastName]</td>";
        //     echo "<td>$row[gender]</td>";
        //     echo "<td>$row[telephone]</td>";
        //     echo "</tr>";
        // }
        // echo "</table>";


    ?>
        <table >
            <tr>
                <h1>User managemant</h1>
                <th >profile</th>
                <th>id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>Username</th>
                <th>email</th>
                <th>Nationality</th>
                <th>password</th>
                <th>confirm_password</th>
                <th>Role</th>
                <th>D.operation</th>
                <th>U.operation</th>
              

            </tr>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                $image=  'uploads/'.$row['image_dir'];
                $id = $row['id'];
                $b = $row['firstName'];
                $c  = $row['LastName'];
                $d  = $row['gender'];
                $e = $row['userName'];
                $f  = $row['Email'];
                $g = $row['nationality'];
                $h= $row['password'];
                $i= $row['confirm_password'];
                $id = $row['id'];
                $role=$row['Role'];
                ?>

<tr>
    <td ><img id="image" src="<?php echo $image ?>" alt="No file"/></td>
    <td><?php echo $id?></td>
    <td><?php  echo $b; ?></td>
    <td><?php  echo $c; ?></td>
    <td><?php  echo $d;  ?></td>
    <td><?php   echo $e; ?></td>
    <td><?php  echo $f; ?></td>
    <td><?php echo $g; ?></td>
    <td><?php echo $h; ?></td>
    <td><?php echo $i; ?></td>
    <td><?php echo $role; ?></td>

    <td><a href="<?= "delete.php?id={$id}";?>">delete</a></td>
    <td><a href="<?= "update.php?id={$id}";?>">update</a></td>

    
</tr>
<?php


};
};
?>
</table>

</body>

</html>