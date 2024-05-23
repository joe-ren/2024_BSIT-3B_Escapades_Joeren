<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPADES | CONTACT</title>
    <?php require('inc/links.php') ?>
  
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Laborum quod, deserunt ad tempore deleniti culpa fuga voluptates
    dolorum amet porro.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248645.47983174823!2d123.49576954999998!3d13.15699895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a109ec1efe9e31%3A0xfd5b9c0f66f8fbef!2sLigao%2C%20Albay!5e0!3m2!1sen!2sph!4v1715412506917!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <h5>Address</h5>
      <a href="https://maps.app.goo.gl/Bre6phQWZbzcoP6o6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
      <i class="bi bi-geo-alt-fill"></i> Ligao City, Albay
      </a>

      <h5 class="mt-4">Call us</h5>
          <a href="tel: +63 1111 1111 111" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +63 1111 1111 111
          </a>
          <br>
          <a href="tel: +63 1111 1111 111" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +63 1111 1111 111
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto: vjoeren11@gmail.com" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-envelope-fill"></i> Vjoeren11@gmial.com
          </a>
          <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2" target="_blank">
          <i class="bi bi-facebook me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 me-2" target="_blank">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5" target="_blank">
          <i class="bi bi-twitter-x"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Send a message</h5>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Name</label>
           <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Email</label>
           <input type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Subject</label>
           <input type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-wieght: 500;">Message</label>
            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>