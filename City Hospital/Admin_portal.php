<!DOCTYPE html>
<html lang="en"  dir="ltr">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">    
    <link rel="stylesheet" href="CSS/Adminstyle.css">


</head>

<?php include "Header.php" ?>

<body>
    <Header class="Admin-Portal">
        <div class="welcome">
            <?php
            session_start();
            if (isset($_SESSION['username'])){
                echo "<h1>Welcome to Admin Portal - ".strtoupper($_SESSION ['username'])."</h1>";
            } else {
                header("Location:Login.php") ;  
            }
            ?>
        </div>
    </Header>

    <section id="logins" class="logins container-fluid">
        <div class="container">
            <div class="inner-title">
                <h2 id="A">Manage Accounts</h2>
            </div>
            <div class="logins-cont">
                <div class="row no-margin">
                    <div class="logins-smk">
                        <div class="logins-single">

                            <img src="images/patient.jpg" alt="">

                            <div class="logins-single-det">
                                <h6>Patient Accounts</h6>
                                <a href="Manage_Patient_Acc.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Manage</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="logins-smk">
                        <div class="logins-single">

                                <img src="images/doctor.jpg" alt="">

                            <div class="logins-single-det">
                                <h6>Doctor Accounts</h6>
                                <a href="Manage_Doctor_Acc.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Manage</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="logins-smk">
                        <div class="logins-single">

                                <img src="images/admin.jpg" alt="">

                            <div class="logins-single-det">
                                <h6>Admin Accounts</h6>
                    
                                <a href="Manage_Admin_Acc.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Manage</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    

    <div class="fileupload">
    <h1>Upload Medical Reports</h1>
      <form class="form" action="Admin_portal.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="btnUpload" value="Upload">
        <?php
        include "DB_Operation.php"; 

        if (isset($_POST['btnUpload'])) {
          $pdf=$_FILES['pdf']['name'];
          $extensions = array("jpg","jpeg","doc","docx","pdf","pptx");
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

            if(move_uploaded_file($pdf_tem_loc,$pdf_store)){
                ?>
                <script>
                    swal("Successful!!","File Uploaded...");
                </script>
            <?php
            }else {               
                ?>
                <script>
                    swal("Error!!","File Not Uploaded ...");
                </script>
            <?php
            }
          $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);
        }
        ?>
      </form>
    </div>


</body>
<?php include "Footer.php" ?>
</html>