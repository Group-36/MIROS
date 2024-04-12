<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["dbemail"];
    $password = $_POST["dbpassword"];

    $db = new SQLite3('MIROS.db'); //connects to the database//

    $stmt = $db->prepare("SELECT * FROM Users WHERE email = :dbemail AND password = :dbpassword");
    $stmt->bindValue(':dbemail', $email); //selects id and password from the database//
    $stmt->bindValue(':dbpassword', $password);
    $result = $stmt->execute();

    if ($result->fetchArray()) {
        
        header("Location: ResearchOfficerDashboard.php"); //user is sent to the dashboard if the login is successful//
        exit();
    } else {
        
        $error_message = "Invalid username or password. Please try again."; //error message if invalid details are input//
    }
}
?>
