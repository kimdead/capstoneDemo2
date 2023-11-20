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
   <!-- Flaticon Font -->
   <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/about.css')}}">
    <title>Petmalu</title>
    <style>


    </style>
  </head>
  <body>
    

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
      

    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="mb-3">About Us</h4>
                <h1 class="rowTitle mb-4"><span class="">Boarding</span> & <span class="">Daycare</span></h1>
                <h5 class="text-muted fw-600 mb-3">Amet stet amet ut. Sit no vero vero no dolor. Sed erat ut sea. Just clita ut stet kasd at diam sit erat vero sit.</h5>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <ul class="list-inline">
                    <li><h5><i class="bi bi-check-circle-fill mr-5"></i> Best In Industry</h5></li>
                    <li><h5><i class="bi bi-check-circle-fill mr-5"></i> Emergency Services</h5></li>
                    <li><h5><i class="bi bi-check-circle-fill mr-5"></i> 24/7 Customer Support</h5></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="../assets/img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="../assets/img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="../assets/img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




     <!-- Features Start -->
     <div class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="../assets/img/feature.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class=" mb-3">Why Choose Us?</h4>
                    <h1 class="rowTitle mb-4"><span class="">Special Care</span> On Pets</h1>
                    <p class="mb-4">Dolor lorem lorem ipsum sit et ipsum. Sadip sea amet diam sed ut vero no sit. Et elitr stet sed sit sed kasd. Erat duo eos et erat sed diam duo</p>
                    <div class="row py-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Best In Industry</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Emergency Services</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Special Care</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Customer Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            
            <h1 class="rowTitle m-0">Meet the <span class="">Team</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="../assets/img/team-1.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Mollie Ross</h5>
                            <i>Founder & CEO</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center ">
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-linkedin"></i></a>
                            <a class="btn rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="../assets/img/team-2.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Jennifer Page</h5>
                            <i>Chef Executive</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center ">
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-linkedin"></i></a>
                            <a class="btn rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="../assets/img/team-3.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Kate Glover</h5>
                            <i>Doctor</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center ">
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-linkedin"></i></a>
                            <a class="btn rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="../assets/img/team-4.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Lilly Fry</h5>
                            <i>Trainer</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center ">
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-linkedin"></i></a>
                            <a class="btn rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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
                  <p><i class="bi bi-clockill fs-4"></i> weekdays : Open | Sunday : close</p>
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
  
