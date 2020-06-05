<?php 

/*
	1. For
	2. While
	3. Do..While
	4. Foreach
*/

// for($i = 0; $i <= 10; $i++) {
// 	echo "Number $i";
// 	echo "<br/>";
// }

$people = ['brad' =>"fdf@dfd",'jose'=> "fdfD#@fdf",'william'=>"email@example.com"];

foreach($people as $person=> $email) {
	echo $person.': '.$email;
	echo '<br>';
}


?>