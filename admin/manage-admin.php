<?php include('partials/nav.php'); ?>

        <! -- Main Content Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br>

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>
                <br><br>
                <! -- Button to add an Employee -->
                <a href="add-admin.php" class="btn btn-primary">Add Admin</a>
                <br><br><br>
                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    
                    <?php
                        // SQL Query
                        $sql = "SELECT * FROM admin";
                        // Execute Query
                        $res = mysqli_query($conn, $sql);
                        // Check to see if it worked
                        if($res == TRUE)
                        {
                            // Count the number of rows we have in the database
                            $rows = mysqli_num_rows($res);
                            // If we have more than 0 rows, 
                            if($rows>0){
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    ?>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-secondary">Update</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                //Do Nothing
                            }
                        }
                    ?>
        
                </table>
            </div>
        </div>
        <! -- Menu Section Ends -->

<?php include('partials/footer.php'); ?>    