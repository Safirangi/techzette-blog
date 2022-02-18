function login() {
  var email = document.form.email.value;
  var password = document.form.password.value;
  
  //Checks the value of the email for blank, if blank an alert message pops up.
  if (email == "" || email == null) {
    alert("Email cannot be blank");
    return false;
  }
}
