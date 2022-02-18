function login() {
  var email = document.form.email.value;
  var password = document.form.password.value;
 
  
  //Checks the value of the email for blank, if blank an alert message pops up.
  if (email == "" || email == null) {
    alert("Email cannot be blank");
    return false;
  }
  
  //Checks the value of the password for blank, if blank an alert messgae pops up.
  else if(password =="" || password== null) {
    alert("Password cannot be blank");
    return false;
  }
  
   //Checks the value of the password for number of characters entered, if less than 7 characters an alert messgae pops up.
  else if(password.length < 7) {
    alert("Password cannot be less than 7 characters");
    return false;
  }
  
  //Checks if the value of the password string as same as the email string. If equal, an inavlid message pops up. 
  else if(password == email) {
    alert("Password cannot be same as Email address");
    return false;
  }
  
  //Checks if value of password string is 'password' or 'Password' or 'PASSWORD'.
  else if (password == 'password' || password == 'Password' || password == 'PASSWORD') {
    alert("Password Invalid");
    return false;
  }
  
  //Checks if the value of the password string for consecutive string of numbers. If equal, an invalid meassage pops up. 
  else if(password == '0000000' || password == '1111111'  || password == '2222222' || password == '3333333' || password == '4444444' || password == '5555555' || password == '6666666' || password == '7777777' || password == '8888888' || password == '9999999' || password == '0123456' || password == '1234567') {
    alert("Password Invalid");
    return false;
  }
}

function emailValidate(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var email = document.form.email.value;
  if (inputText.value.match(mailformat)) {
    alert("Valid email address!");
    document.form1.text1.focus();
    return true;
  } else if (email != ""){
    alert("You have entered an invalid email address!");
    document.form1.text1.focus();
    return false;
  }
}

