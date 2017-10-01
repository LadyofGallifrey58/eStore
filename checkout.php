<?php
   if (!isset($_SESSION)){
      session_start();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
</head>
<body>
 
   <form action="<?php echo htmlspecialchars('confirm.php');?>" method="post">
      First Name: <input type="text" name="fName"><br/>
      Last Name: <input type="text" name="lName"><br/>
      Address: <input type="text" name="address"><br/>
      City: <input type="text" name="city"><br/>
      State: <input type="text" name="state"><br/>
      Zip Code: <input type="text" name="zip"><br/>
      <div id="buttons">
         <input type="submit" value="Complete Purchase" name="completePurchase">
         <button type="button"><a href="shoppingCart.php">Return to Cart</a></button>   
   </form>
</body>
</html>