<?php
do{
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll\n";
    if (6 == $diceRoll){
        echo "Congrats! You hit the jackpot! \n";
        break;
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));
    // loop body
} while ('y' == $rollAgain);
?>