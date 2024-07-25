<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" align="center">
    <h2>Trainer Information</h2>

    <table class="table table-striped" align="center">
        <thead>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody><?php foreach ($instructorlist as $key => $value) { ?>
                <tr>
                    <td><?php echo $value->id ?></td>
                    <td><?php echo $value->first_name ?></td>
                    <td><?php echo $value->last_name ?></td>
                    <td><?php echo $value->email ?></td>
                    <td><?php echo $value->country ?></td>
                    <td><?php echo $value->gender ?></td>
                    <?php if ($value->user_status == 0) { ?>
                        <td><a href="<?php echo base_url('index.php/admin/userAction') . '?id=' . $value->id ?>" ><input type="button" class="btn btn-primary" value="Accept" /></a></td>
                    <?php } else { ?>
                        <td>Approved</td>
                    <?php } ?>
                    <td><a href="<?php echo base_url('index.php/admin/editUser?id=') . $value->id; ?>"<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="<?php echo base_url('index.php/admin/delete?id=') . $value->id; ?>"<i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    if (isset($edituser)) {
        ?>

        <div class="container m-5">
            <div class="row m-y-2">
                <!-- edit form column -->
                <div class="col-lg-4 col-md-12 text-lg-center">
                    <h2>Edit Trainer</h2>
                </div>
            </div>
            <form role="form" action="saveUser" method="post">
            <div class="row m-y-2">
                <div class="col-lg-8 col-md-8 push-lg-4 personal-info">
                    <input type="hidden" name="id" value="<?php echo $edituser[0]->id; ?>"/>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="first_name" type="text" value="<?php echo $edituser[0]->first_name; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="last_name" value="<?php echo!empty($edituser[0]->last_name) ? $edituser[0]->last_name : ''; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" value="<?php echo!empty($edituser[0]->email) ? $edituser[0]->email : ''; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Country</label>
                            <div class="col-lg-9">
                                <div class="form-group text-box">

                                
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
    </div>
    <div class = "form-group row">
    <label class = "col-lg-3 col-form-label form-control-label">Gender</label>
    <div class = "col-lg-9">
    <?php if($edituser[0]->gender == 'male'){
    ?>             
                                    <input type="radio" name="gender" value="male" class="gender" checked> Male &nbsp;
                                <?php } else {
                                    ?>
                                    <input type="radio" name="gender" value="male" class="gender"> Male &nbsp;
                                    <?php
                                }
                                if ($edituser[0]->gender == 'female') {
                                    ?>
                                    <input type="radio" name="gender" value="female" class="gender" checked> Female &nbsp;
                                <?php } else { ?>
                                    <input type="radio" name="gender" value="female" class="gender"> Female &nbsp;
                                <?php } ?>

                                <?php if ($edituser[0]->gender == 'other') { ?>
                                    <input type="radio" name="gender" value="other" class="gender" checked> Other
                                <?php } else { ?>
                                    <input type="radio" name="gender" value="other" class="gender"> Other
<?php } ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <a href="<?php echo base_url('index.php/admin/index'); ?>" ><input type="reset" class="btn btn-secondary" value="Cancel"/></a>
                                <button type="submit" class="btn btn-primary" >Save Changes</button>
                            </div>
                        </div>
              
            </div>
            <div class="col-lg-4 pull-lg-8 text-xs-center">
                <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar" />
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Choose file</span>
                </label>
            </div>
        </div>
  </form>
    </div>
</div>


<?php
}
?>

</div>
