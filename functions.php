<?php 
	
// function simpleFunction() {
// 	echo "Hello World";
// }
// simpleFunction();

// function sayHello($name = "World") {
// 	echo "Hi $name <br>";
// }

$myNum = 10;

function addFive(&$num) {
	$num += 5;
}

addFive($myNum);
echo $myNum;


?>