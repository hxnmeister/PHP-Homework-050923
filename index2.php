<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Homework</title>
        </head>
        <body>
            <?php
                //Одиниця росту еліпса
                $growIndex = 15;
                //Мінімальний розмір еліпса
                $minimumSize = 20;
                //Кількість фігур
                $ellipseCount = 10;

                for($i = $minimumSize, $j = 0; $j < $ellipseCount; $i += $growIndex, $j++):
            ?>
                <div class="ellipse" style="width:<?php echo $i?>px; height:<?php echo $i?>px"></div>
            <?php 
                endfor
            ?>
        </body>
    </html>