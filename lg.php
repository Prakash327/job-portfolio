<?php
session_start();
include "dbcon.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        echo "<script>alert('Username is required.');</script>";
    } else if (empty($password)) {
        echo "<script>alert('Password is required.');</script>";
    } else {
        $sql = "SELECT * FROM entries  WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            echo "<script>alert('Logged in successfully!');window.location.href='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect username or password.');</script>";
        }
    }
}
?>