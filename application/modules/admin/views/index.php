<?php if(!empty($authURL)){ ?>
    <a href="<?php echo $authURL; ?>"><img src="<?php echo base_url(); ?>public/assets/images/facebook-login.png"></a>
<a href="<?php echo $loginURL; ?>"><img src="<?php echo base_url(); ?>public/assets/images/google-sign-in-btn.png" /></a>

<?php }else if(!empty ($userData)){ ?>
    <h2>Facebook Profile Details</h2>
    <div class="ac-data">
        <img src="<?php echo $userData['picture']; ?>"/>
        <p><b>Facebook ID:</b> <?php echo $userData['oauth_uid']; ?></p>
        <p><b>Name:</b> <?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email:</b> <?php echo $userData['email']; ?></p>
        <p><b>Gender:</b> <?php echo $userData['gender']; ?></p>
        <p><b>Logged in with:</b> Facebook</p>
        <p><b>Profile Link:</b> <a href="<?php echo $userData['link']; ?>" target="_blank">Click to visit Facebook page</a></p>
        <p><b>Logout from <a href="<?php echo $logoutURL; ?>">Facebook</a></p>
    </div>
<?php }
if(!empty($loginURL)){
    ?>


    
<?php } ?>
<h2>Google Account Details</h2>
		<div class="row">	

			<?php if(isset($_SESSION['name'])){?>
				<div class="col s12 m6 l4 offset-l3 " >
					<div class="card ">
			            <div class="card-image waves-effect waves-block waves-light">
			              <img class="activator" src="<?=$_SESSION['profile_pic']?>">
			            </div>
			            <div class="card-content">
			             <span class="card-title activator grey-text text-darken-4"> <i class="material-icons"><?=$_SESSION['name']?></i></span>
			            </div>
						 <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?=$_SESSION['name']?><i class="material-icons right">close</i></span>
      <p>Email Id: <?=$_SESSION['email']?></p>
    </div>
			        </div>
				</div>
			<?php }?>
		</div>




    