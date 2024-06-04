<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPADES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

<?php require('inc/header.php') ;?>

 <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

     <div class="modal-dialog modal-lg">
       <div class="modal-content">
        <form>
            <div class="modal-header">        
              <h5 class="modal-title d-flex align-items-center">
               <i class="bi bi-person-circle fs-3 me-2"></i> User Login
              </h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control">
                </div>
                <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

<div class="modal-dialog modal-lg">
  <div class="modal-content">
   <form>
       <div class="modal-header">
         <h5 class="modal-title d-flex align-items-center">
         <i class="bi bi-person-lines-fill fs-3 me-2"></i>
           User Registration
         </h5>
         <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Note: Your details must match with your ID (National ID, Passport, Driving license, etc.)
        that will be required during check-in.
       </span>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Picture</label>
            <input type="file" class="form-control shadow-none">
            </div>
            <div class="col-md-12 p-0 mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control shodow-none" rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Zip code</label>
            <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control shadow-none">
            </div>
        </div>
      </div>
      <div class="text-center my-1">
        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
      </div>
    </div>
   </form>
  </div>
 </div>
</div>

<!-- Carousel -->

<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <?php
         $res = selectAll('carousel');
         while($row = mysqli_fetch_assoc($res))
          {
            $path = CAROUSEL_IMG_PATH;
            echo <<<data
            <div class="swiper-slide">
              <img src="$path$row[image]" class="w-100 d-block">
            </div>
            data;
          }
        ?>
        
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
          <div class="col-lg-2 mb-2">
          <label class="form-label" style="font-weight: 500;">Destination</label>
          <input name="name" required type="text" class="form-control shadow-none">
            <!-- <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option> -->
          </select>
          </div>
          <div class="col-lg-2 mb-2">
          <label class="form-label" style="font-weight: 500;">Travelers</label>
          <input name="name" required type="text" class="form-control shadow-none">
            <!-- <option selected>Open this select menu</option> -->
            <!-- <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option> -->
          </select>
          </div>
          <div class="col-lg-2 mb-2">
          <!-- <input type="text" class="form-control shadow-none" style="font-weight: 500;" placeholder="Search"> -->
          <a href="rooms.php" class="btn btb-sm btn-outline-dark rounded-0 fw-bold shadow-none">Search</a>
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
        <img src="images/rooms/1.jpg" class="card-img-top">
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
        <img src="images/rooms/1.jpg" class="card-img-top">
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
        <img src="images/rooms/1.jpg" class="card-img-top">
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
      <a href="rooms.php" class="btn btb-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
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
      <a href="facilities.php" class="btn btb-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
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
      <iframe class="w-100 rounded shadow" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white shadow p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
        </a>
        <br>
        <?php 
          if($contact_r['pn2']!=''){
            echo<<<data
            <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
            </a>
            data;
          }
        ?>
      </div>
      <div class="bg-white shadow p-4 rounded mb-4">
        <h5>Follow us</h5>
        <?php 
          if($contact_r['fb']!=''){
            echo<<<data
            <a href="$contact_r[fb]" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-facebook me-1"></i> Facebook
                </span>
                </a>
            <br>
            data;
          }
        ?>
        
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i> Instagram
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter-x"></i> Twitter
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->

<div class="container-fluid bg-white shadow mt-5">
  <div class="row">
    <div class="col-lg-4">
      <h3 class="h-font fw-bold fs-3 mb-2">ESCAPADES</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
         Voluptas ab quae alias voluptate tempora veniam maxime maiores
         cupiditate at sapiente!
      </p>
    </div>
    <div class="col-lg-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contanct us</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i> Facebook
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram me-1"></i> Instagram
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none">
        <i class="bi bi-twitter-x me-1"></i> Twitter
      </a><br>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
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