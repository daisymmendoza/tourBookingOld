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
    }
 
    //Processing form data when form is submitted
    if (isset($_POST['update'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
      
        // SQL query to update the data in user table where the id = $userid 
        $query = "UPDATE bookings SET firstname = '{$fname}' , lastname = '{$lname}' , email= '{$email}' WHERE id = $bookingid";
        $update_booking = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('Booking data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Booking Details</h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $fname?>">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname"  class="form-control" value="<?php echo $lname?>">
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"  class="form-control" value="<?php echo $email?>">
            </div>    

            <div class="form-group">
                <input type="submit"  name="update" class="btn btn-primary mt-2" value="Update">
            </div>
        </form>    
    </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
</div>

<!-- Footer -->
<?php include "footer.php" ?>