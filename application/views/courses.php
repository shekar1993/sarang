

<div class="empty_space"></div>
<div class ="container-fluid justify-content-center" align="center">
    <h1 class="text-center2"> LANGUAGE COURSES</h1>
    <p id="description">having over<b> 7 million students </b>worldwide and more than <b> 30,000 online courses</b> </p>
    <div class ="container" id="filter">
        <div class = "row d-flex mx-auto justify-content-center align-items-center">
            <div class ="col-md-3 show" > <p class="float-left">showing 1-6 of 12 cources</p></div>

            <div class="col-md-6  mx-auto" align="center">
                <p class="">
                    <span class="p-2">Campus</span>
                    <span class="p-2">Education</span>
                    <span class="p-2">Building</span>
                    <span class="p-2">Teacher</span>
                    <span class="p-2">Students</span>
                </p>
            </div>

            <div class="col-md-3" >
                <p class="float-right">
                    <i class="fa fa-th-large" area-hidden="true"></i>&nbsp; &nbsp;
                    <i class="fa fa-list" area-hidden="true"></i></p>
            </div>
        </div> 
    </div>
</div>

<div class="container course-box ">
    <div class="row equal justify-content-center align-items-center">
        <?php for($i=0;$i<6;$i++){ ?>
        <div class="col-md-5 course-image mt-5 mx-auto " >

            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-sm-6 " >
                    <h3 id="master">Photography Master</h3>
                    
                    <p> By Admin  | 17 Sep  2015</p><br>
                    
                    
                     <p> <i class="fa fa-user" aria-hidden="true"></i> 56  &nbsp;  239</p><br>
                     <i class="fa fa-star" style="color:#d6c60f;" aria-hidden="true"></i>
                    <i class="fa fa-star" style="color:#d6c60f;" aria-hidden="true"></i>
                    <i class="fa fa-star" style="color:#d6c60f;" aria-hidden="true"></i>
                    <i class="fa fa-star" style="color:#d6c60f;" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i><br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm incididunt ut labore et dolore
                    Ut enim , consequat.
                    <br><br>

                    <a href="<?php echo base_url();?>index.php/welcome/course_details"> <button class="button-get button22 align-items-end"><b>LEARN NOW</b></button></a>
                </div>
                <div class="col-sm-6">
                    <div><img src="<?php echo base_url() . 'public/assets/images/' ?>img3.jpg"  style="height:100%;"></div>
                </div>
            </div>
        </div>
        <?php }?>
</div>
    </div>

    
    
  <div class="empty_space"></div>  
<div class="container-fluid course-image3 course-box">
    <div class="row d-flex mx-auto justify-content-center align-items-center h-100">
        <div class="col-md-5 col-sm-6 col-xs-6 become-instructor">
            <h3 id="become"><b>BECOME AN INSTRUCTOR</b></h3>
            <p style="color:white;" >join thousands of instructors and earn money hassle free !</p>
        </div>
        <div class="col-md-5 col-sm-6 col-xs-6">
            <p class="float-right get-now">

                <button class="button-get button20"><b>GET STARTED NOW</b></button>
            </p>
        </div>
    </div>
</div>
