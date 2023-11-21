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
    <link rel="stylesheet" href="{{asset('assets/services.css')}}">
    <title>Petmalu | Pet Walking</title>
   

  </head>
  <body>
    
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
                    <li><a class="dropdown-item" href="/grooming">Pet Grooming</a></li>
                    <li><a class="dropdown-item" href="/boarding">Pet Boarding</a></li>
                    <li><a class="dropdown-item" href="training">Pet Training</a></li>
                    <li><a class="dropdown-item" href="/sitting">Pet Sitting</a></li>
                    <li><a class="dropdown-item" href="daycare">Pet Daycare</a></li>
                    <li><a class="dropdown-item" href="petwalking">Pet Walking</a></li>
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
                          <a href="" class="signUpLink mx-auto justify-content-center mb-5 ">Sign Up</a></div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div></li>
    </ul>
</div>
</div>
</nav>

</div>

<!-- content -->

<div class="Sign  position-relative d-inline-block" style="background-image: url('../assets/img/walkingTop.jpg'); width: 100%; height: 60vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
    
        <div class="text-1">
          <div class="col">
            <h1 id="contactme" class="fw-bold text-light text-center pt-5 mt-5">PET<span> WALKING</span></h1>
          </div>
        </div>
  
        <!-- form -->
        <div class="container position-absolute" id="formsign-up">
          <div class="row row-cols-md-2 g-0">
            <!-- form -->
  
            <div class="col-md-7">
              <div class="card-group" style="height: 950px">
                <div class="card p-4 text-center rounded-start-4 rounded-end-0">
                  {{-- <h2 class="fw-bold pt-md-3"><span>Grooming</span></h2> --}}
  
                  <form
                    action="process.php"
                    class="pt-3 text-start mt-4"
                    id="signupform"
                  >

                                  
                    {{-- Breed?? --}}

                
                    <h5 class="">What breed? (optional)</h5>
                    <input class="form-control" type="text" placeholder="What breed is your dog?" aria-label="default input example" class="form-control-lg border-1 breed">
                  
                    {{-- petSize --}}

                    <h5 class="mt-5">What is the size of your dog?</h5>
                  
                    <select class="form-select service" aria-label="Default select example">
                        <option class="option" selected>Choose Size</option>
                        <option value="1">Small       (below-10kg)</option>
                        <option value="2">Medium   (11-30kg)</option>
                        <option value="3">Large        (31-40kg)</option>
                        <option value="4">Extra Large    (41kg-above)</option>
                      </select>


                 
                      
                        {{-- anything else? --}}

                     <h5 class="mt-5">Anything else the dog walker needs to know? (optional)</h5>
                    <input class="form-control" type="text" placeholder="(optional)" aria-label="default input example" class="form-control-lg border-1 breed">



                    {{-- petSize --}}

                    <h5 class="mt-5">Number of walks per day</h5>
                  
                    <select class="form-select service" aria-label="Default select example">
                        <option class="option" selected>number of walk</option>
                        <option value="1">1 walk per day</option>
                        <option value="2">2 walks per day</option>
                        <option value="3">3 walks per day</option>
                       
                      </select>

                      {{-- number of days --}}
            
                      <h5 class="mt-5">Number Of Days Required</h5>
                                <input class="form-control" type="text" placeholder="number of days" aria-label="default input example" class="form-control-lg border-1 breed">
                                <div id="emailHelp" class="form-text mb-5">a value between 1 and 365 is required</div>

                    {{-- date and time  --}}

                    <h5 class="mt-5">Please pick a starting date of the service</h5>

                    <label class="m-2" for="confirm"> <h6>Date *</h6></label>
          <input type="date" min="2017-08-15" max="2045-08-26" class="set" id="set-time">
          <br>
          <label class="m-2" for="confirm"> <h6>Time *</h6></label>
          <input type="time" class="set" id="set-time">


          <div class="d-flex">
            <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

          </div>
                    
                  </form>
                  
                </div>
              </div>
            </div>
  
            <div class="col-md-5 rounded-end-4" id="FAQ">
              <img src="../assets/img/walkingSide.jpg" alt="" class="rounded-end-4 w-100" style="height: 950px"/>
            </div>
          </div>
        </div>
      </div>
      <!-- extra -->
      <div class="box text-align-center" style="height: 800px">
        <a href=""></a>
      </div>
      
      
      <!-- footer -->
<footer class="footer">
    <div class="imgfooter"><img src="../assets/img/dog footer.png" alt=""></div>
    <div class="text-foot text-center" id="text-foot">
      <h3>Pawsitively Unleashing Happiness!</h3><br>
      <a class="btn-btm fw-bold" href="/signup">SIGN UP</a>
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