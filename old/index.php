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
  
         
  <div id="response" class="container">
    <div class="Topbar">
      <a href="index.php"> <img src="logo.png" alt="A description of the image" id="logo"></a> 
    </div>
    <h1 class="headick">Appointment Form</h1>
    <div class="form">
      <form onsubmit="return showPopup()" action="database.php" method="POST">
        <label for="name">Full Name:</label><br>
        <input type="char" id="fullname" name="textbox_name" required><br>
        <label for="email">Email:</label><br>
        <input type="charint" id="email" name="mail" required>

        <label for="Day">Day:</label>
          <select name="Date" required>
            <option value="">-- Select a Day --</option>
            <option value="January 5, 2023">January 5, 2023</option>
            <option value="January 6, 2023">January 6, 2023</option>
            <option value="January 7, 2023">January 7, 2023</option>
          </select>
        <label for="Time">Time:</label>
          <select name="Time" required>
            <option value="">-- Select a Time--</option>
            <option value="8:00">8:00</option>
            <option value="11:00">11:00</option>
            <option value="14:00">14:00</option>
          </select>
          <br><br><br>
      <button name="submit"id="submit "type="submit" onclick="verifyEmail()"> Send </button>
      </form>
    </div>
  </div>
  <script>
    function showPopup() {
        alert("Thank you for submitting your response!");
        location.reload();
        return;
    }
  </script>
</body>
</html>
