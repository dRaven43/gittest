<?php

class foo {

	private a;
	private b;
	private c;

	public function seta($value){
		$this->a = $value;
	} // end function seta 

	public function setb($value){
		$this->b = $value;
	} // end function setb

	public function setc($value){
		$this->c = $value;
	} // end function setc

	public function geta(){
		return $this->a;
	}  // end function geta

	public function getb(){
		return $this->b;
	} // end function getb


} // end class foo


?>
