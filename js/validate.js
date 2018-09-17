function ValUsername(ele){
  var val = ele.value;
  if (val.length < 6){
    var check = document.getElementById("usernameError");
    if (check){
      check.innerHTML = "Minimum 6 chacters";
      //setTimeout(function(){ ele.focus(); }, 500);
      ele.focus();
    }
  } else if (val.length > 50){
    var check = document.getElementById("usernameError");
    if (check){
      check.innerHTML = "Max 50 chacters";
    //  setTimeout(function(){ ele.focus(); }, 500);
    ele.focus();
    }
  } else {
    document.getElementById("usernameError")
    .innerHTML = "";
  }
}

function ValPassword(ele){
  var val = ele.value;
  var reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
  if (val.length < 6 || val.length > 50 || !reg.test(val)){
    var check = document.getElementById("passwordError");
    if (check){
      check.innerHTML = "One upper, lower, number, and special character, 6-50 characters long";
      ele.focus();
    }
  } else {
    document.getElementById("passwordError")
    .innerHTML = "";
  }
}

function ValVerifyPassword(ele){
  var val = ele.value;
  var original = document.getElementById("password").value;
  var reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
  if (val.length < 6 || val.length > 50 || !reg.test(val) || val != original){
    var check = document.getElementById("verifyPasswordError");
    if (check){
      check.innerHTML = "One upper, lower, number, and special character, 6-50 characters long";
      ele.focus();
    }
  } else {
    document.getElementById("verifyPasswordError")
    .innerHTML = "";
  }
}

function ValFirstName(ele){
  var val = ele.value;
  if (val.length > 50){
    var check = document.getElementById("firstNameError");
    if (check){
      check.innerHTML = "Max of 50 chacters";
      // setTimeout(function(){ ele.focus(); }, 500);
    }
  } else {
    document.getElementById("firstNameError")
    .innerHTML = "";
  }
}

function ValLastName(ele){
  var val = ele.value;
  if (val.length > 50){
    var check = document.getElementById("lastNameError");
    if (check){
      check.innerHTML = "Max of 50 chacters";
      // setTimeout(function(){ ele.focus(); }, 500);
    }
  } else {
    document.getElementById("lastNameError")
    .innerHTML = "";
  }
}

function ValPhoneNum(ele){
  var reg = /^\d{3}-\d{3}-\d{4}$/;
  var val = ele.value;
  if (val.length < 12 || !reg.test(val)){
    var check = document.getElementById("phoneNumError");
    if (check){
      check.innerHTML = "Format: xxx-xxx-xxxx";
    }
  } else {
    document.getElementById("phoneNumError")
    .innerHTML = "";
  }
}

function ValEmail(ele){
  var reg = /\S+@\S+\.\S+/;
  var val = ele.value;
  if (val.length > 256 || !reg.test(val)){
    var check = document.getElementById("emailError");
    if (check){
      check.innerHTML = "Enter a valid email";
    }
  } else {
    document.getElementById("emailError")
    .innerHTML = "";
  }
}

function ValAddA(ele){
  var val = ele.value;
  if (val.length > 100){
    var check = document.getElementById("addAError");
    if (check){
      check.innerHTML = "Max of 100 characters";
    }
  } else {
    document.getElementById("addAError")
    .innerHTML = "";
  }
}

function ValAddB(ele){
  var val = ele.value;
  if (val.length > 100){
    var check = document.getElementById("addBError");
    if (check){
      check.innerHTML = "Max of 100 characters";
    }
  } else {
    document.getElementById("addBError")
    .innerHTML = "";
  }
}

function ValCity(ele){
  var val = ele.value;
  if (val.length > 50){
    var check = document.getElementById("cityError");
    if (check){
      check.innerHTML = "Max of 50 chacters";
    }
  } else {
    document.getElementById("cityError")
    .innerHTML = "";
  }
}

function ValZip(ele){
  var val = ele.value;
  var reg = /[-]/;
  if(val.length )
  if (val.length < 5){
    var check = document.getElementById("zipError");
    if (check){
      check.innerHTML = "Format xxxxxx or xxxxxx-xxxx";
    }
  } else if (val.length > 5 && !reg.test(val)){

    var check = document.getElementById("zipError");
    if (check){
      check.innerHTML = "Format xxxxxx or xxxxxx-xxxx";
    }

  } else if (val.length > 11) {

    var check = document.getElementById("zipError");
    if (check){
      check.innerHTML = "Format xxxxxx or xxxxxx-xxxx";
    }


  } else {
    document.getElementById("zipError")
    .innerHTML = "";
  }
}
