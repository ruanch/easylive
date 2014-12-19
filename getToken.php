<?php
    include('ServerAPI.php');
    if (isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $name = $_POST['name'];
    //$portraitUri = $_POST['portraitUri'];
    
    $p = new ServerAPI( '0vnjpoadnx8pz','VQ3injwJQG','/user/getToken', array('userId'=>$userid,'name'=>$name,'portraitUri'=>''));
    $r = $p->request();
        echo $r;
        //print_r($r);
    }else{
       $p = new ServerAPI( '0vnjpoadnx8pz','VQ3injwJQG','/user/getToken', array('userId'=>'el_001','name'=>'el_001','portraitUri'=>''));
       $r = $p->request();
       //print_r($r);
        echo $r;
    }
//    echo '{"code":200,"userId":"el_001","token":"OZsjVFJCUeKhkKCD7kbRXvh4wDLQkYs+0VlD4spyJqeZOD98LxArI9jXFoYIpc8+OjDck+yvbVpDxrOcXQgWNQ=="}';
?>

