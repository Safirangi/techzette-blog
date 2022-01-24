function SignUp() {
  var fullname = document.signup.fullname.value;
  var email = document.signup.email.value;
  var password = document.signup.password.value;

  if (fullname == null || fullname == "") {
    alert("Name cannot be blank");
    return false;
  } else if (email == null || email == "") {
    alert("Email cannot be blank");
    return false;
  } else if (password.length < 6) {
    alert("Password cannot be less than 6 characters");
    return false;
  } else if (password == "password") {
    alert("This password is invalid");
    return false;
  }
}
