<?php
class Baca {
	function xml() {
		$handle = file("database/XML File.xml");
		$result = file_get_contents("database/XML File.xml");
		return $result;
	}
	function csv(){
		$handle = file("database/CSV File.csv");
		return $handle;
	}
	function sql(){
		$handle = file("database/SQL File.sql");
		return $handle;
	}
}