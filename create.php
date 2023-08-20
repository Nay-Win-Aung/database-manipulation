<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];

    $sql = "INSERT INTO users (name, email,phone,address,note) VALUES ('$name', '$email','$phone','$address','$note')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Add User</h1>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div><br>
            <div class="form-group"> 
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" id="phone" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="address">Address</Address>:</label>
                <input type="address" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="note">Note</Address>:</label>
                <input type="note" name="note" id="note" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
</body>
</html>
