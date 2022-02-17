function contact() {
  var name = document.form.name.value;
  var email = document.form.email.value;
  var link = document.form.link.value;

  //Checks the value of the name for blank, if blank an alert message pops up.
  if (name == null || name == "") {
    alert("Name cannot be blank");
    return false;
  }

  //Checks the value of the email for blank, if blank an alert message pops up.
  else if (email == "" || email == null) {
    alert("Email cannot be blank");
    return false;
  }

  //Checks the value of the name for blank, if blank an alert message pops up.
  else if (link == "") {
    alert("Please add a draft file");
    return false;
  }

  //Checks the value of the checkbox for unchecked, if unchecked an alert message pops up.
  else if (!this.form.checkbox.checked) {
    alert("You must agree to the Terms & Privacy first");
    return false;
  }
  
  //Checking for '@' character in email entered.
  /*else if (
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value)
  ) {
    return true;
  } else alert("You have entered an invalid email address!");
  return false;*/
}

//Checks for valid email address format
function emailValidate(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    alert("Valid email address!");
    document.form1.text1.focus();
    return true;
  } else {
    alert("You have entered an invalid email address!");
    document.form1.text1.focus();
    return false;
  }
}
