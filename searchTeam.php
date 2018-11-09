<?php

require_once('google-login-api.php');

if(isset($_GET['t'])){
    $id = $_GET['t'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->searchTeam($id);
    
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