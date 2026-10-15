<!-- 1. Arithmetic Operators (Math Calculations) -->
<?php
$a = 10;
$b = 3;

echo $a + $b; // Addition: 13
echo $a - $b; // Subtraction: 7
echo $a * $b; // Multiplication: 30
echo $a / $b; // Division: 3.3333
echo $a % $b; // Modulus (Remainder): 1
echo $a ** $b; // Exponentiation (10 to the power 3): 1000
?>












<!-- 2. Assignment Operators -->
<?php
$x = 5;
$x += 3; // Equivalent to: $x = $x + 3; ($x is now 8)
$x -= 2; // $x is now 6
$x *= 4; // $x is now 24
?>












<!-- 3. Comparison Operators (==, ===, !=, <, >, etc.) -->
<?php
$num = 10;
$str = "10";

// Loose Equality (Value same hai chahe type alag ho)
var_dump($num == $str);  // true

// Strict Equality (Value aur Data type dono same hone chahiye)
var_dump($num === $str); // false

// Inequality
var_dump($num != 5);     // true
var_dump($num !== "10"); // true (type alag hai)

// Greater than, Less than
var_dump(15 > 10);       // true
var_dump(5 <= 5);        // true
?>











<!-- 4. Spaceship Operator (<=>) - PHP Unique Feature -->
<?php
echo 5 <=> 10;  // Output: -1 (5 chota hai)
echo 10 <=> 10; // Output: 0 (dono barabar hain)
echo 15 <=> 10; // Output: 1 (15 bada hai)
?>











<!-- 5. Logical Operators (&&, ||, !, and, or) -->
<?php
$isAdmin = true;
$isLoggedIn = false;

// AND (&&) - Dono true hone chahiye
if ($isAdmin && $isLoggedIn) {
    echo "Access granted";
}

// OR (||) - Koi ek bhi true ho
if ($isAdmin || $isLoggedIn) {
    echo "Welcome user";
}

// NOT (!) - True ko false, false ko true kar deta hai
if (!$isLoggedIn) {
    echo "Please log in first";
}
?>











<!-- 6. String Operators -->
<?php
$firstName = "Muhammad";
$lastName = "Ahad";

// Concatenation operator (.)
$fullName = $firstName . " " . $lastName;
echo $fullName; // Muhammad Ahad

// Concatenation assignment (.=)
$text = "Hello";
$text .= " World!";
echo $text; // Hello World!
?>











<!-- 7. Null Coalescing Operator (??) -->
<?php
$username = $_GET['user'] ?? "Guest";
echo $username; // Agar URL mein ?user=Ahad na ho toh "Guest" print karega
?>









