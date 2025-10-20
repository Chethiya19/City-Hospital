<!DOCTYPE html>
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
        <div id="parentDiv"> 
        
            <!--parent division-->
            <div id="childDiv1" class="font">
                <!--child 1-->
                Appointment Form
                <img src="Images/appointment logo.jpg">
            </div>

            <div id="childDiv2" >
                <!--child 2-->
                
                <form id="subDiv1" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label class="font controlstyle"  >Make Appointment For</label>
                            </td>
                            <td>
                                <input type="radio" name="my" value="<?php echo $apptype;?>"  required>My Self
                                <input type="radio" name="other"  value="<?php echo $apptype;?>" required>Family / Friend
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Name</label>
                            </td>
                            <td><input type="text" placeholder="First name" class="font controlstyle1" name="txtfirstname" required value="<?php echo $firstname;?>"></td>
                            <td><input type="text" placeholder="Last name" class="font controlstyle" name="txtlastname" required value="<?php echo $lastname;?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >E-mail</label>
                            </td>
                            <td><input type="email" placeholder="xxxxxx@gmail.com" class="font controlstyle" name="txtemail" required value="<?php echo $email;?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" >Mobile Number</label>
                            </td>
                            <td><input type="text" placeholder="07x-xxx xxxx" class="font controlstyle" name="txtnumber" required value="<?php echo $mnumber;?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" required>Specialization</label>
                            </td>
                            <td>
                                <select class="font controlstyle" required value="<?php echo $specialization;?>">
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
                                <label class="font controlstyle" required>Doctor</label>
                            </td>
                            <td>
                                <select class="font controlstyle" value="<?php echo $doctor;?>">
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
                            <td><input type="datetime-local" placeholder="date" class="font controlstyle" name="date" value="<?php echo $date;?>" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font controlstyle" required>Branch</label>
                            </td>
                            <td>
                                <select class="font controlstyle" value="<?php echo $branch;?>">
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
                            <td><textarea type="text" rows="3" cols="30" class="" name="txtreason" value="<?php echo $reason;?>" required></textarea></td>
                        </tr>


                    </table>

                    <button type="submit" id="backgroundstyle" class="font controlstyle buttonstyle" name="btnsubmit">
                        <span class="buttontext">Submit</span>
                    </button>
                </form>
            </div>
        </div>  

        <?php 
            $apptype="";
            $firstname="";
            $lastname="";
            $email="";
            $mnumber ="";
            $specialization="";
            $doctor="";
            $date="";
            $branch="";
            $reason ="";
            $msg ="";

            if(isset($_POST['btnsubmit'])){
            $apptype= $_POST['my'];
            $apptype= $_POST['other'];
            $firstname = $_POST['txtfirstname'];
            $lastname = $_POST['txtlastname'];
            $email = $_POST['txtemail'];
            $mnumber = $_POST['txtemail'];
            $specialization= $_POST['txtemail'];
            $doctor= $_POST['txtemail'];
            $date= $_POST['txtemail'];
            $branch= $_POST['txtemail'];
            $reason = $_POST['txtemail'];

            $sql = "INSERT INTO appointment VALUES('$apptype','$firstname', '$lastname', '$email','$mnumber', '$specialization', '$doctor','$date', '$branch', '$reason')"; 

            if(mysqli_query($conn,$sql)){
                $msg = "<p style=color:red;>User Record Inserted</P>";
            } else {
                $msg = "<p style=color:red;>Error!".mysqli_error($conn)."</P>";
            }
        }
        ?>
</body>
</html>