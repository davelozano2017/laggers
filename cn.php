<?php 
ob_start();
$uploaded_files_path = "../../uploads/jQuery-File-Upload-9.8.0/server/php/files/";
$dsn = "mysql:host=localhost;dbname=dblaggerslane;charset=utf8";
$opt = array(
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
$pdo = new PDO($dsn,'root','', $opt);
$db = new mysqli('localhost','root','','dblaggerslane');
//----------Search Keyword-----------//

function hws($string, $word){
	$next_match = ucwords($word);
    $string = str_replace($word, "<span style='background:yellow;'>".$word."</span>", $string);
    $string = str_replace($next_match, "<span style='background:yellow;'>".$next_match."</span>", $string);
    return $string;
}

//----------Generate Random Characters-----------//

function rand_strings($length) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";	
	$str = "";
	$size = strlen($chars);
	for( $i = 0; $i < $length; $i++ ) {
		$str = $str .  $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
}

//----------Delete File or Folder-----------//

function delete_file($path){
    if (is_dir($path) === true){
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file){
            Delete(realpath($path) . '/' . $file);
        }
        return rmdir($path);
    }
    else if (is_file($path) === true){
        return unlink($path);
    }
    return false;
}

function load_dropdown_from_textfile($filename){
	$handle = fopen("../../textfiles/dropdown/".$filename.".txt", "r");
	if ($handle) {
		while (($line = fgets($handle)) !== false) {
			echo "<option>$line</option>";
		}
	} else {
	 
	} 
	fclose($handle);
}

