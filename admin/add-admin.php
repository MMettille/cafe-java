<?php include('partials/nav.php'); ?>

        <! -- Main Content Starts -->
        <div class="main-content">
            <div class="wrapper">
                
                <h1>Add Employee</h1>
                <br><br><br>
                <form action="" method="POST">

                    <table class="tbl-30">
                        <tr>
                            <td>Full Name:</td>
                            <td>
                                <input type="text" name="full_name" placeholder="Enter Your Name...">
                            </td>
                        </tr>

                        <tr>
                            <td>Username:</td>
                            <td>
                                <input type="text" name="username" placeholder="Enter Your Username...">
                            </td>
                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td>
                                <input type="password" name="password" placeholder="Enter Your Password...">
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Employee" class="btn btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <! -- Main Content Ends -->

<?php include('partials/footer.php'); ?>

<?php
    // Logic for adding the form to the database
    
    // Click listener for the submit button
    if(isset($_POST['submit']))
    {
        // Grabbing the values of the form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); // md5 encripts the password

        // SQL Query
        $sql = "INSERT INTO admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        // Executing Query
        $res = mysqli_query($conn, $sql);

        // Response from server
        if($res==TRUE)
        {
            $_SESSION['add'] = "Employee Added Sucessfully";
            //Redirect Page to admin 
            header("location:".SITEURL.'/admin/manage-admin.php');
        }
        else
        {
            $_SESSION['add'] = "Employee Added Sucessfully";
            //Redirect Page to admin 
            header("location:".SITEURL.'/admin/add-admin.php');
        }
    }
?>