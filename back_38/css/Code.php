<?php
	class Code{
		private $width;
		private $height;
		private $text;
		private $img;
		private $count;			//字符数量
		//构造函数
		public function __construct($width,$height,$count){
			$this -> width = $width;
			$this -> height = $height;
			$this -> count = $count;
			$this -> outPut();
		}
		public function createText(){
			$allArr = [];
			$arr2 = range("A","Z");
			$allArr = array_merge($arr2);
			$len = count($allArr);
			for($i = 0;$i<$this -> count;$i++){
				$index = mt_rand(0,$len-1);
				$this->text .= $allArr[$index];
			}
			return $this -> text;
		}
		public function createImg(){
			$this -> img = imagecreate($this->width,$this->height);
			
			imagecolorallocate($this->img,mt_rand(0,170),mt_rand(0,170),mt_rand(0,170));
		}
		public function textToImg(){
			for($i = 0;$i<$this->count;$i++){
				$color = imagecolorallocate($this->img,mt_rand(171,255),mt_rand(171,255),mt_rand(171,255));
				
				imagettftext($this->img,30,mt_rand(-45,45),$i*($this->width/$this->count)+5,30,$color,'jian.TTF',$this->text[$i]);
			}
		}
		
		public function getCode(){
			return $this->text;
		}
		
		public function outPut(){
			header("content-type:image/png");
			$this->createText();
			$this->createImg();
			$this->textToImg();
			imagepng($this->img);
		}
	}
?>