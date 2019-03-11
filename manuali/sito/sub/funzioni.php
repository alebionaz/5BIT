<?php
include 'sito.php';
	echo get_head();
	//corpo centrale
	echo get_foot();
?>

<?php
function get_head() {
	$string = “<!DOCTYPE html>” . “<html>” . “<body>”;
	return $string;
}
?>
      
<?php
function get_foot() {
	$string2 = “</body>” . “</html>”;
	return $string2;
}
?>
