<?php
//该类代表数据库，负责对数据库进行操作
//这个文件是cc写的
class DBDriver{
	public $connetion;
	public $statement;


	public function  __construct(){

		try{


			$this ->connetion = new PDO('mysql:host=localhost;port=3306;dbname=web_two_db','root','');

			}catch(PDOExcetion $e){
				echo '数据库连接出错，错误原因是：'. $e->getMessage(),'<br/>';
				exit;

			}
			echo '连接成功';

	}
	public function query($sql){
		$this->statement = $this->connetion->query($sql);
		if($this->statement == false){
			echo '错误代码是：',$this->connetion->errorCode(),'<br/>';
			echo '错误原因是：' ,$this->connetion->errorInfo()[2],'<br/>';
			exit;
		}
}

	public function get_results_records($sql,$only=true){
		if(!isset($this->statement)){
			$this->query($sql);
		}

		if($only == true){
			return $this->$statement->fetch();

		}else{
			return $this->$ statement->fetchAll();
		}

	}

	public function exec($sql){
		$this->connetion->exec($sql);
		if($n == false){
			echo '错误代码是：',$this->connetion->errorCode(),'<br/>';
			echo '错误原因是：' ,$this->connetion->errorInfo()[2],'<br/>';
			exit;
			}else{
				echo '操作成功！','<br/>';
				echo '受影响的行数是：'.$n.'行。','<br/>';
			}
		}
	
}



?>