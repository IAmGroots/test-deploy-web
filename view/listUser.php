<?php
include '../controller/userController.php';
$users = getUsers();
?>

<h2>Daftar Pengguna</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php while($row = $users->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <a href="editUser.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="deleteUser.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
<a href="addUser.php">Tambah Pengguna</a>
