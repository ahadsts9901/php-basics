<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        background-color: rgb(195, 244, 198);
        color: green;
        margin: auto;
        width: 80%;
        padding: 1em 2em;
    }
</style>

<body>
    <div class="container">
        <h2>if Else</h2>
        <h3>
            <?php
                $age = 19;

                if($age > 18){
                    echo "Your are eligible for CNIC";
                } elseif ($age == 18) {
                    echo "Your are exactly 18 and eligible for CNIC";
                }else{
                    echo "Your are not eligible for CNIC";    
                }

                echo "<br/>";
                $arr_2 = array("ts", "py", "php");
                echo $arr_2[0];

            ?>
        </h3>


        <h2>for loop, while loop, do_while loop</h2>
        <h3>
            <?php

            // while loop
            $num = 1;
            while($num <= 10){
                echo "Number while is: ";
                echo $num;
                echo "<br>";
                $num++;
            }

               
            echo "<br>";
            $my__num = 0;
            while($my__num < count($arr_2)){
                echo "Language while is: ";
                echo $arr_2[$my__num];
                echo "<br>";
                $my__num++;
            }
                   

            echo "<br>";
            // do while loop
            $my__num = 0;
            do {
                echo "Language do while is: ";
                echo $arr_2[$my__num];
                echo "<br>";
                $my__num++;
            } while($my__num < count($arr_2));

               
            echo "<br>";
            //    for loop
            for ($i=1; $i <= 20; $i++) {
                echo "Number for loop is: ";
                echo $i;
                echo "<br>";
            }
                
            echo "<br>";
            // for each
            foreach ($arr_2 as $language) {
                echo "Language from foreach is: ";
                echo $language;
                echo "<br>";
                }
                
                
            echo "<br>";
            // function
            function print_number($number){
                echo $number;
                echo "<br />";
            }

            print_number(4);
            print_number(3);
            print_number(7);
            print_number(6);

            function sum($a,$b){
                return $a + $b;
            }

            $result = sum(12,23);
            echo  "<br/>".$result;

            ?>
        </h3>

    </div>
</body>

</html>