<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER - While/Do-While Loops</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php 
        $grade = 0;
        // Infinite Loop
        // while($grade < 10){
        //    echo '<p> I AM LESS THAN 10!</p>';
        // }

        while($grade < 10){
            echo '<p> I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'EXIT LOOP';
    ?>

    
   
    <h1>DO-While Loop</h1>
    <?php
        // Post-Condition Loop
        $grade = 0;
        do{
            echo '<p> I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP';
    ?>
    

    
</body>
</html>