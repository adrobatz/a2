<?php require( 'getScrabbleLetters.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Scrabble Word Score Calculator</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Scrabble Work Score Calculator</h1>
    <form method="get" action="index.php">
        <label for="word">Your Word:</label>
        <input type="text" name="word" id="word" value="<?=sanitize($word)?>">

        <br/><br/>
        <input type="radio" name="bonus" value="none">None<br/>
        <input type="radio" name="bonus" value="double">Double Word Score<br/>
        <input type="radio" name="bonus" value="triple">Triple Word Score
        <br/><br/>

        <input type="checkbox" name="bingo">
        <label>Include 50 point "bingo"? (word that uses all 7 tiles)</label>

        <br/>
        <input type="submit" name="button">

    </form>

    	<div class="book">
    	</div>


</body>

</html>