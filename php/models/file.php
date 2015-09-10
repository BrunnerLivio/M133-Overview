<?php
class File{
	public $name;
	public $fullPath;
	public $sourceCode;
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