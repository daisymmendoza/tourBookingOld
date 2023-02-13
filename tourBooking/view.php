<!-- Header -->
<?php include "header.php"?>

<h1 class="text-center">Booking Database</h1>
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Group Size</th>
                    <th scope="col">Location</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        if(isset($_GET['booking_id'])) {
                            $booking_id = $_GET['booking_id'];

                            $query = "SELECT * FROM bookings WHERE id = {$booking_id}";
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
                                echo "<td>{$id}</td>";
                                echo "<td>{$fname}</td>";
                                echo "<td>{$lname}</td>";
                                echo "<td>{$email}</td>";
                                echo "<td>{$gsize}</td>";
                                echo "<td>{$tlocation}</td>";
                                echo "<td>{$tdate}</td>";
                                echo "<td>{$ttime}</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5">Back</a>
</div>

<!-- Footer -->
<?php include "footer.php"?>