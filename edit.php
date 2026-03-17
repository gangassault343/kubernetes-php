<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $conn->query("UPDATE users SET name='$name', email='$email', mobile='$mobile' WHERE id=$id");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    margin: 0;
    padding: 0;
}

.container {
    width: 400px;
    margin: 80px auto;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 6px;
    border: 1px solid #ccc;
    outline: none;
    transition: 0.3s;
}

input:focus {
    border-color: #2575fc;
    box-shadow: 0 0 5px rgba(37,117,252,0.5);
}

button {
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    background: #2575fc;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #1a5ed8;
}

.back {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #2575fc;
}

.back:hover {
    text-decoration: underline;
}
</style>

</head>

<body>

<div class="container">
    <h2>Edit User</h2>

    <form method="POST">

        <label>Name</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>

         <label>Mobile</label>
        <input type="number" name="mobile" value="<?php echo htmlspecialchars($row['mobile']); ?>" required>

        <button name="update">Update User</button>
    </form>

    <a href="index.php" class="back">← Back to Home</a>
</div>

</body>
</html>
