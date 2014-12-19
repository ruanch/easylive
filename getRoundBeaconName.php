<?php
    //test data : 54CB0AD4-AF65-4817-A162-E1899F1BA962_1000_1000_babyModule,54CB0AD4-AF65-4817-A162-E1899F1BA962_1000_1000_babyModule,
    //$_POST['uuid'] = "'54CB0AD4-AF65-4817-A162-E1899F1BA962_1000_1000_SignInModule','54CB0AD4-AF65-4817-A162-E1899F1BA962_43001_20425_SignInModule'";
    if (isset($_POST['uuid'])){
        $uuid = $_POST['uuid'];
        
        
            $mysql_server_name="localhost"; //数据库服务器名称
            $mysql_username="root"; // 连接数据库用户名
            $mysql_password=""; // 连接数据库密码
            $mysql_database="easylive"; // 数据库的名字
        
        // 连接到数据库
        $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);

        $array=explode("_",$uuid);

            // 从表中提取信息的sql语句
            $strsql="SELECT uniqueid,beacon_name FROM `user` where uniqueid in (".$uuid.")";
            //echo $strsql;
            // 执行sql查询
            $result=mysql_db_query($mysql_database, $strsql, $conn);
            // 获取查询结果
            $row=mysql_fetch_array($result,MYSQL_ASSOC);


          echo json_encode($row);
        //echo $row;
        //    print_r($row);
        //echo $row[3];
        
        //    mysql_query("INSERT INTO user (userid, username, uuid,beacon_name) VALUES (2, 'el_10001', beaconName,beaconUDID)");
        
        
        // 释放资源
        mysql_free_result($result);
        // 关闭连接
        mysql_close($conn);
    
    }
    
   // echo "几何网讯签到处";
?>

