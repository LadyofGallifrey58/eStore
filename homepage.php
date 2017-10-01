<?php
   if (!isset($_SESSION)){
      session_start();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <meta charset="UTF-8">
</head>
<body>


<?php
   if (!isset($_SESSION['peterPan']))
      $_SESSION['peterPan'] = 0;
   if (!isset($_SESSION['aliceInWonderland']))
      $_SESSION['aliceInWonderland'] = 0;
   if (!isset($_SESSION['harryPotter']))
      $_SESSION['harryPotter'] = 0;
   if (!isset($_SESSION['wizardOfOz']))
      $_SESSION['wizardOfOz'] = 0;
   if (!isset($_SESSION['hobbit']))
      $_SESSION['hobbit'] = 0;
   if (!isset($_SESSION['twilight']))
      $_SESSION['twilight'] = 0;
   if (!isset($_SESSION['xMen101']))
      $_SESSION['xMen101'] = 0;
   if (!isset($_SESSION['summerFalls']))
      $_SESSION['summerFalls'] = 0;
?>

<?php   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST["peterPan"]))
         $_SESSION['peterPan'] = $_POST['peterPan'];
      if(isset($_POST["aliceInWonderland"]))
         $_SESSION['aliceInWonderland'] = $_POST['aliceInWonderland'];
      if(isset($_POST["harryPotter"]))
         $_SESSION['harryPotter'] =  $_POST['harryPotter'];
      if(isset($_POST["wizardOfOz"]))
         $_SESSION['wizardOfOz'] = $_POST['wizardOfOz'];
      if(isset($_POST["hobbit"]))
         $_SESSION['hobbit'] = $_POST['hobbit'];
      if(isset($_POST["twilight"]))
         $_SESSION['twilight'] = $_POST['twilight'];
      if(isset($_POST["xMen101"]))
         $_SESSION['xMen101'] = $_POST['xMen101'];
      if(isset($_POST["summerFalls"]))
         $_SESSION['summerFalls'] = $_POST['summerFalls'];
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
               <a class="nav-link active" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="shoppingCart.php">Cart</a>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="checkout.php">Checkout</a>
            </li>
         </ul>
      </div>
   </div>

   <div id="main">
      <div id="lside">
      </div>

      <div id="center">
         <div id="instructions">
         </div>

         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="card-deck">
               <div class="card">
                  <img class="card-img-top" src="https://i.pinimg.com/736x/82/f0/b0/82f0b06b11114bed643691ff5836763c--peter-pan-peter-otoole.jpg" alt="Peter Pan">
                  <h4 class="card-title text-center">Peter Pan</h4>
                  <p class="card-text">Written by J.M. Barrie, this classic tells the story of a boy who never grows up.</p>
                  <input type="submit" value="Add to cart" name="peterPan" class="card-footer">
               </div>

               <div class="card">
                  <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/91eLLDMzQ3L.jpg" alt="Alice in Wonderland">
                  <h4 class="card-title text-center">Alice in Wonderland</h4>
                  <p class="card-text">Alice falls down the rabbit hole and finds a world of white rabbits, tea parties, and mad queens!</p>
                  <input type="submit" value="Add to cart" name="aliceInWonderland" class="card-footer">
               </div>

               <div class="card">
                  <img class="card-img-top" src="http://harrypotterfanzone.com/wp-content/2009/06/ss-us-jacket-art.jpg" alt="Harry Potter">
                  <h4 class="card-title text-center">Harry Potter and the Sorcerer’s Stone</h4>
                  <p class="card-text">The first in the worldwide phenomenon, follow the journey of a boy who discovers that he is a wizard.</p>
                  <input type="submit" value="Add to cart" name="harryPotter" class="card-footer">
               </div>

               <div class="card">
                  <img class="card-img-top" src="https://www.loc.gov/exhibits/oz/images/vc9p1.jpg" alt="Wizard of Oz">
                  <h4 class="card-title text-center">The Wonderful Wizard of Oz</h4>
                  <p class="card-text">This charming book is the first in a series, and inspired the classic movie. Join Dorothy over the rainbow.</p>
                  <input type="submit" value="Add to cart" name="wizardOfOz" class="card-footer">   
               </div>
            </div>  

            <div class="card-deck">
               <div class="card">
                  <img class="card-img-top" src="http://lisagarnerdesign.co.uk/blog/wp-content/uploads/2014/12/The_Hobbit.jpg" alt="The Hobbit">
                  <h4 class="card-title text-center">The Hobbit</h4>
                  <p class="card-text">Preciousss! Just kidding. This tale inspired the epic <em>Lord of the Rings</em> and follows the adventures of Bilbo Baggins.</p>
                  <input type="submit" value="Add to cart" name="hobbit" class="card-footer">
               </div>

               <div class="card">
                  <img class="card-img-top" src="http://stepheniemeyer.com/wp-content/uploads/2016/02/twilight-book-cover.jpg" alt="Twilight">
                  <h4 class="card-title text-center">Twilight</h4>
                  <p class="card-text">It was a book, a movie, a mania, a meme… and now it’s for sale on our website. <em>Twilight</em>, folks.</p>
                  <input type="submit" value="Add to cart" name="twilight" class="card-footer">
               </div>

               <div class="card">
                  <img class="card-img-top" src="http://d1466nnw0ex81e.cloudfront.net/n_iv/600/844629.jpg" alt="X-men #101">
                  <h4 class="card-title text-center">X-Men #101</h4>
                  <p class="card-text">The first appearance of Jean Grey’s Phoenix! And, the beginning of an amazing story arc. Plus it’s super rare.</p>
                  <input type="submit" value="Add to cart" name="xMen101" class="card-footer">
               </div>

               <div class="card">
                  <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/51lMr46vOHL.jpg" alt="Summer Falls">
                  <h4 class="card-title text-center">Summer Falls</h4>
                  <p class="card-text">Who doesn’t love a good ghostwriter? This book was (ghost)written for <em>Doctor Who</em>, and belonged to Clara Oswald, the Doctor’s companion.</p>
                  <input type="submit" value="Add to cart" name="summerFalls" class="card-footer">
               </div>
            </div> 
         </form>
      </div>
   <div id="rside">
   </div> 

   <div id="footer">
   </div>
</body>
</html>