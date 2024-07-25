<div class="container-fluid login-container">  
    
    
    <div id="signup_model" class="modal fade" >
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="<?php echo base_url(); ?>public/assets/images/sarang_ico.png" alt="Avatar" >
                    </div>				
                    <h4 class="modal-title">New to Sarang? Sign up!</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body ">

                    <img src="<?php echo base_url(); ?>public/assets/images/signup-facebook.png" alt="facebook login" class="img-fluid pl-5 pr-5"/>

                    <img src="<?php echo base_url(); ?>public/assets/images/signup-google.png" alt="gmail login" class="img-fluid mt-3 pl-5 pr-5" />
                    <div class="container text-center p-2">
                        <span > - or - </span></div>
                    <div class="container text-center">
                        <input type="submit" name="submit" class="btn " value="CREATE ACCOUNT">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#">Already Registered? Login</a>
                </div>
            </div>
        </div>
    </div> 
<!--
    <div id="usertype_model" class="modal fade login-container" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
    <h3 class="text-center"><img src="<?php echo base_url(); ?>public/assets/images/sarang_logo.png"
                                                             height="50"/></h3>
                                                             
                    	 	
                    <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
             <!--   </div><h4 class="text-center">SELECT A USER TYPE</h4> 
                
                    <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                
     <!--      <div class="modal-body p-4">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-md-4">
                            <div class="row text-center user-type">
                                <div class="col-md-12 ">
                                    </div>
                                <div class="col-md-12">
                                    <span>Student <input type="radio" name="gender" value="male" id="student"></span>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="row text-center user-type">
                                <div class="col-md-12"></div>
                                <div class="col-md-12">
                                    <span>Instructor <input type="radio" name="gender" value="male" id="instructor"></span>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="row text-center user-type">
                                <div class="col-md-12"></div>
                                <div class="col-md-12">
                                    <span>Admin <input type="radio" name="gender" value="male" id="admin"></span>
                                </div>
                            </div>
                        </div>
                    </div>
 

                    <div class="container text-center mt-5">
                        <input type="button" name="submit" class="btn" id="onuserselect" value="NEXT">
                    </div>
                </div>
       

            </div>
        </div> 
        
        
        
    </div>   -->
    
    
    
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-8 mx-auto">
                    <div id="login-box" class="col-md-11">
                        <form id="signup-form" class="form" action="<?php echo base_url().'index.php/welcome/sarangSignup/'?>" method="post">

                            <h3 class="text-center p-2"><img src="<?php echo base_url(); ?>public/assets/images/sarang_logo.png"
                                                             height="50"/></h3>
                            <h4 class="text-center p-3">CREATE YOUR ACCOUNT AND JOIN WITH US!</h4>
                            <div class="row m-3 mx-auto justify-content-center align-items-center">
                                <div class="col-md-5 "><a href="<?php echo $authURL ?>" >
                                        <div class="fbsignup">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 "><a href="<?php echo $loginURL ?>">
                                      <div class="gplussignup">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="container text-center pb-3">
                                <span class="font-italic"> - or - </span></div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group text-box">
                                        <label for="username" >First name *</label><br>
                                        <input type="text" name="username" id="username" class="form-control" required>
                                    </div>
                                </div>

                                   <div class="col-md-6">
                                    <div class="form-group text-box">
                                        <label for="username" >Last name </label><br>
                                        <input type="text" name="lastname" id="lastname" class="form-control">
                                    </div>
                                </div>

                              <p id=avatar_hint></p>
                            </div>
                            <div class="row">

                             
                                <div class="col-md-6">
                                    <div class="form-group text-box">
                                        <label for="username" >Email *</label><br>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                </div>
                             
                                
                                <div class="col-md-6">
                                    <div class="form-group text-box">
                                        <label for="password" >Select gender *</label><br>
                                    
  <input type="radio" name="gender" value="male" class="gender"> Male &nbsp;
  <input type="radio" name="gender" value="female" class="gender"> Female &nbsp;
  <input type="radio" name="gender" value="other" class="gender"> Other
  
  
                                    </div>
                                     
                                </div>
                                  <p id=gender_hint class="float-right"></p>
                            </div>
                            <div class="row ">
                                   <div class="col-md-6">
                                    <div class="form-group text-box">
                                        <label for="password" >Password *</label><br>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-box">
                                        <label for="password" >Confirm password *</label><br>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                                    </div>
                                </div>

                                
                               
                                 
                                <p id=pass_hint class="text-center"></p>
                            </div>
                            
                                            <div class="row ">
                                        <div class="col-md-6">
                                            <div class="form-group text-box">
                                           
                                                <label for="country" >Country</label><br>
                                                   <select class="form-control2 country" name="country" >
    <?php
    $list = array("AF" => "Afghanistan", "AL" => "Albania", "DZ" => "Algeria",
        "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla",
        "AQ" => "Antarctica", "AG" => "Antigua and Barbuda", "AR" => "Argentina",
        "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria",
        "AZ" => "Azerbaijan", "AX" => "Åland Islands", "BS" => "Bahamas", "BH" => "Bahrain",
        "BD" => "Bangladesh", "BB" => "Barbados", "BY" => "Belarus", "BE" => "Belgium",
        "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda", "BT" => "Bhutan", "BO" => "Bolivia",
        "BA" => "Bosnia and Herzegovina", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil",
        "BQ" => "British Antarctic Territory", "IO" => "British Indian Ocean Territory",
        "VG" => "British Virgin Islands", "BN" => "Brunei", "BG" => "Bulgaria", "BF" => "Burkina Faso",
        "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CA" => "Canada",
        "CT" => "Canton and Enderbury Islands", "CV" => "Cape Verde", "KY" => "Cayman Islands",
        "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile", "CN" => "China",
        "CX" => "Christmas Island", "CC" => "Cocos [Keeling] Islands", "CO" => "Colombia",
        "KM" => "Comoros", "CG" => "Congo - Brazzaville", "CD" => "Congo - Kinshasa", "CK" => "Cook Islands",
        "CR" => "Costa Rica", "HR" => "Croatia", "CU" => "Cuba", "CY" => "Cyprus", "CZ" => "Czech Republic",
        "CI" => "Côte d’Ivoire", "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica",
        "DO" => "Dominican Republic", "NQ" => "Dronning Maud Land", "DD" => "East Germany",
        "EC" => "Ecuador", "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea",
        "ER" => "Eritrea", "EE" => "Estonia", "ET" => "Ethiopia", "FK" => "Falkland Islands",
        "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland", "FR" => "France", "GF" => "French Guiana",
        "PF" => "French Polynesia", "TF" => "French Southern Territories", "FQ" => "French Southern and Antarctic Territories",
        "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana",
        "GI" => "Gibraltar", "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe",
        "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau",
        "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard Island and McDonald Islands", "HN" => "Honduras",
        "HK" => "Hong Kong SAR China", "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia",
        "IR" => "Iran", "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle of Man", "IL" => "Israel", "IT" => "Italy",
        "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JT" => "Johnston Island", "JO" => "Jordan",
        "KZ" => "Kazakhstan", "KE" => "Kenya", "KI" => "Kiribati", "KW" => "Kuwait", "KG" => "Kyrgyzstan",
        "LA" => "Laos", "LV" => "Latvia", "LB" => "Lebanon", "LS" => "Lesotho", "LR" => "Liberia",
        "LY" => "Libya", "LI" => "Liechtenstein", "LT" => "Lithuania", "LU" => "Luxembourg",
        "MO" => "Macau SAR China", "MK" => "Macedonia", "MG" => "Madagascar", "MW" => "Malawi",
        "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands",
        "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "YT" => "Mayotte", "FX" => "Metropolitan France",
        "MX" => "Mexico", "FM" => "Micronesia", "MI" => "Midway Islands", "MD" => "Moldova", "MC" => "Monaco",
        "MN" => "Mongolia", "ME" => "Montenegro", "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique",
        "MM" => "Myanmar [Burma]", "NA" => "Namibia", "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands",
        "AN" => "Netherlands Antilles", "NT" => "Neutral Zone", "NC" => "New Caledonia", "NZ" => "New Zealand",
        "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NU" => "Niue", "NF" => "Norfolk Island",
        "KP" => "North Korea", "VD" => "North Vietnam", "MP" => "Northern Mariana Islands", "NO" => "Norway",
        "OM" => "Oman", "PC" => "Pacific Islands Trust Territory", "PK" => "Pakistan", "PW" => "Palau",
        "PS" => "Palestinian Territories", "PA" => "Panama", "PZ" => "Panama Canal Zone", "PG" => "Papua New Guinea",
        "PY" => "Paraguay", "YD" => "People's Democratic Republic of Yemen", "PE" => "Peru", "PH" => "Philippines",
        "PN" => "Pitcairn Islands", "PL" => "Poland", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar",
        "RO" => "Romania", "RU" => "Russia", "RW" => "Rwanda", "RE" => "Réunion", "BL" => "Saint Barthélemy",
        "SH" => "Saint Helena", "KN" => "Saint Kitts and Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin",
        "PM" => "Saint Pierre and Miquelon", "VC" => "Saint Vincent and the Grenadines", "WS" => "Samoa",
        "SM" => "San Marino", "SA" => "Saudi Arabia", "SN" => "Senegal", "RS" => "Serbia", "CS" => "Serbia and Montenegro",
        "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SK" => "Slovakia", "SI" => "Slovenia",
        "SB" => "Solomon Islands", "SO" => "Somalia", "ZA" => "South Africa", "GS" => "South Georgia and the South Sandwich Islands", 
        "KR" => "South Korea", "ES" => "Spain", "LK" => "Sri Lanka", "SD" => "Sudan", "SR" => "Suriname", "SJ" => "Svalbard and Jan Mayen",
        "SZ" => "Swaziland", "SE" => "Sweden", "CH" => "Switzerland", "SY" => "Syria", "ST" => "São Tomé and Príncipe", "TW" => "Taiwan",
        "TJ" => "Tajikistan", "TZ" => "Tanzania", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau",
        "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey", "TM" => "Turkmenistan", 
        "TC" => "Turks and Caicos Islands", "TV" => "Tuvalu", "UM" => "U.S. Minor Outlying Islands", "PU" => "U.S. Miscellaneous Pacific Islands",
        "VI" => "U.S. Virgin Islands", "UG" => "Uganda", "UA" => "Ukraine", "SU" => "Union of Soviet Socialist Republics",
        "AE" => "United Arab Emirates", "GB" => "United Kingdom", "US" => "United States", "ZZ" => "Unknown or Invalid Region",
        "UY" => "Uruguay", "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VA" => "Vatican City", "VE" => "Venezuela", "VN" => "Vietnam",
        "WK" => "Wake Island", "WF" => "Wallis and Futuna", "EH" => "Western Sahara", "YE" => "Yemen", "ZM" => "Zambia", "ZW" => "Zimbabwe");

    $MyCountry = $edituser[0]->country;

    foreach ($list as $key => $country) {
        echo "<option value='". $key ."'". ($key == $MyCountry ? 'selected' : '') . ">" . $country . '</option>';
    }
 
   ?> 
                                                   </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-box">
                                                <label for="password" >Timezone</label><br>
                                                <input type="text" name="timezone" id="timezone" class="form-control" required readonly>
                                            </div>
                                        </div>
                                    
                                    </div>
                            
                            <input type="hidden"  name="user_type"  value="student" id="user_type"/>

                       
                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="CREATE ACCOUNT"><Br>
                                <p >or </p><br> <a href="<?php echo base_url();?>index.php/welcome/login">Login</a>
                            </div>
                           
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
  
</div>



