<?php
if($_SERVER['REQUEST_METHOD']='POST')
{
    $email=$_POST['email'];
    $userid=$_POST['userid'];
    $password=$_POST['password'];

    //database connection
    $servername="localhost";
    $username="root";
    $password="Helly4304";
    $database="gelato";

    $conn=mysqli_connect($servername, $username, $password, $database);

   //check if the connection was successful
    if(!$conn)
    {
        die("Sorry".mysqli_connect_error());
    }
    else
    {
   
        //insert the data into user table
        $sql="INSERT INTO `user` (`email`, `userid`, `password`) VALUES ('$email', '$userid', '$password')";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "Data inserted successfully";

        }
        else{
            echo "Data not inserted due to  ".mysqli_error($conn);
        }
    }

           
            if(!$conn)
            {
                die("Sorry".mysqli_connect_error());
            }
            else
            {
                echo "Connection Successful";
                $sql= "SELECT * FROM `user`";
                $result = mysqli_query($conn, $sql);

                $num = mysqli_num_rows($result);
                echo "</br>";
                echo $num;      
            }

            //display employee information from the database
            while($row = mysqli_fetch_assoc($result))
    {
        echo "<br/>";
        echo "Employee Information";
        echo "<br/>";
        echo "Email:".$row['email']. "User id:".$row['userid']. "Password:".$row['password'];
         }

}
?>