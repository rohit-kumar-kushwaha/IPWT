function showPassword() {
    var x = document.getElementById("pwd1");
    if (x.type == "password") {
      x.type = "text";
    }
    else {
      x.type = "password";
    }
}

function showPassword1() {
    var x = document.getElementById("pwd");
    var y = document.getElementById("cpwd");
    if (x.type == "password") {
      x.type = "text";
      y.type = "text";
    }
    else {
      x.type = "password";
      y.type = "password";
    }
}

function showPassword2() {
    var x = document.getElementById("npass");
    var y = document.getElementById("cfpwd");
    if (x.type == "password") {
      x.type = "text";
      y.type = "text";
    }
    else {
      x.type = "password";
      y.type = "password";
    }
}

function showPasswordAdmin() {
    var x = document.getElementById("pwdAdmin");
    if (x.type == "password") {
      x.type = "text";
    }
    else {
      x.type = "password";
    }
}

function showPasswordAdmin1() {
    var x = document.getElementById("pwdAdmin1");
    var y = document.getElementById("cpwdAdmin");
    if (x.type == "password") {
      x.type = "text";
      y.type = "text";
    }
    else {
      x.type = "password";
      y.type = "password";
    }
}

function validate() {
    var a = document.myform.mobile.value;
    if (a == "") {
      alert("Please Enter the Mobile Number");
      document.myform.mobile.focuse();
      return false;
    }
    if (isNaN(a)) {
      alert("Enter the valid Mobile Number(Like : 9999999999)");
      document.myform.mobile.focus();
      return false;
    }
    if (a.length != 10) {
      alert(" Your Mobile Number must be 10 Digit Integers");
      document.myform.mobile.select();
      return false;
    }
    var x = document.getElementById("pwd").value;
    var y = document.getElementById("cpwd").value;
    if (x != y) {
      alert("Password and Confirm Password must be same");
      return false;
    }
    if (document.getElementById('agree').checked) { return true; }
    else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }
}

function validateAdmin() {
    var a = document.myformAdmin.mobileAdmin.value;
    if (a == "") {
      alert("Please Enter the Mobile Number");
      document.myformAdmin.mobileAdmin.focuse();
      return false;
    }
    if (isNaN(a)) {
      alert("Enter the valid Mobile Number(Like : 9999999999)");
      document.myformAdmin.mobileAdmin.focus();
      return false;
    }
    if (a.length != 10) {
      alert(" Your Mobile Number must be 10 Digit Integers");
      document.myformAdmin.mobileAdmin.select();
      return false;
    }
    var x = document.getElementById("pwdAdmin1").value;
    var y = document.getElementById("cpwdAdmin").value;
    if (x != y) {
      alert("Password and Confirm Password must be same");
      return false;
    }
    if (document.getElementById('agree').checked) { return true; }
    else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }
}