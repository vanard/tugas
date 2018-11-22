<?php

require_once('google-login-api.php');

if(isset($_GET['l'])){
    $name = $_GET['l'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->searchAllTeam($name);
    
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
