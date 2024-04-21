<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="SnI-A8y8EZldKFiMoxFUw12iddCfAAPNlXscSs56Z78">


  <link href="assets/vendor/bootstrap/css/bootstrap.m in.css" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>


<style>
  /* Website color and other */

  a {
    text-decoration: none;
  }

  body {
    overflow-x: hidden;
  }

  a:hover {
    color: white !important;
    text-decoration: none !important;
    font-weight: bold;

  }

  :root {
    --primary-color: #ffa030;
    --button-color: #fba333;
    --secondary-color: rgb(251, 163, 51);
    --fontStyle: 'Arial', sans-serif;
    --ptext-size: 16px;
    --heading-color: rgb(61, 60, 60);

    --text-color: #5f5d5d;
    --card-color: #fffafa;


  }

  /* Website color and other */



  /*--------------------------------------------------------------
#Start What Students Say About MyAssignmentHelp
--------------------------------------------------------------*/


  .StudentsRTittle1 {
    font-weight: bold;
    font-size: 35px;
    color: black;
  }

  .StudentsRTittle2 {
    color: var(--text-color);
    font-size: 19px;
  }


  .slide-container {
    display: flex;
    width: calc(250px * 18);
    animation: scroll 20s linear infinite;
  }

  @keyframes scroll {

    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(calc(-250px * 9));
    }


  }

  .SliderCard {
    width: 260px;
    height: 260px !important;
    margin-right: 20px;
    border-radius: 5px;
    background-color: var(--card-color);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  }

  .SliderCard:hover {
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px var(--primary-color);
    transform: translateY(-4px) scale(1.01);
  }

  .SliderCard:last-child {
    margin-right: 5;
  }


  .SliderRank {
    list-style: none;
    display: flex;
    position: relative;
    left: 156px;
    top: 37px;
    color: var(--primary-color);
    font-size: 13px;
  }


  #SliderDate {
    position: relative;
    top: 50px !important;
    color: var(--text-color);
    font-size: 12px;
  }

  .sliderTittle {
    font-size: 18px;
    position: relative;
    left: 10px;
  }

  #sliderday {
    font-size: 13px;
    color: var(--text-color);
  }

  .Sliderdesc {
    color: var(--text-color);
    font-size: 15px;
  }



  /*--------------------------------------------------------------
#End Reviews Slider Card css
--------------------------------------------------------------*/


  /*--------------------------------------------------------------
#Start The Best Assignment Writers
--------------------------------------------------------------*/


  .ReviewButton {
    background-color: black !important;
    border: none;
    color: white;
    border-radius: 0.2rem;
    height: 30px;
    position: relative;
    right: 5px;
    padding-right: 0.6rem;
    padding-left: 0.6rem;
    padding-top: 7px;
    padding-bottom: 5px;
    font-size: 10px;
    margin-left: auto;
  }

  .ReviewButton:hover {
    border: 1px solid black !important;
    color: black !important;
    box-shadow: none !important;
    background-color: white !important;
    padding-top: 8px;
  }

  .WritersTittle1 {
    font-size: 40px;
    font-weight: bold;
    color: black;
  }

  .WritersTittle2 {
    font-size: 12px;
    color: var(--text-color);

  }

  .ReviewCard {
    padding-left: 10px;
    padding-right: 0px;
    padding-top: 10px;
    padding-bottom: 20px;
    background-color: var(--card-color) !important;
    transition: transform 0.3s ease;/
  }

  .ReviewCard:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 8px var(--primary-color);
  }

  .ReviewSubtittle {
    position: relative;
    top: 0.8rem;
    color: var(--text-color);
    font-size: 12px;
    left: 0.4rem;
  }

  .ReviewStar {
    list-style: none;
    font-size: 10px;
    position: relative;
    top: 45px;
    right: 2.4rem !important;
    color: var(--primary-color);
    display: flex;
  }

  .ReviewIcon {
    font-size: 60px;
    border-radius: 35px;
    width: 22%;
  }

  .NestedHead {
    position: relative;
    top: 13px;
    left: 5px;
  }

  .ReviewName {
    position: relative;
    height: 1px;
    font-size: 18px;
  }

  .Reviewdesc {
    font-size: 13px;
    text-align: justify;
    word-spacing: normal;
    max-width: 92%;
    color: var(--text-color);
  }


  .Nestedbody {
    display: flex;
    position: relative;
    top: 30px;
  }

  .Reviewul li {
    list-style: none;
    position: relative;
    text-align: start;
    position: relative;
    right: 2.5rem;
    font-size: 12px;

  }


  @media only screen and (max-width: 768px) {

    .ReviewIcon {
      width: 45px;
      height: 2.8rem !important;
    }

    .ReviewButton {
      height: 23px;

    }

    .ReviewButton {
      padding-bottom: 1.2rem !important;
    }


  }

  @media (max-width: 621px) {
    .ReviewButton {
      font-size: 12px;
    }

    .ReviewIcon {
      height: 10px !important;
    }

    .ReviewIcon {
      width: 45px;
      height: 2.8rem !important;
    }

  }

  @media (max-width: 1015px) {
    .ReviewButton {
      font-size: 9px;
    }

    .Nestedbody ul li {
      font-size: 10px;
    }
  }


  /* Grid Reviews*/
  .ReviewMain {
    max-width: 1270px;
    padding-right: 20px;
    padding-left: 20px;
    margin: 0 auto;
    display: grid;
    gap: 1rem;
  }


  @media (min-width: 600px) {
    .ReviewMain {
      grid-template-columns: repeat(2, 1fr);
    }
  }


  @media (min-width: 900px) {
    .ReviewMain {
      grid-template-columns: repeat(4, 1fr);
    }
  }






  /*--------------------------------------------------------------
#Start  Top Assignment Help Features
--------------------------------------------------------------*/


  .FeatureTittle1 {
    font-weight: bold;
    font-size: 1.8rem;
    color: black;
    text-align: center;
  }

  .FeatureTittle2 {
    color: var(--text-color);
    font-size: 1rem;
    text-align: center;
  }

  .FeaturesCard {
    background-color: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding-left: 1rem;
    padding-right: 2rem;
    padding-top: 16px;
    padding-bottom: 20px;
    transition: transform 0.3s ease;
    border-radius: 12px;
    border: 1px solid orange;

  }

  .FeaturesTittle {
    position: relative;
    left: 10px;
    top: 13px;
    font-weight: bold;
  }

  .FeaturesDesc {
    text-align: justify;
    word-spacing: normal;
    font-size: 14px;
    position: relative;
    top: 1rem;
    left: 0.8rem;
    color: var(--text-color);

  }


  /* Grid */
  .FeaturesMain {
    max-width: 1250px;
    padding-right: 3.5rem;
    padding-left: 3.5rem;
    margin: 0 auto;
    display: grid;
    gap: 1rem;
  }


  @media (min-width: 400px) {
    .FeaturesMain {
      grid-template-columns: repeat(1, 1fr);
    }
  }


  @media (min-width: 480px) {
    .FeaturesMain {
      grid-template-columns: repeat(2, 1fr);
    }
  }


  @media (min-width: 900px) {
    .FeaturesMain {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  /* Styles for screens smaller than or equal to 768 pixels (commonly used for mobile devices) */
  @media only screen and (max-width: 768px) {

    .FeaturesMain {
      padding-right: 2rem;
      padding-left: 2rem;
    }

  }


  */
  /*--------------------------------------------------------------
#End  Top Assignment Help Features
--------------------------------------------------------------*/



  /*--------------------------------------------------------------
#Start Vertical Large Slider Profile Card Section
--------------------------------------------------------------*/

  .section-title p {
    font-size: 15px;
    font-family: var(--fontStyle);
  }


  .scrollsection div {
    padding: 5px 20px 20px;
    font-size: 15px;
    font-family: var(--fontStyle) !important;

  }

  .scrollsection div .card {
    background-color: var(--card-color);
  }

  .scrollsection {
    max-height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin: 10px;
    padding-top: 30px;
    padding-bottom: 30px;
    position: relative;
    border-top: 3px solid var(--primary-color);
    border-bottom: 3px solid var(--primary-color);

  }

  .scrollsection::-webkit-scrollbar {
    width: 3px;
  }

  .scrollsection::-webkit-scrollbar-thumb {
    background-color: var(--primary-color) !important;
    border-radius: 6px;
  }

  .scrollsection::-webkit-scrollbar-track {
    background-color: transparent;
  }


  .scrollMainsection:before {
    top: 0;
  }

  .scrollMainsection:after {
    bottom: 0;
  }

  .LargeCardTittle {
    color: var(--heading-color);
    font-size: 1.5rem;
    text-align: center;
    font-weight: bold;
  }

  .LargeCardsSubTittle {
    font-size: 1rem;
    color: var(--text-color);
  }

  .WritingTittle {
    font-size: 20px;
    position: relative;
    font-weight: bold;
    top: 20px;
  }

  .Writingdesc {
    font-size: 15px;
    color: var(--text-color);
  }

  .WritingButton {

    font-family: Arial, Helvetica, sans-serif;
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 8px 15px;
    border-radius: 5px;
    position: relative;
    background-color: black;
    color: white !important;

  }

  .CenterButton a {
    color: white !important;
  }

  .CenterButton {
    text-align: center;
  }


  /*--------------------------------------------------------------
#End Vertical Large Slider Profile Card Section
--------------------------------------------------------------*/


  /* --------------------------------------------------------------
#Reliable Assignment  Short Banner
--------------------------------------------------------------*/

  .SubjectContainer {
    background-color: var(--primary-color) !important;
    padding-bottom: 30px;
    padding-top: 20px;
  }

  .SubjectCard {
    position: relative;
    top: 4rem;
    padding-right: 2rem;
    background-color: white;
    border-radius: 12px;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;

  }

  .SubjectCard i {
    color: black;
    position: relative;
    right: 0.6rem;
  }


  .SubjetcButton {

    margin: 0;
    top: 1rem;

  }

  .Subjetca {
    background-color: black;
    width: 128px !important;
    color: white;
    padding-top: 0.4rem;
    padding-left: 1.3rem;
    border-radius: 9px;
    padding-right: 1.3rem;
    padding-bottom: 0.6rem;
  }

  .SubjectList {
    position: relative;
    right: 2.1rem;
    list-style: none !important;
  }


  .SubjectList ul li i {
    color: black;
    font-size: 0.9rem;
    background-color: var(--primary-color);
    padding-top: 0.2rem;
    padding-bottom: 0.2rem;
    padding-right: 0.1rem;
    padding-left: 0.1rem;
    border-radius: 10px;

  }

  .SubjectList ul li {
    width: 15.4rem;
    font-size: 0.8rem;
    background-color: black;
    padding-bottom: 0.5rem;
    padding-left: 0.3rem;
    border-radius: 9px;
    padding-top: 0.5rem;

  }

  .SubjectCard span ul li {

    list-style: none !important;
    color: black !important;
    font-size: 1rem;

  }

  .ReliableHeader h4 {
    font-size: 2rem;
    font-weight: bold;
    color: white;
  }

  .ReliableHeader p {
    font-size: 1rem;
    color: white;
  }

  @media only screen and (max-width: 768px) {

    .SubjectList ul li {
      width: 100%;
    }

    .SubjectCard span ul li i {
      display: none;
    }

    .SubjectList {
      display: none;
    }

    .dropdownList {
      display: block !important;
    }

    .SubjectCard {
      position: relative;
      top: 1rem;
    }

    .moBilbeSubjectList ul li {
      width: 100%;
      font-size: 0.8rem;
      background-color: black;
      padding-bottom: 0.5rem;
      padding-left: 0.3rem;
      border-radius: 9px;
      padding-top: 0.5rem;
      list-style: none;
      position: relative;
      right: 2rem;
    }

  }

  .panel-title a {
    font-size: 1.2rem;
    text-align: center;
    font-weight: normal;
    color: black;
    width: 100%;
    color: white;


  }


  /* --------------------------------------------------------------
#Reliable Assignment  Short Banner
--------------------------------------------------------------*/






  /*--------------------------------------------------------------
#Start Frequently Asked Questions Section
--------------------------------------------------------------*/


  #ratingTittle {
    position: relative;
    bottom: 15px !important;
    right: 6px;
  }


  .faqcard {
    background-color: var(--card-color);
    border: 1px solid var(--primary-color);
    border-radius: 7px;
    padding-left: 10px;
    transition: box-shadow 0.3s ease;
  }

  .faqcard:hover {
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    color: black !important;
  }


  .faqIcon {
    position: relative;
    right: 0;
    top: 0;
    height: 100%;

  }

  .faqtittle {
    font-size: 12px !important;
    font-weight: bold !important;
    font-family: var(--fontStyle);
    color: black;
  }

  .faqtittle:hover {
    color: black !important;
  }

  .maincontent h3 {
    font-family: var(--fontStyle) !important;
  }

  .position-relative h2 {
    font-size: 1.2rem;
  }


  .faqbody {
    position: relative;
    bottom: 100px;
    padding-bottom: 10px;
    height: 100px;
    font-size: 13px;
    color: black;
    border: 1px solid var(--card-color);

  }


  @media screen and (max-width: 407px) {

    .faqbody {
      height: 80px;
      width: 98%;
      font-size: 12px;

    }

  }

  /*--------------------------------------------------------------
#End Frequently Asked Questions Section
--------------------------------------------------------------*/
</style>




<body>

  <main id="main">

    <br>
    <br>
    <br>


    <!--#The Best Assignment Writers -->
    <h5 class="text-center WritersTittle1">The Best Assignment Writers</h5>
    <p class="text-center WritersTittl2">Hire qualified academic scholars to solve all your assignment worries.</p>

    <br>
    <div class="ReviewMain">

      <!--Section Cards 1 -->
      <div class="card ReviewCard">
        <div class="cardheader d-flex">
          <img class="ReviewIcon mt-2" src="https://cdn5.myassignmenthelp.com/1490951383.jpg" alt="">

          <span class="NestedHead">
            <h5 class="ml-2 ReviewName">Yasir khan</h5>
            <p class="ReviewSubtittle">Master of Accounts</p>
          </span>
        </div>

        <div class="Reviewbody">
          <p class="Reviewdesc mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga at eaque nulla qui.
            Nostrum laboriosam aliquam,</p>

          <ul class="ReviewStar">
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>

          <span class="Nestedbody">

            <ul class="Reviewul">

              <li class="text-start">100 Complete order</li>
              <li class="text-start">100 Complete order</li>


            </ul>

            <a href="" class="ReviewButton">Click Now</a>

          </span>

        </div>
      </div>

      <!--Section Cards 2 -->
      <div class="card ReviewCard">
        <div class="cardheader d-flex">
          <img class="ReviewIcon mt-2" src="https://cdn5.myassignmenthelp.com/1490951383.jpg" alt="">

          <span class="NestedHead">
            <h5 class="ml-2 ReviewName">Yasir khan</h5>
            <p class="ReviewSubtittle">Master of Accounts</p>
          </span>
        </div>

        <div class="Reviewbody">
          <p class="Reviewdesc mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga at eaque nulla qui.
            Nostrum laboriosam aliquam, </p>

          <ul class="ReviewStar">
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>

          <span class="Nestedbody">

            <ul class="Reviewul">

              <li class="text-start">100 Complete order</li>
              <li class="text-start">100 Complete order</li>


            </ul>

            <a href="" class="ReviewButton">Click Now</a>

          </span>

        </div>
      </div>

      <!--Section Cards 3-->
      <div class="card ReviewCard">
        <div class="cardheader d-flex">
          <img class="ReviewIcon mt-2" src="https://cdn5.myassignmenthelp.com/1490951383.jpg" alt="">

          <span class="NestedHead">
            <h5 class="ml-2 ReviewName">Yasir khan</h5>
            <p class="ReviewSubtittle">Master of Accounts</p>
          </span>
        </div>

        <div class="Reviewbody">
          <p class="Reviewdesc mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga at eaque nulla qui.
            Nostrum laboriosam aliquam, /p>

          <ul class="ReviewStar">
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>

          <span class="Nestedbody">

            <ul class="Reviewul">

              <li class="text-start">100 Complete order</li>
              <li class="text-start">100 Complete order</li>


            </ul>

            <a href="" class="ReviewButton">Click Now</a>

          </span>

        </div>
      </div>

      <!--Section Cards 4 -->
      <div class="card ReviewCard">
        <div class="cardheader d-flex">
          <img class="ReviewIcon mt-2" src="https://cdn5.myassignmenthelp.com/1490951383.jpg" alt="">

          <span class="NestedHead">
            <h5 class="ml-2 ReviewName">Yasir khan</h5>
            <p class="ReviewSubtittle">Master of Accounts</p>
          </span>
        </div>

        <div class="Reviewbody">
          <p class="Reviewdesc mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga at eaque nulla qui.
            Nostrum laboriosam aliquam, </p>

          <ul class="ReviewStar">
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>

          <span class="Nestedbody">

            <ul class="Reviewul">

              <li class="text-start">100 Complete order</li>
              <li class="text-start">100 Complete order</li>


            </ul>

            <a href="" class="ReviewButton">Click Now</a>

          </span>

        </div>
      </div>



    </div>

    <br>
    <br>
    <br>
    <br>



    <!--#Top Assignment Help Features -->
    <h5 class="text-center FeatureTittle1 ">MyAssignmentHelp: Top Assignment Help Features</h5>
    <p class="text-center FeatureTittle2">Discover why we’re the top choice for professional writing assistance.</p>

    <br>
    <hr>
    <div class="FeaturesMain">

      <!-- First Card -->
      <div class="FeaturesCard text-center">
        <svg class="Featuresicon" xmlns="http://www.w3.org/2000/svg" width="76" height="76.003" viewBox="0 0 76 76.003">
          <g id="quality" transform="translate(882.538 4987)">
            <g id="Group_2933" data-name="Group 2933" transform="translate(-882.538 -4987)">
              <path id="Path_10686" data-name="Path 10686" d="M-844.539-4911c-3.39,0-6.111-1.7-8.3-3.066a14.915,14.915,0,0,0-2.9-1.565,16.087,16.087,0,0,0-3.521-.415h-.012c-2.689-.143-5.736-.307-8.39-2.167-2.717-1.889-3.888-4.8-4.83-7.138a14.118,14.118,0,0,0-1.43-2.956,14.792,14.792,0,0,0-2.487-2.21l-.01-.007c-2.032-1.581-4.561-3.548-5.625-6.677-1.046-3.071-.219-6.082.446-8.5l0-.013a14.3,14.3,0,0,0,.664-3.286,14.265,14.265,0,0,0-.658-3.27l-.008-.03c-.665-2.419-1.492-5.43-.444-8.5,1.061-3.124,3.59-5.09,5.622-6.671l.024-.019a14.712,14.712,0,0,0,2.462-2.187,14.009,14.009,0,0,0,1.444-2.977c.937-2.333,2.1-5.238,4.816-7.133,2.668-1.846,5.841-2.019,8.391-2.158a16.143,16.143,0,0,0,3.552-.424,14.873,14.873,0,0,0,2.906-1.565c2.183-1.365,4.9-3.064,8.281-3.064s6.09,1.693,8.272,3.054l.016.01a14.64,14.64,0,0,0,2.9,1.562,16.011,16.011,0,0,0,3.534.421c2.555.135,5.735.3,8.4,2.161,2.714,1.9,3.88,4.8,4.817,7.127a14.05,14.05,0,0,0,1.435,2.972,14.8,14.8,0,0,0,2.486,2.206l.01.008c2.039,1.582,4.578,3.552,5.632,6.7,1.04,3.056.214,6.064-.45,8.481l0,.014a14.3,14.3,0,0,0-.665,3.289,14.316,14.316,0,0,0,.664,3.287l0,.012c.665,2.422,1.491,5.433.443,8.505-1.043,3.12-3.583,5.092-5.623,6.676l-.011.008a14.754,14.754,0,0,0-2.474,2.192,13.95,13.95,0,0,0-1.442,2.976c-.937,2.334-2.1,5.238-4.816,7.134-2.669,1.857-5.85,2.026-8.406,2.162a16.023,16.023,0,0,0-3.516.417,15.156,15.156,0,0,0-2.919,1.571C-838.436-4912.692-841.156-4911-844.539-4911Zm0-73.736c-2.731,0-4.941,1.382-7.078,2.719a15.877,15.877,0,0,1-3.437,1.808,17.474,17.474,0,0,1-4.1.522c-2.388.13-5.088.278-7.225,1.756-2.155,1.505-3.1,3.85-4.006,6.116a15.343,15.343,0,0,1-1.743,3.5,15.988,15.988,0,0,1-2.874,2.6l-.023.018c-1.98,1.541-4.026,3.132-4.869,5.614-.823,2.415-.159,4.834.484,7.174l.009.031a15.587,15.587,0,0,1,.738,3.868,15.62,15.62,0,0,1-.745,3.887l0,.013c-.643,2.339-1.307,4.758-.486,7.17.845,2.486,2.892,4.078,4.87,5.618l.01.008a16.052,16.052,0,0,1,2.9,2.626,15.382,15.382,0,0,1,1.727,3.479c.915,2.274,1.861,4.624,4.025,6.128,2.126,1.49,4.712,1.628,7.213,1.762h.011a17.459,17.459,0,0,1,4.077.515,16.167,16.167,0,0,1,3.426,1.807c2.141,1.337,4.356,2.721,7.1,2.721s4.948-1.38,7.089-2.715a16.488,16.488,0,0,1,3.443-1.812,17.386,17.386,0,0,1,4.074-.518c2.387-.127,5.093-.271,7.23-1.758,2.157-1.507,3.1-3.851,4.009-6.118a15.282,15.282,0,0,1,1.742-3.5,15.978,15.978,0,0,1,2.888-2.609l.01-.009c1.986-1.542,4.039-3.136,4.867-5.611.825-2.419.161-4.837-.481-7.176l0-.016a15.616,15.616,0,0,1-.745-3.887,15.612,15.612,0,0,1,.746-3.89l0-.01c.643-2.342,1.307-4.759.49-7.157l0-.006c-.835-2.5-2.888-4.088-4.873-5.628l-.01-.008a16.064,16.064,0,0,1-2.9-2.623,15.3,15.3,0,0,1-1.732-3.493c-.913-2.271-1.854-4.613-4.013-6.121-2.135-1.488-4.839-1.631-7.225-1.756a17.391,17.391,0,0,1-4.085-.521,15.892,15.892,0,0,1-3.435-1.8l-.015-.009C-839.6-4983.354-841.812-4984.732-844.539-4984.732Z" transform="translate(882.538 4987)" fill="#2c2c2c" />
            </g>
            <g id="Group_2934" data-name="Group 2934" transform="translate(-863.772 -4968.232)">
              <path id="Path_10687" data-name="Path 10687" d="M-647.5-4732.709a19.256,19.256,0,0,1-19.234-19.234,19.256,19.256,0,0,1,19.234-19.234,19.272,19.272,0,0,1,12.148,4.321,1.238,1.238,0,0,1,.177,1.742,1.238,1.238,0,0,1-1.742.177A16.79,16.79,0,0,0-647.5-4768.7a16.777,16.777,0,0,0-16.758,16.758,16.776,16.776,0,0,0,16.758,16.757,16.776,16.776,0,0,0,16.758-16.757,16.879,16.879,0,0,0-.382-3.578,1.238,1.238,0,0,1,.947-1.473,1.238,1.238,0,0,1,1.473.947,19.349,19.349,0,0,1,.439,4.1A19.256,19.256,0,0,1-647.5-4732.709Z" transform="translate(666.731 4771.177)" fill="#2c2c2c" />
            </g>
            <g id="Group_2935" data-name="Group 2935" transform="translate(-852.059 -4962.339)">
              <path id="Path_10688" data-name="Path 10688" d="M-538.364-4701.309l-6.459-7.557a1.237,1.237,0,0,1,.137-1.745,1.238,1.238,0,0,1,1.746.136l4.9,5.733,17.685-14.18a1.238,1.238,0,0,1,1.74.191,1.238,1.238,0,0,1-.191,1.741Z" transform="translate(545.12 4719.194)" fill="#2c2c2c" />
            </g>
          </g>
        </svg>

        <div class="FeaturesBody">
          <h5 class="FeaturesTittle">High Quality</h5>
          <p class="FeaturesDesc">We receive the orders and craft them from zero you should not be anxious about
            receiving poor quality material in hands because Assignment Guru is commonly known very well for its
            quality.</p>
        </div>
      </div>

      <!-- First Card -->
      <div class="FeaturesCard text-center">
        <svg class="Featuresicon" xmlns="http://www.w3.org/2000/svg" width="76" height="76.003" viewBox="0 0 76 76.003">
          <g id="quality" transform="translate(882.538 4987)">
            <g id="Group_2933" data-name="Group 2933" transform="translate(-882.538 -4987)">
              <path id="Path_10686" data-name="Path 10686" d="M-844.539-4911c-3.39,0-6.111-1.7-8.3-3.066a14.915,14.915,0,0,0-2.9-1.565,16.087,16.087,0,0,0-3.521-.415h-.012c-2.689-.143-5.736-.307-8.39-2.167-2.717-1.889-3.888-4.8-4.83-7.138a14.118,14.118,0,0,0-1.43-2.956,14.792,14.792,0,0,0-2.487-2.21l-.01-.007c-2.032-1.581-4.561-3.548-5.625-6.677-1.046-3.071-.219-6.082.446-8.5l0-.013a14.3,14.3,0,0,0,.664-3.286,14.265,14.265,0,0,0-.658-3.27l-.008-.03c-.665-2.419-1.492-5.43-.444-8.5,1.061-3.124,3.59-5.09,5.622-6.671l.024-.019a14.712,14.712,0,0,0,2.462-2.187,14.009,14.009,0,0,0,1.444-2.977c.937-2.333,2.1-5.238,4.816-7.133,2.668-1.846,5.841-2.019,8.391-2.158a16.143,16.143,0,0,0,3.552-.424,14.873,14.873,0,0,0,2.906-1.565c2.183-1.365,4.9-3.064,8.281-3.064s6.09,1.693,8.272,3.054l.016.01a14.64,14.64,0,0,0,2.9,1.562,16.011,16.011,0,0,0,3.534.421c2.555.135,5.735.3,8.4,2.161,2.714,1.9,3.88,4.8,4.817,7.127a14.05,14.05,0,0,0,1.435,2.972,14.8,14.8,0,0,0,2.486,2.206l.01.008c2.039,1.582,4.578,3.552,5.632,6.7,1.04,3.056.214,6.064-.45,8.481l0,.014a14.3,14.3,0,0,0-.665,3.289,14.316,14.316,0,0,0,.664,3.287l0,.012c.665,2.422,1.491,5.433.443,8.505-1.043,3.12-3.583,5.092-5.623,6.676l-.011.008a14.754,14.754,0,0,0-2.474,2.192,13.95,13.95,0,0,0-1.442,2.976c-.937,2.334-2.1,5.238-4.816,7.134-2.669,1.857-5.85,2.026-8.406,2.162a16.023,16.023,0,0,0-3.516.417,15.156,15.156,0,0,0-2.919,1.571C-838.436-4912.692-841.156-4911-844.539-4911Zm0-73.736c-2.731,0-4.941,1.382-7.078,2.719a15.877,15.877,0,0,1-3.437,1.808,17.474,17.474,0,0,1-4.1.522c-2.388.13-5.088.278-7.225,1.756-2.155,1.505-3.1,3.85-4.006,6.116a15.343,15.343,0,0,1-1.743,3.5,15.988,15.988,0,0,1-2.874,2.6l-.023.018c-1.98,1.541-4.026,3.132-4.869,5.614-.823,2.415-.159,4.834.484,7.174l.009.031a15.587,15.587,0,0,1,.738,3.868,15.62,15.62,0,0,1-.745,3.887l0,.013c-.643,2.339-1.307,4.758-.486,7.17.845,2.486,2.892,4.078,4.87,5.618l.01.008a16.052,16.052,0,0,1,2.9,2.626,15.382,15.382,0,0,1,1.727,3.479c.915,2.274,1.861,4.624,4.025,6.128,2.126,1.49,4.712,1.628,7.213,1.762h.011a17.459,17.459,0,0,1,4.077.515,16.167,16.167,0,0,1,3.426,1.807c2.141,1.337,4.356,2.721,7.1,2.721s4.948-1.38,7.089-2.715a16.488,16.488,0,0,1,3.443-1.812,17.386,17.386,0,0,1,4.074-.518c2.387-.127,5.093-.271,7.23-1.758,2.157-1.507,3.1-3.851,4.009-6.118a15.282,15.282,0,0,1,1.742-3.5,15.978,15.978,0,0,1,2.888-2.609l.01-.009c1.986-1.542,4.039-3.136,4.867-5.611.825-2.419.161-4.837-.481-7.176l0-.016a15.616,15.616,0,0,1-.745-3.887,15.612,15.612,0,0,1,.746-3.89l0-.01c.643-2.342,1.307-4.759.49-7.157l0-.006c-.835-2.5-2.888-4.088-4.873-5.628l-.01-.008a16.064,16.064,0,0,1-2.9-2.623,15.3,15.3,0,0,1-1.732-3.493c-.913-2.271-1.854-4.613-4.013-6.121-2.135-1.488-4.839-1.631-7.225-1.756a17.391,17.391,0,0,1-4.085-.521,15.892,15.892,0,0,1-3.435-1.8l-.015-.009C-839.6-4983.354-841.812-4984.732-844.539-4984.732Z" transform="translate(882.538 4987)" fill="#2c2c2c" />
            </g>
            <g id="Group_2934" data-name="Group 2934" transform="translate(-863.772 -4968.232)">
              <path id="Path_10687" data-name="Path 10687" d="M-647.5-4732.709a19.256,19.256,0,0,1-19.234-19.234,19.256,19.256,0,0,1,19.234-19.234,19.272,19.272,0,0,1,12.148,4.321,1.238,1.238,0,0,1,.177,1.742,1.238,1.238,0,0,1-1.742.177A16.79,16.79,0,0,0-647.5-4768.7a16.777,16.777,0,0,0-16.758,16.758,16.776,16.776,0,0,0,16.758,16.757,16.776,16.776,0,0,0,16.758-16.757,16.879,16.879,0,0,0-.382-3.578,1.238,1.238,0,0,1,.947-1.473,1.238,1.238,0,0,1,1.473.947,19.349,19.349,0,0,1,.439,4.1A19.256,19.256,0,0,1-647.5-4732.709Z" transform="translate(666.731 4771.177)" fill="#2c2c2c" />
            </g>
            <g id="Group_2935" data-name="Group 2935" transform="translate(-852.059 -4962.339)">
              <path id="Path_10688" data-name="Path 10688" d="M-538.364-4701.309l-6.459-7.557a1.237,1.237,0,0,1,.137-1.745,1.238,1.238,0,0,1,1.746.136l4.9,5.733,17.685-14.18a1.238,1.238,0,0,1,1.74.191,1.238,1.238,0,0,1-.191,1.741Z" transform="translate(545.12 4719.194)" fill="#2c2c2c" />
            </g>
          </g>
        </svg>

        <div class="FeaturesBody">
          <h5 class="FeaturesTittle">High Quality</h5>
          <p class="FeaturesDesc">We receive the orders and craft them from zero you should not be anxious about
            receiving poor quality material in hands because Assignment Guru is commonly known very well for its
            quality.</p>
        </div>
      </div>

      <!-- First Card -->
      <div class="FeaturesCard text-center">
        <svg class="Featuresicon" xmlns="http://www.w3.org/2000/svg" width="76" height="76.003" viewBox="0 0 76 76.003">
          <g id="quality" transform="translate(882.538 4987)">
            <g id="Group_2933" data-name="Group 2933" transform="translate(-882.538 -4987)">
              <path id="Path_10686" data-name="Path 10686" d="M-844.539-4911c-3.39,0-6.111-1.7-8.3-3.066a14.915,14.915,0,0,0-2.9-1.565,16.087,16.087,0,0,0-3.521-.415h-.012c-2.689-.143-5.736-.307-8.39-2.167-2.717-1.889-3.888-4.8-4.83-7.138a14.118,14.118,0,0,0-1.43-2.956,14.792,14.792,0,0,0-2.487-2.21l-.01-.007c-2.032-1.581-4.561-3.548-5.625-6.677-1.046-3.071-.219-6.082.446-8.5l0-.013a14.3,14.3,0,0,0,.664-3.286,14.265,14.265,0,0,0-.658-3.27l-.008-.03c-.665-2.419-1.492-5.43-.444-8.5,1.061-3.124,3.59-5.09,5.622-6.671l.024-.019a14.712,14.712,0,0,0,2.462-2.187,14.009,14.009,0,0,0,1.444-2.977c.937-2.333,2.1-5.238,4.816-7.133,2.668-1.846,5.841-2.019,8.391-2.158a16.143,16.143,0,0,0,3.552-.424,14.873,14.873,0,0,0,2.906-1.565c2.183-1.365,4.9-3.064,8.281-3.064s6.09,1.693,8.272,3.054l.016.01a14.64,14.64,0,0,0,2.9,1.562,16.011,16.011,0,0,0,3.534.421c2.555.135,5.735.3,8.4,2.161,2.714,1.9,3.88,4.8,4.817,7.127a14.05,14.05,0,0,0,1.435,2.972,14.8,14.8,0,0,0,2.486,2.206l.01.008c2.039,1.582,4.578,3.552,5.632,6.7,1.04,3.056.214,6.064-.45,8.481l0,.014a14.3,14.3,0,0,0-.665,3.289,14.316,14.316,0,0,0,.664,3.287l0,.012c.665,2.422,1.491,5.433.443,8.505-1.043,3.12-3.583,5.092-5.623,6.676l-.011.008a14.754,14.754,0,0,0-2.474,2.192,13.95,13.95,0,0,0-1.442,2.976c-.937,2.334-2.1,5.238-4.816,7.134-2.669,1.857-5.85,2.026-8.406,2.162a16.023,16.023,0,0,0-3.516.417,15.156,15.156,0,0,0-2.919,1.571C-838.436-4912.692-841.156-4911-844.539-4911Zm0-73.736c-2.731,0-4.941,1.382-7.078,2.719a15.877,15.877,0,0,1-3.437,1.808,17.474,17.474,0,0,1-4.1.522c-2.388.13-5.088.278-7.225,1.756-2.155,1.505-3.1,3.85-4.006,6.116a15.343,15.343,0,0,1-1.743,3.5,15.988,15.988,0,0,1-2.874,2.6l-.023.018c-1.98,1.541-4.026,3.132-4.869,5.614-.823,2.415-.159,4.834.484,7.174l.009.031a15.587,15.587,0,0,1,.738,3.868,15.62,15.62,0,0,1-.745,3.887l0,.013c-.643,2.339-1.307,4.758-.486,7.17.845,2.486,2.892,4.078,4.87,5.618l.01.008a16.052,16.052,0,0,1,2.9,2.626,15.382,15.382,0,0,1,1.727,3.479c.915,2.274,1.861,4.624,4.025,6.128,2.126,1.49,4.712,1.628,7.213,1.762h.011a17.459,17.459,0,0,1,4.077.515,16.167,16.167,0,0,1,3.426,1.807c2.141,1.337,4.356,2.721,7.1,2.721s4.948-1.38,7.089-2.715a16.488,16.488,0,0,1,3.443-1.812,17.386,17.386,0,0,1,4.074-.518c2.387-.127,5.093-.271,7.23-1.758,2.157-1.507,3.1-3.851,4.009-6.118a15.282,15.282,0,0,1,1.742-3.5,15.978,15.978,0,0,1,2.888-2.609l.01-.009c1.986-1.542,4.039-3.136,4.867-5.611.825-2.419.161-4.837-.481-7.176l0-.016a15.616,15.616,0,0,1-.745-3.887,15.612,15.612,0,0,1,.746-3.89l0-.01c.643-2.342,1.307-4.759.49-7.157l0-.006c-.835-2.5-2.888-4.088-4.873-5.628l-.01-.008a16.064,16.064,0,0,1-2.9-2.623,15.3,15.3,0,0,1-1.732-3.493c-.913-2.271-1.854-4.613-4.013-6.121-2.135-1.488-4.839-1.631-7.225-1.756a17.391,17.391,0,0,1-4.085-.521,15.892,15.892,0,0,1-3.435-1.8l-.015-.009C-839.6-4983.354-841.812-4984.732-844.539-4984.732Z" transform="translate(882.538 4987)" fill="#2c2c2c" />
            </g>
            <g id="Group_2934" data-name="Group 2934" transform="translate(-863.772 -4968.232)">
              <path id="Path_10687" data-name="Path 10687" d="M-647.5-4732.709a19.256,19.256,0,0,1-19.234-19.234,19.256,19.256,0,0,1,19.234-19.234,19.272,19.272,0,0,1,12.148,4.321,1.238,1.238,0,0,1,.177,1.742,1.238,1.238,0,0,1-1.742.177A16.79,16.79,0,0,0-647.5-4768.7a16.777,16.777,0,0,0-16.758,16.758,16.776,16.776,0,0,0,16.758,16.757,16.776,16.776,0,0,0,16.758-16.757,16.879,16.879,0,0,0-.382-3.578,1.238,1.238,0,0,1,.947-1.473,1.238,1.238,0,0,1,1.473.947,19.349,19.349,0,0,1,.439,4.1A19.256,19.256,0,0,1-647.5-4732.709Z" transform="translate(666.731 4771.177)" fill="#2c2c2c" />
            </g>
            <g id="Group_2935" data-name="Group 2935" transform="translate(-852.059 -4962.339)">
              <path id="Path_10688" data-name="Path 10688" d="M-538.364-4701.309l-6.459-7.557a1.237,1.237,0,0,1,.137-1.745,1.238,1.238,0,0,1,1.746.136l4.9,5.733,17.685-14.18a1.238,1.238,0,0,1,1.74.191,1.238,1.238,0,0,1-.191,1.741Z" transform="translate(545.12 4719.194)" fill="#2c2c2c" />
            </g>
          </g>
        </svg>

        <div class="FeaturesBody">
          <h5 class="FeaturesTittle">High Quality</h5>
          <p class="FeaturesDesc">We receive the orders and craft them from zero you should not be anxious about
            receiving poor quality material in hands because Assignment Guru is commonly known very well for its
            quality.</p>
        </div>
      </div>

      <!-- First Card -->
      <div class="FeaturesCard text-center">
        <svg class="Featuresicon" xmlns="http://www.w3.org/2000/svg" width="76" height="76.003" viewBox="0 0 76 76.003">
          <g id="quality" transform="translate(882.538 4987)">
            <g id="Group_2933" data-name="Group 2933" transform="translate(-882.538 -4987)">
              <path id="Path_10686" data-name="Path 10686" d="M-844.539-4911c-3.39,0-6.111-1.7-8.3-3.066a14.915,14.915,0,0,0-2.9-1.565,16.087,16.087,0,0,0-3.521-.415h-.012c-2.689-.143-5.736-.307-8.39-2.167-2.717-1.889-3.888-4.8-4.83-7.138a14.118,14.118,0,0,0-1.43-2.956,14.792,14.792,0,0,0-2.487-2.21l-.01-.007c-2.032-1.581-4.561-3.548-5.625-6.677-1.046-3.071-.219-6.082.446-8.5l0-.013a14.3,14.3,0,0,0,.664-3.286,14.265,14.265,0,0,0-.658-3.27l-.008-.03c-.665-2.419-1.492-5.43-.444-8.5,1.061-3.124,3.59-5.09,5.622-6.671l.024-.019a14.712,14.712,0,0,0,2.462-2.187,14.009,14.009,0,0,0,1.444-2.977c.937-2.333,2.1-5.238,4.816-7.133,2.668-1.846,5.841-2.019,8.391-2.158a16.143,16.143,0,0,0,3.552-.424,14.873,14.873,0,0,0,2.906-1.565c2.183-1.365,4.9-3.064,8.281-3.064s6.09,1.693,8.272,3.054l.016.01a14.64,14.64,0,0,0,2.9,1.562,16.011,16.011,0,0,0,3.534.421c2.555.135,5.735.3,8.4,2.161,2.714,1.9,3.88,4.8,4.817,7.127a14.05,14.05,0,0,0,1.435,2.972,14.8,14.8,0,0,0,2.486,2.206l.01.008c2.039,1.582,4.578,3.552,5.632,6.7,1.04,3.056.214,6.064-.45,8.481l0,.014a14.3,14.3,0,0,0-.665,3.289,14.316,14.316,0,0,0,.664,3.287l0,.012c.665,2.422,1.491,5.433.443,8.505-1.043,3.12-3.583,5.092-5.623,6.676l-.011.008a14.754,14.754,0,0,0-2.474,2.192,13.95,13.95,0,0,0-1.442,2.976c-.937,2.334-2.1,5.238-4.816,7.134-2.669,1.857-5.85,2.026-8.406,2.162a16.023,16.023,0,0,0-3.516.417,15.156,15.156,0,0,0-2.919,1.571C-838.436-4912.692-841.156-4911-844.539-4911Zm0-73.736c-2.731,0-4.941,1.382-7.078,2.719a15.877,15.877,0,0,1-3.437,1.808,17.474,17.474,0,0,1-4.1.522c-2.388.13-5.088.278-7.225,1.756-2.155,1.505-3.1,3.85-4.006,6.116a15.343,15.343,0,0,1-1.743,3.5,15.988,15.988,0,0,1-2.874,2.6l-.023.018c-1.98,1.541-4.026,3.132-4.869,5.614-.823,2.415-.159,4.834.484,7.174l.009.031a15.587,15.587,0,0,1,.738,3.868,15.62,15.62,0,0,1-.745,3.887l0,.013c-.643,2.339-1.307,4.758-.486,7.17.845,2.486,2.892,4.078,4.87,5.618l.01.008a16.052,16.052,0,0,1,2.9,2.626,15.382,15.382,0,0,1,1.727,3.479c.915,2.274,1.861,4.624,4.025,6.128,2.126,1.49,4.712,1.628,7.213,1.762h.011a17.459,17.459,0,0,1,4.077.515,16.167,16.167,0,0,1,3.426,1.807c2.141,1.337,4.356,2.721,7.1,2.721s4.948-1.38,7.089-2.715a16.488,16.488,0,0,1,3.443-1.812,17.386,17.386,0,0,1,4.074-.518c2.387-.127,5.093-.271,7.23-1.758,2.157-1.507,3.1-3.851,4.009-6.118a15.282,15.282,0,0,1,1.742-3.5,15.978,15.978,0,0,1,2.888-2.609l.01-.009c1.986-1.542,4.039-3.136,4.867-5.611.825-2.419.161-4.837-.481-7.176l0-.016a15.616,15.616,0,0,1-.745-3.887,15.612,15.612,0,0,1,.746-3.89l0-.01c.643-2.342,1.307-4.759.49-7.157l0-.006c-.835-2.5-2.888-4.088-4.873-5.628l-.01-.008a16.064,16.064,0,0,1-2.9-2.623,15.3,15.3,0,0,1-1.732-3.493c-.913-2.271-1.854-4.613-4.013-6.121-2.135-1.488-4.839-1.631-7.225-1.756a17.391,17.391,0,0,1-4.085-.521,15.892,15.892,0,0,1-3.435-1.8l-.015-.009C-839.6-4983.354-841.812-4984.732-844.539-4984.732Z" transform="translate(882.538 4987)" fill="#2c2c2c" />
            </g>
            <g id="Group_2934" data-name="Group 2934" transform="translate(-863.772 -4968.232)">
              <path id="Path_10687" data-name="Path 10687" d="M-647.5-4732.709a19.256,19.256,0,0,1-19.234-19.234,19.256,19.256,0,0,1,19.234-19.234,19.272,19.272,0,0,1,12.148,4.321,1.238,1.238,0,0,1,.177,1.742,1.238,1.238,0,0,1-1.742.177A16.79,16.79,0,0,0-647.5-4768.7a16.777,16.777,0,0,0-16.758,16.758,16.776,16.776,0,0,0,16.758,16.757,16.776,16.776,0,0,0,16.758-16.757,16.879,16.879,0,0,0-.382-3.578,1.238,1.238,0,0,1,.947-1.473,1.238,1.238,0,0,1,1.473.947,19.349,19.349,0,0,1,.439,4.1A19.256,19.256,0,0,1-647.5-4732.709Z" transform="translate(666.731 4771.177)" fill="#2c2c2c" />
            </g>
            <g id="Group_2935" data-name="Group 2935" transform="translate(-852.059 -4962.339)">
              <path id="Path_10688" data-name="Path 10688" d="M-538.364-4701.309l-6.459-7.557a1.237,1.237,0,0,1,.137-1.745,1.238,1.238,0,0,1,1.746.136l4.9,5.733,17.685-14.18a1.238,1.238,0,0,1,1.74.191,1.238,1.238,0,0,1-.191,1.741Z" transform="translate(545.12 4719.194)" fill="#2c2c2c" />
            </g>
          </g>
        </svg>

        <div class="FeaturesBody">
          <h5 class="FeaturesTittle">High Quality</h5>
          <p class="FeaturesDesc">We receive the orders and craft them from zero you should not be anxious about
            receiving poor quality material in hands because Assignment Guru is commonly known very well for its
            quality.</p>
        </div>
      </div>


      <div class="FeaturesCard text-center">
        <svg class="Featuresicon" xmlns="http://www.w3.org/2000/svg" width="76" height="76.003" viewBox="0 0 76 76.003">
          <g id="quality" transform="translate(882.538 4987)">
            <g id="Group_2933" data-name="Group 2933" transform="translate(-882.538 -4987)">
              <path id="Path_10686" data-name="Path 10686" d="M-844.539-4911c-3.39,0-6.111-1.7-8.3-3.066a14.915,14.915,0,0,0-2.9-1.565,16.087,16.087,0,0,0-3.521-.415h-.012c-2.689-.143-5.736-.307-8.39-2.167-2.717-1.889-3.888-4.8-4.83-7.138a14.118,14.118,0,0,0-1.43-2.956,14.792,14.792,0,0,0-2.487-2.21l-.01-.007c-2.032-1.581-4.561-3.548-5.625-6.677-1.046-3.071-.219-6.082.446-8.5l0-.013a14.3,14.3,0,0,0,.664-3.286,14.265,14.265,0,0,0-.658-3.27l-.008-.03c-.665-2.419-1.492-5.43-.444-8.5,1.061-3.124,3.59-5.09,5.622-6.671l.024-.019a14.712,14.712,0,0,0,2.462-2.187,14.009,14.009,0,0,0,1.444-2.977c.937-2.333,2.1-5.238,4.816-7.133,2.668-1.846,5.841-2.019,8.391-2.158a16.143,16.143,0,0,0,3.552-.424,14.873,14.873,0,0,0,2.906-1.565c2.183-1.365,4.9-3.064,8.281-3.064s6.09,1.693,8.272,3.054l.016.01a14.64,14.64,0,0,0,2.9,1.562,16.011,16.011,0,0,0,3.534.421c2.555.135,5.735.3,8.4,2.161,2.714,1.9,3.88,4.8,4.817,7.127a14.05,14.05,0,0,0,1.435,2.972,14.8,14.8,0,0,0,2.486,2.206l.01.008c2.039,1.582,4.578,3.552,5.632,6.7,1.04,3.056.214,6.064-.45,8.481l0,.014a14.3,14.3,0,0,0-.665,3.289,14.316,14.316,0,0,0,.664,3.287l0,.012c.665,2.422,1.491,5.433.443,8.505-1.043,3.12-3.583,5.092-5.623,6.676l-.011.008a14.754,14.754,0,0,0-2.474,2.192,13.95,13.95,0,0,0-1.442,2.976c-.937,2.334-2.1,5.238-4.816,7.134-2.669,1.857-5.85,2.026-8.406,2.162a16.023,16.023,0,0,0-3.516.417,15.156,15.156,0,0,0-2.919,1.571C-838.436-4912.692-841.156-4911-844.539-4911Zm0-73.736c-2.731,0-4.941,1.382-7.078,2.719a15.877,15.877,0,0,1-3.437,1.808,17.474,17.474,0,0,1-4.1.522c-2.388.13-5.088.278-7.225,1.756-2.155,1.505-3.1,3.85-4.006,6.116a15.343,15.343,0,0,1-1.743,3.5,15.988,15.988,0,0,1-2.874,2.6l-.023.018c-1.98,1.541-4.026,3.132-4.869,5.614-.823,2.415-.159,4.834.484,7.174l.009.031a15.587,15.587,0,0,1,.738,3.868,15.62,15.62,0,0,1-.745,3.887l0,.013c-.643,2.339-1.307,4.758-.486,7.17.845,2.486,2.892,4.078,4.87,5.618l.01.008a16.052,16.052,0,0,1,2.9,2.626,15.382,15.382,0,0,1,1.727,3.479c.915,2.274,1.861,4.624,4.025,6.128,2.126,1.49,4.712,1.628,7.213,1.762h.011a17.459,17.459,0,0,1,4.077.515,16.167,16.167,0,0,1,3.426,1.807c2.141,1.337,4.356,2.721,7.1,2.721s4.948-1.38,7.089-2.715a16.488,16.488,0,0,1,3.443-1.812,17.386,17.386,0,0,1,4.074-.518c2.387-.127,5.093-.271,7.23-1.758,2.157-1.507,3.1-3.851,4.009-6.118a15.282,15.282,0,0,1,1.742-3.5,15.978,15.978,0,0,1,2.888-2.609l.01-.009c1.986-1.542,4.039-3.136,4.867-5.611.825-2.419.161-4.837-.481-7.176l0-.016a15.616,15.616,0,0,1-.745-3.887,15.612,15.612,0,0,1,.746-3.89l0-.01c.643-2.342,1.307-4.759.49-7.157l0-.006c-.835-2.5-2.888-4.088-4.873-5.628l-.01-.008a16.064,16.064,0,0,1-2.9-2.623,15.3,15.3,0,0,1-1.732-3.493c-.913-2.271-1.854-4.613-4.013-6.121-2.135-1.488-4.839-1.631-7.225-1.756a17.391,17.391,0,0,1-4.085-.521,15.892,15.892,0,0,1-3.435-1.8l-.015-.009C-839.6-4983.354-841.812-4984.732-844.539-4984.732Z" transform="translate(882.538 4987)" fill="#2c2c2c" />
            </g>
            <g id="Group_2934" data-name="Group 2934" transform="translate(-863.772 -4968.232)">
              <path id="Path_10687" data-name="Path 10687" d="M-647.5-4732.709a19.256,19.256,0,0,1-19.234-19.234,19.256,19.256,0,0,1,19.234-19.234,19.272,19.272,0,0,1,12.148,4.321,1.238,1.238,0,0,1,.177,1.742,1.238,1.238,0,0,1-1.742.177A16.79,16.79,0,0,0-647.5-4768.7a16.777,16.777,0,0,0-16.758,16.758,16.776,16.776,0,0,0,16.758,16.757,16.776,16.776,0,0,0,16.758-16.757,16.879,16.879,0,0,0-.382-3.578,1.238,1.238,0,0,1,.947-1.473,1.238,1.238,0,0,1,1.473.947,19.349,19.349,0,0,1,.439,4.1A19.256,19.256,0,0,1-647.5-4732.709Z" transform="translate(666.731 4771.177)" fill="#2c2c2c" />
            </g>
            <g id="Group_2935" data-name="Group 2935" transform="translate(-852.059 -4962.339)">
              <path id="Path_10688" data-name="Path 10688" d="M-538.364-4701.309l-6.459-7.557a1.237,1.237,0,0,1,.137-1.745,1.238,1.238,0,0,1,1.746.136l4.9,5.733,17.685-14.18a1.238,1.238,0,0,1,1.74.191,1.238,1.238,0,0,1-.191,1.741Z" transform="translate(545.12 4719.194)" fill="#2c2c2c" />
            </g>
          </g>
        </svg>

        <div class="FeaturesBody">
          <h5 class="FeaturesTittle">High Quality</h5>
          <p class="FeaturesDesc">We receive the orders and craft them from zero you should not be anxious about
            receiving poor quality material in hands because Assignment Guru is commonly known very well for its
            quality.</p>
        </div>
      </div>

      <div class="FeaturesCard text-center">
        <svg class="Featuresicon" xmlns="http://www.w3.org/2000/svg" width="76" height="76.003" viewBox="0 0 76 76.003">
          <g id="quality" transform="translate(882.538 4987)">
            <g id="Group_2933" data-name="Group 2933" transform="translate(-882.538 -4987)">
              <path id="Path_10686" data-name="Path 10686" d="M-844.539-4911c-3.39,0-6.111-1.7-8.3-3.066a14.915,14.915,0,0,0-2.9-1.565,16.087,16.087,0,0,0-3.521-.415h-.012c-2.689-.143-5.736-.307-8.39-2.167-2.717-1.889-3.888-4.8-4.83-7.138a14.118,14.118,0,0,0-1.43-2.956,14.792,14.792,0,0,0-2.487-2.21l-.01-.007c-2.032-1.581-4.561-3.548-5.625-6.677-1.046-3.071-.219-6.082.446-8.5l0-.013a14.3,14.3,0,0,0,.664-3.286,14.265,14.265,0,0,0-.658-3.27l-.008-.03c-.665-2.419-1.492-5.43-.444-8.5,1.061-3.124,3.59-5.09,5.622-6.671l.024-.019a14.712,14.712,0,0,0,2.462-2.187,14.009,14.009,0,0,0,1.444-2.977c.937-2.333,2.1-5.238,4.816-7.133,2.668-1.846,5.841-2.019,8.391-2.158a16.143,16.143,0,0,0,3.552-.424,14.873,14.873,0,0,0,2.906-1.565c2.183-1.365,4.9-3.064,8.281-3.064s6.09,1.693,8.272,3.054l.016.01a14.64,14.64,0,0,0,2.9,1.562,16.011,16.011,0,0,0,3.534.421c2.555.135,5.735.3,8.4,2.161,2.714,1.9,3.88,4.8,4.817,7.127a14.05,14.05,0,0,0,1.435,2.972,14.8,14.8,0,0,0,2.486,2.206l.01.008c2.039,1.582,4.578,3.552,5.632,6.7,1.04,3.056.214,6.064-.45,8.481l0,.014a14.3,14.3,0,0,0-.665,3.289,14.316,14.316,0,0,0,.664,3.287l0,.012c.665,2.422,1.491,5.433.443,8.505-1.043,3.12-3.583,5.092-5.623,6.676l-.011.008a14.754,14.754,0,0,0-2.474,2.192,13.95,13.95,0,0,0-1.442,2.976c-.937,2.334-2.1,5.238-4.816,7.134-2.669,1.857-5.85,2.026-8.406,2.162a16.023,16.023,0,0,0-3.516.417,15.156,15.156,0,0,0-2.919,1.571C-838.436-4912.692-841.156-4911-844.539-4911Zm0-73.736c-2.731,0-4.941,1.382-7.078,2.719a15.877,15.877,0,0,1-3.437,1.808,17.474,17.474,0,0,1-4.1.522c-2.388.13-5.088.278-7.225,1.756-2.155,1.505-3.1,3.85-4.006,6.116a15.343,15.343,0,0,1-1.743,3.5,15.988,15.988,0,0,1-2.874,2.6l-.023.018c-1.98,1.541-4.026,3.132-4.869,5.614-.823,2.415-.159,4.834.484,7.174l.009.031a15.587,15.587,0,0,1,.738,3.868,15.62,15.62,0,0,1-.745,3.887l0,.013c-.643,2.339-1.307,4.758-.486,7.17.845,2.486,2.892,4.078,4.87,5.618l.01.008a16.052,16.052,0,0,1,2.9,2.626,15.382,15.382,0,0,1,1.727,3.479c.915,2.274,1.861,4.624,4.025,6.128,2.126,1.49,4.712,1.628,7.213,1.762h.011a17.459,17.459,0,0,1,4.077.515,16.167,16.167,0,0,1,3.426,1.807c2.141,1.337,4.356,2.721,7.1,2.721s4.948-1.38,7.089-2.715a16.488,16.488,0,0,1,3.443-1.812,17.386,17.386,0,0,1,4.074-.518c2.387-.127,5.093-.271,7.23-1.758,2.157-1.507,3.1-3.851,4.009-6.118a15.282,15.282,0,0,1,1.742-3.5,15.978,15.978,0,0,1,2.888-2.609l.01-.009c1.986-1.542,4.039-3.136,4.867-5.611.825-2.419.161-4.837-.481-7.176l0-.016a15.616,15.616,0,0,1-.745-3.887,15.612,15.612,0,0,1,.746-3.89l0-.01c.643-2.342,1.307-4.759.49-7.157l0-.006c-.835-2.5-2.888-4.088-4.873-5.628l-.01-.008a16.064,16.064,0,0,1-2.9-2.623,15.3,15.3,0,0,1-1.732-3.493c-.913-2.271-1.854-4.613-4.013-6.121-2.135-1.488-4.839-1.631-7.225-1.756a17.391,17.391,0,0,1-4.085-.521,15.892,15.892,0,0,1-3.435-1.8l-.015-.009C-839.6-4983.354-841.812-4984.732-844.539-4984.732Z" transform="translate(882.538 4987)" fill="#2c2c2c" />
            </g>
            <g id="Group_2934" data-name="Group 2934" transform="translate(-863.772 -4968.232)">
              <path id="Path_10687" data-name="Path 10687" d="M-647.5-4732.709a19.256,19.256,0,0,1-19.234-19.234,19.256,19.256,0,0,1,19.234-19.234,19.272,19.272,0,0,1,12.148,4.321,1.238,1.238,0,0,1,.177,1.742,1.238,1.238,0,0,1-1.742.177A16.79,16.79,0,0,0-647.5-4768.7a16.777,16.777,0,0,0-16.758,16.758,16.776,16.776,0,0,0,16.758,16.757,16.776,16.776,0,0,0,16.758-16.757,16.879,16.879,0,0,0-.382-3.578,1.238,1.238,0,0,1,.947-1.473,1.238,1.238,0,0,1,1.473.947,19.349,19.349,0,0,1,.439,4.1A19.256,19.256,0,0,1-647.5-4732.709Z" transform="translate(666.731 4771.177)" fill="#2c2c2c" />
            </g>
            <g id="Group_2935" data-name="Group 2935" transform="translate(-852.059 -4962.339)">
              <path id="Path_10688" data-name="Path 10688" d="M-538.364-4701.309l-6.459-7.557a1.237,1.237,0,0,1,.137-1.745,1.238,1.238,0,0,1,1.746.136l4.9,5.733,17.685-14.18a1.238,1.238,0,0,1,1.74.191,1.238,1.238,0,0,1-.191,1.741Z" transform="translate(545.12 4719.194)" fill="#2c2c2c" />
            </g>
          </g>
        </svg>

        <div class="FeaturesBody">
          <h5 class="FeaturesTittle">High Quality</h5>
          <p class="FeaturesDesc">We receive the orders and craft them from zero you should not be anxious about
            receiving poor quality material in hands because Assignment Guru is commonly known very well for its
            quality.</p>
        </div>
      </div>





    </div>

    <br>
    <br>

    <!-- #Start Reviews Slider banner code here ======= -->
    <h5 class="text-center StudentsRTittle1" style="text-transform: capitalize;">What Students Say About MyAssignmentHelp</h5>
    <p class="text-center StudentsRTittle2">Glimpse into what thousands of students have experienced.</p>
    <br>

    <div class="container SliderMainContainer">
      <div class="slide-container">

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>

        <div class="slide-image">

          <div class="SliderCard">

            <ul class="SliderRank">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>

            <div class="SliderBody">

              <h3 class="text-left sliderTittle">Reviews User name</h3>
              <p id="sliderday">Home work 2 pages deline 3 days</p>
              <p class="text-start Sliderdesc">accusantium quasi qui cum voluptas beatae nobis harum. cum voluptas
                beatae nobis harum.</p>


              <p id="SliderDate">Date 19-March-2024</p>

            </div>

          </div>

        </div>






      </div>
    </div>

    <br>

    <!--#Start large Two Card Scroll Section ======= -->
    <section id="featured-services" class="featured-services scrollMainsection">
      <div class="container">
        <h5 class="text-center LargeCardTittle">What Students Say About MyAssignmentHelp</h5>
        <p class="text-center LargeCardsSubTittle">Glimpse into what thousands of students have experienced.</p>


        <div class="row scrollsection mt-5">

          <div class="col-md-6 ">

            <div class="card">
              <h1 class="WritingTittle text-dark">Let Us Help You With Nursing Assignment Help UK</h1>
              <br>
              <p class="Writingdesc">Medical is a very difficult field to study students seldom get any time out to do
                other imperative duties in hand because they are excessively occupied in all corners of life with
                education being their utmost priority they are given tests and projects to prepare themselves for or to
                prepare for themselves nursing assignments are like an addition to their already existing busy life
                which makes them question can I have someone to “Do my nursing assignment?” but you do not have to
                pressure yourself out anymore over because for years our service has been writing for students.
                to:</p>
              <br>

              <p>Whether you are stuck with a narrow topic or having a tough time acquiring strong references, simply
                convey your pain points and allow our professional writers to take care of the entire challenge. We know
                how to develop a narrative story and use sheer creativity to make your paper stand out from the crowd.
                From following a concrete structure to guiding the reader into your story and signifying the aim of the
                story to justifying the story climax – we leave no stone unturned to add a dash of excellence to each
                paper we produce.</p>

              <br>
              <h1 class="WritingTittle text-dark"> You Can Trust Us With Complex Challenges</h1>
              <br>
              <p class="Writingdesc"> At Assignment Guru we have a great team of incredible nursing assignment writers
                who are Ph.D. and master degrees holder from oxford and university of Cambridge when we say we have
                professional academic writers we are not just saying they are well versed with English and grammar and
                are apparently best with writing skills but we tend to ascribe that they are real time nurses working
                under our surveillance and each of them have ace in the following: </p>

              <br>

              <p>Advanced practice registered nurses (APRNS), clinical nurse specialists (CNSs), certified nurse
                midwives (CNMs) and certified registered nurse anesthetists (CRNAS) </p>

              <p>So, it does not matter if your topic of nursing is too complicated you can always trust our nursing
                assignment assistance service with all aspects of medical writing. Each of our nursing assignment writer
                is qualified and well known of their job.</p>


              <div class="CenterButton">

                <br>
                <br>
                <a href="" class="WritingButton">Read Now</a>
              </div>

              <br>
            </div>

          </div>

          <div class="col-md-6 ">

            <div class="card">
              <h1 class="WritingTittle text-dark"> Nursing Assignment Writing Service in UK </h1>
              <br>
              <p class="Writingdesc">We have diverse range of writers who cover all aspects of writing when you will
                place your order make sure to add all exact details in regards of your project and do not miss any major
                factor that goes into crafting of paper because our writers before start making a order they go through
                scrupulously the details of order and understand how they are going to process the writing they are
                creative and will always deliver the best product because they are constantly brainstorming ideas into
                their writing to come up with the best authentic piece of result as they go through different reliable
                sources libraries to stockpile the best data to put into the assignment when they are done with
                completing the order the finish order goes through quality check where they make sure the end material
                marks requirements and is free of any errors.</p>
              <br>


              <br>
              <h1 class="WritingTittle text-dark">The Best Nursing Assignment Help UK</h1>
              <br>
              <p class="Writingdesc">It does not matter if you want someone to proofread or edit your self-written
                project we at Assignment Guru also provide the Editing and proofreading service as well in case you only
                want to hire someone who can carefully read through your project and correct some mistakes that were
                made unintentionally in the writing process or want someone to edit some corners of your assignment if
                it lacks quality we do it all.!</p>

              <br>

              <br>
              <h1 class="WritingTittle text-dark"> Fetch A+ Grade With Assignment Guru Help</h1>
              <br>
              <p class="Writingdesc">With Assignment Guru you can easily avail an A in your academics because our
                service has aided students internationally and from UK just do not think too much and simply go for it
                reach to out us with response “do my nursing assignment” and we will get right up to you with our best
                writers getting an A+ in nursing is something many students dreams about allow us to make this dream
                come true.</p>

              <br>
              <br>
              <br>

              <div class="CenterButton">

                <a href="" class="WritingButton">Read Now</a>
              </div>


              <br>
              <br>
            </div>

          </div>



        </div>

      </div>
    </section>


    <!--#Start Reliable Assignment  Short Banner -->
    <div class="SubjectContainer">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mt-4 ReliableHeader">
            <h4 class="ml-2">Pay less & gain more</h4>
            <p>We provide academic writing help service for all of these matters and that too at affordable price with 40% off, if you place your order now.</p>


            <br>
            <div class="col-md-5 mt-3 dropdownList" style="display: none;">

              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="text-center">Is account registration required? </span><i class="fa fa-arrow-down "></i></a>

                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body moBilbeSubjectList">

                      <ul class="text-start">
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>

                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                        <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>

                      </ul>
                    </div>
                  </div>
                </div>


              </div>
            </div>

            <div class="row">
              <div class="col-md-6 SubjectList">



                <ul class="text-start " style="list-style: none;">
                  <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Business Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">Computer Science Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">CIPD Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">Finance Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">Mathematics Assignment</span></li>

                </ul>
              </div>

              <div class="col-md-6 SubjectList">

                <ul class="text-start " style="list-style: none;">
                  <li class="mt-4 text-white"><i class="fa-solid fa-star "></i><span class="ml-1">Law Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">Management Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">HND Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">Nursing Assignment</span></li>
                  <li class="mt-4 text-white"><i class="fa-solid fa-star"></i><span class="ml-1">Project Management Assignment</span></li>

                </ul>
              </div>


            </div>




          </div>

          <div class="col-md-5">
            <div class="card SubjectCard" style="padding-right: 20px;">
              <h5 class="text-center mt-3 text-bold">Attractive Freebies</h5>
              <br>


              <span class="d-flex justify-content-between align-items-center">
                <ul>
                  <li><i class="fa-regular fa-square-check"></i>Outline Summary</li>
                </ul>
                <ul>
                  <li class="mr-4"><span style="text-decoration: line-through;">$14.99</span> <span class="ms-2 text-danger">FREE</span></li>


                </ul>
              </span>

              <span class="d-flex justify-content-between align-items-center">
                <ul>
                  <li><i class="fa-regular fa-square-check"></i> Plagiarism Report</li>
                </ul>
                <ul>
                  <li class="mr-4"><span style="text-decoration: line-through;">$14.99</span> <span class="ms-2 text-danger">FREE</span></li>


                </ul>
              </span>
              <span class="d-flex justify-content-between align-items-center">
                <ul>
                  <li><i class="fa-regular fa-square-check"></i> Plagiarism Report</li>
                </ul>
                <ul>
                  <li class="mr-4"><span style="text-decoration: line-through;">$14.99</span> <span class="ms-2 text-danger">FREE</span></li>


                </ul>
              </span>
              <span class="d-flex justify-content-between align-items-center">
                <ul>
                  <li><i class="fa-regular fa-square-check"></i> Plagiarism Report</li>
                </ul>
                <ul>
                  <li class="mr-4"><span style="text-decoration: line-through;">$14.99</span> <span class="ms-2 text-danger">FREE</span></li>


                </ul>
              </span>
              <span class="d-flex justify-content-between align-items-center">
                <ul>
                  <li><i class="fa-regular fa-square-check"></i> Plagiarism Report</li>
                </ul>
                <ul>
                  <li class="mr-4"><span style="text-decoration: line-through;">$14.99</span> <span class="ms-2 text-danger">FREE</span></li>
                </ul>
              </span>
              <br>
              <p class="text-center">Get all those features for FREE</p>

              <a class="text-center SubjetcButton" href="" style="justify-content: center;" class=""><span class="Subjetca">ORDER NOW </span></a>
              <br>
              <br>


            </div>
          </div>



        </div>
      </div>

    </div>
    <!--#SEnd Reliable Assignment  Short Banner -->


    <!--Frequently Asked Questions Section -->
    <section class="container my-5" id="maincontent">
      <h3 class="text-center">Frequently Asked Questions</h3>

      <section id="accordion">

        <div class="row">

          <div class="col-md-6 mt-3 ">
            <a class="py-3 d-block faqcard h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-1" aria-expanded="false" data-toggle="collapse" href="#faq-1" data-parent="#accordion" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3 faqtittle">
                  Is Assignment Guru nursing assignment help legit?
                </h2>
                <div class="position-absolute faqIcon top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus me-2" id="iconhover"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-1" style="">
              <div class=" card-body faqbody border-0 p-0">
                <p>Our service has always been one of the best in academic writing industry having team of writers whom
                  we can trust actually makes our service legit and best we also provide full confidentiality.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <a class="py-3 d-block h-100 w-100 faqcard position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-2" aria-expanded="false" data-toggle="collapse" href="#faq-2" data-parent="#accordion" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3 faqtittle">
                  How can I get help with nursing assignment?
                </h2>
                <div class="position-absolute faqIcon top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus me-2" id="iconhover"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-2" style="">
              <div class=" card-body faqbody border-0 p-0">
                <p>At Assignment Guru you can be provided with top nursing assignment help all you need to do is place
                  your order by filling in all the precise details and selecting the writer of your choice for further
                  in detail queries please contact Assignment Guru customer care service department.</p>
              </div>
            </div>
          </div>



          <div class="col-md-6 mt-3">
            <a class="py-3 d-block h-100 w-100 faqcard position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-3" aria-expanded="false" data-toggle="collapse" href="#faq-3" data-parent="#accordion" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3 faqtittle">
                  What is the best Assignment Helper?
                </h2>
                <div class="position-absolute faqIcon top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus me-2" id="iconhover"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-3" style="">
              <div class=" card-body faqbody border-0 p-0">
                <p>There are number of services and people on the internet you will come across to but assignment Guru
                  gives full guarantee of plagiarism free error free creative and original content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <a class="py-3 d-block faqcard h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-4" aria-expanded="false" data-toggle="collapse" href="#faq-4" data-parent="#accordion" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3 faqtittle">
                  Can I pay someone to do my nursing assignment help?
                </h2>
                <div class="position-absolute faqIcon top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus me-2 iconhover" id="iconhover"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-4" style="">
              <div class=" card-body faqbody border-0 p-0">
                <p>Yes, you can pay Assignment Guru to do your nursing assignment we will be more than happy to help you
                  out regardless of which topic or level of complexity.</p>
              </div>
            </div>
          </div>



          <div class="col-md-6 mt-3">
            <a class="py-3 d-block faqcard h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-4" aria-expanded="false" data-toggle="collapse" href="#faq-5" data-parent="#accordion" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3 faqtittle">
                  Is your assignment for nursing cheap?
                </h2>
                <div class="position-absolute faqIcon top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus me-2 iconhover" id="iconhover"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-5" style="">
              <div class=" card-body faqbody border-0 p-0">
                <p>Yes our service is for students and we understand their access to limited sources and financial
                  independency so o we have kept the prices low but does not compromise a bit on quality so you can
                  expect great material from us.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <a class="py-3 d-block faqcard h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-4" aria-expanded="false" data-toggle="collapse" href="#faq-6" data-parent="#accordion" role="button">
              <div class="position-relative">
                <h2 class="h4 m-0 pr-3 faqtittle">
                  How quickly can I receive my nursing Assignment?
                </h2>
                <div class="position-absolute faqIcon top-0 right-0 h-100 d-flex align-items-center">
                  <i class="fa fa-plus me-2 iconhover" id="iconhover"></i>
                </div>
              </div>
            </a>
            <div class="collapse" id="faq-6" style="">
              <div class=" card-body faqbody border-0 p-0">
                <p>It depends upon many things like the complexity of topic how much extensive the topic is or the word
                  count but most importantly it depends upon customers mentioned deadline.</p>
              </div>
            </div>
          </div>

        </div>


      </section>
    </section>




  </main><!-- End #main -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>