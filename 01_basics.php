<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="about.php">About</a>

    <h1>Hello from php</h1>
    <h2>Basics & Variables</h2>
    <?php
        echo "Hello from php code";
        echo "<br/>";
        $num1 = 8;
        $num2 = 8;

        echo $num1;
        echo "<br/>";
        echo $num2;
        echo "<br/>";
        
        echo "Boolean: ";
        echo var_dump(True);
        echo var_dump(False);
        echo var_dump(true);
        echo var_dump(false);
        echo "<br/>";

        echo "String: ";
        echo var_dump("I am a dev");
        echo "<br/>";

        echo "Number: ";
        echo var_dump(349);
        echo "<br/>";
    ?>

    <h2>Arithmetic & Assignment Operators</h2>
    <?php
        echo "Plus: ";
        echo $num1 + $num2;
        echo "<br>";

        echo "Minus: ";
        echo $num1 - $num2;
        echo "<br>";
        
        $num1 += 4;
        echo "Mltiply: ";
        echo $num1 * $num2;
        echo "<br>";
        
        echo "Divide: ";
        echo $num1 / $num2;
        echo "<br>";
        
        echo "Modulus: ";
        echo $num1 % $num2;
        echo "<br>";
    ?>

    <h2>Comparison Operators</h2>
    <?php

        echo "Greater than: ";
        echo var_dump($num1 > $num2);
        echo "<br>";

        echo "Less than: ";
        echo var_dump($num1 < $num2);
        echo "<br>";

        $num1 = 6;
        $num2 = 6;

        echo "Double equals: ";
        echo var_dump($num1 == $num2);
        echo "<br>";

        $num2 = "6";

        echo "Triple equals: ";
        echo var_dump($num1 === $num2);
        echo "<br>";

        echo "Greater than equals: ";
        echo var_dump($num1 >= $num2);
        echo "<br>";
        
        echo "Less than equals: ";
        echo var_dump($num1 <= $num2);
        echo "<br>";

        $num1 = 7;
        
        echo "Not: ";
        echo var_dump($num1 != $num2);
        echo "<br>";

    ?>

    <h2>Increment Decrement Operators</h2>
    <?php 
        echo $num1;
        echo "<br>";

        echo $num2;
        echo "<br>";

        echo $num1++;
        echo "<br>";

        echo $num1--;
        echo "<br>";

        echo ++$num1;
        echo "<br>";

        echo --$num1;
        echo "<br>";

    ?>

    <h2>Logical Operators</h2>
    <?php 
        $num1 = 0;
        $num2 = 3;

        echo $num1;
        echo "<br>";

        echo $num2;
        echo "<br>";
        
        echo "Or operator";
        echo "<br>";
        echo var_dump($num1 || $num2);
        echo "<br>";
        
        echo "And operator";
        echo "<br>";
        echo var_dump($num1 && $num2);
        echo "<br>";
        
        echo "Xor operator";
        echo "<br>";
        echo var_dump($num1 xor $num2);
        echo "<br>";

    ?>

    <h2>Data Types</h2>
    <?php
        
        echo $num1;
        echo "<br/>";
        echo $num2;
        echo "<br/>";
        
        echo "Boolean: ";
        echo var_dump(True);
        echo var_dump(False);
        echo var_dump(true);
        echo var_dump(false);
        echo "<br/>";

        echo "String: ";
        echo var_dump("I am a dev");
        echo "<br/>";

        echo "Number: ";
        echo var_dump(349);
        echo "<br/>";

        echo "Float: ";
        echo var_dump(23.56);
        echo "<br/>";
            
        echo "Array: ";
        $arr = [1,2,3,4,"this is a string", false];
        echo var_dump($arr);
        echo "<br/>";
        echo var_dump($arr[2]);
        echo "<br/>";
        echo var_dump($arr[4]);
        echo "<br/>";

        echo "Object: ";
        $obj = (object) [
            "username" => "User1",
            "age" => 34,
            "isEmployed" => True,
        ];
        echo "<br>";
        echo var_dump($obj);
        echo "<br>";
        echo var_dump($obj -> username);

        $new_arr = (array) $obj;
        echo "<br>";
        echo var_dump($new_arr);
        echo "<br>";
        echo var_dump($new_arr["age"]);
        
        echo "Define Constant";
        define("PI", 3.14);
        echo "<br>";
        echo PI;

        ?>

</body>
</html>