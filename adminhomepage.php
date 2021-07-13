<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Admin homepage</title>
</head>

<body style="background-color: #282828;">
    <div>
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: black;">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <?php echo '<a style="color: white;" href="adminhomepage.php">Home</a>' ?>
                    </li>
                </ul>
                <li class="nav-item">
                    <?php echo '<a style="color: white;" class="btn btn-danger" href="logout.php">Logout</a>' ?>
                </li>
            </div>
        </nav>



        <div class="container mt-5 my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <div>
                                <h5><?php echo "Welcome " . $_SESSION['username'] ?>!</h5>
                                <p>Here you can edit everything in the client domain.
                                    Please Keep a regular check on the Feedback given, No of orders recieved and the people who tried to contact us. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <h4>Someone contacted you</h4>
                            <div class="card-body">
                                <p class="card-category">
                                    <a href="contactrecieve.php" class="btn btn-info">Edit</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <h4>Add a Delivery guy</h4>
                            <div class="card-body">
                                <p class="card-category">
                                    <a href="deliveryguy.php" class="btn btn-info">Edit</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <h4>Recieved an order</h4>
                            <div class="card-body">
                                <p class="card-category">
                                    <a href="orderrecieve.php" class="btn btn-info">Edit</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header card-header-success">
                        <div>
                        <h4>Recieved a feedback</h4>
                            <div class="card-body">
                                <p class="card-category">
                                    <a href="feedbackrecieve.php" class="btn btn-info">Edit</a>
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: dimgray;">
        <!-- Footer -->
        <footer class="bd-footer text-muted">
            <div class="container-fluid p-3 p-md-5">
                <ul class="bd-footer-links" style="color: white;">
                    <li><a style="color: white;" href="aboutus.php">About</a></li>
                    <p>Designed and built by Aman Singh
                    </p>
                </ul>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>