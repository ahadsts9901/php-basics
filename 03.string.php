<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h1>String</h1>

    <?php
        $str = " KKK_COMPUTER ";
        echo $str;
        echo "<br/>";
        
        $lenn = strlen($str);
        echo $str.$lenn." Thanks ". str_word_count($str). "<br>";
        echo "reversed string". strrev($str). "<br>";
        echo "position string". strpos($str, "MP"). "<br>";
        echo "replace string". str_replace("K", "L", $str). "<br>";

    
    ?>

</body>
</html>