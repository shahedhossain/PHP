<?php

namespace Shahed\IO;

class Argument {

	private $params;
	
	public function __construct(array $argv = null) {
		if($argv === null) {
			$argv = $_SERVER['argv'];		
		}
		array_shift($argv);
		$this->params = $argv;	
	}
	
	public function getParams() {
		return $this->params;
	}
	
	public function prints() {
		echo "{";
		for($i = 0; $i < sizeof($this->params); $i++) {
			echo " [" . $i . "]: " . $this->params[$i] ;
		}
		echo " }\n";
	}
}
