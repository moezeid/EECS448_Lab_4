<?php




$ans1="shallot";
$ans2="1492";
$ans3="all the time";
$ans4 = "too";
$ans5 = "ope!";
$numQs= 5;
$numCorrect=0;
$q1 = $_POST['c1'];
$q2 = $_POST['c2'];
$q3 = $_POST['c3'];
$q4 = $_POST['c4'];
$q5 = $_POST['c5'];


if($q1 == $ans1)
{
  $numCorrect++;

}


if($q2 == $ans2)
{
  $numCorrect++;
}

if($q3 == $ans3)
{
  $numCorrect++;
}


if($q4 == $ans4)
{
  $numCorrect++;
}


if($q5 == $ans5 )
{
  $numCorrect++;
}

echo "<p> <b>Question 1:</b> What is the square root of an onion? <br> You answered: $q1
<br> Correct answer: $ans1 </p> ";

echo "<p> <b>Question 2:</b> What year did Columbus sail the ocean blue? <br> You answered: $q2
<br> Correct answer: $ans2 </p> ";

echo "<p> <b>Question 3:</b> When is the best time to wear a striped sweater? <br> You answered: $q3
<br> Correct answer: $ans3 </p> ";


echo "<p> <b>Question 4:</b> John Jacob Jingleheimer Schmidt, his name was my name:  <br> You answered: $q4
<br> Correct answer: $ans4 </p> ";

echo "<p> <b>Question 5:</b> What do Midwesterners say when they accidentally bump into someone?   <br> You answered: $q5
<br> Correct answer: $ans5 </p> ";

echo "<p> You got <b>$numCorrect</b> out of <b>5</b> correct! </p>";
//$percentage= ($numCorrect / 5) * 100 ;

//echo"$numCorrect";
if($numCorrect == "5")
{
  echo "That's 100%";
}


 else if($numCorrect == "4")
 {
   echo "That's 80%";
 }
 else if($numCorrect == "3")
 {
   echo "That's 60%";
 }

 else if($numCorrect == "2")
 {
   echo "That's 40%";
 }

 else if($numCorrect == "1")
 {
   echo "That's 20%";
 }
 else
 {
   echo "That's 0%...Consider another profession";
 }

?>
