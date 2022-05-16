<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo '<table border="1"><tr>';
        for($i=0; $i<10; $i++) {
            $t[$i]=rand(1,20);
            echo '<td>'.$t[$i].'</td>';
        }
            echo '</tr></table>';
    ?>
</body>
</html>