<?php include 'db.php'; ?>
<?php 
$podName = getenv('POD_NAME') ?: 'Local';
$podIP = getenv('POD_IP') ?: 'N/A';
$nodeName = getenv('NODE_NAME') ?: 'N/A';
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP CRUD</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
    padding: 20px;
}

.container {
    width: 80%;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #333;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

a.button {
    text-decoration: none;
    padding: 8px 15px;
    background: #28a745;
    color: white;
    border-radius: 5px;
    transition: 0.3s;
}

a.button:hover {
    background: #218838;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th {
    background: #007bff;
    color: white;
    padding: 10px;
}

table td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background: #f1f1f1;
}

.action a {
    padding: 5px 10px;
    margin: 2px;
    text-decoration: none;
    border-radius: 4px;
    color: white;
}

.edit {
    background: #ffc107;
}

.edit:hover {
    background: #e0a800;
}

.delete {
    background: #dc3545;
}

.delete:hover {
    background: #c82333;
}
.pod-info {
    background: #222;
    color: #00ffcc;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}
</style>

</head>

<body>

<div class="container">
    <!---ECHO Content--->
<div class="pod-info">
    <strong>Pod:</strong> <?php echo $podName; ?> |
    <strong>IP:</strong> <?php echo $podIP; ?> |
    <strong>Node:</strong> <?php echo $nodeName; ?>
</div>
<!---ECHO Content--->
<h2>User Management</h2>

<div class="top-bar">
    <div></div>
    <a href="add.php" class="button">+ Add User</a>
</div>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM users");

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td class="action">
<a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>

<?php 
    }
} else {
    echo "<tr><td colspan='4'>No users found</td></tr>";
}
?>

</table>

</div>

</body>
</html>
