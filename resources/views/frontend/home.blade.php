<!DOCTYPE html>
<html>
  <head>
  <title>My website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
.body {
  background-color: rgb(225, 18, 219);
}
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
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <img src="{{asset('images/logo.png')}}" height="60">
      <button class="navbar-toggler" data-target="#my_navigation" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="my_navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Product/Service</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">News</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/slide1.jpg')}}">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/slide2.jpg')}}">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/slide3.jpg')}}">
          </div>
        </div>
      </div>
    <div class="container">
      
      <h1> The Company info</h1>
      <a>Computer company is a multinational information technology (IT) company that sells hardware, software and related business services.</a>
      <br>
      <div class="col-container">
        <h2>Big Promotion</h2>
        </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('images/news1.jpg')}}" class="card-img-top" alt="news1">
          <div class="card-body">
            <h1>Discount</h1>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('images/news2.jpg')}}" class="card-img-top" alt="news2">
          <div class="card-body">
            <h1>79$</h1>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('images/news3.jpg')}}" class="card-img-top" alt="news3">
          <div class="card-body">
            <h1>
                Free 
            </h1>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('images/news4.jpg')}}" class="card-img-top" alt=".news4">
            <div class="card-body">
              <h1>70%</h1>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    <br>
    <div class="col-container">Viode Detail</div>
    <div class="col-container " style="color: aliceblue;">
      <h2>Lasts Video</h2>
    <div class="row">

      <div class="col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/smoU272Dv14?si=t1Uvmnfo0dCnlJB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        HP Laptop 15s-fq2647TU ( I7 1165G7 / 8GB / SSD 512GB PCIE / 15.6"FHD). FREE: Backpack HP, Flash 32GB, Mouse Wireless, Mouse Pad.-CPU: Intel® Core™ i7-1165G.
      </div>

      <div class="col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/smoU272Dv14?si=t1Uvmnfo0dCnlJB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        HP Laptop 15s-fq2647TU ( I7 1165G7 / 8GB / SSD 512GB PCIE / 15.6"FHD). FREE: Backpack HP, Flash 32GB, Mouse Wireless, Mouse Pad.-CPU: Intel® Core™ i7-1165G.
      </div>

      <div class="col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/smoU272Dv14?si=t1Uvmnfo0dCnlJB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        HP Laptop 15s-fq2647TU ( I7 1165G7 / 8GB / SSD 512GB PCIE / 15.6"FHD). FREE: Backpack HP, Flash 32GB, Mouse Wireless, Mouse Pad.-CPU: Intel® Core™ i7-1165G.
      </div>
    </div>
  <br>
    <div class="container-fluid" style="background-color:#ccc; height: 150px;">
      <div class="row">
          <div class="col-lg-3" style="background-color: #d7d0d0; height: 150px;">
              <h6>Column1</h6>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link1</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link2</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link3</a>
                  </li>
                  
              </ul>  
          </div>
          <div class="col-lg-3" style="background-color: #d7d0d0; height: 150px;">
              <h6>Column1</h6>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link5</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link6</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link7</a>
                  </li>
                  
              </ul>
          </div>
          <div class="col-lg-3" style="background-color: #d7d0d0; height: 150px;">
              <h6>Column1</h6>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link9</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link10</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link11</a>
                  </li>
                    
              </ul>
          </div>
          <div class="col-lg-3" style="background-color: #d7d0d0; height: 150px;">
              <h6>Column1</h6>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link13</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link14</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Link15</a>
                  </li>
                  
              </ul>
          </div>
      </div>
    </div>
  </body>
</html>