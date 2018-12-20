<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salary Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<p> <h2> Calculate your Salary Thus Far </h2> </p>
<div id="form-container">
<form action="salary.php" method="post" align="center">

<div class="form">
<span>Salary Amount:</span> <input type="text" name="salary"> </br>
<span>Number of Mounths:</span> <input type="text" name="month"> </br>
<input type="submit" name="submit" value="calculate">
</div>

</form>
</div> 

</body>
</html>

<?php 
if(isset($_POST['submit'])){
    $salary = $_POST['salary'];
    $month = $_POST['month'];
    $result = $salary * $month;

    echo "<h2>Your Salary is:      ". $result. "</br>";
};
date_default_timezone_set('UTC');
echo date('h:i a, l F jS Y e');
?>