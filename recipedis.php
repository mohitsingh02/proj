<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- My CSS -->
    <link rel="stylesheet" href="./styles/recipedis.css">
    <!-- fontawesme CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./scripts/recipedisScript.js" defer></script>
    <title>Food Chronicles-Recipes</title>
    
</head>

<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-0 pb-0 ">
        <a class="navbar-brand m-0 p-0" href="#">
            <img src="./assests/fc.jpg" width="60" height="56" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand " href="/home.html">Food Chronicles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link " href="home.php">Home </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Recipe.php">Recipes  </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><?php echo "Welcome " . $_SESSION['username'] ; ?> </a> 
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Logout </a> 
            </li>
          </ul>
        </div>
      </nav>
   </header>
 
   <div class="container-fluid bg-img p-0">
        <div class="container-fluid cover p-0">
            <h1 class="hding" id="page-heading"></h1>
        </div>
   </div>
   <div class="container res-dis" >
    <div class="container" id="recipe-details">
      
      <div class="container mt-3 ml-3" id="ingredients">
          <h2 class="part ">Ingredient</h2>
      </div>
      <div class="container  mt-3 ml-3" id="instructions">
          <h2 class="part ">Steps :</h2>
         
      </div>
  
    </div>
   </div>
    
  

  <footer>
      <div class="container-fluid mt-4" >
          <div class="container text-center">
              <h3 class="m-0 p-1">Design & Developed By Mohit Singh</h>
          </div>
      </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    
</body>

</html>