<?php
 class A{
	 public function printItem($string){
		 echo "Hi $string ";
	 }
	 public function printPHP(){
		 echo 'I am from iceHeat '.PHP_EOL;
	 }
 }
	class B extends A {
	 public function printItem($string){
		 echo "Hi $string ";
	 }
	 public function printPHP(){
		 echo 'I am from Switch '.PHP_EOL;
	 }
 }

	$a = new A();
	$b = new B();

	$a->printItem("Desmond");
	$a->printPHP();

	$b->printItem("Gift");
	$b->printPHP();



?>
