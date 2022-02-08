<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grading system</title>
</head>
<style>
    body{
        background-color: darkgray;
    }
    .grade{
        background-color: dimgrey;
        padding: 15px;
        width: 300px;
        height: 200px;
        margin-left: 520px;
        margin-top: 50px;
        border-radius: 20px;
        color: chartreuse;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>
<body>
<div class="grade">
<?php
$marks = $_POST["marks"]??"";
if (empty($marks)){
    echo "Error please enter your marks";
}
elseif ($marks<=39){
    echo "Fail!: $marks%";
    echo "<br>";
    echo "Apply for retakes to avoid being disqualified";
    echo "<br>";
    echo "<br>";
    echo "REGARDS";
    echo "<br>";
    echo "Office of the student academic affairs";
}
elseif ($marks<=59 && $marks>=40 ){
    echo "Pass!: $marks%";
    echo "<br>";
    echo "You can do better pull up your socks";
    echo "<br>";
    echo "<br>";
    echo "REGARDS";
    echo "<br>";
    echo "Office of the student academic affairs";
}
elseif ($marks<=74 && $marks>=60){
    echo "Credit!: $marks%";
    echo "<br>";
    echo "Good progress, can do better";
    echo "<br>";
    echo "<br>";
    echo "REGARDS";
    echo "<br>";
    echo "Office of the student academic affairs";
}
elseif ($marks<=100 && $marks>=75){
    echo "Distinction!: $marks%";
    echo "<br>";
    echo "Congratulation for great success";
    echo "<br>";
    echo "<br>";
    echo "REGARDS";
    echo "<br>";
    echo "Office of the student academic affairs";
}
else{
    echo "Invalid marks!!!";
}

?>
    <br><br>
    <button><a href="gradeform.php">Go back<a></button>


</div>
</body>
</html>