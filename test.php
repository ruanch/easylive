<?php

    
    
    /****/
    $mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="root"; // 连接数据库用户名
    $mysql_password=""; // 连接数据库密码
    $mysql_database="easylive"; // 数据库的名字
    
    // 连接到数据库
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
    
    // 从表中提取信息的sql语句
    $strsql="SELECT * FROM `signin`;
    // 执行sql查询
    $result=mysql_db_query($mysql_database, $strsql, $conn);
    // 获取查询结果
    $row=mysql_fetch_row($result);
    
    echo $row[2];
    
    
    // 释放资源
    mysql_free_result($result);
    // 关闭连接
    mysql_close($conn);
    
    /****/
?>

