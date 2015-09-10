
<?php
include("../models/file.php");
class Folder{
	public $files = [];
	public $path;
	public $fullPath;
	function __construct($fullPath, $path){
		$this->fullPath = $fullPath;
		$this->path = $path;
		$this->scan();
	}
	public function scan(){
		$files = [];
		$files = scandir($this->fullPath);
		sort($files);
		foreach($files as $file){
			if($file != "." && $file != ".."){
				$filepath = $this->fullPath . "/". $file;
				if(is_dir($filepath)){
					array_push($this->files, new Folder($filepath, $file));
				}
				else if(pathinfo($file, PATHINFO_EXTENSION) == "php"){	
					array_push($this->files, new File($this->fullPath."/".$file));
				}
			}
		}
		return $this->files;
	}
}
?>