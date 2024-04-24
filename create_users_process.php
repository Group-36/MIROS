<?php

$db = new SQLite3('MIROS.db');

$query = $db->query('SELECT MAX(user_id) AS max_id FROM Users');
$row = $query->fetchArray(SQLITE3_ASSOC);
$next_id = $row['max_id'] + 1;

$fn = $_POST['user_Fname'];
$ln = $_POST['user_Lname'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $db->prepare('INSERT INTO Users (user_id, user_Fname, user_Lname, DOB, email, password) VALUES (:user_id, :user_Fname, :user_Lname, :DOB, :email, :password)');
$stmt->bindParam(':user_id', $next_id);
$stmt->bindParam(':user_Fname', $fn);
$stmt->bindParam(':user_Lname', $ln);
$stmt->bindParam(':DOB', $DOB);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

$db->close();

echo "Creation successful!";
?>
