<?php

require_once('google-login-api.php');

if(isset($_GET['q']) &&
    isset($_GET['from'])
){
    $team = $_GET['q'];
    $date = $_GET['from'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->getFavNews($team, $date);
    
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