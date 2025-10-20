<!DOCTYPE html>
<html lang="en">
<?php include "DB_Operation.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="css/signup.css">
</head>

<?php 
    $un="";
    $pw="";

    if(isset($_POST['btnsignup'])){
        $un = $_POST['name'];
        $pw = $_POST['password'];

        $sql = "INSERT INTO tbladmin (username,password) VALUES('$un', '$pw')";

        if(mysqli_query($conn,$sql)){
            header("Location:Admin_Login.php");
        } else {
            $msg = "<p style=color:red;>Error!".mysqli_error($conn)."</P>";
        }
    }
?>

<body>
    <div id="login-box">
        <div class="left">
            <form action="SignupAdmin.php" method="POST">
            <h1>Sign up - Admin</h1>
            <br><br>
            <input type="text" name="name" placeholder="Name" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <!-- <input type="password" name="password2" placeholder="Confirm password" /> -->

            <input type="submit" name="btnsignup" value="Signup" />
            </form>
        </div>

        <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Sign up with facebook</button>
            <button class="social-signin twitter">Sign up with Twitter</button>
            <button class="social-signin google">Sign up with Google+</button>
        </div>
        <div class="or">OR</div>
    </div>

</body>

</html>