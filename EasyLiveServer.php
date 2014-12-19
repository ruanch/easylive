<?php
error_reporting(E_ALL);
set_time_limit(0);
//ob_implicit_flush();

$address = '192.168.2.102';
$port = 10005;
//创建端口
if( ($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
	echo "socket_create() failed :reason:" . socket_strerror(socket_last_error()) . "\n";
}

//绑定
if (socket_bind($sock, $address, $port) === false) {
	echo "socket_bind() failed :reason:" . socket_strerror(socket_last_error($sock)) . "\n";
}

//监听
if (socket_listen($sock, 5) === false) {
	echo "socket_bind() failed :reason:" . socket_strerror(socket_last_error($sock)) . "\n";
}

do {
	//得到一个链接
	if (($msgsock = socket_accept($sock)) === false) {
		echo "socket_accepty() failed :reason:".socket_strerror(socket_last_error($sock)) . "\n";
		break;
	}
	//welcome  发送到客户端
/**
	$mysql_server_name="localhost"; //数据库服务器名称
                    $mysql_username="root"; // 连接数据库用户名
                    $mysql_password=""; // 连接数据库密码
                    $mysql_database="easylive"; // 数据库的名字

                // 连接到数据库
                $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);

                    // 从表中提取信息的sql语句
                    $strsql="SELECT * FROM `signin` limit 0,1";
                    // 执行sql查询
                    $result=mysql_db_query($mysql_database, $strsql, $conn);
                    // 获取查询结果
                    $row=mysql_fetch_row($result);

                echo $row[2];


                // 释放资源
                mysql_free_result($result);
                // 关闭连接
                mysql_close($conn);
                $msg = $row[2];
                	socket_write($msgsock, $msg, strlen($msg));
                	echo 'read client message\n';

*/
	$buf = socket_read($msgsock, 8192);
	//if($buf == "123") socket_write($msgsock, $msg, strlen("456"));
	$talkback = $buf;//"456";//"received message:$buf\n";
	echo $talkback;
	if (false === socket_write($msgsock, $talkback, strlen($talkback))) {
		echo "socket_write() failed reason:" . socket_strerror(socket_last_error($sock)) ."\n";
	} else {
		echo 'send success';
	}
	socket_close($msgsock);
} while(true);
//关闭socket
socket_close($sock);


?>