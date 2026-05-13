<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

<h2>String Manipulation Program</h2>

<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <br><br>
    <input type="submit" value="Perform Operations">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["inputString"];

    echo "<h2>Results:</h2>";

    // Length of string
    echo "<h3>Length of string: " . strlen($str) . "</h3>" . "<br>";

    // Reverse string
    echo "<h3>Reversed string: " . strrev($str) . "</h3>" . "<br>";

    // Substring (first 5 characters)
    echo "<h3>Substring (first 5 chars): " . substr($str, 0, 5) . "</h3>" . "<br>";

    // Convert to uppercase
    echo "<h3>Uppercase: " . strtoupper($str) . "</h3>" . "<br>";

    // Convert to lowercase
    echo "<h3>Lowercase: " . strtolower($str) . "</h3>" . "<br>";


}
?>

</body>
</html>