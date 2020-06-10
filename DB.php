<?php


include'spl_autoload.php';


//创建DBDriver对象，连接数据库
$db = new DBDriver();
$sql='select * from users';

//返回一条记录，不是多条
$r = $db->get_results_records($sql);
var_dump($r);
// $db->query($sql);
// $db->get_results_records();

// echo '名字是:',$r['name'],'<br/>';
// echo '密码是:',$r['password'];

// $name="李小龙";

// $sql = 'delete from users where name = "'.$name .'"';
// $db->exec($sql);

$sql = 'insert into users (name,password,intro) values("李小龙","lixiaoong","lixiaoong")';
$db->exec($sql);
$id = $db->lastInsertId();
echo 'id是：'.$id,'<br/>';

$sql ='select name from users where id="'.$id;

$r = $db->get_results_records($sql);
// $sql = 'select * from users where name =""';
echo '欢迎你：'.$r['name'];
?> 
