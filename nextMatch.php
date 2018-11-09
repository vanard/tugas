<?php

require_once('google-login-api.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
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