<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Portal</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">    
    <link rel="stylesheet" href="CSS/Doctorstyle.css">
</head>

<?php include "Header.php" ?>

<body>
    <Header class="Doctor-Portal">
        <div class="welcome">
            <?php
            session_start();
            if (isset($_SESSION['username'])){
                echo "<h1>Welcome to Doctor Portal - ".strtoupper($_SESSION ['username'])."</h1>";
            } else {
                header("Location:Login.php") ;  
            }
            ?>
        </div>
    </Header>

    <section id="logins" class="logins container-fluid">
        <div class="container">
            <div class="inner-title">
                <h2 id="A">View Medical Reports & Patient Appointments</h2>
            </div>
            <div class="logins-cont">
                <div class="row no-margin">
                    <div class="logins-smk">
                        <div class="logins-single">

                            <img src="images/medical.jpg" alt="" width="450px">

                            <div class="logins-single-det">
                                <h6>Medical Reports</h6>
                                <a href="Display_File.php" target="_blank">
                                    <button class="btn btn-success btn-sm">View</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="logins-smk">
                        <div class="logins-single">

                            <img src="images/appointment1.jpg" alt="" width="450px">

                            <div class="logins-single-det">
                                <h6>Patient Appointments</h6>
                                <a href="DisplayAppointments.php" target="_blank">
                                    <button class="btn btn-success btn-sm">View</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<?php include "Footer.php" ?>
</html>