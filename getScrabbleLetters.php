<?php

require('tools.php');
require('Form.php');

use DWA\Form;

$form = new Form();

$scrabbleLetters = [
	'a' => '1',
	'b' => '3',
	'c' => '3',
	'd' => '2',
	'e' => '1',
	'f' => '4',
	'g' => '2',
	'h' => '4',
	'i' => '1',
	'j' => '8',
	'k' => '5',
	'l' => '1',
	'm' => '3',
	'n' => '1',
	'o' => '1',
	'p' => '3',
	'q' => '10',
	'r' => '1',
	's' => '1',
	't' => '1',
	'u' => '1',
	'v' => '4',
	'w' => '4',
	'x' => '8',
	'y' => '4',
	'z' => '10'

];


if(isset($_GET['word'])) {
	$word = $_GET['word'];
}
	else {
		$word = "";
	}


$wordEntry = str_split($word);


$flipped = array_flip($wordEntry);

$intersect = array_intersect_key($scrabbleLetters, $flipped);

$wordSum = array_sum($intersect);


if(isset($_GET['triple'])) {
	$triple = '3';
	$bonus = $triple*$wordSum;

} elseif (isset($_GET['double'])) {
	$double = '2';
	$bonus = $double*$wordSum;
} else {
	$bonus = $wordSum;

}

$bingo = (isset($_GET['bingo'])) ? true : false; 

if ($bingo) {
	$finalScore = $bonus + '50';
} else {
	$finalScore = $bonus;
}

echo ($finalScore);


