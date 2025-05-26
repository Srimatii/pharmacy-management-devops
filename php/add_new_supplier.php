<<<<<<< HEAD
<?php
  require "db_connection.php";
  if($con) {
    $name = ucwords($_GET["name"]);
    $email = $_GET["email"];
    $contact_number = $_GET["contact_number"];
    $address = ucwords($_GET["address"]);

    $query = "SELECT * FROM suppliers WHERE UPPER(NAME) = '".strtoupper($name)."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)
      echo "Supplier with name $name already exists!";
    else {
      $query = "INSERT INTO suppliers (NAME, EMAIL, CONTACT_NUMBER, ADDRESS) VALUES('$name', '$email', '$contact_number', '$address')";
      $result = mysqli_query($con, $query);
      if(!empty($result))
  			echo "$name added...";
  		else
  			echo "Failed to add $name!";
    }
  }
?>
=======
<?php
  require "db_connection.php";
  if($con) {
    $name = ucwords($_GET["name"]);
    $email = $_GET["email"];
    $contact_number = $_GET["contact_number"];
    $address = ucwords($_GET["address"]);

    $query = "SELECT * FROM suppliers WHERE UPPER(NAME) = '".strtoupper($name)."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)
      echo "Supplier with name $name already exists!";
    else {
      $query = "INSERT INTO suppliers (NAME, EMAIL, CONTACT_NUMBER, ADDRESS) VALUES('$name', '$email', '$contact_number', '$address')";
      $result = mysqli_query($con, $query);
      if(!empty($result))
  			echo "$name added...";
  		else
  			echo "Failed to add $name!";
    }
  }
?>
>>>>>>> b5a1a35639609c1c3f5e3785532196554caf1eeb
