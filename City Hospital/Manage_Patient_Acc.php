<!DOCTYPE html>
<?php session_start(); ?>
<?php include "DB_Operation.php"; ?>
<html>
    <head>
        <title>Manage Patient Accounts</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <link href="CSS/ManageAccounts.css" rel="stylesheet">
    </head>
<body>

<?php 
    $P_ID="";
    $P_Name="";
    $email="";
    $pass ="";
    $city="";
    $Contact="";
    $msg ="";

    if(isset($_POST['btnInsert'])){
        $P_ID = $_POST['txtId'];
        $P_Name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $city = $_POST['txtCity'];
        $Contact = $_POST['txtContact'];

        $sql = "INSERT INTO patient VALUES('$P_ID','$P_Name', '$email', '$pass', '$city','$Contact')"; 

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful","Patient Record Inserted ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Patient Record Not Inserted ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnFind'])){
        $P_ID = $_POST['txtId'];
        $sql = "SELECT * FROM patient WHERE P_ID='$P_ID'";

        $result = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $row = mysqli_fetch_assoc($result);
            $P_Name = $row ['P_Name'];
            $email = $row ['Email'];
            $pass = $row ['Password'];
            $city = $row ['City'];
            $Contact = $row['Contact_No'];
            ?>
                <script>
                    swal("Successful","Patient Record Found ...");
                </script>
            <?php

        } else {
            ?>
                <script>
                    swal("Error!!","Patient Record Not Found ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnUpdate'])){
        $P_ID = $_POST['txtId'];
        $P_Name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $city = $_POST['txtCity'];
        $Contact = $_POST['txtContact'];

        $sql = "UPDATE patient SET P_Name='$P_Name', Email='$email', Password='$pass', city='$city', Contact_No='$Contact' WHERE P_ID='$P_ID'"; 

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful","Patient Record Updated ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Patient Record Not Updated ...");
                </script>
            <?php
        }
        
    }

    if(isset($_POST['btnDelete'])){
        $P_ID = $_POST['txtId'];
        $sql = "DELETE FROM patient WHERE P_ID='$P_ID'";

        if(mysqli_query($conn,$sql)){
            ?>
            <script>
                swal("Successful","Patient Record Deleted ...");
            </script>
        <?php
        } else {
            $msg = "<p>Error!".mysqli_error($conn)."</P>";
        }
    }

    if(isset($_POST['btnClear'])){

    }

?>

<div id="parentDiv">
    <div id="childDiv1" class="font">
       Manage Patient Accounts
        <img src="Images/Manage_patient.png">
    </div>

    <div id="childDiv2">

    <form id="subDiv1" method="post">
        <table>
            <tr><td><label>Patient ID</label></td>
                <td><input type="text" placeholder= "Patient ID" class="font controlstyle" name="txtId" value="<?php echo $P_ID;?>" ></td><tr>
            <tr><td><label>Patient Name</label></td>
                <td><input type="text" placeholder= "Patient Name" class="font controlstyle" name="txtUser" value="<?php echo $P_Name;?>" ></td><tr>
            <tr><td><label>Email</label></td>
                <td><input type="email" placeholder= "E_mail" class="font controlstyle" name="txtEmail" value="<?php echo $email;?>" ></td><tr>
            <tr><td><label>Password</label></td>
                <td><input type="password" placeholder= "Password" class="font controlstyle" name="txtPassword" value="<?php echo $pass;?>" ></td><tr>
            <tr><td><label>City</label></td>
                <td><input type="text" placeholder= "City" class="font controlstyle" 
                            name="txtCity" value="<?php echo $city;?>" ></td><tr>
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
            $sql = "SELECT * FROM patient";
            $result = mysqli_query($conn,$sql);
            $numRows = mysqli_num_rows($result);
            if($numRows>0){
                ?> 
                <table border="1" bordercolor="#000000" width="600" height="100%" bgcolor="#B3E0E3" align="center" id="viewtable">
                    <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>City</th>
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
                    </tr> 
                    <?php 
                        }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <script>
                    swal("Error!!","Patient Record Not Found ...");
                </script>
            <?php
            }
        }
        
    ?>
    </table>

</body>
</html>