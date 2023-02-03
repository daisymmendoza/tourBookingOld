<!-- Header -->
<?php include "header.php"?>

<?php
    if(isset($_POST['create'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];

        $query = "INSERT INTO bookings (firstname, lastname, email) VALUES('{$fname}', '{$lname}', '{$email}')";
        $add_booking = mysqli_query($conn, $query);

        if(!$add_booking) {
            echo "Something went wrong " . mysqli_error($conn);
        } else {
            echo "<script type='text/javascript'>alert('Booking added successfully!')</script>";
        }
    }
?>

<h1 class="text-center">Add booking details</h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <div class="form-group">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary mt-2" value="Submit">
        </div>
    </form>
</div>

<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5">Back</a>
</div>

<!-- Footer -->
<?php include "footer.php" ?>