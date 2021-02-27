<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER - Date and TIme Manipulation</title>
</head>
<body>
<h1> Date and Time Manipulation </h1>  

<?php 
$datenow = getdate();
echo "Today's Date: <br/>";
echo $datenow['mday'] . '<br/>';
echo $datenow['mon'] . "<br/>";
echo $datenow['year'] . "<br/>";

echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year']. '<br/>'; 
echo time();
?>
    
</body>
</html>