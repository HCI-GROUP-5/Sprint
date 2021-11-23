<?php
  include_once "header.php";
?>


  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="source/slide1.png" class="d-block w-100" alt="slide1" height="600">
        </div>
        <div class="carousel-item">
          <img src="source/slide2.png" class="d-block w-100" alt="slide2" height="600">
        </div>
        <div class="carousel-item">
          <img src="source/slide3.jpg" class="d-block w-100" alt="slide3" height="600">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="container">
    <div class="cn-2">
      <h2 class="fw-bold">
        Category
      </h2>
      <p class="text-center">Explore our wonderful categories, don't see what you looking for? Feel free to request</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col">
        <a href="#">
          <div class="card c1 img-fluid mx-auto d-block" style="width: 18rem;">
            <img src="source/anime.jpg" class="card-img-top" alt="anime">
            <div class="card-body">
              <h5 class="card-text text-center">Anime</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="#">
          <div class="card c2 img-fluid mx-auto d-block" style="width: 18rem;">
            <img src="source/drawing.jpg" class="card-img-top" alt="drawing">
            <div class="card-body">
              <h5 class="card-text text-center">Drawing</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="#">
          <div class="card c1 img-fluid mx-auto d-block" style="width: 18rem;">
            <img src="source/3d-character.png" class="card-img-top" alt="3d-character" height="190px">
            <div class="card-body">
              <h5 class="card-text text-center">3D Character</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="#">
          <div class="card c2 img-fluid mx-auto d-block" style="width: 18rem;">
            <img src="source/painting.jpg" class="card-img-top" alt="painting" height="190px">
            <div class="card-body">
              <h5 class="card-text text-center">Painting</h5>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="cn-3">
      <h2 class="fw-bold">
        Creator
      </h2>
      <p>Meet our creator, we are ready to make your awesome project</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row align-items-center creator">
      <div class="col">
        <a href="#">
          <img src="source/Antonio.png" alt="Antonio">
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img src="source/Darius.png" alt="Darius">
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img src="source/Deren.png" alt="Deren">
        </a>
      </div>
      <div class="col">
        <a href="#">
          <img src="source/Michelle.png" alt="Michelle">
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="cn-4">
      <h2 class="fw-bold">
        What they say about us?
      </h2>
      <p>Here's one of our clients review about our work</p>
    </div>
  </div>
  <div class="container">
    <div class="cn-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col review">
            <img src="source/Carrick.png" alt="Carrick">
          </div>
          <div class="col text-start">
            <img src="source/5-star.png" alt="5-star" class="float-start img-fluid" width="150">
            <br>
            <br>
            <br>
            <br>
            <h6 class="fw-normal review-text">I am deeply happy with this picture. It looks really beautiful. It is my first hand made picture in my life
              and I am very happy with it. I would like to thank to all company that organize evrything in
              amazing way. I admire your website team, support you provide, all logistic chain, and off course artist's work.
              Thank you, I have never expected the art will be so close to ordinary person like me. Thank you.
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  
  <?php
  include_once "footer.php";
?>
