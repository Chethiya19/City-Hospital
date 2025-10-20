<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Portal</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">    
    <link rel="stylesheet" href="CSS/Patientstyle.css">
</head>

<?php include "Header.php" ?>
<body>
    <Header class="Patient-Portal">
        <div class="welcome">
            <?php
            session_start();
            if (isset($_SESSION['username'])){
                echo "<h1>Welcome to Patient Portal - ".strtoupper($_SESSION ['username'])."</h1>";
            } else {
                header("Location:Login.php") ;  
            }
            ?>
        </div>
    </Header>

    <div class="app-container" id="app-container">
        <div class="content">
            <div class="app-1">
                <img src="images/doctor appointment.jpg" class="img-responsive"><br>
                <a href="Appointment_Form.php" class="btn">Make an appointment</a>
            </div>
        </div>
    </div>
</body>
<?php include "Footer.php" ?>
</html>