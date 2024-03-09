<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HollowRectangle</title>
    <style>
        body {
            text-align: center;
            font-size: 24px;    
            line-height: 1.5; 
        }

        .output {
            display: inline-block;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="output">
        <?php
        $height = 5;
        $width = 8;

        for ($i = 1; $i <= $height; $i++){
            for ($j = 1; $j <= $width; $j++){
                if ($i == 1 || $i == $height || $j == 1 || $j == $width){
                    echo "*";
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
        ?>
</div>

</body>
</html>