<!DOCTYPE html>
<?php session_start(); 
    include "DB_Operation.php";
?>
<html>
    <head>
        <title>Admin Login</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="CSS/Loginstyle.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="parentDiv"> 
            <!--parent division-->
            <div id="childDiv1" class="font">
                <!--child 1-->
                Admin Login
                <img src="Images/Admin logo.jpg">
            </div>

            <div id="childDiv2" >
                <!--child 2-->
                
                <form id="subDiv1" method="post">
                    <input type="text" placeholder="Username" class="font controlstyle" name="txtusername" required>
                    <input type="password" placeholder="Password" class="font controlstyle" style="margin-top: 15px; margin-bottom: 15px;" name="txtpassword" required>
                    <input type="checkbox"> <lable class="font size labeltext"> keep me logged in</lable>
                    <button type="submit" id="backgroundstyle" class="font controlstyle buttonstyle" name="btnsignin">
                        <span class="buttontext">Login</span>
                    </button>
                </form>
                <form id="subDiv2" >
                <!--child 3-->
                    <p class="font size textcolor1">Don't have an account? <a class="font size textcolor2" href="SignupAdmin.php">Sign Up</a></p>
                    <p class="font size textcolor1">Forgot <span class="font size textcolor2">password?</span></p>
                </form>
            </div>
        </div>  

        <?php 
                $un="";
                $pw="";
            
                if(isset($_POST['btnsignin'])){
                    $un = $_POST['txtusername'];
                    $pw = $_POST['txtpassword'];

                        $sql = "SELECT * FROM tbladmin WHERE username='$un' AND password='$pw'";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)==1){
                            unset($_SESSION['username']);
                            $_SESSION['username'] = $un;
                            header("Location:Admin_portal.php");
                        }else{
                            ?>
                            <script>
                                 swal("Error","invalid username & password ...");
                            </script>
                            <?php
                        }
                }
            ?>
    </body>
</html>