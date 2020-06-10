<?php
	<?php



	function model_load($classname){
			if(!class_exists($classname)){

			$classFile = $classname.'.php';

			if(file_exists($classFile)){

			//加载类
			include $classFile;
			echo '已加载'.$classname,'<hr/>';
			return true;

					}
	
			}
	}
	//以下函数英语加载dorm子目录的代码
	
	function dorm_autoload($classname){
		if(!class_exists($classname)){

		$coursefile = 'dorm/' . $classname . '.php';
		//如果要加载的文件存在于dorm子文件夹
		if(file_exists($coursefile)){
			include $coursefile;
			echo '已加载'.$coursefile,'<hr/>';

			return true;

		}


	}


	function teaching_autoload($classname){
			if(!class_exists($classname)){

		$coursefile = 'teaching/' . $classname . '.php';
		//如果要加载的文件存在于teaching子文件夹
		if(file_exists($coursefile)){
			include $coursefile;
			echo '已加载'.$coursefile,'<hr/>';

			return true;

		}


	 }

	}




	spl_autoload_register('my_autoload');
	




?>