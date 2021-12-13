<?php
include_once "header.php";
?>


<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <video autoplay muted loop class="d-block mx-auto img-fluid">
          <source src="source/slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="carousel-item " data-bs-interval="5000">
        <video autoplay muted loop class="d-block mx-auto img-fluid">
          <source src="source/slide2.mp4" type="video/mp4">
        </video>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <video autoplay muted loop class="d-block mx-auto img-fluid">
          <source src="source/slide3.mp4" type="video/mp4">
        </video>
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


<div class="cn-bsl">
  <div class="container">
    <div class="top-c">
      <h2 class="fw-bold">
        CATEGORY
      </h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos.</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col b1">
        <div class="bsl">
          <div class="bestseller img-fluid  bsl1 mx-auto d-block">
            <div class="text">
              <h2>
                Anime
              </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, maxime voluptate! Aliquid libero dolorum totam cum fugiat officiis natus nisi!</p>
            </div>
            <span class="label"></span>
          </div>
        </div>
      </div>
      <div class="col b2">
        <div class="bsl">
          <div class="bestseller img-fluid  bsl2 mx-auto d-block">
            <div class="text">
              <h2>
                Painting
              </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, maxime voluptate! Aliquid libero dolorum totam cum fugiat officiis natus nisi!</p>
            </div>
            <span class="label"></span>
          </div>
        </div>
      </div>
      <div class="col b3">
        <div class="bsl">
          <div class="bestseller img-fluid  bsl3 mx-auto d-block">
            <div class="text">
              <h2>
                Poster
              </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, maxime voluptate! Aliquid libero dolorum totam cum fugiat officiis natus nisi!</p>
            </div>
            <span class="label"></span>
          </div>
        </div>
      </div>
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
<div class="cn-bsl container-fluid">
  <div class="row align-items-center">
    <div class="col b1">
      <a href="artist.html">
        <div class="container-fluid bsl">
          <div class="bestseller img-fluid  bsl4 mx-auto d-block">
            <div class="text">
              <h2>
                Jessica
              </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, maxime voluptate! Aliquid libero dolorum totam cum fugiat officiis natus nisi!</p>
            </div>
            <span class="label"></span>
          </div>
        </div>
      </a>
    </div>
    <div class="col b2">
      <a href="artist.html">
        <div class="container-fluid bsl">
          <div class="bestseller img-fluid  bsl5 mx-auto d-block">
            <div class="text">
              <h2>
                Wahyu
              </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, maxime voluptate! Aliquid </p>
            </div>
            <span class="label"></span>
          </div>
        </div>
      </a>
    </div>
    <div class="col b3">
      <a href="artist.html">
        <div class="container-fluid bsl">
          <div class="bestseller img-fluid  bsl6 mx-auto d-block">
            <div class="text">
              <h2>
                Billy
              </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, maxime voluptate! </p>
            </div>
            <span class="label"></span>
          </div>
        </div>
      </a>
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
  <div class="container-fluid review-section">
    <div class="review-body">
      <div class="testimonials">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-review">
                <div class="layer"></div>
                <div class="content">
                  <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum incidunt ipsa alias eum qui rerum facere magni corporis soluta?"</p>
                  <div class="imgBx">
                    <img src="https://i.pinimg.com/originals/e6/68/ae/e668aee6a9496753b329e241e4105822.jpg" alt="carrick">
                  </div>
                  <div class="details">
                    <h2>Carrick
                      <br>
                      <span>Customer</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-review">
                <div class="layer"></div>
                <div class="content">
                  <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum incidunt ipsa alias eum qui rerum facere magni corporis soluta?"</p>
                  <div class="imgBx">
                    <img src="img/Banning.jpg" alt="carrick">
                  </div>
                  <div class="details">
                    <h2>John
                      <br>
                      <span>Customer</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-review">
                <div class="layer"></div>
                <div class="content">
                  <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum incidunt ipsa alias eum qui rerum facere magni corporis soluta?"</p>
                  <div class="imgBx">
                    <img src="img/Rachel.jpg" alt="carrick">
                  </div>
                  <div class="details">
                    <h2>Rachel
                      <br>
                      <span>Customer</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-review">
                <div class="layer"></div>
                <div class="content">
                  <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum incidunt ipsa alias eum qui rerum facere magni corporis soluta?"</p>
                  <div class="imgBx">
                    <img src="img/Lily.jpg" alt="carrick">
                  </div>
                  <div class="details">
                    <h2>Lily
                      <br>
                      <span>Customer</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-review">
                <div class="layer"></div>
                <div class="content">
                  <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum incidunt ipsa alias eum qui rerum facere magni corporis soluta?"</p>
                  <div class="imgBx">
                    <img src="img/Danny.jpg" alt="carrick">
                  </div>
                  <div class="details">
                    <h2>Dany
                      <br>
                      <span>Customer</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
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
