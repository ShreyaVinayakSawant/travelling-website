<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Travelling Website </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pa1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>KASHMIR</h3>
        <p>Beauty of Kashmir can't be compared by the whole world</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pa2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>PARIS</h3>
        <p>Paris is not a city;it's a world</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/p3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>   
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section  class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us </h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/p4.jpg" class="img-fluid  aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h3 class="display-4">travelling makes smile on face</h3>
        <p class="py=3">"Travel is not just about visiting new places; it's about embracing new perspectives, finding beauty in diversity, and growing through every adventure. It's the joy of wandering through ancient streets, the thrill of discovering hidden gems, and the serenity of connecting with nature. </p>
        <a href="about.php" class=" btn btn-success">Check More </a>
      </div>
    </div>
  </div>

</section>

<section  class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services </h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
         <img class="card-img-top" src="images/ps1.jpg" alt="Card image">
         <div class="card-body">
          <h4 class="card-title">Air service</h4>
          <p class="card-text">air services include booking flights, offering travel packages and insurance, providing visa assistance, arranging airport transfers, handling special requests, offering 24/7 support.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
         </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
         <img class="card-img-top" src="images/ps2.jpg" alt="Card image">
         <div class="card-body">
          <h4 class="card-title">Hotel service</h4>
          <p class="card-text">Hotel services include room accommodations, dining options, housekeeping, concierge assistance, fitness and recreational facilities, event hosting, and Wi-Fi access.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
         </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
         <img class="card-img-top" src="images/ps3.jpg" alt="Card image">
         <div class="card-body">
          <h4 class="card-title">Restaurant service</h4>
          <p class="card-text">Restaurant services include food and beverage preparation, table service, takeout and delivery options, menu customization, and catering for events..</p>
          <a href="#" class="btn btn-primary">See Profile</a>
         </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section  class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our Gallery </h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/p8.jpg" class="img-fluid pb-4" >
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/p9.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/p2.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/pg1.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/p11.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/p12.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/pg2.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/pg3.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/pl.jpg" class="img-fluid pb-4">
      </div>
    </div>
  </div>

</section>

<section  class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Client information </h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment">
        </textarea>
      </div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
  </div>

</section>

<footer>
  <p class="p=3  bg-dark text-white text-center">@shreyatravellingagence</p>
</footer>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>