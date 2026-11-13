<?php
    $insert = null;
    $error_msg = "";

    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "us_trip";

        $conn = mysqli_connect($server, $username, $password, $dbname);
        if(!$conn){
            die("connection to the database failed due to". mysqli_connect_error());
        }
        // echo "successfully connected to the db";

        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];

        $sql = "INSERT INTO `bookings` (`name`, `age`, `email`, `phone`,`gender`, `address`, `created_at`)
                VALUES ('$name', '$age', '$email', '$phone', '$gender', '$address', current_timestamp()) 
        ";

        // echo $sql;
        if($conn -> query($sql) == true){
            $insert = true;
        }else{
            $insert = false;
            $error_msg = "ERROR: " . $sql . "<br/>" . $conn->error;
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>welcome to travel form - US trip form</h3>
        <p>enter your details and submit this form to confirm your participation</p>
        
        
        <?php 
        if($insert === true){
            echo '<p class="success">Thanks for submitting your form, we are happy to see you joining for the US trip!</p>';
        } else if($insert === false){
            echo '<p class="error">' . $error_msg . '</p>';
        }
        ?>
    
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name" />
            <input type="number" name="age" id="age" placeholder="enter your age" />
            <input type="email" name="email" id="email" placeholder="enter your email" />
            <input type="number" name="phone" id="phone" placeholder="enter your phone" />
            <input type="text" name="gender" id="gender" placeholder="enter your gender" />
            <textarea name="address" id="address" placeholder="enter your address"></textarea>
            <button type="submit">submit</button>
            <button type="reset">reset</button>
        </form>
    
    </div>
    <script src="index.js"></script>
</body>
</html>