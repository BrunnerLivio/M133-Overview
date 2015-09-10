<?php
class bundles{
	private static $scriptsDir = "js";
	private static $styleDir = "css";
	public static function renderScripts(){
		self::scanFolder(self::$scriptsDir, "js");
	}
	public static function renderStyles(){
		self::scanFolder(self::$styleDir, "css");
	}
	private static function scanFolder($dir, $extension){
		$files = scandir($dir);
		rsort($files);
		foreach($files as $file){
			if($file != "." && $file != ".."){
				$filepath = $dir."/".$file;
				if(is_dir($filepath)){
					
					self::scanFolder($filepath, $extension);
				}
				else if(pathinfo($file, PATHINFO_EXTENSION) == $extension){
					if($extension == "js"){
						echo "<script src=\"".$dir ."/". $file ."\" text=\"text/javascript\"></script>";
					}
					else if($extension == "css"){
						echo "<link href=\"".$dir ."/". $file ."\" rel=\"stylesheet\" type=\"text/css\" />";
					}
					
				}
			}
		}
	}
}	
?>