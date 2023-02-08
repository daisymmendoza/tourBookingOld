<!-- Header -->
<?php include "header.php"?>

<?php
    if(isset($_POST['create'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $gsize = $_POST['groupsize'];
        $tlocation = $_POST['tourlocation'];
        $tdate = $_POST['tourdate'];
        $ttime = $_POST['tourtime'];

        $query = "INSERT INTO bookings (firstname, lastname, email, groupsize, tourlocation, tourdate, tourtime) VALUES('{$fname}', '{$lname}', '{$email}','{$gsize}', '{$tlocation}', '{$tdate}', '{$ttime}')";
        $add_booking = mysqli_query($conn, $query);

        if(!$add_booking) {
            echo "Something went wrong " . mysqli_error($conn);
        } else {
            echo "<script type='text/javascript'>alert('Booking added successfully!')</script>";
        }
    }
?>

<h1 class="text-center">Tour Booking Form</h1>
<div class="container">
    <form action="" method="post">
        <!-- First name -->
        <div class="form-group">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <!-- Last name -->
        <div class="form-group">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <!-- Group size -->
        <div class="form-group">
            <label for="groupsize" class="form-label">Group Size</label><br>
            <input type="radio" name="groupsize" value="1">
            <label for="groupsize">1</label><br>
            <input type="radio" name="groupsize" value="2">
            <label for="groupsize">2</label><br>
            <input type="radio" name="groupsize" value="3">
            <label for="groupsize">3</label><br>
            <input type="radio" name="groupsize" value="4">
            <label for="groupsize">4</label><br>
        </div>

        <!-- Location -->
        <div class="form-group">
            <label for="tourlocation" class="form-label">Location</label>
            <select name="tourlocation">
                <option selected="">Select</option>
                <option value="Paris, France" class="form-control">Paris, France</option>
                <option value="Seattle, Washington" class="form-control">Seattle, Washington</option>
                <option value="Seoul, South Korea" class="form-control">Seoul, South Korea</option>
                <option value="Cairo, Egypt" class="form-control">Cairo, Egypt</option>
                <option value="Venice, Italy" class="form-control">Venice, Italy</option>
                <option value="London, England" class="form-control">London, England</option>
                <option value="Tokyo, Japan" class="form-control">Tokyo, Japan</option>
                <option value="New York City, New York" class="form-control">New York City, New York</option>
                <option value="Madrid, Spain" class="form-control">Madrid, Spain</option>
                <option value="Rio de Janeiro, Brazil" class="form-control">Rio de Janeiro, Brazil</option>
            </select>
        </div>

        <!-- Date -->
        <div class="form-group">
            <label for="tourdate" class="form-label">Date</label>
            <input type="date" name="tourdate" class="form-control">
        </div>

        <!-- Time slot -->
        <div class="form-group">
            <label for="tourtime" class="form-label">Time</label><br>
            <input type="radio" name="tourtime" value="9am">
            <label for="tourtime">9am</label><br>
            <input type="radio" name="tourtime" value="1pm">
            <label for="tourtime">1pm</label><br>
            <input type="radio" name="tourtime" value="5pm">
            <label for="tourtime">5pm</label>
        </div>

        <!-- Submit button -->
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