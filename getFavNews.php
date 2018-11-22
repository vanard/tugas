<?php

require_once('google-login-api.php');

if(isset($_GET['q'])){
    $team = $_GET['q'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->getFavNews($team);
    
    echo $data;

}
catch(Exception $e) {
    echo $e->getMessage();
    exit();
}
}else{
    echo "belom set parameter mas";
}

?>