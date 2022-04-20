<?php

$play_count = 0;
$correct_count = 0;
$guess_high = 0;
$guess_low = 0;

echo "Im thinking of a number between 1 and 10, inclusive. Can you guess what I'm thinking?\n";

function guessNumber() {
  global $play_count, $correct_count, $guess_high, $guess_low;
  $play_count++;
  $answer = rand(1, 10);
  echo "\n I've picked a number, can you guess it?\n";
  $guess = intval(readline(">> "));
  echo "This is round ${play_count}. The number I was thinking of was ${answer}. You guessed ${guess}.\n"; 

  if ($guess === $answer) {
      $correct_guesses++;
  } elseif ($guess > $answer) {
      $guess_high++;
  } else {
      $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percent_correct = $correct_guess/$play_count * 100;

echo "After ${play_count} rounds, you got ${percent_correct}% of guesses correctly.\n";

if ($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high.";
} else {
  echo "When you guessed wrong, you tended to guess low.";
}
