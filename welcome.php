<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
include "includes/header.php";
?>

<div class="container mt-5">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <p>You are now logged in.</p>
</div>



<?php include "includes/footer.php";?>