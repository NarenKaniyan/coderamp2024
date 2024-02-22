<!doctype html>
<html lang="en">

<head>
    <title>CodeRamp'20</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="CodeRamp, Code Ramp, CodeRamp'20, JHC, JHC Contest">

    <link rel="icon" href="avataaars.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/ef8d624a41.js" crossorigin="anonymous"></script>

    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>

    <script type="text/javascript" src="js/config.js"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<nav class="navbar navbar-expand-md sticky-top">
    <div class="navbar-header">
        <img class="brand" src="img/brand.png" height="50px" />
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars navbarBars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-lg-2">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0 mx-md-2">
            <li class="nav-item">
                <a class="nav-link" href="tasks.php">Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
        </ul>
        <form id="login-btn-section" class="form-inline my-2 my-lg-0" style="display: none;">
            <a href="login.php" class="btn btn-outline-primary my-2 my-sm-0 mr-2">Login</a>
            <a href="signup.php" class="btn btn-primary my-2 my-sm-0">Register</a>
        </form>
    </div>
</nav>

<div id="intro">
    <div class="text-center white">
        <img src="img/brand.png" class="mx-auto d-block img-fluid" id="brand">
        <p class="text-center lead grey">Unleash Your Power to Become the Coder.</p>
        <button id="register-btn" class="bubbly-button" style="display: none;">Register Now!</button></br>
        <a href=""><i class="fa fac fa-facebook"></i></a>
        <a href=""><i class="fa fac fa-instagram"></i></a>
        <a href="#"><i class="fa fac fa-twitter"></i></a>
    </div>
</div>

<div id="footer" class="text-center pt-3">
    © Copyright JHCICT. All Rights Reserved.
</div>

<!-- Optional JavaScript -->
<script type="text/javascript">

    window.onload = function () {
        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                $('#register-btn').show();
                $('#register-btn').php('Go to Dashboard!');
                $('#register-btn').click(function () {
                    setTimeout(function () { location.replace('dashboard.php'); }, 1000)
                });
            } else {
                $('#register-btn').show();
                $('#login-btn-section').show();
                $('#register-btn').click(function () {
                    setTimeout(function () { location.replace('signup.php'); }, 1000)
                });
            }
        });
    };

    var animateButton = function (e) {

        e.preventDefault;
        //reset animation
        e.target.classList.remove('animate');

        e.target.classList.add('animate');
        setTimeout(function () {
            e.target.classList.remove('animate');
        }, 700);
    };

    var bubblyButtons = document.getElementsByClassName("bubbly-button");

    for (var i = 0; i < bubblyButtons.length; i++) {
        bubblyButtons[i].addEventListener('click', animateButton, false);
    }
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
