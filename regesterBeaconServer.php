<?php
    //test data:beaconName=宝宝一号&beaconUDID=54CB0AD4-AF65-4817-A162-E1899F1BA962_62299_64224_babyModule
    //$_POST['beaconName'] = '宝宝一号';
    //$_POST['beaconUDID'] = '54CB0AD4-AF65-4817-A162-E1899F1BA962_62299_64224_babyModule';

   if (isset($_POST['beaconName'])){
    $beaconName = $_POST['beaconName'];
    $beaconUDID = $_POST['beaconUDID'];

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

       $array=explode("_",$beaconUDID);
       //print_r($array);
       //uuid
       $uuid = $array[0];
       //majorid
       $majorid = $array[1];
       //minorid
       $minorid = $array[2];
       //identifier
       $identifier = $array[3];
       //echo $uuid.$majorid.$minorid.$identifier;

       //插入数据
       $sql="INSERT INTO user (userid, username, uuid,beacon_name,majorid,minorid,identifier,uniqueid) VALUES
                                                                (1,
                                                         'el_10001',
                                                        '".$uuid."',
                                                        '".$beaconName."',
                                                        '".$majorid."',
                                                        '".$minorid."',
                                                        '".$identifier."',
                                                        '".$beaconUDID."')";
       $result=mysql_query($sql,$conn)or die(mysql_error());
       
       //echo "打开数据库";
       //关闭数据库
       mysql_close($conn);
   }
?>

