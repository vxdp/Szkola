<?php
class Form{

	private $legend;
	private $ctrls;

	public function __construct($text){
		$this->legend = $text;
	}
	public function pack(...$controls){
		$this->ctrls = $controls;
	}

	private function getHeader(){
		return '<h2>'.$this->legend.'</h2>';
	}

	public function display(){
		foreach($this->ctrls as $ctrl){
			$this->ctrls .= $ctrl->render();
		}
		$out = '<form>'.$this->getHeader().$this->ctrls.'</form>';
		return $out;
	}

}
?>
