<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InvertedRightangle</title>
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

        for ($i = $height; $i >= 1; $i--){
            for ($j = 1; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";
        }
        ?>
</div>

</body>
</html>