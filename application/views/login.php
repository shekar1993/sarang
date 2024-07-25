<div class="container-fluid login-container">    
    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-8 mx-auto">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="saranglogin" method="post">
                            <h3 class="text-center p-2"><img src="<?php echo base_url();
?>public/assets/images/sarang_logo.png" height="50"/></h3>
                            <h3 class="text-center p-2">LOG INTO YOUR SARANG ACCOUNT!</h3>

                            <div class="row m-3 mx-auto justify-content-center align-items-center">
                                <div class="col-md-5 "><a href="<?php echo $authURL ?>" >
                                        <div class="fblogin">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 "><a href="<?php echo $loginURL ?>">
                                        <div class="gpluslogin">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="container text-center pb-3">
                                <span class="font-italic"> - or - </span></div>
                     
                            <div class="form-group">
                                <label for="email" >Email *</label><br>
                                <input type="email" name="email" id="email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="password" >Password *</label><br>
                                <input type="password" name="password" id="password" class="form-control" >
                            </div>
                            <input type="hidden" value="login" name="process_type"/>

                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="SIGN IN">
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

   echo var_dump($login_result);
   
	if (isset($login_result) && $login_result == 'warning') {
        ?>
        <script>
            showAlert("Login Failed", 'Account created \n waiting for admin approval', 'OK', '<?php echo $login_result; ?>');
        </script>
    <?php } else if (isset($login_result) && $login_result == 'error') { ?>

        <script>
            showAlert("Login Failed", 'Invalid email or password \n Try again', 'OK', '<?php echo $login_result; ?>');
        </script>
        <?php }
    ?>
</div>