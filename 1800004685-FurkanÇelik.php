<?php

$count=1;
$A = 0;
$B = 0;
$DRAW=0;
echo "<h2>" . "FURKAN ÇELİK - 1800004685" . "</h2>";

for ($i = 0; $i < 10; $i++) {
$moves = [
    'ROCK' => 'ROCK',
    'PAPER' => 'PAPER',
    'SCISSORS' => 'SCISSORS'];

$player1 = array_rand($moves);
$player2 = array_rand($moves);
echo "<B> <u>" . "Round " . $count . ":" . " </u> </B>";
echo "<br>";
echo "Player A: " . "<i>" . $player1 . "</i>";
echo "<br>" . "Player B: " . "<i>" . $player2 . "</i>";
echo "<br>";
 if($player1 == $player2)
    {
        echo 'Same choice: It is a draw...';
		$DRAW++;
    }
    else if($player1 == 'ROCK' && $player2 == 'PAPER')
    {
        echo 'Paper covers Rock: Player B wins...';
		$B++;
    }
    else if($player1 == 'ROCK' && $player2 == 'SCISSORS')
    {
        echo 'Rock crushes Scissors: Player A wins...';
		$A++;
    }
    else if($player1 == 'SCISSORS' && $player2 == 'ROCK')
    {
        echo 'Rock crushes Scissors: Player B wins...';
		$B++;
    }
    else if($player1 == 'SCISSORS' && $player2 == 'PAPER')
    {
        echo 'Scissors cut paper : Player A wins...';
		$A++;
    }
    else if($player1 == 'PAPER' && $player2 == 'SCISSORS')
    {
        echo 'Scissors cut paper : Player B wins...';
		$B++;
    }
    else if($player1 == 'PAPER' && $player2 == 'ROCK')
    {
        echo 'Paper covers Rock: Player A wins...';
		$A++;
    }
	echo "<br>";
	echo "<br>";

	$count++;
}
echo "Player A: " . $A . " wins";echo "<br>";
echo "Player B: " . $B . " wins";echo "<br>";
echo $B . " Games were a draw";
?>