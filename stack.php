<?php


class Stack {
	private $_size;
	private $_stack = [];


	public function __construct($size) {
		$this->_size = $size;
	}


	public function push($n) {
		if (count($this->_stack) >= $this->_size) {
			return false;
		}
		$this->_stack[] = $n;
		return true;
	}


	public function pop() {
		return array_pop($this->_stack);
	}


	public function top() {
		if(!$this->_stack){
			return null;
		}
		return end($this->_stack);
	}
}


/**
* example usage
*/
$f1 = new Stack(30);

// push values 1-20
for ($i = 1; $i <= 30; ++$i) {
	$f1->push($i);
}

// pop all values
// while (($val = $f1->pop()) != null) {
// 	echo $val . "\n";
// }
echo $f1->top();