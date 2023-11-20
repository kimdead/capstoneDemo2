<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/index.css')}}">
    <title>Petmalu</title>
    <style>
     
     
 
 
</style>



  </head>
  <body>
    <div class="herobanner"><svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,700 C 0,700 0,350 0,350 C 168.66666666666663,417.3333333333333 337.33333333333326,484.66666666666663 481,462 C 624.6666666666667,439.33333333333337 743.3333333333335,326.6666666666667 899,293 C 1054.6666666666665,259.3333333333333 1247.3333333333333,304.66666666666663 1440,350 C 1440,350 1440,700 1440,700 Z" stroke="none" stroke-width="0" fill="#f07905" fill-opacity="0.5" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
    <div class="container">

      <!-- nav bar -->
      
      <nav
        id="main_menu"
        class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container">
          <a href="index.html" class="navbar-brand">
            <img src="" alt="Petmalu logo" width="" />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainMenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="mainMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
              <li><a href="/" class="nav-link">Home</a></li>
              <li><a href="/about" class="nav-link">About</a></li>
              <li><a href="/contact" class="nav-link">Contact Us</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Pet Grooming</a></li>
                  <li><a class="dropdown-item" href="#">Pet Boarding</a></li>
                  <li><a class="dropdown-item" href="#">Pet Training</a></li>
                  <li><a class="dropdown-item" href="#">Pet Sitting</a></li>
                  <li><a class="dropdown-item" href="#">Pet Daycare</a></li>
                  <li><a class="dropdown-item" href="#">Pet Walking</a></li>
                </ul>
              </li>
              <li><button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign in
              </button>
              
              <!-- Modal -->
              <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content p-5">
                    <button type="button" class="btn-close align-self-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-header align-self-center">
                      <h1 class="modal-title fs-1 fw-bold" id="exampleModalLabel">Log<span>in</span></h1>
                      
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label" >Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div id="emailHelp" class="form-text mb-5 text-end">forgot password</div>
                        <div class="d-flex">
                        <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

                      </div>
                        <div id="emailHelp" class="text-center form-text mt-5 mb-3">Or Sign Up Using</div>

                        <div class="text-center mb-5">
                        <i class="bi bi-facebook fs-1 me-3"></i>
                        <i class="bi bi-google fs-1"></i>
                      </div>


                      <div id="emailHelp" class="text-center form-text mt-5 mb-2">Dont have an account?</div>
                      <div class="d-flex">
                      <a href="/signup" class="signUpLink mx-auto justify-content-center mb-5 ">Sign Up</a></div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- hero content  -->
      <div class="heroContent">
          <div class="col">
              <h1 class="fw-bold heroText">
                Ensuring a <span>happy</span> <br> and <span>healthy</span> life for <br> your <span> furry</span> friends
                </h1>
          <p class="subtitle">"Nurturing the bond between you and your beloved pets through comprehensive care guidlines, informative articles and community support."</p>

          <!-- hero buttons -->
          <div class="herobtn d-flex">
          <a href="./sign_up.html" class="btn-main fw-semibold me-3
          ">book an appointment</a>
          <a href="./sign_up.html" class="btn-2nd fw-semibold
          ">Join now</a></div>

          <!-- customer and ratings -->
          <div class="custorate d-flex">
          <div class="customers mt-4">
            <img class="pic1" src="../assets/img/pexels-andrea-piacquadio-774909.jpg" alt="" >
            <img class="pic2" src="../assets/img/woman2.jpg" alt="" >
            <img class="pic3" src="../assets/img/" alt="" >
            <img class="pic4" src="../assets/img/woman3.jpg" alt="" >
            <img class="pic5" src="../assets/img/man2.jpg" alt=""  >
            <img class="pic6" src="../assets/img/woman4.jpg" alt="" >
          </div>
        <div class="rate">
          <p class="fw-semibold happy">Our Happy Customers</p><div class="star">
          <i class="bi bi-star-fill fs-2"></i><span class="fw-semibold happy">4.8</span> <span>(15.5k reviews)</span></div> 
        </div>
      </div>
        </div>

        <div class="leftside">
        <div class="leftpic">
          <img class="leftpicture" id="lpic1" src="../assets/img/dog1.jpg" alt="">
          <img class="leftpicture" id="lpic2" src="../assets/img/dog2.jpg" alt="">
          <img class="leftpicture" id="lpic3" src="../assets/img/cat.jpg" alt="">
          <img class="leftpicture" id="lpic5" src="../assets/img/dog3.jpg" alt="">
          <img class="leftpicture" id="lpic4" src="../assets/img/dog groomer.jpg" alt="">
          
        </div>
      </div>
    </div>
</header>
</div>
</div>

<section class="why Us">
  <div class="container">
    <h2 class="sectionTitle">Why <span>Choose</span> Us</h2>
    <p class="sectionTitle-sub">We Provide Trusty Care Service</p>
    
    <div class="row text-center mt-4 pt-5 justify-content-center g-5 p-5">
      <div class="col-md-4">
        <div>
        <img
        src="../assets/img/pet-friend.png"
        alt="fundraise"
        width="80px
        "
        />
        <div>
          <h5 class="mt-2 mt-4 mb-3">Pet-Friendly Environment</h5>
          <p>a pet-friendly and safe grooming environment assures pet owners that their furry friends will be well taken care of.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div>
        <img src="../assets/img/reviews.png" alt="social" width="80px" />
        <div>
          <h5 class="mt-2 mt-4 mb-3">We Are Not Robot</h5>
          <p>A+ rating in customers service. Real People writing real responses. No cut and paste responses from our top of the line team. We are standing by, waiting to help.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div> 
        <img src="../assets/img/user.png" alt="Donation" width="80px" />
        <div>
          <h5 class="mt-2 mt-4 mb-3">User-Friendly Interface</h5>
          <p> The website is easy to navigate, ensuring a seamless and pleasant experience for users looking for information or services.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div>
        <img src="../assets/img/cleanliness.png" alt="social" width="80px" />
        <div>
          <h5 class="mt-2 mt-4 mb-3">Hygiene and Cleanliness</h5>
          <p>We emphasize the cleanliness and hygiene of the grooming facilities to assure customers that their pets will be groomed in a healthy environment.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div>
        <img src="../assets/img/appointment.png" alt="Donation" width="80px" />
        <div>
          <h5 class="mt-2 mt-4 mb-3">Appointment Scheduling</h5>
          <p>We have an online appointment booking system  that makes it convenient for customers to schedule grooming appointments at their preferred time.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Service section -->

 <section class="service">
<div class="container">
  <h2 class="sectionTitle mt-5 pt-5"><img class="paw" src="../assets/img/paw.png" alt="">ur Pet Care <span>Service</span></h2>
  <p class="sectionTitle-sub mb-5">Devoted to Delight</p>


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row row-cols-1 row-cols-md-4 g-5 justify-content-center">
        <div class="col">
          <div class="card" style="height: 500px;">
            <img src="../assets/img/grooming.png" class="img-fluid m-4" alt="../assets/img/grooming.png">
            <div class="card-body text-center pb-5">
              <h5 class="card-title fw-700">Pet Grooming</h5>
          <p class="card-text text-center">Expert grooming services include bathing, haircuts ensuring your pet looks and feels their best.</p>
          <div class="centBtn text-center"><a href="#" class="btn btn-serv mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="height: 500px;">
            <img src="../assets/img/pet-boarding.png" class="img-fluid m-4" alt="...">
            <div class="card-body text-center pb-5">
              <h5 class="card-title fw-700">Pet Boarding</h5>
          <p class="card-text text-center">Safe and comfortable overnight care with playtime, socialization, and attention for your pet's well-being.</p>
          <div class="centBtn text-center"><a href="#" class="btn btn-serv mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="height: 500px;">
            <img src="../assets/img/sitting-dog.png" class="img-fluid m-4" alt="...">
            <div class="card-body text-center pb-5">
              <h5 class="card-title fw-700">Pet Sitting</h5>
          <p class="card-text">In-home care with feeding and playtime, offering a stress-free environment for your pet while you're away.</p>
          <div class="centBtn text-center"><a href="#" class="btn btn-serv mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="carousel-item">
      <div class="row row-cols-1 row-cols-md-4 g-5 justify-content-center">
        <div class="col">
          <div class="card" style="height: 500px;">
            <img src="../assets/img/daycare-center.png" class="img-fluid m-4" alt="...">
            <div class=" text-center">
              <h5 class="card-title fw-700">Pet Daycare</h5>
          <p class="card-text">In-home care with feeding and playtime, offering a stress-free environment for your pet while you're away.</p>
          <div class="centBtn text-center"><a href="#" class="btn btn-serv mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="height: 500px;">
            <img src="../assets/img/pet-walking.png" class="img-fluid m-4" alt="...">
            <div class=" text-center">
              <h5 class="card-title fw-700">Pet Walking</h5>
          <p class="card-text">In-home care with feeding and playtime, offering a stress-free environment for your pet while you're away.</p>
          <div class="centBtn text-center"><a href="#" class="btn btn-serv mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="height: 500px;">
            <img src="../assets/img/dog training.png" class="img-fluid m-4" alt="...">
            <div class=" text-center">
              <h5 class="card-title fw-700">Pet Training</h5>
              <p class="card-text">Professional obedience and behavioral training for a well-mannered and happy pet.</p> <br>
              <div class="centBtn text-center"><a href="#" class="btn btn-serv mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
    </div>
    
  </div>

  <div class="carobot">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>





  
  
  </div>
</section>

<!-- grooming and pricing -->

<section class="price mb-5">
  <div class="container">
    <h2 class="sectionTitle mt-5 pt-5 ">Pet <span>Grooming</span>  and Pricing</h2>
    

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
      <div class="col">
        <div class="card">
          
          <div class="card-body p-5">
            <h5 class="card-title text-center">Mini Groom</h5>
            <h3 class="side text-center">PHP-PHP</h3>
            <div class="cardContent ">
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Bath *hypo- Allergenic</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Conditioning Treatment</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Ears Flushed & cleaned</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Watering Plants</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Hand scissor Finish</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Setting lenght of Coat</p>
              <div class="centBtn text-center"><a href="#" class="btn btn-main mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          
          <div class="card-body p-5 middleCard">
            <h5 class="card-title title-middle text-center">Complete Groom</h5>
            <h3 class="middle text-center">PHP-PHP</h3>
            <div class="cardContent ">
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Bath *hypo- Allergenic</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Conditioning Treatment</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Ears Flushed & cleaned</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Watering Plants</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Hand scissor Finish</p>
              <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Setting lenght of Coat</p>
              <div class="centBtn text-center"><a href="#" class="btn btn-main mt-5 mb-3">Book Now</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          
          <div class="card-body p-5">
            <h5 class="card-title text-center">Hand Scissor Groom</h5>
            <h3 class="side text-center">PHP-PHP</h3>
            <div class="cardContent ">
            <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Bath *hypo- Allergenic</p>
            <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Conditioning Treatment</p>
            <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Ears Flushed & cleaned</p>
            <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Watering Plants</p>
            <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Hand scissor Finish</p>
            <p class="card-text"><i class="bi bi-check-circle-fill"></i>  Setting lenght of Coat</p>
            <div class="centBtn text-center"><a href="#" class="btn btn-main mt-5 mb-3">Book Now</a></div>
          </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>



 <!-- testimonies -->
<div class="container">
 <section class="testimony pt-5">
  <div class="text-2">
    <h2 class="sectionTitle mt-5 pt-5">Testim<img class="paw" src="../assets/img/paw.png" alt="">nials</h2>
  </div>


<div class="container pt-5" id="testimonies">
<div id="testslider" class="carousel slide">
  <div class="carousel-inner d-flex">

    <div class="carousel-item active justify-content-center">

      <div class="card mb-3 ">
        <div class="row g-0">
          <div class="col-md-6 align-self-center">
            <img class="testi" src="../assets/img/testi1.jpg" class="testi rounded-start" alt="...">
          </div>
          <div class="col-md-6 align-self-center">
            <div class="card-body testCard">
              <h5 class="card-title">Michelle Libs</h5><i class="bi bi-quote"></i>
              <i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i>
              <p class="card-text">love all the products that they use and it’s not overpowering perfume smells like other places, I love how friendly everyone is and they did wonders on my dog and made her look so beautiful. We shall be coming back soon 🙂</p>
              <p class="card-text"><small class="text-body-secondary">Posted 3 days ago</small></p>
            </div>
          </div>
        </div>
      </div>
   </div>
   

    <div class="carousel-item">
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-6 align-self-center">
            <img class="testi" src="../assets/img/testi2.jpg" class="testi rounded-start" alt="...">
          </div>
          <div class="col-md-6 align-self-center">
            <div class="card-body testCard">
              <h5 class="card-title">Abigail Angeles</h5><i class="bi bi-quote"></i>
              <i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i>
              <p class="card-text">Amazing treatments and they are so lovely to the dogs! You can tell they really love the dogs and want them to feel comfortable and happy!</p>
              <p class="card-text"><small class="text-body-secondary">Posted 3 months ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-6 align-self-center">
            <img class="testi" src="../assets/img/testi3.jpg" class="testi rounded-start" alt="...">
          </div>
          <div class="col-md-6 align-self-center">
            <div class="card-body testCard">
              <h5 class="card-title">Kim Delos Reyes</h5><i class="bi bi-quote"></i>
              <i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i>
              <p class="card-text">A HUGE thank you for taking care of Rosie, she looks and smells absolutely gorgeous!! After her horrendous experience elsewhere you have given back her confidence and that means a lot to me, thank you once again 🙂</p>
              <p class="card-text"><small class="text-body-secondary">posted 5 months ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-6 align-self-center">
            <img  class="testi"src="../assets/img/testi4.jpg" class="testi rounded-start" alt="...">
          </div>
          <div class="col-md-6 align-self-center">
            <div class="card-body testCard">
              <h5 class="card-title">Eren Jaeger</h5><i class="bi bi-quote"></i>
              <i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i><i class="bi bi-star-fill fs-5"></i>
              <p class="card-text">We take both our dogs here and one is especially anxious but they have a great way of making them feel at ease and relaxed they are so kind and really take their time with the dogs – would highly recommend!!</p>
              <p class="card-text"><small class="text-body-secondary">Posted 8 weeks  ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#testslider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#testslider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> 
</div>



<!-- footer -->
<footer class="footer">
  <div class="imgfooter"><img src="../assets/img/dog footer.png" alt=""></div>
  <div class="text-foot text-center" id="text-foot">
    <h3>Pawsitively Unleashing Happiness!</h3><br>
    <a class="btn-btm fw-bold" href="#">SIGN UP</a>
   </div>

  <section
      class="bg-dark text-light p-5 text-center text-sm-start">

      

        
          <div class="row">
            <div class="col-md-3">
              <img src="./images/logo2.1.png" alt="Petmalu Logo" width="180px" />
              <div class="social">
                <a href="#"><i class="bi bi-facebook fs-3 m-2"></i></i></a>
                <a href="#"><i class="bi bi-twitter fs-3 m-2"></i></i></a>
                <a href="#"><i class="bi bi-youtube fs-3 m-2"></i></a>
                <a href="#"><i class="bi bi-linkedin fs-3 m-2"></i></a>
                <a href="#"><i class="bi bi-instagram fs-3 m-2"></i></a>
              </div>
              
            </div>
            <div class="col-md-3" id="footlist">
              <h4 class="mb-4">Shop Schedule</h4>
              <ul class="list-unstyled" >
                <p>Monday to friday : 8am - 10pm</p>
                <p>Saturday : 9am - 4pm</p>
                <p>Sunday : Close</p>
              </ul>
            </div>
            <div class="col-md-3" id="footlist">
              <h4 class="mb-4">Useful links</h4>
              <ul class="list-unstyled" >
                <li class="mb-4"><a href="#">Help Center</a></li>
                <li class="mb-4"><a href="#">About Us</a></li>
                <li class="mb-4"><a href="#">Services</a></li>
                <li class="mb-4"><a href="#">Testimonies</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="mb-4">Dont be shy, say Hi</h4>
              <ul class="list-unstyled">
                <p><i class="bi bi-telephone-fill fs-4"></i> 0915-123-4567</p>
                <p><i class="bi bi-geo-alt-fill fs-4"></i> 143, PagHanapin st. kungSanMan</p>
                <p><i class="bi bi-clock-fill fs-4"></i> weekdays : Open | Sunday : close</p>
                <p><i class="bi bi-c-circle fs-4"></i> 2023 petMalu, All Rights Reserved</p>
              </ul>
              
            </div>
          </div>
          
        


      
  </section>
</footer>




<!-- bootstrap -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
crossorigin="anonymous"
></script>
</body>
</html>
