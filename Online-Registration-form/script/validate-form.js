function validate_form() {

    var a = document.regform.mobile.value;
    if (a == "") {
      alert("Please Enter the Mobile Number");
      document.regform.mobile.value = null;
      return false;
    }
    if (isNaN(a)) {
      alert("Enter the valid Mobile Number(Like : 9999999999)");
      document.regform.mobile.value = null;
      return false;
    }
    if (a.length != 10) {
      alert(" Your Mobile Number must be 10 Digit Integers");
      document.regform.mobile.value = null;
      return false;
    }
    
}

function address_same() {
  if (document.getElementById('agree').checked) {
    document.regform.cvill.value = document.regform.vill.value;
    document.regform.cpost.value = document.regform.post.value;
    document.regform.cps.value = document.regform.ps.value;
    document.regform.cdist.value = document.regform.dist.value;
    document.regform.cpin.value = document.regform.pin.value;
    document.regform.cstate.value = document.regform.state.value;

  }
  else {
    document.regform.cvill.value = null;
    document.regform.cpost.value = null;
    document.regform.cps.value = null;
    document.regform.cdist.value = null;
    document.regform.cpin.value = null;
    document.regform.cstate.value = null;
  }
}