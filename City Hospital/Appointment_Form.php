<!DOCTYPE html>
<?php session_start(); ?>
<?php include "DB_Operation.php"; ?>
<html>
    <head>
        <title>Appointment Form</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="CSS/Appointmentstyle.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        
<?php 
    $F_name="";
    $L_name="";
    $Email="";
    $Number="";
    $Sp="";
    $Doc="";
    $Date="";
    $Branch="";
    $Reason ="";
    $msg ="";
    $AppointmentNumber="";

    if(isset($_POST['btnsubmit'])){
        $F_name = $_POST['txtfirstname'];
        $L_name = $_POST['txtlastname'];
        $Email = $_POST['txtemail'];
        $Number = $_POST['txtnumber'];
        $Sp = $_POST['txtsp'];
        $Doc = $_POST['txtdoc'];
        $Date = $_POST['date'];
        $Branch = $_POST['branch'];
        $Reason = $_POST['txtreason'];
        
        $sql = "INSERT INTO appointment (Firstname,Lastname,Email,MobileNo,Specialization,Doctor,Date,Branch,Reason) 
        VALUES('$F_name', '$L_name','$Email', '$Number','$Sp','$Doc', '$Date','$Branch','$Reason')"; 

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
                Appointment Form
                <img src="Images/appointment logo.jpg">
            </div>

            <div id="childDiv2" >
                <!--child 2-->
                
                <form id="subDiv1" method="post">
                    <table>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Make Appointment For</label>
                            </td>
                            <td>
                                <input type="radio" name="Apptype" value="My"  required>My Self
                                <input type="radio" name="Apptype" value="Other"  required>Family / Friend
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Name</label>
                            </td>
                            <td><input type="text" placeholder="First name" class="font controlstyle1" name="txtfirstname" value="<?php echo $F_name;?>" required></td>
                            <td><input type="text" placeholder="Last name" class="font controlstyle" name="txtlastname" value="<?php echo $L_name;?>" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >E-mail</label>
                            </td>
                            <td><input type="text" placeholder="xxxxxx@gmail.com" class="font controlstyle" name="txtemail" value="<?php echo $Email;?>" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Mobile Number</label>
                            </td>
                            <td><input type="text" placeholder="07x-xxx xxxx" class="font controlstyle" name="txtnumber" value="<?php echo $Number;?>" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" required>Specialization</label>
                            </td>
                            <td>
                                <select class="font controlstyle" value="<?php echo $Sp;?>" name="txtsp" >
                                    <option>Chest Specialist</option>
                                    <option>Child and Adolescent Psychologist</option>
                                    <option>Diabetic Specialist</option>
                                    <option>Family Physician</option>
                                    <option>Dental Seurgeon</option>
                                    <option>Physiotherapist</option>
                                    <option>Ent Seurgeon</option>
                                    <option>Ayurvedic Cardiologist</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Doctor</label>
                            </td>
                            <td>
                                <select class="font controlstyle" value="<?php echo $Doc;?>" name="txtdoc">
                                    <option>MR.Upul Jayawardhana</option>
                                    <option>MR.Asela Gunawardhana</option>
                                    <option>MS.Nishadhi Munashighe</option>
                                    <option>MR.Akila Weerathunga</option>
                                    <option>MR.Sanaka Perera</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Date Of Appointment</label>
                            </td>
                            <td><input type="datetime-local" placeholder="date" class="font controlstyle" name="date" value="<?php echo $Date;?>"  required></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Branch</label>
                            </td>
                            <td>
                                <select class="font controlstyle" name="branch"  value="<?php echo $Branch;?>" required>
                                    <option>Galle</option>
                                    <option>Kurunegala</option>
                                    <option>Jaffna</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Reason Of Consultation</label>
                            </td>
                            <td><textarea type="text" rows="3" cols="30" class="" name="txtreason" value="<?php echo $Reason;?>" required></textarea></td>
                        </tr>

                    </table>

                    <button type="submit" id="backgroundstyle" class="font controlstyle buttonstyle" name="btnsubmit">
                        <span class="buttontext">Submit</span>
                    </button>

                    <tr>
                <td colspan="2"> <?php echo $msg; ?></td>
                <td colspan="2"> <?php echo $AppointmentNumber; ?></td>
            </tr>
                </form>
            </div>
        </div>  
    </body>
</html>