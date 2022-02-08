<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marks to Grade converter</title>
</head>
<style>
    body{
        background-color: darkgray;
        color: chartreuse;
    }
    #fom{
        background-color: dimgrey;
        padding:15px;
        width: 300px;
        height: 200px;
        margin-left: 520px;
        margin-top: 50px;
        text-align: center;
        border-radius: 20px;
    }
</style>
<body>

<form method="POST" action="grading.php" id="fom">
    <h3>Marks to Grade Converter</h3>
    <input type="text" name="marks">
    <br><br>
    <input type="submit" value="Check Grade Category">
</form>

</body>
</html>