<?php

require_once('google-login-api.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
try {
    $gapi = new GoogleLoginApi();
    
    $data = $gapi->thesportDb($id);
    
    echo $data;

}
catch(Exception $e) {
    echo $e->getMessage();
    exit();
}
}else{
    echo "set parameter nya aa"
}

?>