<?php

if (isset($_POST['submit'])){
   $name = $_POST['textbox_name'];
   $email = $_POST['mail'];
   $date = $_POST['date'];
   $time = $_POST['time'];

    echo $name, "<br>";
    echo $email, "<br>";
    echo $time, "<br>";
    echo $date, "<br>";
}