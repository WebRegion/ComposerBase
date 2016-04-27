<?php
ini_set('display_errors',1);
ini_set('error_reporting',2047);

//phpinfo(); exit;
include_once('class.php');

$post = new EnterPost('json');
if ($post->test($_POST['Name']) && $post->test($_POST['Email']) && $post->testmail($_POST['Email']) && $post->test($_POST['agree'])) {	
	$res=$post->savefile($_POST);
    Echo "Данные успешно сохранены в файле $res";
} else { 
	foreach ($post->errors as $val) {echo "$val<br />\r\n";}
}
