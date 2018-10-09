<!DOCTYPE html>
<html>
<body>
<?php
//access the global array called $_POST to get the values from the text fields
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];
$question5 = $_POST["question5"];
$counter = 0;

ECHO "Question 1: What is the square root of 4?<br>";
ECHO "You answered: " . $question1 . "<br>";
ECHO "Correct answer: 2<br><br>";
if( $_POST["question1"] == "2" ){
 $counter++;
}
    
ECHO "Question 2: What is the capital of Kansas?<br>";
ECHO "You answered: " . $question2 . "<br>";
ECHO "Correct answer: Topeka<br><br>";
if( $question2 == "Topeka" ){
 $counter++;
}

    
ECHO "Question 3: What is the center of our solar system?<br>";
ECHO "You answered: " . $question3 . "<br>";
ECHO "Correct answer: Sun<br><br>";
if( $question3 == "Sun" ){
 $counter++;
}

    
ECHO "Question 4: How many i's are there in Mississippi?<br>";
ECHO "You answered: " . $question4 . "<br>";
ECHO "Correct answer: 4<br><br>";
if( $question4 == "4" ){
 $counter++;
}

    
ECHO "Question 5: How many hours of sleep should one get?<br>";
ECHO "You answered: " . $question5 . "<br>";
ECHO "Correct answer: 8<br><br>";
if( $question5 == 8 ){
 $counter++;
}

ECHO "You answered " . $counter . " out of 5 correctly!<br>";
$percentage = $counter / 5 * 100;
ECHO "You scored " . $percentage . "%!<br>";

?>
</body>
</html>