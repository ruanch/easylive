<?php

    
    
   if (isset($_POST['username'])){
    $username = $_POST['username'];
    
       
//    $mysql_server_name="localhost"; //数据库服务器名称
//    $mysql_username="root"; // 连接数据库用户名
//    $mysql_password=""; // 连接数据库密码
//    $mysql_database="easylive"; // 数据库的名字
       
    // 连接到数据库
//    $conn=mysql_connect($mysql_server_name, $mysql_username,
//                           $mysql_password);
    
//    // 从表中提取信息的sql语句
//    $strsql="SELECT * FROM `user`";
//    // 执行sql查询
//    $result=mysql_db_query($mysql_database, $strsql, $conn);
//    // 获取查询结果
//    $row=mysql_fetch_row($result);
    
//    print_r($row);
       
//    mysql_query("INSERT INTO user (userid, username, uuid,beacon_name) VALUES (2, 'el_10001', beaconName,beaconUDID)");
       
       
    // 释放资源
    //mysql_free_result($result);
    // 关闭连接
//    mysql_close($conn);
       
       $dbhost = 'localhost';
       $dbuser = 'root'; //你的mysql用户名
       $dbpass = ''; //你的mysql密码
       $dbname = 'easylive'; //你的mysql库名
       
       //连接本地数据库
       $conn = mysql_connect($dbhost,$dbuser,$dbpass);
       if ($conn) {
           //echo "连接数据库成功";
       } else {
           echo "连接数据库失败";
       }
       //打开数据库
       mysql_select_db($dbname,$conn);
       //插入数据
       $sql="INSERT INTO SignIn (userid, id, username) VALUES (1, 1, '".$username."')";
       $result=mysql_query($sql,$conn)or die(mysql_error());
       
       
       //echo "打开数据库";
       //关闭数据库
       mysql_close($conn);
   }
    
//    $p = new ServerAPI( '0vnjpoadnx8pz','VQ3injwJQG','/user/getToken', array('userId'=>$userid,'name'=>$name,'portraitUri'=>''));
//    $r = $p->request();
//        echo $r;
//        //print_r($r);
//    }else{
//       $p = new ServerAPI( '0vnjpoadnx8pz','VQ3injwJQG','/user/getToken', array('userId'=>'el_001','name'=>'el_001','portraitUri'=>''));
//       $r = $p->request();
//       //print_r($r);
//        echo $r;
//    }
//    echo '{"code":200,"userId":"el_001","token":"OZsjVFJCUeKhkKCD7kbRXvh4wDLQkYs+0VlD4spyJqeZOD98LxArI9jXFoYIpc8+OjDck+yvbVpDxrOcXQgWNQ=="}';
    
//    echo "几何网讯签到处";
?>

