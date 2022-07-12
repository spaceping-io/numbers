<?

$arr = array();
$arr[0] = "-----";
$arr[1] = ".----";
$arr[2] = "..---";
$arr[3] = "...--";
$arr[4] = "....-";
$arr[5] = ".....";
$arr[6] = "-....";
$arr[7] = "--...";
$arr[8] = "---..";
$arr[9] = "----.";
	
for ($nr=1; $nr<=1000000; $nr++) {
	$code = $nr . ";";
	for ($i=0; $i<strlen($nr); $i++) {
		$code .= $arr[ substr($nr, $i, 1) ];
		if (strlen($nr) != $i +1) $code .= " ";
	}
	$code .= ";https://en.wikipedia.org/wiki/Morse_code\n";
	echo $code;
}
	
	
?>
