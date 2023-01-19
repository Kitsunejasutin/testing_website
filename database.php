<?php

$serverName =  "localhost";
$username = "root";
$password = "";
$dbname = "test";

//creat connection

$con = mysqli_connect($serverName, $username, $password, $dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['textbox_name'])&& !empty($_POST['mail']) && !empty($_POST['Time']) && !empty($_POST['Date'])){
        $name = $_POST['textbox_name'];
        $email = $_POST['mail'];
        $date = $_POST['Date'];
        $time = $_POST['Time'];

        // Format the date using the date function
        $formatted_date = date('F j, Y', strtotime($date));

        // Insert the formatted date and the original time into the database
        $query = "INSERT INTO appointments (appointmented_name, appointmented_email, appointmented_time, appointmented_date) 
        VALUES('$name' , '$email' , '$formatted_date' , '$time');  ";

        $run = mysqli_query($con,$query) or die(mysqli_connect_error());
        header("location:index.php?returned");
        exit();

        

    }
}



?>
