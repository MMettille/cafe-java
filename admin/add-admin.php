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
        <! -- Menu Section Ends -->

<?php include('partials/footer.php'); ?>    