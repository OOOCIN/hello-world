<html>
<header>
<title>Hi php</title>
</header>
<body>
<h1>
 <?php
	
	$x = -69;
var_dump($x);
echo "<br>";

if (is_int($x)) {
    echo "$x is an Integer";
} elseif (is_float($x)) {
    echo "$x is a float";
} elseif (is_string($x)) {
    echo "$x is a string";
} else {
    echo " ";
}
		
?>
<h1>
</body>
<html>