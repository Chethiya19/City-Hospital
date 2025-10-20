<!DOCTYPE html>
<?php session_start(); ?>
<?php include "DB_Operation.php"; ?>
<html>

<head>
    <title>Patient Login</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="CSS/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<?php 
    $Sp="";
    $Doc="";
    $Date="";
    $Reason ="";
    $F_name="";
    $L_name="";
    $Email="";
    $Phone="";
    $msg ="";

    if(isset($_POST['btnsignin'])){
        $Sp = $_POST['txtsp'];
        $Doc = $_POST['txtdoc'];
        $Date = $_POST['txtdate'];
        $Reason = $_POST['txtr'];
        $F_name = $_POST['txtfn'];
        $L_name = $_POST['txtln'];
        $Email = $_POST['txtemail'];
        $Phone = $_POST['txtphone'];

        $sql = "INSERT INTO appoinment VALUES('$Sp','$Doc', '$Date', '$Reason', '$F_name', '$L_name', '$Email', '$Phone')"; 

        if(mysqli_query($conn,$sql)){
            $msg = "<p style=color:green;>Patient Appoinment Successful</P>";
        } else {
            $msg = "<p style=color:red;>Error!".mysqli_error($conn)."</P>";
        }
    }
    ?>
    <div id="parentDiv">
        <!--parent division-->
        <div id="childDiv1" class="font">
            <!--child 1-->
            Make an Appoinment
            <img src="Images/loginlogo/plogin.png">
        </div>

        <div id="childDiv2">

            <!--child 2-->

            <form id="subDiv1" method="post">
                <h2>User Information</h2>
                <table>
                    <tr>
                        <td><label class="font size labeltext">I want to make an appoinment for :</label></td>
                        <td>
                            <input type="radio" name="a" value="my">My Self
                            <input type="radio" name="a" value="other">Family/Friend
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> Specialty :</lable>
                        </td>
                        <td>
                            <select name="txtsp" value="<?php echo $Sp;?>">
                                <option>Anesthesiology</option>
                                <option>Cardiology</option>
                                <option>Endocrinology </option>
                                <option>Gastroenterology </option>
                                <option>Hand Surgery</option>
                                <option>Hematology</option>
                                <option>Neurology</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> Preferred Doctor :</lable>
                        </td>
                        <td>
                            <select name="txtdoc" value="<?php echo $Doc;?>" >
                                <option>Dr.S.K.Perera</option>
                                <option>Dr.Tanya Colline</option>
                                <option>Dr.S.Ashogan </option>
                                <option>Dr.Lakshman </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> Preferred Date :</lable>
                        </td>
                        <td><input name="txtdate" type="datetime-local" value="<?php echo $Date;?>" required ></td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> Reason of consultation :</lable>
                        </td>
                        <td><textarea name="txtr" rows="3" cols="25" value="<?php echo $Reason;?>"></textarea></td>
                    </tr>
                </table>
                <br>
                <h2>Patient Information</h2>
                <table>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> First Name :</lable>
                        </td>
                        <td><input type="text" placeholder="First name" name="txtfn" value="<?php echo $F_name;?>" required></td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> Last Name :</lable>
                        </td>
                        <td><input type="text" placeholder="Last name" name="txtln" value="<?php echo $L_name;?>" required></td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> E-mail :</lable>
                        </td>
                        <td><input type="text" placeholder="xxxxxx@gmail.com" name="txtemail" value="<?php echo $Email;?>"required></td>
                    </tr>
                    <tr>
                        <td>
                            <lable class="font size labeltext"> Mobile Number :</lable>
                        </td>
                        <td><input type="text" placeholder="07x xxx xxxx" name="txtphone"required value="<?php echo $Phone;?>"></td>
                    </tr>
                    <br>
                    <tr>
                        <td><button type="submit" id="backgroundstyle" class="font controlstyle buttonstyle" name="btnsignin">
                                <span class="buttontext">Submit</span>
                            </button></td>
                    </tr>
            <tr>
                <td colspan="2"> <?php echo $msg; ?></td>
            </tr>
                </table>

            </form>
        </div>
        
    </div>

</body>

</html>