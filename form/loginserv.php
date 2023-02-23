<?php

$invalid=''; //Variable to Store error message;

if(isset($_POST['submit'])){
    $invalid = "Incorrect";
}
else
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $conn =  mysqli_connect("localhost", "root", "");

    $db = mysqli_select_db($conn, "accesform"); //Name of DB "accesform"

    $query = mysqli_query($conn, "SELECT * FROM form WHERE password='$pass' AND username='$user'");






    $rows = mysqli_num_rows($query);

    if($rows == 1){
        header("Location: login-acces.php"); // Redirecting  to other page
    }
    else
    {
        $invalid = "Incorrect";
    }
        mysqli_close($conn);
}