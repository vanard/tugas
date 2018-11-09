<?php

require_once('google-login-api.php');

try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->sportDb();
    
    echo $data;

}
catch(Exception $e) {
    echo $e->getMessage();
    exit();
}

?>