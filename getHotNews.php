<?php

require_once('google-login-api.php');

try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->getHotNews();
    
    echo $data;

}
catch(Exception $e) {
    echo $e->getMessage();
    exit();
}

?>