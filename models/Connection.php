<?php
	class Connection 
	{
		public function connect(){
			$link = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
			return $link;
		
		}
	}
?>  