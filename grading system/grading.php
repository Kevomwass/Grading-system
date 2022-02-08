<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade input form</title>
</head>
<body>


<?php
$marks= $_POST["marks"]??"";

if(empty($marks)) {
    echo "Please enter your total marks";
}
if ($marks <= 39){
    echo "Fail: $marks%";
    echo "<br>";
    echo "<br>";
    echo "Please enroll for the retake";
    echo "<br>";
    echo "<br>";
    echo "Regards : Office of the academic affairs";
}
elseif ($marks<=59 && $marks>= 40){
    echo "Pass: $marks%";
    echo "<br>";
    echo "<br>";
    echo "Put more effort you can do better";
    echo "<br>";
    echo "<br>";
    echo "Regards : Office of the academic affairs";
}
elseif ($marks <= 75 && $marks >= 60){
    echo "Credit: $marks%";
    echo "<br>";
    echo "<br>";
    echo "Good progress put more effort";
    echo "<br>";
    echo "<br>";
    echo "Regards : Office of the academic affairs";
}
elseif ($marks<=100 && $marks >= 76){
    echo "Distinction: $marks%";
    echo "<br>";
    echo "<br>";
    echo "Congratulation for the success we are pround of you";
    echo "<br>";
    echo "<br>";
    echo "Regards : Office of the academic affairs";
}
else{
    echo "please check the marks you entered";
    echo "<br>";
    echo "<br>";
    echo "Regards : Office of the academic affairs";
}
?>
</body>
</html>