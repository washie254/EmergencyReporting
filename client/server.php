<?php 
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$cdate =date("y-m-d");
	$ctime = date("h:i:s");
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'africand_emr');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) 	{ array_push($errors, "Username is required"); }
		if (empty($email)) 	{ array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username,email, password) 
					  VALUES('$username', '$email','$password')";
			mysqli_query($db, $query);

			$query1 = "INSERT INTO userprofile (username, email ) 
					  VALUES('$username', '$email')";
			mysqli_query($db, $query1);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}


	// LOGIN ADMIN
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) { array_push($errors, "Username is required"); }	
		if (empty($password)) { array_push($errors, "Password is required"); }

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	// If upload button is clicked ...
	if (isset($_POST['report_em'])) {

		$title = $_POST['title'];
		$category = $_POST['category'];
		$description = $_POST['description'];	
		$location = $_POST['location'];
		$uname = $_POST['username'];
		$uid=$_POST['userid'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		$stat = 'PENDING';
	
		$image = $_FILES['image']['name'];
		
		$target = "EmergencyImages/".basename($image);

		// Get text
		//$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
		// image file directory
		// Get image name
		// form validation: ensure that the form is correctly filled
		if (empty($title)) { array_push($errors, "insert title"); }
		if (empty($location)) { array_push($errors, "Add location"); }
		if (empty($description)) { array_push($errors, "Add a brief description"); }
	
		if (count($errors) == 0) {
			$sql = "INSERT INTO emergency (userid, username, image ,title, category, description, location, lat, lng, datereported, timereported, status ) 
								VALUES ('$uid','$uname','$image','$title','$category','$description','$location','$lat','$lng','$cdate','$ctime','$stat')";
			// execute query
			if(mysqli_query($db, $sql)){
			header('location: account.php');
			}
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			}else{
			$msg = "Failed to upload image";
			}
		}
	}

?>