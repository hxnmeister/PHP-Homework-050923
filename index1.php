<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Homework</title>
        </head>
        <body>
            <?php 
                //Кінцеве число послідовності
                $endNumber = 22;
                //Акумулююча змінна для накопичення суми парних чисел
                $sum = 0;

                for($i = 2; $i <= $endNumber; $i += 2):

                    $sum += $i;
            ?>
                <span style="font-size:<?php echo $i * 5?>px; color:green"><?php echo $i.($i + 2 > $endNumber ? ' ' : ',')?></span>
            <?php 
                endfor;
                
                echo '<p>Sum = '.$sum.'</p>';
                echo '<p>AVG = '.$sum / (($endNumber % 2 === 0 ? $endNumber : $endNumber - 1) / 2).'</p>';
            ?>
        </body>
    </html>