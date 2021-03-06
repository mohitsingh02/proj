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
    <link rel="stylesheet" href="./styles/home.css">
    <!-- fontawesme CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./scripts/homeScript.js" defer></script>
    <title>Food Chronicles- Home</title>
    
</head>

<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-0 pb-0 ">
        <a class="navbar-brand m-0 p-0" href="#">
            <img src="assests/fc.jpg" width="60" height="56" class="d-inline-block align-top" alt="">
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
   <div class="container-fluid bg-img">
        <div class="container">
            <h1 class="hding">Its even better than <br> an expensive cookery book</h1>
            <br>
            <p class="desc">Learn to make restaurant style food at Home</p>
        </div>
   </div>

   <div class="container pt-5" id="recipeOfTheDay">
       <h1 class="rd">Recipe Of the Day</h1>
        
   </div>

   <div class="container-fluid paralax pl-0 pr-0">
       <div class="container-fluid cover text-center pl-0 pr-0">
                <h1 class="r-name" style="padding-top: 15vh; font-size: 5vh;"> 
                    ???One cannot think well,<br>
                    love well, <br>
                    sleep well, <br>
                    if one has not dined well.???
                </h1>
       </div>

   </div>

   <div class="container pt-5">
    <h1 class="rd">Recipes By category </h1><br>
    <h3 class="des">See recipe that suits the best for your mood</h3>
    <div class="container mt-5">
        <div class="row">
          <div class="col-md-3 text-center">
            <div class="card text-white" onclick="searchRecipes('dessert')">
                <img src="./assests/s.JPG" height="300" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title c-name " >Dessert</h5>
                </div>
              </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="card text-white" onclick="searchRecipes('drinks')">
                <img src="./assests/d.JPG" height="300" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title c-name " >Drinks</h5>
                </div>
              </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="card text-white" onclick="searchRecipes('burger')">
                <img src="./assests/b.JPG" height="300" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title c-name " >Burger</h5>
                </div>
              </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="card text-white" onclick="searchRecipes('pizza')">
                <img src="./assests/p.JPG" height="300" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title c-name" >Pizza</h5>
                </div>
              </div>
        </div>
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