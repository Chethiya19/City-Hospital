<!DOCTYPE html>
<?php session_start(); ?>
<?php include "DB_Operation.php"; ?>
<html>
    <head>
        <title>Manage Doctor Accounts</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <link href="CSS/ManageAccounts.css" rel="stylesheet">
    </head>
<body>

<?php 
    $D_ID="";
    $D_Name="";
    $email="";
    $pass ="";
    $Specialization="";
    $branch="";
    $Contact="";
    $msg ="";

    if(isset($_POST['btnInsert'])){
        $D_ID = $_POST['txtId'];
        $D_Name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $Specialization = $_POST['txtSpecialization'];
        $branch = $_POST['txtbranch'];
        $Contact = $_POST['txtContact'];

        $sql = "INSERT INTO doctor VALUES('$D_ID','$D_Name', '$email', '$pass','$Specialization', '$branch','$Contact')"; 

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful!!","Doctor Record Inserted ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Doctor Record Not Inserted ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnFind'])){
        $D_ID = $_POST['txtId'];
        $sql = "SELECT * FROM doctor WHERE D_ID='$D_ID'";

        $result = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $row = mysqli_fetch_assoc($result);
            $D_Name = $row ['D_Name'];
            $email = $row ['Email'];
            $pass = $row ['Password'];
            $Specialization = $row ['Specialization'];
            $branch = $row ['Branch'];
            $Contact = $row['Contact_No'];
            
            ?>
                <script>
                    swal("Successful!!","Doctor Record Found ...");
                </script>
            <?php

        } else {
            ?>
                <script>
                    swal("Error!!","Doctor Record Not Found ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnUpdate'])){
        $D_ID = $_POST['txtId'];
        $D_Name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $Specialization = $_POST['txtSpecialization'];
        $branch = $_POST['txtbranch'];
        $Contact = $_POST['txtContact'];

        $sql = "UPDATE doctor SET D_Name='$D_Name', Email='$email', Password='$pass',Specialization='$Specialization', Branch='$branch', Contact_No='$Contact' WHERE D_ID='$D_ID'"; 

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful!!","Doctor Record Updated ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Doctor Record Not Updated ...");
                </script>
            <?php
        }
        
    }

    if(isset($_POST['btnDelete'])){
        $D_ID = $_POST['txtId'];
        $sql = "DELETE FROM doctor WHERE D_ID='$D_ID'";

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful!!","Doctor Record Deleted ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Doctor Record Not Deleted ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnClear'])){

    }

?>

<div id="parentDiv">
    <div id="childDiv1" class="font">
       Manage Doctor Accounts
        <img src="Images/Manage_patient.png">
    </div>

    <div id="childDiv2">

    <form id="subDiv1" method="post">
        <table>
            <tr><td><label>Doctor ID</label></td>
                <td><input type="text" placeholder= "Doctor ID" class="font controlstyle" name="txtId" value="<?php echo $D_ID;?>" ></td><tr>
            <tr><td><label>Doctor Name</label></td>
                <td><input type="text" placeholder= "Doctor Name" class="font controlstyle" name="txtUser" value="<?php echo $D_Name;?>" ></td><tr>
            <tr><td><label>Email</label></td>
                <td><input type="email" placeholder= "E_mail" class="font controlstyle" name="txtEmail" value="<?php echo $email;?>" ></td><tr>
            <tr><td><label>Password</label></td>
                <td><input type="password" placeholder= "Password" class="font controlstyle" name="txtPassword" value="<?php echo $pass;?>" ></td><tr>
            <tr><td><label>Specialization</label></td>
                <td><input type="text" placeholder= "Specialization" class="font controlstyle" 
                            name="txtSpecialization" value="<?php echo $Specialization;?>" ></td><tr>
            <tr><td><label>Branch</label></td><td>
                <select name="txtbranch" class="font controlstyle">
                    <option <?php if (isset($_POST['txtbranch']) && $_POST['txtbranch'] == 'Galle') echo $branch; ?>>Galle</option>
                    <option <?php if (isset($_POST['txtbranch']) && $_POST['txtbranch'] == 'Kurunegala') echo $branch; ?>>Kurunegala</option>
                    <option <?php if (isset($_POST['txtbranch']) && $_POST['txtbranch'] == 'Jaffna') echo $branch; ?>>Jaffna</option>
                </select>
            </td><tr>
            <tr><td><label>Contact No</label></td>
                <td><input type="text" placeholder= "Contact No" class="font controlstyle" 
                            name="txtContact" value="<?php echo $Contact;?>" ></td><tr>

            <tr><td colspan="5">
                <input class="btn buttonstyle" type="submit" name="btnInsert" value="Insert">
                <input class="btn buttonstyle" type="submit" name="btnFind" value="Find">
                <input class="btn buttonstyle" type="submit" name="btnUpdate" value="Update">
                <input class="btn buttonstyle" type="submit" name="btnDelete" value="Delete">
                <input class="btn buttonstyle" type="submit" name="btnClear" value="Clear"></td>

            </tr>
            <tr>
                <td colspan="2"> <?php echo $msg; ?></td>
            </tr>
                
        </table>
        <hr width="90%">
        <br>
        <input class="btn buttonstyle" type="submit" name="btnViewAll" value="View All"><br><br>
    </form>
    </div>
</div>
    

    <?php
        if(isset($_POST['btnViewAll'])){
            $sql = "SELECT * FROM doctor";
            $result = mysqli_query($conn,$sql);
            $numRows = mysqli_num_rows($result);
            if($numRows>0){
                ?> 
                <table border="1" bordercolor="#000000" width="700" height="100%" bgcolor="#B3E0E3" align="center" id="viewtable">
                    <tr>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Specialization</th>
                        <th>Branch</th>
                        <th>Contact No</th>
                    </tr>
                    <?php 
                        while($row = mysqli_fetch_row($result)){
                    ?> 
                    <tr align="center">
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>  
                        <td><?php echo $row[5]; ?></td> 
                        <td><?php echo $row[6]; ?></td> 
                    </tr> 
                    <?php 
                        }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <script>
                    swal("Error!!","Doctor records Not Found ...");
                </script>
            <?php
            }
        }
        
    ?>
    </table>

</body>
</html>