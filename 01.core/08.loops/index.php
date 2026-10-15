<?php
// For Loop
for ($i = 0; $i < 3; $i++) {
    echo $i;
}

// Foreach Loop (Array ke liye)
$fruits = ["Apple", "Banana", "Mango"];
foreach ($fruits as $fruit) {
    echo $fruit;
}

// Foreach Loop (Dictionary / Associative Array ke liye)
$student = ["name" => "Ahad", "course" => "MERN/AI"];
foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}