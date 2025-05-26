<<<<<<< HEAD
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if(xhttp.readyState = 4 && xhttp.status == 200)
    xhttp.responseText;
};
xhttp.open("GET", "php/db_connection.php?action=is_logged_in", false);
xhttp.send();

//alert(xhttp.responseText);
if(xhttp.responseText == "")
  window.location.href = "http://localhost/Pharmacy-Management/index.html";

if(xhttp.responseText == "false")
  window.location.href = "http://localhost/Pharmacy-Management/login.php";
=======
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if(xhttp.readyState = 4 && xhttp.status == 200)
    xhttp.responseText;
};
xhttp.open("GET", "php/db_connection.php?action=is_logged_in", false);
xhttp.send();

//alert(xhttp.responseText);
if(xhttp.responseText == "")
  window.location.href = "http://localhost/Pharmacy-Management/index.html";

if(xhttp.responseText == "false")
  window.location.href = "http://localhost/Pharmacy-Management/login.php";
>>>>>>> b5a1a35639609c1c3f5e3785532196554caf1eeb
