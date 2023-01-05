<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Scheduling</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>

<h1 class="headick">University Appointments</h1>
         
    <div id="response" class="container">
        <div class="Topbar">
            <a href="#"> <img src="logo.png" alt="A description of the image"></a> 
        </div>

        <div class="form">
            <form action="result.php" method="POST">
              <label for="name">Full Name:</label><br>
              <input type="char" id="fullname" name="textbox_name"<br>
              <label for="email">Email:</label><br>
              <input type="charint" id="email" name="mail">
                <label for="date">Date:</label>
                <select name="date">
              <option value="">-- Select a date --</option>
              <option value="2022-01-06">Jan 6, 2022</option>
              <option value="2022-01-07">Jan 7, 2022</option>
              <!-- Add more options for other dates -->
                </select><br>
                <label for="time">Time:</label>
                <select name="time">
              <option value="">-- Select a time --</option>
              <option value="09:00">9:00 AM</option>
              <option value="10:00">10:00 AM</option>
              <!-- Add more options for other times -->
                </select><br>
              <button name="submit"id="submit "type="submit" onclick="verifyEmail()"> Send </button>
            </form>
    </div>

</body>









</html>

