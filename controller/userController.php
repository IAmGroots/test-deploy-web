<?php
include_once '../db.php';

function createUser($name, $email) {
    global $conn;
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    return $conn->query($sql);
}

function getUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    return $conn->query($sql);
}

function getUserById($id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id=$id";
    return $conn->query($sql)->fetch_assoc();
}

function updateUser($id, $name, $email) {
    global $conn;
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    return $conn->query($sql);
}

function deleteUser($id) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$id";
    return $conn->query($sql);
}
?>
