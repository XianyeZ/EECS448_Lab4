<?php 
    $ans1 = $_POST["option1"];
    $ans2 = $_POST["option2"];
    $ans3 = $_POST["option3"];
    $ans4 = $_POST["option4"];
    $ans5 = $_POST["option5"];

    $cor = 0;

    if($ans1 == "Madrid") {$cor++;}
    if($ans2 == "Raichu") {$cor++;}
    if($ans3 == "Xeno'jiiva") {$cor++;}
    if($ans4 == "Ronald Reagan") {$cor++;}
    if($ans5 == "3") {$cor++;}

    echo "Your score is: " . 100*$cor/5 . "%!";
    echo "Question 1: The correct answer is: Madrid, your answer is: " . $ans1 . "<br>";
    echo "Question 2: The correct answer is: Raichu, your answer is: " . $ans2 . "<br>";
    echo "Question 3: The correct answer is: Xeno'jiiva, your answer is: " . $ans3 . "<br>";
    echo "Question 4: The correct answer is: Ronald Reagan, your answer is: " . $ans4 . "<br>";
    echo "Question 5: The correct answer is: 3, your answer is: " . $ans5 . "<br>";

    echo "<input type='button' onclick=\" location.href='Quiz.html';\" value='try again'>";
?>