<?php

require('Form.php');
require('scrabble.php');

use DWA\Form;

$form = new Form($_GET);

$errors = [];

if ($form->isSubmitted()) {

$errors = $form->validate([

	'word' => 'required|alpha'

	]);


$word = $form->get('word', '');

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

$bingo = $form->isChosen('bingo', '');


if ($bingo) {
	$finalScore = $bonus + '50';
} else {
	$finalScore = $bonus;
}

}