<?php

require_once('google-login-api.php');

if(isset($_GET['e'])){
    $id = $_GET['e'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->searchEvent($id);
    
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