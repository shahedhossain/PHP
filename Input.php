<?php

namespace Shahed\IO;

class Input {

	public function __construct() {
		//TODO	
	}
	
	public static function readLine($msg = 'Enter value : ') {
		$line;
		if(PHP_OS == 'WINNT'){
			echo $msg;
			$line = stream_get_line(STDIN, 1024, PHP_EOL);
		}else {
			$line= readline($msg);
		}
		return trim($line);
	}
}
