<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ряд Фибоначчи</title>    
</head>
<body>

    <?php

        $x = $_GET['inputNumber'];
        
        $inputAlert = 'Вы не ввели число. Сделайте это!';
        $inputTrue = 'Вы ввели число '.$x;
        $inputMessage = isset($_GET['inputNumber']) && $x != null ? $inputTrue : $inputAlert;

        $a = 1;
        $b = 1;

        while (true) {
            if ($x < $a) {
                $message = 'Задуманное число НЕ входит в числовой ряд!';
                $style = 'color: red;';
                break;
            }

            if ($x == $a) {
                $message = 'Задуманное число ВХОДИТ в числовой ряд!';
                break;
            }

            $c = $a;
            $a += $b;
            $b = $c;
        }

    ?>

    <form name="form" method="GET" action="" style="background-color: lightblue; border: 1px solid blue; width: 30%; padding: 10px;">
        <label><input type="number" name="inputNumber" style="border-color: gray; margin-bottom: 10px;"> Введите число</label><br>
        <input type="submit" name="Принять" value="Принять"> 

        <p style="font-style: italic; font-size: 20px; margin: 0; padding: 0;"><?= $inputMessage ?></p>
        <p style="<?= $style ?>"><?= $message ?></p>        
    </form>    
  
</body>
</html>