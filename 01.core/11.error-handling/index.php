<?php
try {
    $age = 15;
    if ($age < 18) {
        throw new Exception("Aapki umar 18 se kam hai!");
    }
    echo "Access granted.";
} catch (Exception $e) {
    // Error message catch karna
    echo "Error caught: " . $e->getMessage();
} finally {
    echo "<br>Execution finished.";
}
?>