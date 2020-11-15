<?php
    //get data from Quiz.html
    $question1=$_POST["question"];
    $question2=$_POST['question1'];
    $question3=$_POST['question2'];
    $question4=$_POST['question3'];
    $question5=$_POST['question4'];

    //set the correct answer
    $question1_correct = "Wisconsin";
    $question2_correct = "Unidentified";
    $question3_correct = "Trump";
    $question4_correct = "Budapest";
    $question5_correct = "Everything";
    

    //default bool 
    $question_answer1 = false;
    $question_answer2 = false;
    $question_answer3 = false;
    $question_answer4 = false;
    $question_answer5 = false;

    //count the final point
    $count = 0; // final point
    if ($question1 == $question1_correct) {
        $question_answer1 = true;
        $count += 20;
    }    if ($question2 == $question2_correct) {
        $question_answer2 = true;
        $count += 20;
    }    if ($question3 == $question3_correct) {
        $question_answer3 = true;
        $count += 20;
    }    if ($question4 == $question4_correct) {
        $question_answer4 = true;
        $count += 20;
    }    if ($question5 == $question5_correct) {
        $question_answer5 = true;
        $count += 20;
    }

    echo "The Final point is: " . $count . "<br>";
    echo  "You have " . $count / 20 . " correct!<br> ";
        
    //display the correct answer
    echo "Question 1: Which U.S. state is known as “America’s Dairyland”?<br>";
    echo "Your answer is " . $question1 . "<br>";
    echo "Correct answer is " . $question1_correct . "<br><br>";

    echo "Question 2: What does the “U” stand for in “UFO”?<br>";
    echo "Your answer is " . $question2 . "<br>";
    echo "Correct answer is " . $question2_correct . "<br><br>";

    echo "Question 3: Which U.S. president doesn’t/didn’t have a dog in the White House?<br>";
    echo "Your answer is " . $question3 . "<br>";
    echo "Correct answer is " . $question3_correct . "<br><br>";

    echo "Question 4: In which city would you find the Fisherman’s Bastion?<br>";
    echo "Your answer is " . $question4 . "<br>";
    echo "Correct answer is " . $question4_correct . "<br><br>";

    echo "Question 5: Edward Scissorhands is known for cutting:<br>";
    echo "Your answer is " . $question5 . "<br>";
    echo "Correct answer is " . $question5_correct . "<br><br>";

?>
