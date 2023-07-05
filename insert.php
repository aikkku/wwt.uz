<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if (!empty($name) && !empty($email) && !empty($msg)){
    $host = "server3.ahost.uz";
    $dbUsername = "wwtuz";
    $dbPassword = "Fu)Dt1Pd8#9Ue6";
    $dbname = "wwtuz1_asilbek_touched";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error){
        die('Connect Error('. msqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $stmt = $conn->prepare("insert into registration(name, email, msg)
            values(?, ?, ?)")
        $stmt->bind-param("sss", $name, $email, $msg)
        $stmt->execute();
        echo "Message sent seccessfully...";
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required!";
    die();
}
?>