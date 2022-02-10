<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DOCUMENT</title>
</head>
<body>
    <?php
// Variables
// $studentName = "Mahmudur Rahman";
// $studentID = "181-15-11276";
// $cgpa = "3.72";
// $university = "Daffodil INternational UNiversity";
// echo "My name is: $studentName . My ID is $studentID and I am from $university" ;
// echo "<br>";
// echo "CGPA: $cgpa";

// Function in PHP
// For global scope
// $result = 3.92;
// function myResult(){
//     echo "<h1>I got CGPA $result</h1>"; // It shows error
// }
// myResult();
// echo "<h2>Mamur beta ami $result paisi. Yahoo!</h2>";

// For Local scope
// function busFair(){
//     $localFair = 50;
//     echo "<h2>Thikana bus er vara $localFair Taka.</h2>";
// }
// busFair();

// Static keyword
// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
//   }

//   myTest();
//   echo "<br>";
//   myTest();
//   echo "<br>";
//   myTest();

// string length count
//   echo strlen("Mahmudur Rahman Uchchash");
//   echo "<br>";
// string word count
//   echo str_word_count("Mahmudur Rahman Uchchash");
//   echo "<br>";
// String reverse
//   echo strrev("Mahmudur Rahman Uchchash");

// PHP if...else...elseif Statements
//   $time = date('H');
//   if ($time < "10"){
//       echo "Have a good morning";
//   } elseif ($time <"20"){
//       echo "Have a good day";
//   } else{
//       echo "Have a good night";
//   }

// While loop
// $x = 1;
// while($x <= 5){
//     echo "The Number is: $x <br>";
//     $x++;
// }

// do while loop
// $y = 1;
// do{
//     echo "The number is: $y <br>";
//     $y++;
// } while($y<= 5);

// For loop
// for ($x = 0; $x <= 100; $x++) {
//     echo "The number is: $x <br>";
// }

// Foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>
</body>
</html>