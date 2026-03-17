<?php
include 'db.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $conn->query("INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add User</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #11998e, #38ef7d);
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
    border-color: #11998e;
    box-shadow: 0 0 5px rgba(17,153,142,0.5);
}

button {
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    background: #11998e;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #0e7c72;
}

.back {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #11998e;
}

.back:hover {
    text-decoration: underline;
}
</style>

</head>

<body>

<div class="container">
    <h2>Add New User</h2>

    <form method="POST">

        <label>Name</label>
        <input type="text" name="name" required placeholder="Enter full name">

        <label>Email</label>
        <input type="email" name="email" required placeholder="Enter email address">

        <label>Mobile</label>
        <input type="number" name="mobile" required placeholder="Enter mobile number">

        <button name="submit">Add User</button>
    </form>

    <a href="index.php" class="back">← Back to Home</a>
</div>

</body>
</html>
