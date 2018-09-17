<!DOCTYPE html>
<html lang="en_US">

  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <header id= "header" class="bg-success" style="height:100px;">
    <img src="img/logo.jpg" alt="CBK_Productions Logo" style="width:100px;height:90px; float: left;">
    <title id="title">CBK_Productions</title>
    <br><h1 id="CBK">CBK_Productions</h1>
  </header>

  <body>
  <div id="formmasterdiv" class="container-fluid">
    <div id="navigation" class="col-xs-12 col-sm-5 col-md-2 col-lg-2">
      <h3 id="navtag">Navigation</h3>
      <a class="navbuttons" href="home.html">HOME</a><br>
      <a class="navbuttons" href="animations.html">ANIMATIONS</a><br>
      <a class="navbuttons" href="registration.php">REGISTRATION</a><br>
    </div>

    <div class="col-xs-12 col-sm-7 col-md-10 col-lg-10">

      <?php
      include 'sql/pullbackData.php';
      // session_start();
      // $_POST = $_SESSION;
      ?>
      <!-- echo $_POST["username"]; -->



      <div id="confirmation">
        <h1 id="confirm">CONFRMATION</h1>
      </div>
      <div class="confirmtext">
        <br>
        <p>Username: <?php echo $username; ?> </p>
        <p>Password: <?php echo $pw;  ?> </p>
        <p>First Name:  <?php echo $fName; ?> </p>
        <p>Last Name:  <?php echo $lName; ?> </p>
        <p>Phone number:  <?php echo $pNum; ?> </p>
        <p>Email:  <?php echo $email; ?> </p>
        <p>Address Line 1:  <?php echo $add1; ?> </p>
        <p>Address Line 2:  <?php echo $add2; ?> </p>
        <p>City:  <?php echo $city; ?> </p>
        <p>State:  <?php echo $state; ?> </p>
        <p>Zip Code:  <?php echo $zip; ?> </p>
        <p>Date of Birth:  <?php echo $dob; ?> </p>
        <p>Gender:  <?php echo $gender; ?> </p>
        <p>Marital Status:  <?php echo $mStatus; ?> </p>
      </div>

      <!--
        php form validation
       <div class="confirmtext">
        <br>
        <p>Username: <?php echo $username; ?> </p>
        <p>Passwords: <?php echo $_POST["password"];  ?> </p>
        <p>First Name:  <?php echo $_POST["firstname"]; ?> </p>
        <p>Last Name:  <?php echo $_POST["lastname"]; ?> </p>
        <p>Username:  <?php echo $_POST["username"]; ?> </p>
        <p>Phone number:  <?php echo $_POST["phonenumber"]; ?> </p>
        <p>Email:  <?php echo $_POST["email"]; ?> </p>
        <p>Address Line 2:  <?php echo $_POST["addresslineone"]; ?> </p>
        <p>Address Line 2:  <?php echo $_POST["addresslinetwo"]; ?> </p>
        <p>City:  <?php echo $_POST["city"]; ?> </p>
        <p>State:  <?php echo $_POST["state"]; ?> </p>
        <p>Zip Code:  <?php echo $_POST["zipcode"]; ?> </p>
        <p>Date of Birth:  <?php echo $_POST["dob"]; ?> </p>
        <p>Gender:  <?php echo $_POST["gender"]; ?> </p>
        <p>Marrital Status:  <?php echo $_POST["maritalstatus"]; ?> </p>
      </div> -->

  </div>
</div>

  </body>

  <footer id="conffooter">
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
