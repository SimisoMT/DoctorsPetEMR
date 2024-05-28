<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Doctor's Pet · Light EMR System">
    <meta name="author" content="Simiso Mthiyane">
    <meta name="generator" content="Simiso Mthiyane">
    <title>Doctor's Pet · Light EMR System v1.0</title>
    <!-- Favicons -->
    <link href="assets/img/logo/favicon.png" rel="icon">
    <link href="assets/img/logo/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      @font-face {
            font-family: poppins;
            src: url(assets/fonts/poppins-regular.otf);
        }

        body{
            font-family: poppins !important;
        }

        #btn-group{
          font-size: 1rem !important;
        }

        hr{
          border: solid 1px #ffffff8c;
        }

        .bg-home{
          background-image:url(./assets/img/background/bg-1.png);
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
        }
        
        .disapeared{
          filter: opacity(0);
        }
        .apeared{
          filter: opacity(10);
        }
        .twitter, .facebook, .instagram,.linkedin {
            color: rgb(0, 157, 255);
            
        }

        .text-muted{
          color: rgb(157, 157, 157) !important;
        }
    </style>

    <!-- Custom styles for this template -->
    <script src="assets/vendor/scrollrevealjs/scrollreveal.min.js"></script>
  </head>

  <body class="bg-home bg-dark">
<!-----------------header------------------->
<main>
<header class="flex-md p-0 sticky-top">

  <!--colapses#1-->
  <div id="practitionerSigningForms">
  <div class="collapse site-header" id="navbarHeader" style="">
    <div class="container p-2 mb-0">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-2">       
          <div class="bd-example">

            <legend class="text-muted" id="signing-form">Signing</legend> 
            <div class="accordion bg-dark shadow" id="accordionExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong>As Practitioner</strong>
                  </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                  <div class="accordion-body">
                    <div class="bd-example">
                      <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                          <a class="nav-link active" id="nav-practitioner-sign-in-tab" data-bs-toggle="tab" href="#nav-practitioner-sign-in" role="tab" aria-controls="nav-practitioner-sign-in" aria-selected="true">Sign-in</a>
                          <a class="nav-link" id="nav-practitioner-sign-up-tab" data-bs-toggle="tab" href="#nav-practitioner-sign-up" role="tab" aria-controls="nav-practitioner-sign-up" aria-selected="false">Sign-up</a>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-practitioner-sign-in" role="tabpanel" aria-labelledby="nav-practitioner-sign-in-tab">
                          <!--form - practitioner- sing-in-->
                          <form class="row g-3" method="post" action="./includes/signin.practitioner.inc.php">
                            <div class="col-md-6">
                              <input type="email" class="form-control" name="practitionerSigninEmail" id="practitionerSigninEmail" aria-describedby="emailHelp" placeholder="Email address" required>
                            </div>
                            <div class="col-md-6">
                              <input class="form-control" type="password" name="practitionerSigninPassword" id="practitionerSigninPassword" placeholder="Password"
                              aria-label="Password" required>
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="show-signin-practitioner-password">
                                <label class="form-check-label text-primary" for="invalidCheck3">
                                  <small>Show password</small>
                                </label>                               
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit" name="submit">Sign-in</button>
                            </div>                         
                          </form>
                          <!--form - end-->
                        </div>
      
                        <div class="tab-pane fade" id="nav-practitioner-sign-up" role="tabpanel" aria-labelledby="nav-practitioner-sign-up-tab">
                           <!--form - practitioner -sign up-->   
                          <form class="row g-3" method="post" action="./includes/signup.practitioner.inc.php">
                            <fieldset class="row g-2 mt-2">
                              <legend class="text-primary">Personal Details</legend>
                              <div class="col-md-6">
                                <input class="form-control" type="number" name="practitionerSignupPracticeNumber" min="0" placeholder="Practice Number" aria-label="practice-number" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="number" name="practitionerSignupIdNumber" min="0" placeholder="ID Number" aria-label="id-number" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" name="practitionerSignupName" placeholder="Name" aria-label="Name" required>
                              </div>                              
                              <div class="col-md-6">
                                <input class="form-control" type="text" name="practitionerSignupSurname" placeholder="Surname" aria-label="Surname" required>
                              </div>
                              <div class="col-md-6">                                   
                                  <select class="form-select text-muted" name="practitionerSignupGender" required="">
                                    <option selected="" disabled="" value="">Choose Gender...</option>
                                    <option>Male</option>                         
                                    <option>Female</option>
                                  </select>                            
                              </div>
                            </fieldset>

                            <fieldset class="row g-2 mt-2">
                              <legend class="text-primary">Login Details</legend>
                              <div class="col-md-6">
                                <input type="email" class="form-control" name="practitionerSignupEmail" aria-describedby="emailHelp" placeholder="Email address" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="password" name="practitionerSignupPassword" placeholder="Type Password"
                                aria-label="Password" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="password" name="practitionerSignupPasswordRetype" placeholder="Retype Password"
                                aria-label="Password" required>
                              </div>

                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="show-signin-practitioner-password">
                                  <label class="form-check-label text-primary" for="invalidCheck3">
                                    <small>Show password</small>
                                  </label>                               
                                </div>
                              </div>
                            </fieldset>

                            <div class="col-12">
                              <button class="btn btn-primary" type="submit" name="submit">Sign-in</button>
                            </div>                                              
                          </form>

                          <!--form - end-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   <strong>As Petient</strong> 
                  </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                  <div class="accordion-body">
                    <div class="bd-example">
                      <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                          <a class="nav-link active" id="nav-petient-sign-in-tab" data-bs-toggle="tab" href="#nav-petient-sign-in" role="tab" aria-controls="nav-petient-sign-in" aria-selected="true">Sign-in</a>
                          <a class="nav-link" id="nav-petient-sign-up-tab" data-bs-toggle="tab" href="#nav-petient-sign-up" role="tab" aria-controls="nav-petient-sign-up" aria-selected="false">Sign-up</a>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-petient-sign-in" role="tabpanel" aria-labelledby="nav-petient-sign-in-tab">
                          <!--form - petient-->
                          <form class="row g-3" method="post" action="./includes/signin.petient.inc.php">
                            <div class="col-md-6">
                              <input type="email" class="form-control" name="petientSignupEmail" id="petientSignupEmail" aria-describedby="emailHelp" placeholder="Email address">
                            </div>
                            <div class="col-md-6">
                              <input class="form-control" type="password" name="petientSignupPassword" id="petientSignupPassword" placeholder="Password"
                              aria-label="Password">
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="show-signin-petient-password">
                                <label class="form-check-label text-primary" for="invalidCheck3">
                                  <small>Show password</small>
                                </label>                               
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Sign-in</button>
                            </div>
                          </form>
                          <!--form - sign in - end-->
                        </div>
      
                        <div class="tab-pane fade" id="nav-petient-sign-up" role="tabpanel" aria-labelledby="nav-petient-sign-up-tab">
                           <!--form - sign up-->
                           <form class="row g-3" method="post" action="./includes/signup.petient.inc.php">
                            <fieldset class="row g-2 mt-2">
                              <legend class="text-primary">Personal Details</legend>
                              <div class="col-md-6">
                                <input class="form-control" name="petientSignupName" type="text" placeholder="Name" aria-label="Name" required>
                              </div>                              
                              <div class="col-md-6">
                                <input class="form-control" name="petientSignupSurname" type="text" placeholder="Surname" aria-label="Surname" required>
                              </div>
                              <div class="col-md-6">                                   
                                  <select class="form-select text-muted" name="petientSignupGender" id="petientSignupGender" required="">
                                    <option selected="" disabled="" value="">Choose Gender...</option>
                                    <option>Male</option>                         
                                    <option>Female</option>
                                  </select>                            
                              </div>
                            </fieldset>

                            <fieldset class="row g-2 mt-2">
                              <legend class="text-primary">Login Details</legend>
                              <div class="col-md-6">
                                <input type="email" class="form-control" name="petientSignupEmail" id="petientSignupEmail" aria-describedby="emailHelp" placeholder="Email address" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="password"" name="petientSignupPassword" id="petientSignupPassword" placeholder="Type Password"
                                aria-label="Password" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="password" name="petientSignupPasswordRetype" id="petientSignupPasswordRetype" placeholder="Retype Password"
                                aria-label="Password" required>
                              </div>

                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="show-signin-practitioner-password">
                                  <label class="form-check-label text-primary" for="invalidCheck3">
                                    <small>Show password</small>
                                  </label>                               
                                </div>
                              </div>
                            </fieldset>

                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Sign-in</button>
                            </div>                                              
                          </form>
                          <!--form - end-->
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>


            </div>


          </div>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-muted mb-3">Disclaimer!</h4>
          <p class="text-muted">At Doctor's Pet our polices encourage account holders to practices protection of sign-in information.To prevent un-authorised personal from accessing and manipulating their account. <strong>Keep you sign-in information private.</strong></p>
        </div>
      </div>
    </div>
  </div>
  </div>

<!------------------nav-------------------->
<div class="container navigation-section">  
<div class="navbar navbar-dark nav-top">
    
      <a href="#" class="navbar-brand d-flex align-items-center">
        <h1>Doctor's <strong class="text-info">Pet</strong></h1>
      </a>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" id="first-signing" class="btn btn-outline-secondary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">Signing</button>
        </div>
      </div>

    </div>
  </div>
</header>

<!-----------------body------------------->

  <div class="carousel slide apeared" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="carousel-caption">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-journal-medical" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5A.5.5 0 0 1 8 4zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
              <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
              <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
            </svg>
            <h1 class="display-3"><span class="text-muted">Wha</span><span class="text-info">t</span> <span class="text-muted">is </span>i<span span class="text-info">t</span><span class="text-muted">?</span></h1>
            <p> 
            A light-weight and <span class="text-muted">simple</span> electronic <strong>medical recording system</strong>.</p>
            <p><button type="button" id="second-signing" class="btn btn-outline-secondary btn-sing-in" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">Sign-up today</button></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="display-3"><span class="text-muted">Who</span> is i<span class="text-info">t</span> for?</h1>
            <p>
              <ul>
                <li><span class="text-muted">Medical practitioners</span> seeking a simple fast and relaible way to manage medical supplies, records & petients online.</li>
                <li><span class="text-muted">Medical petients</span> seeking to track their medical history & communicate with their corresponding medical practitioners.</li>
              </ul>
              </p>
              <p><button type="button" id="third-signing" class="btn btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">Sign-up today</button></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">

        <div class="container">
          <div class="carousel-caption text-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16" focusable="false">
              <path d="M7.5 1v7h1V1h-1z"/>
              <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
            </svg>
            <h1 class="display-3"><span class="text-muted">How</span> <span class="text-info">t</span>o g<span class="text-info">et</span> s<span class="text-info">t</span>ar<span class="text-info">te</span>d?</h1>
            <p>Complete the simple & fast registration process by just <span class="text-muted">clicking</span> below.</p>
            <p><button type="button" id="fourth-signing" class="btn btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">Sign up today</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-----------------footer------------------->
<div class=" col-md-12 text-center credits p-0 mb-4">
  <div class="social-links">
    <a href="#" class="twitter p-2"><i class="bi bi-twitter"></i></a>
    <a href="#" class="facebook p-2"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram p-2"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin p-2"><i class="bi bi-linkedin"></i></a>
  </div>
</div>
</main>

<!----------------model-------------------->

<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable bg-dark">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Doctor's Pet Sign-Up Terms & Conditions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>END USER POLICY.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut rem dolores ex iste quia sint totam libero non harum, fuga in architecto quam odio maxime voluptates, praesentium deleniti nostrum porro..</p>
        <p>ACCEPTABLE USER POLICY.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quae aliquam distinctio, odio in numquam veniam cum?.</p>
        <p>SERVICE LEVEL AGREEMENT.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere repellat perspiciatis mollitia atque hic necessitatibus amet aliquid modi qui nulla aliquam omnis voluptate quibusdam, repudiandae alias, molestias autem eaque ratione?</p>
        <p>SUMMARY</p>
        <p>It is up to applicant to Understand or not to, but if the applicant chooses not to Understand the information given above. The applicant will not be able to continue signing up for an account at Doctor's Pet.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
      </div>
    </div>
  </div>
</div>

<!----------------scripts-------------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script>
      ScrollReveal({distance: '60px'});
      ScrollReveal().reveal('.body-lead');
      ScrollReveal().reveal('.navbar-brand',{origin:'top'});
      ScrollReveal().reveal('.btn-toolbar',{delay:250 ,origin:'top'});

      ScrollReveal().reveal('.btn-sing-in',{delay:900 ,origin:'bottom'});
      ScrollReveal().reveal('.footer-copy',{delay:1050 ,origin:'bottom'});
    </script>  
  </body>
</html>
