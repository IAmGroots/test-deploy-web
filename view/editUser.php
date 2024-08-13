<?php
include '../controller/userController.php';
$id = $_GET['id'];
$user = getUserById($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    updateUser($id, $name, $email);
    header("Location: listUser.php");
    exit();
}
?>

<form method="post">
    Nama: <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <input type="submit" value="Update">
</form>
