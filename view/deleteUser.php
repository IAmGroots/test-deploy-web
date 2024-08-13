<?php
include '../controller/userController.php';
$id = $_GET['id'];
deleteUser($id);
header("Location: listUser.php");
exit();
?>
