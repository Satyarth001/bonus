<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Algoma University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #5e6770;
        }
        .navbar-brand, .nav-link {
            color: #d2f0ff !important;
        }
        .btn-custom {
            background-color: #00e6ff;
            color: black;
            border: none;
            margin-left: 5px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Algoma University</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lab_solution.php">Lab Solutions</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php if(isset($_SESSION["user_id"]))
                {?>
                  <a href="logout.php" class="btn btn-custom">Logout</a>
     
                <?php }else {?>
                    <a href="signup.php" class="btn btn-custom">Sign Up</a>
                    <a href="login.php" class="btn btn-custom">Login</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
