<?php
function validateNumber($value) {
    if ($value < 0) {
        die("Error: Value cannot be negative.");
    }
    return $value;
}

// 2. Function to compute total (Price x Quantity)
function calculateTotal($price, $qty) {
    return $price * $qty;
}

// 3. Function to redirect pages
function redirectTo($page) {
    header("Location: $page");
    exit();
}
?>