<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


  <?php


echo '<script>swal({
  title: "Custom Card",
  html: `<div class="custom-card">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <img src="assets/img/about-bg.jpg" class="card-img-top" alt="Image">
                <p class="card-text">Your content goes here...</p>
            </div>
        </div>`,
  icon: "success", // Use an appropriate icon
  button: "OK",
  closeOnClickOutside: false,
  closeOnEsc: false,
  customClass: {
      container: "custom-alert-container" // Apply custom CSS class to the container
  }
});</script>';




  ?>



</body>

</html>