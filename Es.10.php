<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PARAGRAFI</title>
    </head>
    <body>
        <?php
            $size = 20;
            $num = 8;
            $paragrafo ="Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor quod dolores praesentium adipisci non ipsam dignissimos et dolorum accusantium pariatur, totam veritatis suscipit nam, placeat modi. 
            Nam odit ad aperiam.";

            for ($i = 0; $i < $num; $i++) {
                echo "<p style='font-size: $size" . "px;'>$paragrafo</p><br>";
                $size += 2;
            }

        ?>
        
    </body>
</html>