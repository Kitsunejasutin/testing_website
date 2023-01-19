<?php

$serverName =  "localhost";
$username = "root";
$password = "";
$dbname = "test";

//creat connection

$con = mysqli_connect($serverName, $username, $password, $dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['textbox_name'])&& !empty($_POST['mail']) && !empty($_POST['Date']) && !empty($_POST['Time'])){
        $name = $_POST['textbox_name'];
        $email = $_POST['mail'];
        $time = $_POST['Date'];
        $day = $_POST['Time'];

        $query = "INSERT INTO appointments (appointmented_name, appointmented_email, appointmented_time, appointmented_date) 
        VALUES('$name' , '$email' , '$time' , '$day');  ";

        $run = mysqli_query($con,$query) or die(mysqli_connect_error());
        header("location:index.php?returned");
        exit();

    }
}

?>

