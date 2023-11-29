<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$email = $_POST['email'];
$password = $_POST['password'];

$servername="localhost";
$username="root";
$password1="Helly4304";
$database="gelato";

$email = $_POST['email'];
$password =$_POST['password'];

$conn=mysqli_connect($servername, $username, $password1, $database);


    if (!$conn) {
        die("error:" . mysqli_connect_error());
    } else {

        $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "Login successful";
                header("Location: index.html");
                exit;
            } else {
                echo "Invalid email or password";
                header("Location: login.html");
                exit;
            }
        } 
    }
    mysqli_close($conn);
}
?>