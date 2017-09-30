<?php
   if (!isset($_SESSION)){
      session_start();
   }
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<?php
print_r($_SESSION);
?>


<?php
   foreach ($_SESSION as $name => $value)
   {
      if ($value != 0)
         echo($name); //get name better value…

   }
?>

</body>
</html>