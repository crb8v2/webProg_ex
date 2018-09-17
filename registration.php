<!DOCTYPE html>
<html lang="en_US">

  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/validate.js"> </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- this guy is THE datepicker -->
    <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
    </script>
  </head>

  <header id="header" class="bg-success" style="height:100px;">
    <img src="img/logo.jpg" alt="CBK_Productions Logo" style="width:100px;height:90px; float: left;">
    <title id="title">CBK_Productions</title>
    <br><h1 id="CBK">CBK_Productions</h1>
  </header>

  <body>


  <div id="document" class="container-fluid">

    <div id="navigation" class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
      <h3 id="navtag">Navigation</h3>
      <a class="navbuttons" href="home.html">HOME</a><br>
      <a class="navbuttons" href="animations.html">ANIMATIONS</a><br>
      <a class="navbuttons" href="registration.php">REGISTRATION</a><br>
    </div>

    <div class="form">
      <form id="formleft" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div id="formdivleft" class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
          <h3 id="registration">Registration</h3>

          <!-- the php -->
          <?php
          require_once "php/bang.php";
          include 'sql/sqlConfirmation.php';
          ?>

          <!--removed required from input for php project -->
          Username:<br>
          <input class="box" type="text" name="username"
            onkeyup="ValUsername(this);" value="<?php echo $username; ?>"> <!-- required> --><br>
          <span id="usernameError" class="error"> <?php echo $usernameError; ?> </span>
          <br>

          Password:<br>
          <input class="box" id="password" type="password" name="password"
            onkeyup="ValPassword(this);" value="<?php echo $pw; ?>"><br>
          <span id="passwordError" class="error"> <?php echo $pwError; ?> </span>
          <br>

          Retype Password:<br>
          <input class="box" type="password" name="retypepassword"
           onkeyup="ValVerifyPassword(this);" value="<?php echo $pw2; ?>"><br>
          <span id="verifyPasswordError" class="error"> <?php echo $pwCompError; ?> </span>
          <br>

          First Name:<br>
          <input class="box" type="text" name="firstname"
            onkeyup="ValFirstName(this);" value="<?php echo $fName; ?>"><br>
          <span id="firstNameError" class="error"> <?php echo $fNameError; ?> </span>
          <br>

          Last Name:<br>
          <input class="box" type="text" name="lastname"
            onkeyup="ValLastName(this);" value="<?php echo $lName; ?>"><br>
          <span id="lastNameError" class="error"> <?php echo $lNameError; ?> </span>
          <br>

          Phone Number:<br>
          <input class="box" type="text" name="phonenumber"
            onkeyup="ValPhoneNum(this);" value="<?php echo $pNum; ?>"><br>
          <span id="phoneNumError" class="error"> <?php echo $pNumError; ?> </span>
          <br>

          Email:<br>
          <input class="box" type="text" name="email"
            onkeyup="ValEmail(this);" value="<?php echo $email; ?>"><br>
            <span id="emailError" class="error"> <?php echo $emailError; ?> </span>
            <br>
        </div>

        <div id="formdivright" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

          Address Line One:<br>
          <input class="box" type="text" name="addresslineone"
            onkeyup="ValAddA(this);" value="<?php echo $add1; ?>"><br>
            <span id="addAError" class="error"> <?php echo $add1Error; ?> </span>
            <br>

          Address Line Two:<br>
          <input class="box" type="text" name="addresslinetwo"
            onkeyup="ValAddB(this);" value="<?php echo $add2; ?>"><br>
            <span id="addBError" class="error"> <?php echo $add2Error; ?> </span>
            <br>

          City:<br>
          <input class="box" type="text" name="city"
            onkeyup="ValCity(this);" value="<?php echo $city; ?>"><br>
          <span id="cityError"  class="error"> <?php echo $cityError; ?> </span>
          <br>

          State:<br>
          <select class="box" name="state" value="<?php echo $state; ?>"> <!--required-->
                     <option value="" selected="selected">State: </option>
                     <option value="AL">Alabama</option>
                     <option value="AK">Alaska</option>
                     <option value="AZ">Arizona</option>
                     <option value="AR">Arkansas</option>
                     <option value="CA">California</option>
                     <option value="CO">Colorado</option>
                     <option value="CT">Connecticut</option>
                     <option value="DE">Delaware</option>
                     <option value="DC">District Of Columbia</option>
                     <option value="FL">Florida</option>
                     <option value="GA">Georgia</option>
                     <option value="HI">Hawaii</option>
                     <option value="ID">Idaho</option>
                     <option value="IL">Illinois</option>
                     <option value="IN">Indiana</option>
                     <option value="IA">Iowa</option>
                     <option value="KS">Kansas</option>
                     <option value="KY">Kentucky</option>
                     <option value="LA">Louisiana</option>
                     <option value="ME">Maine</option>
                     <option value="MD">Maryland</option>
                     <option value="MA">Massachusetts</option>
                     <option value="MI">Michigan</option>
                     <option value="MN">Minnesota</option>
                     <option value="MS">Mississippi</option>
                     <option value="MO">Missouri</option>
                     <option value="MT">Montana</option>
                     <option value="NE">Nebraska</option>
                     <option value="NV">Nevada</option>
                     <option value="NH">New Hampshire</option>
                     <option value="NJ">New Jersey</option>
                     <option value="NM">New Mexico</option>
                     <option value="NY">New York</option>
                     <option value="NC">North Carolina</option>
                     <option value="ND">North Dakota</option>
                     <option value="OH">Ohio</option>
                     <option value="OK">Oklahoma</option>
                     <option value="OR">Oregon</option>
                     <option value="PA">Pennsylvania</option>
                     <option value="RI">Rhode Island</option>
                     <option value="SC">South Carolina</option>
                     <option value="SD">South Dakota</option>
                     <option value="TN">Tennessee</option>
                     <option value="TX">Texas</option>
                     <option value="UT">Utah</option>
                     <option value="VT">Vermont</option>
                     <option value="VA">Virginia</option>
                     <option value="WA">Washington</option>
                     <option value="WV">West Virginia</option>
                     <option value="WI">Wisconsin</option>
                     <option value="WY">Wyoming</option>
                  </select><br>
                  <span id="stateError"  class="error"> <?php echo $stateError; ?> </span>
                  <br><br>


          Zip Code:<br>
          <input class="box" type="text" name="zipcode"
            onkeyup="ValZip(this);" value="<?php echo $zip; ?>"><br>
          <span id="zipError" class="error"> <?php echo $zipError; ?> </span>
          <br>

          Date of Birth:<br>
          <!-- id="datepicker"  for jquery datepicker, put in input-->
          <input class="box" type="date" name="dob"
            value="<?php echo $dob; ?>"><br>
            <span id="zipError" class="error"> <?php echo $dobError; ?> </span>
          <br>


          Gender:<br>
          <input class="box" type="radio" name="gender" value="Male"
            <?php if (isset($gender) && $gender=="Male") echo "checked";?>
					       value="Male"> <!-- required--> Male
          <input class="box" type="radio" name="gender" value="Female"
            <?php if (isset($gender) && $gender=="Female") echo "checked";?>
					       value="Female"> Female
          <input class="box" type="radio" name="gender" value="Other"
            <?php if (isset($gender) && $gender=="Other") echo "checked";?>
               value="Other"> Other<br>
            <span id="genderError" class="error"> <?php echo $genderError; ?> </span><br>


          Marital Status:<br>
          <input class="box" type="radio" name="maritalstatus" value="Single"
            <?php if (isset($mStatus) && $mStatus=="Single") echo "checked";?>
               value="Single"> Single
          <input class="box" type="radio" name="maritalstatus" value="Married"
            <?php if (isset($mStatus) && $mStatus=="Married") echo "checked";?>
               value="Married"> Married<br>
          <span id="mStatusError" class="error"> <?php echo $mStatusError; ?> </span><br>
          <br>


          <input class="box" type="submit" value="Submitttt" name="submit">
          <input class="box" type="reset" value="Reset"><br>

        </div> <br>

      </form>
    </div>

  </div>

  </body>

  <footer id="animationfooter">
    <div id="footer" class="row">
      <div id="adafruit" class="column col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <a href="https://www.adafruit.com/?gclid=EAIaIQobChMIzerS6ru_2QIVRJ7ACh32CARSEAAYASAAEgIOePD_BwE"
         target="_blank">
          <img src="img/img2.jpg" alt="Link to Adafruit" style="width:185px;height:75px;">
        </a>
      </div>

      <div id="particle" class="column col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <a href="https://www.particle.io/"
        target="_blank">
          <img src="img/particle.jpg" alt="Link to Particle" style="width:220px;height:75px;">
        </a>
      </div>

      <div id="raspi" class="column col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <a href="https://www.raspberrypi.org/"
        target="_blank">
          <img src="img/img5.jpg" alt="Link to Raspberry Pi" style="width:200px;height:75px;">
        </a>
      </div>
    </div>
  </footer>

</html>
