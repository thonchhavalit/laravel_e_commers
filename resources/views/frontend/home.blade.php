<!DOCTYPE html>
<html>

<head>
  <title>My website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    /* body {
      background-color: rgb(225, 18, 219);
    } */

    .col-container {
      display: table;
      width: 100%;
    }

    .col {
      display: table-cell;
      padding: 16px;
    }
  </style>
</head>

<body class="container">

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="{{asset('images/logo.png')}}" height="60">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products/Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" >News</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<!-- <main class="container"></main> -->
  <div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($slides as $slide)
        <div class="carousel-item @if($loop->first) active @endif">
          <img class="d-block w-100" src="{{$slide->image}}">
        </div>
        @endforeach
      </div>
    </div>
  </div>


  <div class="container">
    <h1>The Company Info</h1>
    <p>Computer company is a multinational information technology (IT) company that sells hardware, software, and related business services.</p>
    <div class="col-container">
      <h2>Big Promotion</h2>
    </div>
  </div>

  <div class="container">
    <div class="row">
        @foreach($slides as $slide)
        <div class="col-md-3 mb-4">
            <div class="card" style="height: 24rem;">
                <img src="{{ asset($slide->image) }}" class="card-img-top img-fluid" style="height: 18rem;" alt="{{ $slide->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $slide->title }}</h5>
                    <!-- <p class="card-text">{{ $slide->description }}</p> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


  <br>
  <div class=container">Video Detail</div>
    <h2>Latest Video</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="350" height="250" src="https://www.youtube.com/embed/smoU272Dv14?si=t1Uvmnfo0dCnlJB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        HP Laptop 15s-fq2647TU (I7 1165G7 / 8GB / SSD 512GB PCIE / 15.6" FHD). FREE: Backpack HP, Flash 32GB, Mouse Wireless, Mouse Pad.-CPU: Intel® Core™ i7-1165G.
      </div>
      <div class="col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="350" height="250" src="https://www.youtube.com/embed/smoU272Dv14?si=t1Uvmnfo0dCnlJB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        HP Laptop 15s-fq2647TU (I7 1165G7 / 8GB / SSD 512GB PCIE / 15.6" FHD). FREE: Backpack HP, Flash 32GB, Mouse Wireless, Mouse Pad.-CPU: Intel® Core™ i7-1165G.
      </div>
      <div class="col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="350" height="250" src="https://www.youtube.com/embed/smoU272Dv14?si=t1Uvmnfo0dCnlJB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        HP Laptop 15s-fq2647TU (I7 1165G7 / 8GB / SSD 512GB PCIE / 15.6" FHD). FREE: Backpack HP, Flash 32GB, Mouse Wireless, Mouse Pad.-CPU: Intel® Core™ i7-1165G.
      </div>
    </div>
  </div>

  <br>
  <footer class="bg-dark text-white mt-5">
    <div class="container py-4">
      <div class="row">
        <!-- Company Info -->
        <div class="col-md-4">
          <h5>About Us</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <!-- Quick Links -->
        <div class="col-md-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Home</a></li>
            <li><a href="#" class="text-white">About</a></li>
            <li><a href="#" class="text-white">Services</a></li>
            <li><a href="#" class="text-white">Contact</a></li>
          </ul>
        </div>
        <!-- Social Media Icons -->
        <div class="col-md-4">
          <h5>Follow Us</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-white">
                <i class="fab fa-facebook"></i> Facebook
              </a>
            </li>
            <li>
              <a href="#" class="text-white">
                <i class="fab fa-twitter"></i> Twitter
              </a>
            </li>
            <li>
              <a href="#" class="text-white">
                <i class="fab fa-instagram"></i> Instagram
              </a>
            </li>
            <li>
              <a href="#" class="text-white">
                <i class="fab fa-linkedin"></i> LinkedIn
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-center py-3">
        &copy; 2024 Computer Website. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Bootstrap and FontAwesome scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>