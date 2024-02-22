<?php
// Assuming you have already initialized Firebase in your config.js file
// You may need to adjust the Firebase initialization based on your setup

// Check if user is already logged in, if yes, redirect to dashboard
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Log In - CodeRamp'20</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="CodeRamp, Code Ramp, CodeRamp'20, JHC, JHC Contest">

	<link rel="icon" href="avataaars.png" type="image/png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-analytics.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-storage.js"></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/config.js"></script>
</head>

<body>
<div class="bg">
</div>
<div class="container pt-5">
	<div class="d-flex justify-content-center pt-5">
		<div class="card">
			<div class="card-header">
				<h3>Log In</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<input type="email" class="form-control vp-input" placeholder="E-mail or username"
						   id="email-input">
					<input type="password" class="form-control vp-input" placeholder="password" id="password-input">
				</div>
				<div class="alert alert-danger" style="display: none;" role="alert" id="alert-box"></div>
				<div class="form-group">
					<input type="submit" value="Log In" onclick="signIn()" class="btn float-right login_btn">
				</div>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Dont have an Account?<a href="signup.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Optional JavaScript -->
<script type="text/javascript">
	var userDatabase = firebase.firestore().collection('users');
	var taskDatabase = firebase.firestore().collection('tasks');
	function validateEmail(email) {
		const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	function displayAlert(message) {
		$('#alert-box').text(message);
		$('#alert-box').show();
	}

	function signIn() {
		var email = $("#email-input").val().toLowerCase();
		var password = $("#password-input").val();
		if (!validateEmail(email)) {
			userDatabase.doc(email).get().then(function (doc) {
				if (doc.exists) {
					email = doc.data()['email'];
					if (password.length < 4) {
						displayAlert('Please enter a password.');
						return;
					}
					firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
						var errorCode = error.code;
						var errorMessage = error.message;
						if (errorCode === 'auth/wrong-password') {
							displayAlert('Wrong password.');
						}
						else if (errorCode === 'auth/user-not-found') {
							displayAlert('User not found. Sign up First.');
						} else {
							displayAlert(errorMessage);
						}
						console.log(error);
					});
				} else {
					displayAlert('User not Registered..');
					return;
				}
			});
		} else {
			firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
				var errorCode = error.code;
				var errorMessage = error.message;
				if (errorCode === 'auth/wrong-password') {
					displayAlert('Wrong password.');
				}
				else if (errorCode === 'auth/user-not-found') {
					displayAlert('User not found. Sign up First.');
				} else {
					displayAlert(errorMessage);
				}
				console.log(error);
			});
		}
	}
	window.onload = function () {
		firebase.auth().onAuthStateChanged(function (user) {
			if (user) {
				location.replace('dashboard.php')
			}
		});
	};
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
