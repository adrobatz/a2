<?php

require('tools.php');

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
dump($word);

// $results = "";
// for ($i=0; $i < strlen($word); ++$i) { 
// 	$results .= $i." ";
// }

// dump($results);

// var sum = 0;
// for (var i = 0; i < word.length; ++i) {
//     sum += scores[word.charAt(i)] || 0;
// }

// alert(sum);

$wordEntry = str_split($word);
dump($wordEntry);

$flipped = array_flip($wordEntry);
dump($flipped);
$intersect = array_intersect_key($scrabbleLetters, $flipped);

dump($intersect);

echo array_sum($intersect);


// function addtiles($newWord) {

// }

// print_r(array_filter($scrabbleLetters, "addPoints"));

//echo array_sum($scrabbleLetters);

//echo array_sum($wordEntry);


//array_search($word, $scrabbleLetters);





