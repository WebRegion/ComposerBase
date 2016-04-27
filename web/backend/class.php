<?php
class EnterPost {
   private $cat;
   public $errors;	
	
public function __construct($cat) {
   $this->cat=$cat;
}		

public function test($val) {
  if (!isset($val)||($val==null)) {$this->errors[]="неверно заполнены поля";} else {return true;}
}
	
public function testmail($val) {
 if (preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,5}/",$val)) {return true;} else {$this->errors[]="неверно введен email адрес";}
}	
	
public function savefile($arr) {
  $dir=__DIR__."/".$this->cat."/";	
  if(!file_exists($dir)) {$add=mkdir ($dir, 0777);} 	
  $file=$dir.date("Y-m-d-H-i-s").".json";	
	
  $fh = fopen($file, "wb");
		if (fwrite($fh, json_encode($arr))<>false) {$res=true;} else {$this->errors[]="Запись в файл не удалась";}
		fclose($fh);
  
  if($res) {return $file;} else {return false;}	
  //if (file_put_content($file,json_encode($arr),LOCK_EX)) {return $file;} else {return false;}    // такой метод тоже знаю, но тот что выше - надежнее
}	

}