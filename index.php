<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Appointment Scheduling</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>CALENDAR</title>
    
</head>

<body class="light">

      
<div id="response" class="container">
    <div class="Topbar">
      <a href="index.php"> <img src="logo.png" alt="A description of the image" id="logo"></a> 
    </div>

<div class="appointment">

<h1>Appointment Form</h1>

</div>
    
    <div class="form">
      <form onsubmit="return showPopup()" action="database.php" method="POST">
        <label for="name">Full Name:</label><br>
        <input type="char" class="fullname" name="textbox_name" required><br>
        <label for="email">Email:</label><br>
        <input type="charint" class="email" name="mail" required>
    
    <div class="calendar">
    <h3><center>APPOINTMENT CALENDAR</center></h3>
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        <div class="calendar-footer">

        </div>
        
        <div class="month-list"></div>
        <center>
        <select id="hours">
  <option value="8:00AM">8:00AM-9:00AM</option>
  <option value="8:00AM">9:00AM-10:00AM</option>
  <option value="8:00AM">10:00AM-11:00AM</option>
  <option value="8:00AM">1:00PM-2:00PM</option>
  <option value="8:00AM">2:00PM-3:00PM</option>
  <option value="8:00AM">3:00PM-4:00PM</option>
</select>
        </center>
<p><justify><br>Note:<br><br> -After you send your appointment you will recieve an email that consist <br> of your Confirmation and 
    Number Code.
</justify></p>

      </div>


      <br><br>

    <button name="submit"id="submit "type="submit" onclick="verifyEmail()"> Send </button>
    

</body>
  


</html>

