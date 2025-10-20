<!DOCTYPE html>
<?php session_start(); ?>
<?php include "DB_Operation.php"; ?>
<html>
    <head>
        <title>Manage Admin Accounts</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <link href="CSS/ManageAccounts.css" rel="stylesheet">
    </head>
<body>

<?php 
    $A_ID="";
    $A_Name="";
    $email="";
    $pass ="";
    $Contact="";
    $msg ="";

    if(isset($_POST['btnInsert'])){
        $A_ID = $_POST['txtId'];
        $A_Name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $Contact = $_POST['txtContact'];

        $sql = "INSERT INTO admin VALUES('$A_ID','$A_Name', '$email', '$pass','$Contact')"; 

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful!!","Admin Record Inserted ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Admin Record Not Inserted ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnFind'])){
        $A_ID = $_POST['txtId'];
        $sql = "SELECT * FROM admin WHERE A_ID='$A_ID'";

        $result = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $row = mysqli_fetch_assoc($result);
            $A_Name = $row ['A_Name'];
            $email = $row ['Email'];
            $pass = $row ['Password'];
            $Contact = $row['Contact_No'];

            ?>
                <script>
                    swal("Successful!!","Admin Record Found ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Admin Record Not Found ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnUpdate'])){
        $A_ID = $_POST['txtId'];
        $A_Name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPassword'];
        $Contact = $_POST['txtContact'];

        $sql = "UPDATE admin SET A_Name='$A_Name', Email='$email', Password='$pass', Contact_No='$Contact' WHERE A_ID='$A_ID'"; 

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful!!","Admin Record Updated ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Admin Record Not Updated ...");
                </script>
            <?php
        }
        
    }

    if(isset($_POST['btnDelete'])){
        $A_ID = $_POST['txtId'];
        $sql = "DELETE FROM admin WHERE A_ID='$A_ID'";

        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    swal("Successful!!","Admin Record Deleted ...");
                </script>
            <?php
        } else {
            ?>
                <script>
                    swal("Error!!","Admin Record Not Deleted ...");
                </script>
            <?php
        }
    }

    if(isset($_POST['btnClear'])){

    }

?>

<div id="parentDiv">
    <div id="childDiv1" class="font">
       Manage Admin Accounts
        <img src="Images/Manage_patient.png">
    </div>

    <div id="childDiv2">

    <form id="subDiv1" method="post">
        <table>
            <tr><td><label>Admin ID</label></td>
                <td><input type="text" placeholder= "Admin ID" class="font controlstyle" name="txtId" value="<?php echo $A_ID;?>" ></td><tr>
            <tr><td><label>Admin Name</label></td>
                <td><input type="text" placeholder= "Admin Name" class="font controlstyle" name="txtUser" value="<?php echo $A_Name;?>" ></td><tr>
            <tr><td><label>Email</label></td>
                <td><input type="email" placeholder= "E_mail" class="font controlstyle" name="txtEmail" value="<?php echo $email;?>" ></td><tr>
            <tr><td><label>Password</label></td>
                <td><input type="password" placeholder= "Password" class="font controlstyle" name="txtPassword" value="<?php echo $pass;?>" ></td><tr>
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
            $sql = "SELECT * FROM admin";
            $result = mysqli_query($conn,$sql);
            $numRows = mysqli_num_rows($result);
            if($numRows>0){
                ?> 
                <table border="1" bordercolor="#000000" width="500" height="100%" bgcolor="#B3E0E3" align="center" id="viewtable">
                    <tr>
                        <th>Admin ID</th>
                        <th>Admin Name</th>
                        <th>Email</th>
                        <th>Password</th>
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
                    </tr> 
                    <?php 
                        }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <script>
                    swal("Error!!","Admin records Not Found ...");
                </script>
            <?php
            }
        }
        
    ?>
    </table>

</body>
</html>