<?php

$config['facebook_app_id']              = '2092252317545311';
$config['facebook_app_secret']          = '665cf69c5c318e15de09a0befcb77d7e';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'index.php/welcome/fblogin';
$config['facebook_logout_redirect_url'] = 'index.php/welcome/logout';
$config['facebook_permissions']         = array( 'email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;