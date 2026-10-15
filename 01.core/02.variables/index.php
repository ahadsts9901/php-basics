<?php
$intNum = 42;            // number (integer)
$floatNum = 3.14;        // number (float)
$str = "Hello PHP";      // string
$isActive = true;        // boolean (true / false)
$nothing = null;         // null

echo $intNum . "\n";
echo $floatNum . "\n";
echo $str . "\n";
echo ($isActive ? 'true' : 'false') . "\n"; // true prints '1', so using ternary
echo var_export($nothing, true) . "\n";    // null ke liye var_export use karein
?>