<?php
require 'database.php';
require 'fuctions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST['item'];
    
    
    $price = validateNumber($_POST['price']);
    $qty = validateNumber($_POST['qty']);
    
    
    $total = calculateTotal($price, $qty);

    $sql = "INSERT INTO transactions (item, price, qty, total)
            VALUES (:item, :price, :qty, :total)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':item' => $item,
        ':price' => $price,
        ':qty' => $qty,
        ':total' => $total
    ]);

    redirectTo("read.php");
}
?>