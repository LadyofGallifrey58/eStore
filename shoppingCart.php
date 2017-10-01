<?php
   if (!isset($_SESSION)){
      session_start();
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <meta charset="UTF-8">
</head>
<body>


<?php   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST["peterPan"]))
         $_SESSION['peterPan'] = 0;
      if(isset($_POST["aliceInWonderland"]))
         $_SESSION['aliceInWonderland'] = 0;
      if(isset($_POST["harryPotter"]))
         $_SESSION['harryPotter'] =  0;
      if(isset($_POST["wizardOfOz"]))
         $_SESSION['wizardOfOz'] = 0;
      if(isset($_POST["hobbit"]))
         $_SESSION['hobbit'] = 0;
      if(isset($_POST["twilight"]))
         $_SESSION['twilight'] = 0;
      if(isset($_POST["xMen101"]))
         $_SESSION['xMen101'] = 0;
      if(isset($_POST["summerFalls"]))
         $_SESSION['summerFalls'] = 0;
   }
?>

<?php
print_r($_SESSION);
?>

   <div id="header">
      <div id="storeName">
      </div>

      <div id="menuBar">
         <ul class="nav nav-tabs">
            <li class="nav-item">
               <a class="nav-link" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" href="shoppingCart.php">Cart</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="checkout.php">Checkout</a>
            </li>
         </ul>
      </div>
   </div>
     
   <div id="main">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
         <?php
            foreach ($_SESSION as $name => $value){
               if ($value == 'Add to cart') {//THIS WAY WON’t WORK
               //if ($value != "0") {
                  echo($name . "<input type='submit' value='Remove from cart' name='$name'><br/>"); //get name better value…
               }
            }
         ?>
      </form>
   </div>

</body>
</html>