<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<!-- https://codepen.io/rogie/pen/nwPrWV -->
<style>
    /*#Start Review 3 Reviews Card */
    .ReviewinnerSection {
        color: black;
        height: 15rem !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        height: 10rem;
        padding-right: 0.5rem;
        padding-left: 0.5rem;
        font-size: 1.3rem;
        font-weight: 400;
    }

    .Reviewbutton {
        background-color: orange;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-right: 0.4rem;
        padding-left: 0.4rem;
        border-radius: 8px;
        color: white;
        position: relative;
        top: 0.2rem !important;
    }

    .Reviewbutton:hover {
        text-decoration: none;
        color: black;
        border: 1px solid black;
        background-color: white;
    }


    .ReviewGrid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-gap: 1rem;
        padding-right: 3rem;
        padding-left: 3rem;
        padding-top: 5rem;
        padding-bottom: 5rem;
        text-align: center;
    }

    @media (min-width: 600px) {
        .ReviewGrid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    @media (min-width: 900px) {
        .ReviewGrid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .ReviewinnerSection ul {
        list-style: none;
        position: relative;
        top: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }


    /*#End Review 3 Reviews Card */






    /*#Start Review page Contact Form */


    .star {
        color: gray;
        cursor: pointer;
    }

    .ReviewFormContainer {

        border-radius: 5px;
        padding-top: 2rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .ReviewFormContainer h4 {

        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        background-color: orange;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-weight: bold;
        border-top-right-radius: 2rem;
        border-bottom-left-radius: 2rem;
    }

    .ReviewFormContainer form button {

        background-color: orange;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border: none;
        border-radius: 5px;
        padding-top: 0.3rem;
        padding-left: 3rem;
        padding-right: 3rem;
        padding-bottom: 0.3rem;
    }

    .ReviewFormContainer form input,
    textarea {

        background-color: white !important;
        height: 6.9vh;
    }

    .ReviewformButtom {
        display: flex;
        justify-content: center;
        position: relative;
        height: 68px;
        bottom: 1.5rem;
    }

    /*#End Review page Contact Form */
</style>

<body>

    <br>
    <br>

    <!-- /*#Start Review 3 Reviews Card */ -->
    <div class="ReviewGrid">

        <div class="ReviewinnerSection" id="ReviewSectionone">
            <br>

            <h5 style="font-size: 70px;" class="mt-4">5.6 <span style="position:relative; right: 1.3rem;">K</span></h5>
            <p class="mr-4">Global Rating</p>

        </div>
        <div class="ReviewinnerSection" id="ReviewSectiontwo">
            <br>

            <ul>
                <li><i class="fa fa-star text-success"></i></li>
                <li><i class="fa fa-star text-success"></i></li>
                <li><i class="fa fa-star text-success"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <p class="text-black mt-5">Overall rating: 4.1 out of 5 based on 94 reviews.</p>

        </div>
        <div class="ReviewinnerSection" id="ReviewSectionthree">
            <br>
            <p class="text-black mt-4">Your honest feedback is important to us. Please share it with us.</p>

            <a href="#ReviewFormContainer" class="Reviewbutton">Post your Review</a>
        </div>
    </div>
    <!-- /*#End Review 3 Reviews Card */ -->



    <!-- /*#Start Review page Review Form */ -->

    <div class="container ReviewFormContainer" id="ReviewFormContainer">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h4 class="text-center">GIVE US YOUR REVIEW

                </h4>
                <br>

                <form>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Name</label>
                        <input type="text" placeholder="Enter Your Name" id="form2Example2" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Review Tittle</label>
                        <input type="text" placeholder="Review Tittle" id="form2Example1" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" placeholder="Email Address" id="form2Example1" class="form-control" />
                    </div>


                    <label for="">Reviews Details</label>
                    <textarea name="" placeholder="Enter your review details..." class="form-control" id="" cols="30" rows="5"></textarea>

                    <div class="row mb-4">


                        <div class="col d-flex">

                            <span style="margin-left: auto;">

                                <ul style="list-style: none;" class="d-flex mt-1 star">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>

                            </span>
                        </div>
                    </div>

                    <div class="ReviewformButtom">
                        <div class=" d-flex">
                            <button type="button" class="mb-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>

    <!-- /*#End Review page Review Form */ -->



    <script>
        
        
        document.querySelector('.Reviewbutton').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('#ReviewFormContainer').scrollIntoView({
                behavior: 'smooth'
            });
        });


        const stars = document.querySelectorAll('.star li');

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {

                for (let i = 0; i <= index; i++) {
                    stars[i].querySelector('i').style.color = 'green';
                }

                for (let i = index + 1; i < stars.length; i++) {
                    stars[i].querySelector('i').style.color = 'grey';
                }
            });
        });
    </script>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
