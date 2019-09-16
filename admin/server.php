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
	$db = mysqli_connect('localhost', 'root', '', 'mintarik_mintari');

	// REGISTER ADMIN
	if (isset($_POST['reg_admin'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) 	{ array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO admins (username, password,dateadded) 
					  VALUES('$username', '$password','$cdate')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}


	// LOGIN ADMIN
	if (isset($_POST['login_admin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) { array_push($errors, "Username is required"); }	
		if (empty($password)) { array_push($errors, "Password is required"); }

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
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
	
	// add_product
	if (isset($_POST['add_pro'])) {
		// receive all input values from the form
		$pname = mysqli_real_escape_string($db, $_POST['pname']);
		$pprice = mysqli_real_escape_string($db, $_POST['pprice']);
		$pfeatures = mysqli_real_escape_string($db, $_POST['pfeatures']);
		$pmaterial = mysqli_real_escape_string($db, $_POST['pmaterial']);
		$pdescription = mysqli_real_escape_string($db, $_POST['pdescription']);
		$padditionalinfo = mysqli_real_escape_string($db, $_POST['padditionalinfo']);
		$pavailability = mysqli_real_escape_string($db, $_POST['pavailability']);
		$pdesigner = mysqli_real_escape_string($db, $_POST['pdesigner']);

		// form validation: ensure that the form is correctly filled
		if (empty($pname)) 	{ array_push($errors, "Product name Required"); }
		if (empty($pprice)) { array_push($errors, "Price Required !"); }
		if (empty($pfeatures)) { array_push($errors, "Insert Product Feaatures !"); }
		if (empty($pdescription)) { array_push($errors, "Give a brief description !"); }
		if (empty($padditionalinfo)) { array_push($errors, "give brief Additional Information About the product !"); }
		if (empty($pdesigner)) { array_push($errors, "Input Product Designre !"); }






		// IMAGES :

		
		if (count($errors) == 0) {
			// $password = md5($password_1);//encrypt the password before saving in the database
			// $query = "INSERT INTO admins (username, password,dateadded) 
			// 		  VALUES('$username', '$password','$cdate')";
			// mysqli_query($db, $query);

			header('location: addproducts.php');
		}

	}

	//update product details
	if (isset($_POST['update_product'])){
		$pid = mysqli_real_escape_string($db, $_POST['pid']);
		$pname = mysqli_real_escape_string($db, $_POST['pname']);
		$pprice  = mysqli_real_escape_string($db, $_POST['pprice']);
		$pavailability  = mysqli_real_escape_string($db, $_POST['pavailability']);
		$pfeatures  = mysqli_real_escape_string($db, $_POST['pfeatures']);
		$pdescription  = mysqli_real_escape_string($db, $_POST['pdescription']);
		$padditionalinformation  = mysqli_real_escape_string($db, $_POST['padditionalinfo']);
		$pcategory = mysqli_real_escape_string($db, $_POST['pcategory']);
		$pdesigner = mysqli_real_escape_string($db, $_POST['pdesigner']);
		$pmaterial  = mysqli_real_escape_string($db, $_POST['pmaterial']);

		if (empty($pname)) { array_push($errors, "Product name Empty"); }
		if (empty($pprice)) { array_push($errors, "Price cant be empty"); }
		if (empty($pfeatures)) { array_push($errors, "Feature's Empty"); }
		if (empty($pdescription)) { array_push($errors, "insert description"); }
		if (empty($padditionalinformation)) { array_push($errors, "Add additional Information"); }
		if (empty($pdesigner)) { array_push($errors, "Insert Name odf designer"); }
		

		//pname='" . $_POST['userid'] . "',
		if(count($errors) == 0) {
			$results = mysqli_query($db,"UPDATE products SET 
			    pname='$pname',
				pprice='$pprice', 
				pavailability='$pavailability',
				pfeatures='$pfeatures',
				pdescription ='$pdescription',
                padditionalinformation = '$padditionalinformation',
                pcategory ='$pcategory',
                pdesigner ='$pdesigner',
				pmaterial='$pmaterial' 
			WHERE id='$pid' ");

			if ($results) {
				echo '<script> window.alert("product Updated Successfully "); </script>';
			}else {
				echo '<script> alert("Something Went Wrong"); </script>';
			}
			header('location: available.php');	
		}
		
	}
?>