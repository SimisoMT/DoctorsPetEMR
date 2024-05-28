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
    <link href="../assets/img/logo/favicon.png" rel="icon">
    <link href="../assets/img/logo/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../assets/css/carousel.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
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
            src: url(../assets/fonts/poppins-regular.otf);
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
    <script src="../assets/vendor/scrollrevealjs/scrollreveal.min.js"></script>
  </head>
  <body class="bg-home bg-dark">
<!-----------------header------------------->
<main>
<header class="flex-md p-0 sticky-top">
<!------------------nav-------------------->
<div class="container navigation-section">  
<div class="navbar navbar-dark nav-top">
    
      <a href="#" class="navbar-brand d-flex align-items-center">
        <h1>Doctor's <strong class="text-info">Pet</strong></h1>
      </a>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <span><?php echo "my@email.here";?></span>
          <button type="button" id="first-signing" class="btn btn-outline-secondary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">Logout</button>
        </div>
      </div>

    </div>
  </div>
</header>

<!-----------------body------------------->


<body class="bg-home bg-dark">
<!-----------------header------------------->
<main>


<div class="container p-2 mb-0">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-2">       
          <div class="bd-example">
            <div class="accordion bg-dark shadow" id="accordionExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong>Practitioner Details</strong>
                  </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                  <div class="accordion-body">
                    <div class="bd-example">
                      <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                          <a class="nav-link active" id="nav-practitioner-sign-in-tab" data-bs-toggle="tab" href="#nav-practitioner-sign-in" role="tab" aria-controls="nav-practitioner-sign-in" aria-selected="false">Sign-in</a>
                          <a class="nav-link" id="nav-practitioner-sign-up-tab" data-bs-toggle="tab" href="#nav-practitioner-sign-up" role="tab" aria-controls="nav-practitioner-sign-up" aria-selected="false">Login</a>
                          <a class="nav-link" id="nav-practitioner-personal-details-tab" data-bs-toggle="tab" href="#nav-practitioner-personal-details" role="tab" aria-controls="nav-practitioner-personal-details" aria-selected="true">Personal</a>
                          <a class="nav-link" id="nav-practitioner-practice-details-tab" data-bs-toggle="tab" href="#nav-practitioner-practice-details" role="tab" aria-controls="nav-practitioner-practice-details" aria-selected="false">Practice</a>
                          <a class="nav-link" id="nav-practitioner-contact-details-tab" data-bs-toggle="tab" href="#nav-practitioner-contact-details" role="tab" aria-controls="nav-practitioner-contact-details" aria-selected="false">Contact</a>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-practitioner-sign-in" role="tabpanel" aria-labelledby="nav-practitioner-sign-in-tab">
                          <!--form - practitioner- sing-in-->
                          <form class="row g-3" method="post" action="#">
                            <div class="col-md-6">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required>
                            </div>
                            <div class="col-md-6">
                              <input class="form-control" type="password" id="signin-practitioner-password" placeholder="Password"
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
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Save</button>
                            </div>                         
                          </form>
                          <!--form - end-->
                        </div>
      
                        <div class="tab-pane fade active show" id="nav-practitioner-personal-details" role="tabpane2" aria-labelledby="nav-practitioner-personal-details-tab">
                          <!--form - practitioner- sing-in-->
                          <form class="row g-3" method="post" action="#">
                              <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="Name" aria-label="Name" required>
                              </div>                              
                              <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="Surname" aria-label="Surname" required>
                              </div>
                              <div class="col-md-6">                                   
                                  <select class="form-select text-muted" id="" required="">
                                    <option selected="" disabled="" value="">Choose Gender...</option>
                                    <option>Male</option>                         
                                    <option>Female</option>
                                  </select>                            
                              </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Save</button>
                            </div>                         
                          </form>
                          <!--form - end-->
                        </div>


                        <div class="tab-pane fade active show" id="nav-practitioner-practice-details" role="tabpane3" aria-labelledby="nav-practitioner-practice-details-tab">
                          <!--form - practitioner- sing-in-->
                          <form class="row g-3" method="post" action="#">
                          <fieldset class="row g-2 mt-4">
                              <legend class="text-primary">Practice Details</legend>
                                <div class="col-md-6">                                   
                                  <select class="form-select text-muted" id="" required="">
                                    <option selected="" disabled="" value="">Choose practice...</option>
                                    <option>Allergist/Immunologist</option>                         
                                    <option>Anesthesiologyist</option>
                                    <option>Cardiologist</option>
                                    <option>Colon and Recta Surgeon</option>
                                    <option>Critical Care Medicine Specialist</option>
                                    <option>Dermatologist</option>
                                    <option>Endocrinologist</option>
                                    <option>Emergency Medicine Specialist</option>
                                    <option>Family Physician</option>
                                    <option>Gastroenterologist</option>
                                    <option>Geriatric Medicine Specialist</option>
                                    <option>Hematologist</option>
                                    <option>Hospice and Palliative Medicine Specialist</option>
                                    <option>Infectious Disease Specialist</option>
                                    <option>Internist</option>
                                    <option>Medical Geneticist</option>
                                    <option>Nephrologist</option>
                                    <option>Neurologist</option>
                                    <option>Obstetrician and Gynecologist</option>
                                    <option>Oncologist</option>
                                    <option>Ophthalmologist</option>
                                    <option>Osteopath</option>
                                    <option>Otolaryngologist</option>
                                    <option>Pathologist</option>
                                    <option>Pediatrician</option>
                                    <option>Physiatrist</option>
                                    <option>Plastic Sugeon</option>
                                    <option>Podiatrist</option>
                                    <option>Preventive Medicine Specialist</option>
                                    <option>Psychiatrist</option>
                                    <option>Pulmonologist</option>
                                    <option>Radiologist</option>
                                    <option>Rheumatologist</option>
                                    <option>Sleep Medicine Specialist</option>
                                    <option>Sport Medicine Specialist</option>
                                    <option>General Surgeon</option>
                                    <option>Urologist</option>
                                  </select>                            
                              </div>
                              <div class="col-md-6">                                   
                                <select class="form-select text-muted" id="" required="">
                                  <option selected="" disabled="" value="">Choose Country of practice...</option>
                                  <option value="Afghanistan">Afghanistan</option>
                                  <option value="Åland Islands">Åland Islands</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">American Samoa</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antarctica">Antarctica</option>
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Bouvet Island">Bouvet Island</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">Cayman Islands</option>
                                  <option value="Central African Republic">Central African Republic</option>
                                  <option value="Chad">Chad</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">Christmas Island</option>
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo</option>
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                  <option value="Cook Islands">Cook Islands</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote D'ivoire">Cote D'ivoire</option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czech Republic">Czech Republic</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">Dominican Republic</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                  <option value="Faroe Islands">Faroe Islands</option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">French Guiana</option>
                                  <option value="French Polynesia">French Polynesia</option>
                                  <option value="French Southern Territories">French Southern Territories</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea-bissau">Guinea-bissau</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macao">Macao</option>
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">Marshall Islands</option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherlands">Netherlands</option>
                                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                                  <option value="New Caledonia">New Caledonia</option>
                                  <option value="New Zealand">New Zealand</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">Norfolk Island</option>
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau">Palau</option>
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Philippines">Philippines</option>
                                  <option value="Pitcairn">Pitcairn</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reunion">Reunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russian Federation">Russian Federation</option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="Saint Helena">Saint Helena</option>
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                  <option value="Saint Lucia">Saint Lucia</option>
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">Sierra Leone</option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">Solomon Islands</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">South Africa</option>
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                  <option value="Swaziland">Swaziland</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                  <option value="Taiwan">Taiwan</option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Timor-leste">Timor-leste</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                  <option value="Tunisia">Tunisia</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Turkmenistan">Turkmenistan</option>
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="United States">United States</option>
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Viet Nam">Viet Nam</option>
                                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                                  <option value="Western Sahara">Western Sahara</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>                            
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="tel" pattern="[0-9]{13}" maxlength="13" minlength="13" placeholder="Practice number" aria-label="Practice number" required>
                              </div>
                            </fieldset>

                            <fieldset class="row g-2 mt-4">
                              <legend class="text-primary">Work Address Details</legend>
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="practitioner-signup-work-province-state" placeholder="Province/State" required>
                              </div>                            
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id=" practitioner-signup-work-city" placeholder="City" required>
                              </div> 
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="practitioner-signup-surbub" placeholder="Surbub" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="practitioner-signup-street" placeholder="Street" required>
                              </div> 
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="practitioner-signup-building-number" placeholder="Building Number" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="practitioner-signup-street-code" placeholder="Street Code" required>
                              </div>                           
                            </fieldset>

                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Save</button>
                            </div>   
                                                  
                          </form>
                          <!--form - end-->
                        </div>


                        <div class="tab-pane fade active show" id="nav-practitioner-contact-details" role="tabpan5" aria-labelledby="nav-practitioner-contact-details-tab">
                          <!--form - practitioner- sing-in-->
                          <form class="row g-3" method="post" action="#">
                              <div class="col-md-6">
                                <input class="form-control" type="email" class="form-control" id="practitioner-email-input" aria-describedby="emailHelp" placeholder="Email address" required>
                              </div>                            
                              <div class="col-md-6">
                                <input class="form-control" id="practitioner-signup-phone-number-1" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="10" placeholder="Phone number-1" aria-label="Phone number 1" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" id="practitioner-signup-phone-number-2" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="10" placeholder="Phone number-optional" aria-label="Phone number Optional">
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" id="practitioner-signup-phone-number-3" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="10" placeholder="Phone number-optional" aria-label="Phone number Optional">
                              </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Save</button>
                            </div>                         
                          </form>
                          <!--form - end-->
                        </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   <strong>Petient</strong> 
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
                          <form class="row g-3" method="post" action="dashboard/index.html">
                            <div class="col-md-6">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                            </div>
                            <div class="col-md-6">
                              <input class="form-control" type="password" id="signin-petient-password" placeholder="Password"
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
                           <form method="post" action="#">                           
                            <fieldset class="row g-2 mt-2">
                              <legend class="text-primary">Personal Details</legend>
                              <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="Name" aria-label="Name" required>
                              </div>                              
                              <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="Surname" aria-label="Surname" required>
                              </div>
                              <div class="col-md-6">                                   
                                  <select class="form-select text-muted" id="" required="">
                                    <option selected="" disabled="" value="">Choose Gender...</option>
                                    <option>Male</option>                         
                                    <option>Female</option>
                                  </select>                            
                              </div>
                              <div class="col-md-6">                                   
                                <select class="form-select text-muted" id="" required="">
                                  <option selected="" disabled="" value="">Choose Race...</option>
                                  <option>Asian</option>                 
                                  <option>African American</option>  
                                  <option>African Native</option> 
                                  <option>Coloured</option>    
                                  <option>European/American</option>                                                                   
                                  <option>Native American</option>
                                  <option>Native Hawaiian</option>
                                  <option>Pacific Islander</option>
                                  <option>Other</option>
                                  

                                    
                                </select>                            
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label text-muted" for="petient-signup-date-of-birth">
                                  Date of Birth
                                </label>
                                  <input class="form-control text-muted" id="petient-signup-date-of-birth" type="date" aria-label="Practice number" required>
                            </div>                        
                            </fieldset>

                            <fieldset class="row g-2 mt-4">
                              <legend class="text-primary">Medical Details</legend>
                              <div class="col-md-6">                                   
                                <select class="form-select text-muted"  size="3" id="" multiple required="">
                                  <option selected="" disabled="" value="">Choose Allergies...</option>
                                  <option>None</option>
                                  <option>Food</option>                         
                                  <option>Pollen</option>
                                  <option>Mold</option>
                                  <option>Pet</option>
                                  <option>Dust Mite</option>
                                  <option>Cockroach & Mice</option>
                                  <option>Insect Venom</option>
                                  <option>Eye</option>
                                  <option>Medication</option>
                                  <option>Latex</option> 
                                  <option>Other</option>
                                </select>                                   
                              </div>
                            <div class="col-md-6">
                              <input class="form-control mb-3" type="number" max="200" min="0" placeholder="Weight-kg" aria-label="Weight-kg">
                              <input class="form-control" type="number" max="1000" min="0" placeholder="Height" aria-label="Height">
                            </div>
                            
                            <div class="col-md-6">                                   
                              <select class="form-select text-muted"  size="3" id="" multiple required="">
                                <option selected="" disabled="" value="">Choose Immunity Taken...</option>
                                <option>None</option>
                                <option>Chicken Pox</option>
                                <option>Diphtheria</option>
                                <option>Hepatitis B</option> 
                                <option>Measles</option>   
                                <option>Mumps</option>
                                <option>Pertussis (whooing cough)</option>
                                <option>Polio</option>
                                <option>Pneumococcal</option>
                                <option>Rubella</option>
                                <option>Tetanus</option>
                                <option>Influenza</option>
                              </select>                                   
                            </div>
                            <div class="col-md-6">
                              <textarea class="form-control" placeholder="List Previous Illness" rows="3" wrap="hard" maxlength="30" spellcheck="true"></textarea>
                            </div>
                            </fieldset>

                            <fieldset class="row g-2 mt-4">
                              <legend class="text-primary">Address Details</legend>
                              <div class="col-md-6">                                   
                                <select class="form-select text-muted" id="" required="">
                                  <option selected="" disabled="" value="">Choose Country...</option>
                                  <option value="Afghanistan">Afghanistan</option>
                                  <option value="Åland Islands">Åland Islands</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">American Samoa</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antarctica">Antarctica</option>
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Bouvet Island">Bouvet Island</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">Cayman Islands</option>
                                  <option value="Central African Republic">Central African Republic</option>
                                  <option value="Chad">Chad</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">Christmas Island</option>
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo</option>
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                  <option value="Cook Islands">Cook Islands</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote D'ivoire">Cote D'ivoire</option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czech Republic">Czech Republic</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">Dominican Republic</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                  <option value="Faroe Islands">Faroe Islands</option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">French Guiana</option>
                                  <option value="French Polynesia">French Polynesia</option>
                                  <option value="French Southern Territories">French Southern Territories</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea-bissau">Guinea-bissau</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macao">Macao</option>
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">Marshall Islands</option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherlands">Netherlands</option>
                                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                                  <option value="New Caledonia">New Caledonia</option>
                                  <option value="New Zealand">New Zealand</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">Norfolk Island</option>
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau">Palau</option>
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Philippines">Philippines</option>
                                  <option value="Pitcairn">Pitcairn</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reunion">Reunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russian Federation">Russian Federation</option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="Saint Helena">Saint Helena</option>
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                  <option value="Saint Lucia">Saint Lucia</option>
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">Sierra Leone</option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">Solomon Islands</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">South Africa</option>
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                  <option value="Swaziland">Swaziland</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                  <option value="Taiwan">Taiwan</option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Timor-leste">Timor-leste</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                  <option value="Tunisia">Tunisia</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Turkmenistan">Turkmenistan</option>
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="United States">United States</option>
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Viet Nam">Viet Nam</option>
                                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                                  <option value="Western Sahara">Western Sahara</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>                            
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="peteint-signup-work-province-state" placeholder="Province/State" required>
                              </div>                            
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="peteint-signup-work-city" placeholder="City" required>
                              </div> 
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="peteint-signup-surbub-name" placeholder="Surbub Name" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="peteint-signup-street-name" placeholder="Street Name" required>
                              </div> 
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="peteint-signup-building-number" placeholder="Building Number" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" class="form-control" id="peteint-signup-street-code" placeholder="Street Code" required>
                              </div>                           
                            </fieldset>

                            <fieldset class="row g-3 mt-4">
                              <legend class="text-primary">Contact Details</legend>
                              <div class="col-md-6">
                                <input class="form-control" type="email" class="form-control" id="petient-email-input" aria-describedby="emailHelp" placeholder="Email address" required>
                              </div>                            
                              <div class="col-md-6">
                                <input class="form-control" id="peteint-signup-phone-number-1" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="10" placeholder="Phone number-1" aria-label="Phone number 1" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" id="peteint-signup-phone-number-2" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="10" placeholder="Phone number-Optional" aria-label="Phone number Optionl">
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" id="peteint-signup-phone-number-3" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="10" placeholder="Phone number-Optional" aria-label="Phone number Optional">
                              </div>
                              
                            </fieldset>

                            <fieldset class="row g-2 mt-4">
                              <legend class="text-primary">Sign-in Details</legend>                             
                              <div class="mb-3">
                                <label for="petient-email-replicator" class="form-label text-muted">Email address</label>
                                <input type="email" class="form-control" id="petient-email-replicator" aria-describedby="emailHelp" placeholder="Email address" required disabled>
                              </div>
                              <label for="petient-signup-password-create" class="form-label text-muted">Create Password</label>
                              <div class="col-md-6">
                                <input class="form-control" type="password" placeholder="Password" id="petient-signup-password-create" aria-label="Password" required>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="password" placeholder="Password confirm" id="petient-signup-password-create-confirm" aria-label="Password" required>
                              </div>
                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="petient-signup-password-create-show">
                                  <label class="form-check-label text-primary" for="petient-signup-password-create-show">
                                    <small>Show password</small>
                                  </label>                               
                                </div>
                              </div>
                              
                            </fieldset>

                            <fieldset class="row g-2 my-4">
                              <div class="col-12 mb-4 ">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required="" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                                  <label class="form-check-label text-primary" for="invalidCheck3">
                                    Agree to terms and conditions
                                  </label>
                                  <div class="invalid-feedback">
                                    You must agree before submitting.
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <button class="btn btn-primary" type="submit">Sign-up</button>
                              </div>
                              <div class="col-6">
                                <button class="btn btn-primary" type="reset">Clear</button>
                              </div>
                            </fieldset>
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


<div class=" col-md-12 text-center credits p-0 mb-4">
  <div class="social-links">
    <a href="#" class="twitter p-2"><i class="bi bi-twitter"></i></a>
    <a href="#" class="facebook p-2"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram p-2"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin p-2"><i class="bi bi-linkedin"></i></a>
  </div>
</div>
</main>

<!----------------scripts-------------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>
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
