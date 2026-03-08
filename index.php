<!DOCTYPE html>
<html>
<head>
    <title>Add Transaction</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add New Transaction</h2>
    <form method="post" action="create.php">
        Item: <input type="text" name="item" required>
        Price: <input type="number" name="price" step="0.01" min="0" required 
       oninvalid="this.setCustomValidity('oi bawal negative prices dria ssob.')" 
       oninput="this.setCustomValidity('')">
        Quantity: <input type="number" name="qty" min="0" required>
        <button type="submit">Save Transaction</button>
    </form>
    <a href="read.php">View All Transactions</a>
</body>
</html>