<?php

  //declare variables and set empty
  $usernameError = $pwError = $pwCompError = $fNameError = "";
  $lNameError = $pNumError = $emailError = $add1Error = $add2Error = "";
  $cityError = $zipError = $stateError = $dobError = $genderError = $mStatusError = "";
  $username = $pw = $pw2 = $fName = $lName = $pNum = $add1 = $add2 = "";
  $reg = $email = $city = $zip = $state = $dob = $gender = $mStatus = "";

  //variable to check if form is valid
  $theOne = TRUE;

  //if post method is made....//
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // does the things
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    // for username
    $username = test_input($_POST["username"]);
    if (empty($username)) {
      $theOne = FALSE;
      $usernameError = "Name is required";
    } else {
      // check if name only contains letters and whitespace
      if (strlen($username) < 6 || strlen($username) > 50) {
        $theOne = FALSE;
        $usernameError = "Username between 6 and 50 chars";
      }
    }

    // for passwords
    $pw = test_input($_POST["password"]);
    $pw2 = test_input($_POST["retypepassword"]);
    $reg = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/';

    //check pw for validity
    if(empty($pw)){
      $theOne = FALSE;
      $pwError = "Password required";
    } elseif(!preg_match($reg, $pw)){
      $theOne = FALSE;
      $pwError = "Mustcontain min 8 char, upper, lower, number, symbol";
    }

    //check pw and pw2 match
    if($pw != $pw2){
      $theOne = FALSE;
      $pwCompError = "Passwords must match, slippyfingers";
    }

    //first name
    $fName = test_input($_POST["firstname"]);
    if(empty($fName)){
      $theOne = FALSE;
      $fNameError = "First name is required";
    } elseif (strlen($fName) > 50){
      $theOne = FALSE;
      $fNameError = "Max length of 50 chars";
    }

    // last name
    $lName = test_input($_POST["lastname"]);
    if(empty($lName)){
      $theOne = FALSE;
      $lNameError = "First name is required";
    } elseif (strlen($lName) > 50){
      $theOne = FALSE;
      $lNameError = "Max length of 50 chars";
    }

    //phone Number
    $pNum = test_input($_POST["phonenumber"]);
    $reg = "/^\d{3}-\d{3}-\d{4}$/";
    if(empty($pNum)){
      $theOne = FALSE;
      $pNumError = "Phone number required";
    } elseif(!preg_match($reg, $pNum)){
      $theOne = FALSE;
      $pNumError = "Format must me xxx-xxx-xxxx";
    }

    //e-mail
    $email = test_input($_POST['email']);
    if(empty($email)){
      $theOne = FALSE;
      $emailError = "Email is required.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Format must be x@x.x";
      $theOne = FALSE;
    }
     //address line one and Two
     $add1 = test_input($_POST["addresslineone"]);
     $add2 = test_input($_POST["addresslinetwo"]);
     if(empty($add1)){
       $theOne = FALSE;
       $add1Error = "Field cannot be blank";
     } elseif(strlen($add1 > 100)){
       $theOne = FALSE;
       $add1Error = "Address line cannot exceed 100 characters";
     }

     if(empty($add2)){
       $add2Error = "Field cannot be blank";
       $theOne = FALSE;
     } elseif(strlen($add2 > 100)){
       $theOne = FALSE;
       $add2Error = "Address line cannot exceed 100 characters";
     }

     // city
     $city = test_input($_POST["city"]);
     if(empty($city)){
       $theOne = FALSE;
       $cityError = "Field cannot be blank";
     } elseif(strlen($city > 50)){
       $theOne = FALSE;
       $cityError = "Address line cannot exceed 50 characters";
     }

     // zipcode
     $zip = test_input($_POST["zipcode"]);
     $reg = '/[-]/';
     if(strlen($zip) < 5 || strlen($zip) > 10){
       $theOne = FALSE;
       $zipError = "Zipcode is too short or too long";
     } elseif(strlen($zip) > 5 && !preg_match($reg, $zip)){
       $theOne = FALSE;
       $zipError = "Enter valid zip, xxxxx or xxxxx-xxxx";
     }

     //state
     $state = test_input($_POST["state"]);
     if(empty($state)){
       $theOne = FALSE;
       $stateError = "State choice is required";
     }

     // date of Birth
     $dob = test_input($_POST["dob"]);
     if(empty($dob)){
       $theOne = FALSE;
       $dobError = "Date of birth required.";
     }

     // Gender
     $gender = test_input(@$_POST["gender"]);
     if (empty($gender)) {
       $theOne = FALSE;
       $genderError = "Gender is required";
     }


     // marriage status
     $mStatus = test_input(@$_POST["maritalstatus"]);
     if (empty($mStatus)) {
       $theOne = FALSE;
       $mStatusError = "Status is required";
     }

     if($theOne == TRUE){
       session_start();
       $_SESSION = $_POST;
       session_write_close();
       header("Location: confirmation.php");
     }
  }
 ?>
