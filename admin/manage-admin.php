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

                    <tr>
                        <td>1</td>
                        <td>Mary M</td>
                        <td>maryRocks</td>
                        <td>
                            <a href="#" class="btn btn-secondary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Scott</td>
                        <td>scottRocks</td>
                        <td>
                            <a href="#" class="btn btn-secondary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Bob</td>
                        <td>bobRocks</td>
                        <td>
                            <a href="#" class="btn btn-secondary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <! -- Menu Section Ends -->

<?php include('partials/footer.php'); ?>    