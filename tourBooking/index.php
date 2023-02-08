<!-- Header -->
<?php include "header.php"?>
<div class="container">
    <h1 class="text-center">Data to perform CRUD Operations</h1>
    <a href="create.php" class="btn btn-outline-dark mb-2"> <i class="bi bi-person-plus"></i>Create New Booking</a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Group Size</th>
                <th scope="col">Location</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $query = "SELECT * FROM bookings";
                    $view_bookings = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($view_bookings)) {
                        $id = $row['id'];
                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                        $email = $row['email'];
                        $gsize = $row['groupsize'];
                        $tlocation = $row['tourlocation'];
                        $tdate = $row['tourdate'];
                        $ttime = $row['tourtime'];

                        echo "<tr>";
                        echo "<th scope='row'>{$id}</th>";
                        echo "<td>{$fname}</td>";
                        echo "<td>{$lname}</td>";
                        echo "<td>{$email}</td>";
                        echo "<td>{$gsize}</td>";
                        echo "<td>{$tlocation}</td>";
                        echo "<td>{$tdate}</td>";
                        echo "<td>{$ttime}</td>";

                        echo "<td class='text-center'><a href='view.php?booking_id={$id}' class='btn btn-primary'><i class='bi bi-eye'></i>View</a></td>";
                        echo "<td class='text-center'><a href='update.php?edit&booking_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i>Edit</a></td>";
                        echo "<td class='text-center'><a href='delete.php?delete={$id}' class='btn btn-danger'><i class='bi bi-trash'></i>Delete</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>

<!-- Footer -->
<?php include "footer.php"?>