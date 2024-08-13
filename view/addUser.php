<?php
include '../controller/userController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    createUser($name, $email);
    header("Location: listUser.php");
    exit();
}
?>

<form method="post">
    Nama: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <input type="submit" value="Submit">
</form>
