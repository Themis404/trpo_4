<!-- Описать процедуру PowerA3(A, B), вычисляющую третью степень числа
A и возвращающую ее в переменной B (A — входной, B — выходной
параметр; оба параметра являются вещественными). С помощью этой
процедуры найти третьи степени пяти данных чисел
-->
<?php
    $num_1 = $_POST['1']; 
    $num_2 = $_POST['2']; 
    $num_3 = $_POST['3']; 
    $num_4 = $_POST['4']; 
    $num_5 = $_POST['5']; 
    function PowerA3($num){
        return pow($num, 5);
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="1.css" />
</head>
<body>
    <form action="6.php" method="POST" enctype="multipart/form-data">
        <p>Число 1: <input name='1'/></p>
        <p>Число 2: <input name='2'/></p>
        <p>Число 3: <input name='3'/></p>
        <p>Число 4: <input name='4'/></p>
        <p>Число 5: <input name='5'/></p>
        <input type="submit"/>
    </form>
        <p name='answer'>
            Число 1: <?php echo $num_1?> 5 степень: <?php echo PowerA3($num_1) ?><br/>
            Число 2: <?php echo $num_2?> 5 степень: <?php echo PowerA3($num_2)?><br/>
            Число 3: <?php echo $num_3?> 5 степень: <?php echo PowerA3($num_3)?><br/>
            Число 4: <?php echo $num_4?> 5 степень: <?php echo PowerA3($num_4)?><br/>
            Число 5: <?php echo $num_5?> 5 степень: <?php echo PowerA3($num_5)?><br/>
        </p>
</body>
</html>

