<?php
include 'db.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];

$conn->query("INSERT INTO users(name,email) VALUES('$name','$email')");

header("Location: index.php");

}
?>

<form method="POST">

Name:
<input type="text" name="name">

Email:
<input type="text" name="email">

<button name="submit">Add</button>

</form>