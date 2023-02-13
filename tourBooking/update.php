<!-- Header -->
<?php include "header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
    if (isset($_GET['booking_id'])) {
        $bookingid = $_GET['booking_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM bookings WHERE id = $bookingid ";
      $view_bookings= mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($view_bookings)) {
        $id = $row['id'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $email = $row['email'];
        $gsize = $row['groupsize'];
        $tlocation = $row['tourlocation'];
        $tdate = $row['tourdate'];
        $ttime = $row['tourtime'];
    }
 
    //Processing form data when form is submitted
    if (isset($_POST['update'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $gsize = $_POST['groupsize'];
        $tlocation = $_POST['tourlocation'];
        $tdate = $_POST['tourdate'];
        $ttime = $_POST['tourtime'];
      
        // SQL query to update the data in user table where the id = $userid 
        $query = "UPDATE bookings SET firstname = '{$fname}' , lastname = '{$lname}' , email= '{$email}', groupsize = '{$gsize}' , tourlocation = '{$tlocation}' , tourdate = '{$tdate}' , tourtime = '{$ttime}' WHERE id = $bookingid";
        $update_booking = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('Booking data updated successfully!')</script>";
    }             
?>
<div class="page-container">
   <div class="content-wrap">
        <h1 class="text-center formHeader">Update Booking Form</h1>
        <div class="container createForm">
            <form action="" method="post">
                <!-- First name -->
                <div class="form-group">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $fname?>">
                </div>

                <!-- Last name -->
                <div class="form-group">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $lname?>">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email?>">
                </div>

                <!-- Group size -->
                <div class="form-group">
                    <label for="groupsize" class="form-label">Group Size</label><br>
                    <input type="radio" name="groupsize" <?php if ($gsize == '1') { ?>checked="true" <?php }; ?>value="1">
                    <label for="groupsize">1</label><br>
                    <input type="radio" name="groupsize" <?php if ($gsize == '2') { ?>checked="true" <?php }; ?>value="2">
                    <label for="groupsize">2</label><br>
                    <input type="radio" name="groupsize" <?php if ($gsize == '3') { ?>checked="true" <?php }; ?>value="3">
                    <label for="groupsize">3</label><br>
                    <input type="radio" name="groupsize" <?php if ($gsize == '4') { ?>checked="true" <?php }; ?>value="4">
                    <label for="groupsize">4</label><br>
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label for="tourlocation" class="form-label">Location</label>
                    <select name="tourlocation" class="form-control"><br>
                        <option>Select</option>
                        <option class="form-control" <?php if ($tlocation == 'Paris, France') { ?>selected="true" <?php }; ?>value="Paris, France">Paris, France</option>
                        <option class="form-control" <?php if ($tlocation == 'Seattle, Washington') { ?>selected="true" <?php }; ?>value="Seattle, Washington">Seattle, Washington</option>
                        <option class="form-control" <?php if ($tlocation == 'Seoul, South Korea') { ?>selected="true" <?php }; ?>value="Seoul, South Korea">Seoul, South Korea</option>
                        <option class="form-control" <?php if ($tlocation == 'Cairo, Egypt') { ?>selected="true" <?php }; ?>value="Cairo, Egypt">Cairo, Egypt</option>
                        <option class="form-control" <?php if ($tlocation == 'Venice, Italy') { ?>selected="true" <?php }; ?>value="Venice, Italy">Venice, Italy</option>
                        <option class="form-control" <?php if ($tlocation == 'London, England') { ?>selected="true" <?php }; ?>value="London, England">London, England</option>
                        <option class="form-control" <?php if ($tlocation == 'Tokyo, Japan') { ?>selected="true" <?php }; ?>value="Tokyo, Japan">Tokyo, Japan</option>
                        <option class="form-control" <?php if ($tlocation == 'New York City, New York') { ?>selected="true" <?php }; ?>value="New York City, New York">New York City, New York</option>
                        <option class="form-control" <?php if ($tlocation == 'Madrid, Spain') { ?>selected="true" <?php }; ?>value="Madrid, Spain">Madrid, Spain</option>
                        <option class="form-control" <?php if ($tlocation == 'Rio de Janeiro, Brazil') { ?>selected="true" <?php }; ?>value="Rio de Janeiro, Brazil">Rio de Janeiro, Brazil</option>
                    </select>
                </div>

                <!-- Date -->
                <div class="form-group">
                    <label for="tourdate" class="form-label">Date</label>
                    <input type="date" name="tourdate" class="form-control" value="<?php echo $tdate?>">
                </div>

                <!-- Time slot -->
                <div class="form-group">
                    <label for="tourtime" class="form-label">Time</label><br>
                    <input type="radio" name="tourtime" <?php if ($ttime == '9am') { ?>checked="true" <?php }; ?>value="9am">
                    <label for="tourtime">9am</label><br>
                    <input type="radio" name="tourtime" <?php if ($ttime == '1pm') { ?>checked="true" <?php }; ?>value="1pm">
                    <label for="tourtime">1pm</label><br>
                    <input type="radio" name="tourtime" <?php if ($ttime == '5pm') { ?>checked="true" <?php }; ?>value="5pm">
                    <label for="tourtime">5pm</label>
                </div>

                <!-- Submit button -->
                <div class="form-group submitBtn">
                    <input type="submit" name="update" class="btn btn-primary mt-2 submitBtn" value="Update">
                </div>
            </form>
        </div>

        <!-- Back button to go to the index page -->
        <div class="container text-center mt-5 backBtn">
            <a href="index.php" class="btn btn-secondary mt-5">Back</a>
        </div>

<!-- Footer -->
<?php include "footer.php" ?>