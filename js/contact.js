
function validateForm() {
  var pname = document.forms["myForm"]["pname"].value;
  var email = document.forms["myForm"]["email"].value;
  var subj = document.forms["myForm"]["subj"].value;
  var msg = document.forms["myForm"]["msg"].value;
  
  if (pname == "") {
    alert("Please enter a valid name.");
    return false;
  }
  
  if (email == "") {
    alert("Please enter a valid email address.");
    return false;
  }
  
  if (subj == "") {
    alert("Please enter a subject.");
    return false;
  }
  
  if (msg == "") {
    alert("Please enter a message.");
    return false;
  }
}
