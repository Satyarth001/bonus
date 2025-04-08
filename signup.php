
<?php

session_start();
include 'includes/header.php';
require 'includes/connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postal_code = $_POST['postal_code'];

    $sql = "INSERT INTO users (first_name, last_name, username, email, password, address, city, province, postal_code)
            VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$address', '$city', '$province', '$postal_code')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container mt-3 alert alert-success'>Registration successful. <a href='login.php'>Login</a></div>";
    } else {
        echo "<div class='container mt-3 alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <form method="POST">
        <div class="row">
            <div class="col">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label>User Name</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="col">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="col">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label>City</label>
                <input type="text" name="city" class="form-control" required>
            </div>
            <div class="col">
                <label>Province</label>
                <select name="province" class="form-control" required>
                    <option>Choose...</option>
                    <option>ON</option>
                    <option>BC</option>
                    <option>AB</option>
                    <option>QC</option>
                </select>
            </div>
            <div class="col">
                <label>Postal Code</label>
                <input type="text" name="postal_code" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>


<?php
include 'includes/footer.php';
?>