<?php
class Input{
	private $name;
	public function __construct($name){
		$this->name = $name;
	}
	public function render(){
		$out = '<input type="text" />';
		return $out;
	}
}
?>
