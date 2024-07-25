
</div>
</div>
      <footer class="footer">
            © 2019 Design by pixselo
        </footer>
<script src="<?php echo base_url();
?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url();
?>public/js/popper.min.js"></script>
<script src="<?php echo base_url();
?>public/js/bootstrap.min.js"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url();
?>public/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url();
?>public/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url();
?>public/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?php echo base_url();
?>public/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url();
?>public/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url();
?>public/js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>public/css/slick.js" 
type="text/javascript" charset="utf-8"></script>


<script>

    var fillForm = {};
    $('.custom-control-label').hide();
    var url = window.location.pathname;
    var url = url.split('/');
    var lastEl = url.slice(-1)[0];
    
    
    if(lastEl=='signup'){
    window.onbeforeunload = function () {
        if (isEmpty(fillForm)) {

        } else {
 
            return "Changes will not be saved! \n Are you sure you want to go back?";
        }
    }
    }


    $(document).ready(function () {

        $('.gender').on('click', function (e) {
            $('.gender.active').not(this).removeClass('active');
            $('.gender').not(this).find('.custom-control-label').hide();
            var checkBox = $(this).find('.custom-control-label');
            checkBox.show();
            var gender = checkBox.attr('id');
            $('#gender').val(gender);
            fillForm["gender"] = gender;
            $(this).toggleClass("active");
        });

        // Show the Modal on load
        if (isEmpty(fillForm)) {
<?php if (isset($result) && $result=='warning') {
    ?>

                showAlert("Failed", 'This email address already registered \n try different email address', 'OK', '<?php echo $result; ?>');

<?php } ?>
            $("#usertype_model").modal("show");
        }

        $('.user-type').on('click', function (e) {
            $('.user-type.active').not(this).removeClass('active');
            var usertype = $(this).find('input[type=radio]').attr('id');
            fillForm["utype"] = usertype;
            $('#user_type').val(usertype);
          
            $(this).toggleClass("active");
            $('.user-type.active').find('input[type=radio]').prop('checked', true);

        });
        $("#onuserselect").on('click', function (e) {
            if (isEmpty(fillForm)) {

                alert("Select any one of the option before proceed");
            } else {
                var utype = fillForm["utype"];


                $.ajax({
                    type: "POST",
                    url: "storeutype",
                    data: {usertype: utype},
                    dataType: "text",
                    cache: false,
                    success: function (response) {

                        $("#usertype_model").modal("hide");
                        getTimezone();
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.log(xhr.statusText);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });

            }

        });

    });


    function isEmpty(obj) {
        return Object.keys(obj).length === 0;
    }

    $('#username').keyup(function () {
        'use strict';
        fillForm['uname'] = $(this).val();

    });
    $('#lastname').keyup(function () {
        'use strict';
        fillForm['lname'] = $(this).val();

    });
    $('#email').keyup(function () {
        'use strict';
        fillForm['email'] = $(this).val();

    });
    $('input[name=cpassword]').keyup(function () {
        'use strict';

        if ($('input[name=password]').val() === $(this).val()) {
            $('#pass_hint').removeClass('text-warning').addClass('text-success');
            $('#pass_hint').html('match');
            fillForm['pass'] = $(this).val();
            this.setCustomValidity('');
            setTimeout(function () {
                $("#pass_hint").html('');
            }, 2000);
        } else {
            $('#pass_hint').removeClass('text-success').addClass('text-warning');
            $('#pass_hint').html('mismatch');
            this.setCustomValidity('Passwords must match');
        }
    });
    $("#signup-form").submit(function (e) {
        if (!validateForm()) {
            e.preventDefault();
        }
    });


    function validateForm() {
        if (fillForm["utype"] === '') {
            return false;
        }

        if (fillForm["gender"] === '' || !('gender' in fillForm)) {
            $('#gender_hint').addClass('text-warning');
            $('#gender_hint').html('Select gender before proceed');
            return false;
        } else {
            return true;
        }

    }
    function getTimezone() {

        var offset = new Date().getTimezoneOffset();
        var timeOffSet = offset + (-2 * offset);

        $.ajax({
            type: "POST",
            url: "getTimeZone",
            data: {offset: timeOffSet},
            dataType: "text",
            cache: false,
            success: function (response) {

                $('#timezone').val(response);
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
        return true;
    }
function logoutAlert(){
swal({
  title: "Logout ",
  text: "Are you sure? \n you want to logout from sarang",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Logout! \n successfully logged out ", {
      icon: "success",
        buttons: true,
    })
            .then((ok)=>{
                if(ok){
                      window.location.href = "<?php echo base_url();?>index.php/welcome/logout";
          }
          });
  
  } else {
    
  }
});
    
}
</script>

<script type="text/javascript">
    $(document).on('ready', function () {

        $(".variable").slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            variableWidth: true,
            slidesToShow: 3,
            prevArrow: $('.left_arrow'),
            nextArrow: $('.right_arrow'),
        });

    });
</script>