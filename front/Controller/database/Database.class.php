<?php
require_once('config.php');	

class Database{
	private $host;
	private $user;
	private $password;
	private $dbname;
	private $port;
	private $link;
	private $res;
	private $data;
	
	public static	$db ;
	public static	function mydb($config){
		if(self::$db == null){
			self::$db = new self($config);
		}
		return self::$db;
	}
	public function __construct($config){
		$this->host = $config['host'];
		$this->user = $config['user'];
		$this->password = $config['password'];
		$this->dbname = $config['dbname'];
		$this->port = $config['port'];
		$this->link = @mysqli_connect($this->host,$this->user,$this->password,$this->dbname,$this->port);
		if(!$this->link){
			echo mysqli_connect_errno();
			echo mysqli_connect_error();
			echo '连接失败';
			exit();
		}
		mysqli_query($this->link,"SET NAMES UTF8");
	}
	// 查询函数 	select
	public function query($sql){
		$this->data = [];
		$this->res = mysqli_query($this->link,$sql);
		while($row = mysqli_fetch_assoc($this->res)){
			$this->data[] = $row;
		}
		mysqli_free_result($this->res);		//释放资源
		return $this->data;
	}
	//update	/	insert	/	delete
	public function upOrIn($sql){
		$this->res = mysqli_query($this->link,$sql);
		return $this ->res;
	}
	
	public function closeDb(){
		mysqli_closeDb($this->link);
	}
	
}
//在类的外部调用静态函数		类::静态方法-->数据库对象
//$db = Database::mydb($config);
//var_dump($db);



//$mydb = new Database($config);
//查询
//$sql = "SELECT * FROM l_user";
//$userArr = $mydb->query($sql);
//var_dump($userArr);

//修改密码
//$upSql = "UPDATE l_user SET user_pwd = '123123' where user_id = '1'";
//$flag = $mydb ->upOrIn($upSql);
//var_dump($flag);



?>