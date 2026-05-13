<!DOCTYPE html>
<html>
<head>
    <title>Form with POST</title>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>

    Email: <input type="email" name="email"><br><br>

    password: <input type="password" name="password"><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<h2>Submitted Data</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (!empty($name) && !empty($email) && !empty($password)) {

        echo "<p><b>Name:</b> " . $name . "</p>";
        echo "<p><b>Email:</b> " . $email . "</p>";
        echo "<p><b>Password:</b> " . $password . "</p>";

    } else {

        echo "<p>Please fill all fields.</p>";

    }
}
?>

</body>
</html>