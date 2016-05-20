<?php
// init app with app id and secret
FacebookSession::setDefaultApplication( '64296382121312313','8563798aasdasdasdweqwe84' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://www.socialnetwk.com/fbconfig.php' );	
?>