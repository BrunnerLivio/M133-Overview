<?php
class File{
	public $name;
	public $fullPath;
	public $sourceCode;
<<<<<<< HEAD
	public $type = "file";
=======
>>>>>>> f7c3a91dd3c4a21c0322cc84eaa441b518dfffbf
	function __construct($fullPath){
		$this->name = str_replace(".php","", basename($fullPath));
		$this->fullPath = str_replace("../../", "", $fullPath);
		try{
			$myfile = fopen($fullPath, "r");
			$this->sourceCode = fread($myfile,filesize($fullPath));
			fclose($myfile);
		}
		catch(Exception $ex){
			
		}
	}
}	
?>