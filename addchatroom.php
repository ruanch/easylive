<?php
    include('ServerAPI.php');
    
    $p = new ServerAPI( '0vnjpoadnx8pz','VQ3injwJQG','/chatroom/create', array('chatroom'=>array('name'=>'busChat')));
    $r = $p->request();
    print_r($r);
    
?>

