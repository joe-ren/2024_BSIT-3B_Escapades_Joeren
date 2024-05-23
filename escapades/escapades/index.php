<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPADES | HOME</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/common.css">   
   <style>
        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }

        @media screen and (max-width: 575px) {
          .availability-form{
            margin-top: 25px;
            padding: 0 35px;
          }
        }
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<!-- Carousel -->

<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block">
      </div>
      
    </div>
  </div>
</div>

<!-- check availability form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-2">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-2">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-2">
          <label class="form-label" style="font-weight: 500;">Adult</label>
          <select class="form-select shadow-none">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-2 mb-2">
          <label class="form-label" style="font-weight: 500;">Children</label>
          <select class="form-select shadow-none">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-1 mb-lg-2 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Our Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/room1.png" class="card-img-top">
          <div class="card-body">
          <h5>Simple Tidy Name</h5>
          <h6 class="mb-4">₱150.00 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             2 living area
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1 dining
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1 Backyard
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             3 monkeys
             </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              WIFI
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Telivision
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
              </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 adults
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 children
              </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/room2.png" class="card-img-top">
          <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">₱200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             2 Rooms
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1 Bathroom
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1 Balcony
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             3 Sofa
             </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              WIFI
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Telivision
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
              </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 adults
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 children
              </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/room3.png" class="card-img-top">
          <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">₱200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             2 Rooms
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1 Bathroom
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1 Balcony
             </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             3 Sofa
             </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              WIFI
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Telivision
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
              </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 adults
              </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 children
              </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btb-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
    </div>
  </div>
</div>

<!-- Our Facilities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/spa.svg" width="80px">
      <h5 class="mt-3">Body and Foot Spa</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Heater.svg" width="80px">
      <h5 class="mt-3">Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/AC.svg" width="80px">
      <h5 class="mt-3">Aircondition</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/tv.svg" width="80px">
      <h5 class="mt-3">Entertainment</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btb-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
    </div>
  </div>
</div>

<!-- Our Testimonials -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente reiciendis reprehenderit delectus sit ad in, 
          expedita suscipit soluta nobis blanditiis.
        </p>
        <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente reiciendis reprehenderit delectus sit ad in, 
          expedita suscipit soluta nobis blanditiis.
        </p>
        <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente reiciendis reprehenderit delectus sit ad in, 
          expedita suscipit soluta nobis blanditiis.
        </p>
        <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btb-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
  </div>
</div>

<!-- Reach us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white shadow rounded">
      <iframe class="w-100 rounded shadow" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248645.47983174823!2d123.49576954999998!3d13.15699895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a109ec1efe9e31%3A0xfd5b9c0f66f8fbef!2sLigao%2C%20Albay!5e0!3m2!1sen!2sph!4v1715412506917!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white shadow p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +63 1111 1111 111" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +63 1111 1111 111
          </a>
          <br>
          <a href="tel: +63 1111 1111 111" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +63 1111 1111 111
          </a>
      </div>
      <div class="bg-white shadow p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="https://www.facebook.com/joereeeen" class="d-inline-block mb-3" target="_blank">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i> Instagram
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter-x"></i> Twitter
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>
</html>