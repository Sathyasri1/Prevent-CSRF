<?php
session_start();
// 1. create CSRF token
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <input type="hidden" name="csrf_token" value="<?php echo $token;?>">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <input type="submit" value="submit">
</form>
</body>
</html>


