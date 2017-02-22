<?php

require('tools.php');

$scrabbleLetters = file_get_contents('scrabble.php');

$haveResults = true;

if(isset($_GET['word'])) {
	$word = $_GET['word'];
}
	else {
		$word = "";
	}
dump($word);


