<?php

require_once('google-login-api.php');

if(isset($_GET['l'])){
    $id = $_GET['l'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->searchAllTeam($id);
    
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