<!-- Footer -->
<?php  include "header.php" ?>

<?php 
    if(isset($_GET['delete'])) {
        $booking_id= $_GET['delete'];

        // SQL query to delete data from user table where id = $booking_id
        $query = "DELETE FROM bookings WHERE id = {$booking_id}"; 
        $delete_query= mysqli_query($conn, $query);
        header("Location:index.php");
        die();
    }
?>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-secondary mt-5">Back</a>
</div>

<!-- Footer -->
<?php include "footer.php" ?>