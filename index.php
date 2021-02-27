<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h2>Follow each link to the page example </h>
    <ul> 

        <li><a href="array.php"> Simple Array and Printouts</a></li>
        <li><a href="forloop.php"> Simple For Loop</a></li>
        <li><a href="whiledowhileloop.php"> Simple While/Do While Loop</a></li>
        <li><a href="ifstatement.php"> Simple If Statement</a></li>
        <li><a href="switchstatement.php"> Simple Switch Statement</a></li>
        <li><a href="datetimemanip.php"> Simple Date and Time Manipulation</a></li>
        
    </ul>

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP PRIMER</h1>
    <br/>
     

    <?php  
    //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
          
    ?>

    <?php
        // declare bariable
        $name = 'Myron Green';
        $age = 42;
        // echo variable
        echo $name; 
        echo '<h1> My Name Is: '.$name.' </h1>';
        echo '<h1> My Age Is: '.$age.' </h1>';


    ?>
</body>
</html>