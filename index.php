<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>PHP CRUD</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>User Management</h2>

<a href="add.php">Add User</a>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php } ?>

</table>

</body>
</html>