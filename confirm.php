<?php
   if (!isset($_SESSION)){
      session_start();
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
</head>
<body>
   <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         if (!isset($_SESSION['firstName']))
            $_SESSION['firstName'] = $_POST['fName'];
         if (!isset($_SESSION['lastName']))
            $_SESSION['lastName'] = $_POST['lName'];  
         if (!isset($_SESSION['address']))
            $_SESSION['address'] = $_POST['address']; 
         if (!isset($_SESSION['city']))
            $_SESSION['city'] = $_POST['city'];
         if (!isset($_SESSION['state']))
            $_SESSION['state'] = $_POST['state'];
         if (!isset($_SESSION['zipCode']))
            $_SESSION['zipCode'] = $_POST['zip'];
      }
   ?>

   <?php
      echo("<h3>Purchases:</h3><br/>");

      foreach ($_SESSION as $name => $value){
         if ($value == 'Add to cart') {
         //if ($value != "0") {
            echo($name . "<br/>"); //get name better value…
         }
      }
   ?>

   <?php
      echo("<h3>Address:</h3><br/>");
 
      echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "<br/>";
      echo $_SESSION['address'] . "<br/>";
      echo $_SESSION['city'] . ", " . $_SESSION['state'] . ", " . $_SESSION['zipCode'] . "<br/>";
   ?>



</body>
</html>