<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="form">
        <h2 class="heading-2">Create account</h2>

        <?php
        include 'connect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc(($result))) {
        ?>

            <form action="process.php" method="post" enctype="multipart/form-data">
                <div class="labels">
                <input type="file" id="image" name="image_dir" value=<?php echo $image=  'uploads/'.$row['image_dir'] ?>  style="position: absolute;top: 80px;" >
                    <input type="hidden" , value=<?php echo  $row['id'] ?> , name="id">
                    <label for="">First Name</label>
                    <input placeholder="Enter First Name" type="text" id="firstName" value=<?php echo  $row['firstName'] ?> name="firstName">
                </div>
                <div class="labels">
                    <label for="">Last Name</label>
                    <input placeholder="Enter Last Name" type="text" value=<?php echo  $row['LastName'] ?> name="lastName">
                </div>
                <div class="labels">
                    <label for="">Email</label>
                    <input placeholder="Enter email" type="email" value=<?php echo  $row['Email'] ?> name="Email">
                </div>
                <div class="labels">
                    <label for="telephone">Telephone</label>
                    <input placeholder="Enter telephone number" pattern="[0-9]{10,12}" value=<?php echo  $row['telephone'] ?> type="text" name="telephone">
                    <!-- [a-z]lower case -->
                    <!-- [A-Z]uppercase case -->
                    <!-- [A-Za-z0-9]alphanumeric -->
                </div>
                <div class="labels" id="gender">
                    <label for="">Gender</label>
                    <?php if ($row['gender'] == "Male") { ?>

                        <input type="radio" name="gender" value="Male" required checked>
                        <p>Male</p>
                        <input type="radio" name="gender" value="Female" required>
                        <p>Female</p>
                    <?php } else { ?>
                        <input type="radio" name="gender" value="Male" required>
                        <p>Male</p>
                        <input type="radio" name="gender" value="Female" required checked>
                        <p>Female</p>
                    <?php } ?>

                </div>
                <div class="labels">
                    <label for="Nationality">Nationality</label>
                    <select name="nationality">
                        <option value=><?php echo  $row['nationality'] ?></option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Kenya">Kenya</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Canada">Canada</option>
                        <option value="Algeria">Algeria</option>
                        <option value="USA">USA</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Senegal">Senegal</option>

                    </select>
                </div>
                <div class="labels">
                    <label for="username">Username</label>
                    <input placeholder="Enter Username" value=<?php echo  $row['userName'] ?> type="text" name="username">
                </div>
                <div class="labels">
                    <label for="password">Password</label>
                    <input placeholder="Enter Password" type="password" value=<?php echo  $row['password'] ?> name="password">
                </div>
                <div class="labels">
                    <label for="confpass">Confirm Password</label>
                    <input placeholder="Confirm password" type="password" value=<?php echo  $row['confirm_password'] ?> name="confirm_password">
                </div><div class="labels">
                    <label for="confpass">Role</label>
                    <input placeholder="Role" type="text" value=<?php echo  $row['Role'] ?> name="role">
                </div>
                <input value="register" type="submit" name="submit">
            </form>
        <?php } ?>
    </div>
</body>

</html>