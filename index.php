<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-8 - Funktsioonid</title>
</head>
<body>
	<h2>Funktsiooni defineerimine</h2>
	<?php
    /*// Funktsiooni defineerimine
    function nimi($argument1, $argument2, ...) {
        tegevused;
    }

    // Funktsiooni käivitamine
    nimi($argument1, $argument2); */
    function say_hello() {
    	echo "Minu esimene funktsioon! <br>";
    }
    say_hello();
?>
<br>
<h3>Argumendiga funktsioon</h3>
<?php
	function say_hello_to($person) {
		echo "Tere {$person}<br>";
	}
	say_hello_to("Kaspar");
?>

<?php
	function add($number1, $number2) {
		$sum = $number1 + $number2;
		return $sum;
	}
	$result = add(4, 5);
	echo $result + 10;
?>

<br>
<ul>
<?php
	function calculate($nr1, $nr2) {
		$plus = $nr1 + $nr2;
		$minus = $nr1 - $nr2;

		return array ($plus, $minus);
	}
	$result = calculate(10, 5);
	echo "<li> {$result [0]}</li>";
	echo "<li> {$result [1]}</li>";
?>
</ul>

<br>
<ul>
<?php
	function calc($nu1= "1", $nu2 ="2") {
		$plus = $nu1 + $nu2;

		return $plus;
	}
	$result = calc();
	echo $result;
?>
</ul>
</body>
</html>