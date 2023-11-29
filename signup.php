<?php
$servername="localhost";
$username="root";
$password1="Helly4304";
$database="gelato";

$email = $_POST['email'];
$userid = $_POST['userid'];
$password =$_POST['password'];

$conn=mysqli_connect($servername, $username, $password1, $database);

   //check if the connection was successful
    if(!$conn)
    {
        die("Sorry".mysqli_connect_error());
    }
    else
    {
   
        //insert the data into employee table
        $sql="INSERT INTO `user` (`email`, `userid`, `password`) VALUES ('$email', '$userid', '$password')";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "Data inserted successfully";
            header("Location: login.html");
            exit;

        }
        else{
            echo "Data not inserted due to  ".mysqli_error($conn);
        }
    }
