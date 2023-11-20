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
    <link rel="stylesheet" href="{{asset('assets/contact.css')}}">
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
      


       <!-- Contact Start -->
   <!-- content -->
   
   <div class="contact position-relative d-inline-block">
    <div class="pageTitle">
      <div class="col">
        <h1 id="contactme" class="fw-bold text-center pt-5 mt-5">
          Get In <span>Touch</span>
        </h1>
      </div>
    </div>

    <!-- form -->
    <div class="container position-absolute" id="cont-contacts">
      <div class="row row-cols-md-2 g-0">
        <!-- form -->

        <div class="col-md-7">
          <div class="card-group">
            <div class="card p-4 rounded-start-4 rounded-end-0">
              <h2 class="fw-bold text-center pt-md-3" id="contactform">
                Send Us a Message
              </h2>

              <form
                action="process.php"
                class="pt-3 text-start"
                id="contactform"
              >
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your Name"
                    class="form-control"
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your Email"
                    class="form-control"
                  />
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="Enter your Phone"
                    class="form-control"
                  />
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Message</label>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    placeholder="Enter your Message"
                    class="form-control"
                  ></textarea>
                </div>
                
                  <button class="btn-submit fw-semibold mt-2">Submit</button>
                
              </form>
            </div>
          </div>
        </div>

        <!-- f a q s -->

        <div class="col-md-5 rounded-end-4" id="FAQ">
          <div class="card-accord text-light">
            <h2 class="fw-bold p-4">FAQ's</h2>
            <div class="accordion accordion-flush" id="accordion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    id="faqs"
                  >
                  What should I do if my pet is injured or gets sick?
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    This is a good place to showcase your expertise in pet care. Explain that it’s always best to visit a veterinarian if your pet is sick or injured, but for minor issues, there are some DIY methods you can try first or to hold you over in the meantime. Make sure that people understand the seriousness of taking their pets to the vet when it is necessary and explain how proper pet care starts by knowing when to leave the work to someone else.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                    id="faqs"
                  >
                  How often should I bathe my pet?
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Bathing is often a big part of pet care for mammals and other small creatures. However, there are guidelines and best practices. Just like people, you don’t want to overdo it on bathing your pet because it could dry out their skin and cause a host of other issues. This is a good place to build rapport by providing as much information about keeping pets clean as you possibly can and then inviting people to reach out to you to learn more or get the professional pet care that they need. 
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                    id="faqs"
                  >
                  What kind of pet care services do you provide?
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    This is an obvious one, but it still needs to be on the list because it’s one of the most common questions that people ask. After all, it does them no good to find resources they can’t use or don’t need. If you offer pet sitting and in-home care services, list them here. If you offer veterinary care, explain that. If you only work with cats and dogs, you’ll want to let people know. In the same vein, if you specialize in a niche field like equine health or reptiles, you’ll want to make sure that you list those things here, as well. Make sure that you list all the services available, invite people to contact you about custom services, and take the opportunity to link to your service pages here, too. 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <!-- extra -->
  <div class="box">
    <a href=""></a>
  </div>
    <!-- Contact End -->
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