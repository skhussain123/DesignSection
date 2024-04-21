<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>

<style>
  /*--------------------------------------------------------------
#Start Slider Code Here
--------------------------------------------------------------*/
  .logo-slider {
    overflow: hidden;
    padding: 40px 0 0 0;
    white-space: nowrap;
    position: relative;
  }



  .logo-slider:hover .logos-slide {
    animation-play-state: paused;
  }

  .logos-slide {
    display: inline-block;
    animation: 45s slide infinite linear;
    height: 5.5rem;
  }


  .logos-slide img {
    width: 200px;
    border-radius: 12px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    height: 100%;
    margin: 0 3px;
    padding-left: 0.4rem;
    padding-right: 0.2rem;
  }


  @keyframes slide {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(-100%);
    }
  }

  /*--------------------------------------------------------------
#End  Slider Code Here
--------------------------------------------------------------*/




  /*--------------------------------------------------------------
#Start Continue Slider Code Here
--------------------------------------------------------------*/

  .slider_inner div {
    width: 25%;
    position: relative;
    height: 200px;
  }

  .slider_inner div:nth-of-type(1) {
    background: #aedaed;
  }

  .slider_inner div:nth-of-type(2) {
    background: #eee;
  }

  .slider_inner div:nth-of-type(3) {
    background: #53edfe;
  }

  .slider_inner div:nth-of-type(4) {
    background: #e3edfe;
  }

  .slider_inner div:nth-of-type(5) {
    background: #ced;
  }

  /**↑↑塗りつぶし※画像の代わり、スライダーの設定には関係ない**/

  /**スライダー設定 共通css**/
  .slider {
    display: flex;
    width: 100vw;
  }

  .slider_inner {
    min-width: 100vw;
    display: flex;
  }



  /**右から左に動かすアニメーション**/
  .r_to_l .slider_inner:first-of-type {
    animation: reverse-loop 50s -25s linear infinite;
  }

  .r_to_l .slider_inner:last-of-type {
    animation: reverse-loop2 50s linear infinite;
  }

  @keyframes reverse-loop {
    0% {
      transform: translateX(100%);
    }

    to {
      transform: translateX(-100%);
    }
  }

  @keyframes reverse-loop2 {
    0% {
      transform: translateX(0%);
    }

    to {
      transform: translateX(-200%);
    }
  }

  /**左から右に動かすアニメーション**/
  .l_to_r .slider_inner:first-of-type {
    animation: loop 50s -25s linear infinite;
  }

  .l_to_r .slider_inner:last-of-type {
    animation: loop2 50s linear infinite;
  }

  @keyframes loop {
    0% {
      transform: translateX(-100%);
    }

    to {
      transform: translateX(100%);
    }
  }

  @keyframes loop2 {
    0% {
      transform: translateX(-200%);
    }

    to {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 768px) {



    .slider_inner {
      min-width: 60rem;
      display: flex;
    }


  }

  /*--------------------------------------------------------------
#End Continue Slider Code Here
--------------------------------------------------------------*/


  /*--------------------------------------------------------------
#Start Home page Search bar  Code Here
--------------------------------------------------------------*/


  .SearchBtnHome {
    background-color: black;
    color: white;
    border-radius: 4px;
    border: none;
    font-weight: bold;
  }

  .SearchContainerHome .search {
    border-radius: 4px;
    border: none;
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
    height: 2.9rem;
  }

  .SearchContainerHome .iconEmailHome {

    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
    border: none;
    background-color: white;
    font-size: 1.4rem;
    position: relative;
    left: 9px;
  }



  /*--------------------------------------------------------------
#End Home page Search bar  Code Here
--------------------------------------------------------------*/
</style>



<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center SearchContainerHome">

        <h5 class="" style="font-weight: bold; font-size:30px">ASK Your Query</h5>
        <hr>

        <br>
        <form action="" class="d-flex">

          <div class="input-group">
            <span class="input-group-text iconEmailHome"><i class="fa fa-search text-dark"></i></span>
            <input type="text" class="form-control search" placeholder="Enter Search Keyword" value="">
          </div>

          <input type="submit" style="height: 2.9rem;" class="ms-2 SearchBtnHome" value="Search Query">

        </form>

      </div>

    </div>
  </div>

<style>
  .aboutContainer .card{
      padding-top: 1rem;
      padding-left: 1rem;
      padding-bottom: 1rem;
      padding-right: 1rem;
    }

    .aboutContainer img{
      position: relative;
      bottom: 10px;
      background-color:black;
      border-radius: 9px;
      border: 1px solid black;
    }
  

</style>


  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="assets/img/about.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>
            Professional Academic Writers in UK</h3>
          <p class="text-dark mt-3">
            Are you looking for online assignment help UK? You only need to look at us! Our academic assistance UK is top-level, and our writers consistently produce exceptional work on time. Our team approaches each assignment with attention, accuracy, and supervision. We are ensuring that the project is customized to your specifications. With our commitment to timely completion, educational success is within your reach. Choose us for the best educational services available, where every task is completed with expertise. Let us assist you in overcoming challenges to achieve success, one project at a time. Trust us to be your educational partner.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>

          </ul>
          <br>

        </div>
      </div>

    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <p>sdsd</p>
        </div>


      </div>

      <div class="col-md-6">
        <div class="img">
          <img class="" height="10px" width="100%" src="assets/img/our-service/bannerimage.webp" alt="">
        </div>
      </div>
    </div>
  </div>



  <div class="logo-slider container">
    <div class="logos-slide">

      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider6.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider6.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider6.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider7.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider3.webp" data-v-4ef8651c="">


      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider6.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider1.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider6.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider7.webp" data-v-4ef8651c="">
      <img src="https://www.assignmentguru.co.uk/assets/img/picturesSlider/slider3.webp" data-v-4ef8651c="">

    </div>
  </div>







  <p>right to left</p>
  <div class="slider container r_to_l">

    <div class="slider_inner">

      <div class="card ml-2">
        <h5>hussain khan1</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>

      <div class="card ml-2">
        <h5>hussain khan2</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>
      <div class="card ml-2">
        <h5>hussain khan3</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>

      <div class="card ml-3">
        <h5>hussain khan4</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>


    </div>
    <div class="slider_inner">

      <div class="card ml-3">
        <h5>hussain khan5</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>
      <div class="card ml-3">
        <h5>hussain khan6</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>
      <div class="card ml-3">
        <h5>hussain khan7</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>

      <div class="card ml-3">
        <h5>hussain khan8</h5>
        <p>Lorem ipsum dolor sit ameeveniet nihil dolores temporibus repellendu</p>
      </div>

    </div>
  </div>



  <p>left to right</p>
  <div class="slider l_to_r">
    <div class="slider_inner">
      <!--サンプルのため画像ではなく、塗りつぶしでのサンプルになります-->
      <div class="ml-3"></div>
      <div class="ml-3"></div>
      <div class="ml-3"></div>
      <div class="ml-4"></div>
      <div class="ml-4"></div>
    </div>
    <div class="slider_inner">
      <div class="ml-4"></div>
      <div class="ml-4"></div>
      <div class="ml-4"></div>
      <div class="ml-4"></div>
      <div class="ml-3"></div>
    </div>
  </div>

  <style>

  </style>


  <!-- Start Client Review Code -->
  <section class="container client_section layout_padding ">

    <div class="px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

          <!-- Review Card -->
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Morijorch
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                  <ul class="d-flex mt-2" style="list-style: none;" id="ReviewHome">
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                  </ul>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                eb sites still in their infancy. Various eb sites still in their infancy. Various
              </p>
            </div>
          </div>


          <!-- Review Card -->
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Rochak
                  </h5>
                  <h6>
                    Default model text
                  </h6>

                  <ul class="d-flex mt-2" style="list-style: none;" id="ReviewHome">
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                  </ul>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
              </p>
            </div>
          </div>


          <!-- Review Card -->
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Brad Johns
                  </h5>
                  <h6>
                    Default model text
                  </h6>

                  <ul class="d-flex mt-2" style="list-style: none;" id="ReviewHome">
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                    <li><i class="fa fa-star  ml-1"></i></li>
                  </ul>

                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
              </p>
            </div>
          </div>

        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- Javascript Slider Auto -->
  <script>
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logo-slider").appendChild(copy);
  </script>





  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>

</body>

</html>