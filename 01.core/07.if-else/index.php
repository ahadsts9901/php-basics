<?php
// $role = "admin";
$role = readline("admin or moderator?===> : ");

// If-Else / Else If
if ($role === "admin") {
    echo "Welcome Admin!";
} elseif ($role === "moderator") {
    echo "Welcome Moderator!";
} else {
    echo "Welcome Guest!";
}

// Match Expression (PHP 8+ / Jaise JS switch ka modern roop)
$message = match($role) {
    'admin' => 'Full Access',
    'moderator' => 'Limited Access',
    default => 'No Access',
};
echo $message;
?>