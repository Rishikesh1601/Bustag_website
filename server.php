<?php
session_start();

// initializing variables
$name = "";
$email = "";
$errors = array(); 

include "config.php";

// REGISTER USER
if (isset($_POST["reg_user"])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
 // $password = mysqli_real_escape_string($conn, $_POST['password']);
 // $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

 $password = $_POST["password"];
 $password_2 = $_POST["password_2"];


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Phone Number is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($aadhar)) { array_push($errors, "Aadhar number is required"); }
  if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    array_push($error,"Email is not valid");
  }
  if(strlen($password)<8){
    array_push($errors,"Password must be atleast 8 characters long");
  }
  // if(strlen($aadhar)<12 || strlen($aadhar)>12){
  //   array_push($errors,"Aadhar number must be atleast 12 characters long");
  // }
  if(strlen($mobile)<10 || strlen($mobile)>10){
    array_push($errors,"Mobile Number must be atleast 10 characters long");
  }

  if ($password != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //	$password = md5($);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, name, mobile, email, gender, password, dob,aadhar) 
  			  VALUES('$username','$name', '$mobile', '$email', '$gender', '$password' , '$dob','$aadhar')";
  	mysqli_query($conn, $query);

    # creating the Session
    $_SESSION['username'] = $user['username'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['userID'] = $user['userID'];

  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    $word = ".com" ;
    if (count($errors) == 0) {
        // $password = md5($password);
        if(strpos($username, $word) !== false){


          // emailid entered
          $query = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
          $results = mysqli_query($conn, $query);
          if (mysqli_num_rows($results) == 1) {
            // changing userid now from email to username
            $sql = "SELECT * FROM users WHERE `email`='$username'" ;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result) ;

        # creating the Session
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['userID'] = $row['userID'];
            // $_SESSION['name'] = $row['username'];
            // echo $row['username'] ;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
          }else {
              array_push($errors, "Wrong Username/password combination");
              // header('location: sign_in_new.php');
          }
      } 
      else{

          // Username entered
          $query = "SELECT * FROM users WHERE `username`='$username' AND `password`='$password'";
          $results = mysqli_query($conn, $query);
          if (mysqli_num_rows($results) == 1) {
        

          
          $sql = "SELECT * FROM users WHERE `username`='$username'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

          # creating the Session
          $_SESSION['username'] = $row['username'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['userID'] = $row['userID']; 
          // var_dump($_SESSION);
          // print_r($result);
          // echo '123';
          // die();
            // $_SESSION['name'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
          }else {
              array_push($errors, "Wrong Username/password combination");
              // header('location: sign_in_new.php');
          }
      }
       
    }
  }
  
 
  ?>