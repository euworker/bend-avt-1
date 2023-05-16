<form >
    <fieldset>
        <legend>ЭТО НОВАЯ ФОРМА"</legend>
        a: <input type="text" name="aFirst"> <br>
        b: <input type="text" name="bFirst"> <br>
        c: <input type="text" name="cFirst"> <br>
        <input type="submit" value="Рассчитать">
    </fieldset>
</form>


<form >
    <fieldset>
        <legend>Задание 1</legend>
        a: <input type="text" name="aFirst"> <br>
        b: <input type="text" name="bFirst"> <br>
        c: <input type="text" name="cFirst"> <br>
        <input type="submit" value="Рассчитать">
    </fieldset>
</form>

<form >
    <fieldset>
        <legend>Задание 2</legend>
        Угол в градусах, до 360: <input type="text" name="aSecond"> <br>
        <input type="submit" value="Рассчитать">
    </fieldset>
</form>

<form >
<fieldset>
        <legend>Задание 3</legend>
        m1: <input type="text" name="mThird1"> <br>
        m2: <input type="text" name="mThird2"> <br>
        r: <input type="text" name="rThird"> <br>
        <input type="submit" value="Рассчитать">
    </fieldset>
</form>



<form action="">
    <fieldset>
        <legend>Задание 4</legend>
        a: <input type="text" name="aFourth"> <br>
        b: <input type="text" name="bFourth"> <br>
        <input type="submit" value="Рассчитать">
    </fieldset>
</form>
<br>
<br>
<p>Вывод результатов:</p>
<?php

// !!!! делать проверки отрицанием без вложенностей ( !is_numeric($aFirst) && !is_numeric($bFirst) && !is_numeric($cFirst)) { 
    //exit;
    //   echo "Значения должны быть больше нуля";}
// дальше выполнение 

// 1 задание
if ( isset($_GET['aFirst'])) {
    $aFirst = htmlentities($_GET['aFirst']);
    $bFirst = htmlentities($_GET['bFirst']);
    $cFirst = htmlentities($_GET['cFirst']);
    if ( is_numeric($aFirst) && is_numeric($bFirst) && is_numeric($cFirst)){
        if ( $aFirst > 0 && $bFirst > 0 && $cFirst > 0 ) {
            $leftFirst = 2 * ($aFirst ** ($bFirst - 4)) - pow((7 * $aFirst - $cFirst), $bFirst ** 2);
            $rightFirst = pow(5 * $cFirst + sqrt($aFirst + $bFirst), 1 / 4) + ($cFirst / $bFirst);
            $xFirst = $leftFirst / $rightFirst ;
            echo 'x = '.$xFirst;
        } else { 
            echo "Значения должны быть больше нуля";
        }
    } else {
        echo "Не правильно введены данные";
    }
     
} 

// 2 задание
if (isset($_GET['aSecond'])) {
    $aSecond = htmlentities($_GET['aSecond']);
    if (is_numeric($aSecond)) {
        if ($aSecond >= 0 && $aSecond < 361) {
            $aSecond = deg2rad($aSecond);
            $sinSecond = round(sin($aSecond), 2);
            $cosSecond = round(cos($aSecond), 2);
            $tgSecond = round(tan($aSecond), 2);
            if ($sinSecond == 0) {
                $ctgSecond = " - ";
                $cosecSecond = " - ";
                $secSecond = round(1 / $cosSecond);
            } elseif ($cosSecond == 0) {
                $ctgSecond = round($cosSecond / $sinSecond, 2);
                $cosecSecond = round(1 / $sinSecond, 2);
                $secSecond =  " - ";
            } else {
                $ctgSecond = round($cosSecond / $sinSecond, 2);
                $cosecSecond = round(1 / $sinSecond, 2);
                $secSecond = round(1 / $cosSecond, 2);
            }

            
            echo "
            <table> 
            <thead>
                <tr>
                    <th>sin</th>
                    <th>cos</th>
                    <th>tg</th>
                    <th>ctg</th>
                    <th>sec</th>
                    <th>cosec</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th> $sinSecond </th>
                    <th> $cosSecond </th>
                    <th> $tgSecond </th>
                    <th> $ctgSecond </th>
                    <th> $secSecond </th>
                    <th> $cosecSecond </th>
                </tr> 

            </tbody>

        </table>
        ";
        } else {
            echo "Значения должны быть от 0 до 360 градусов";
        }
    } else {
        echo "Не правильно введены данные";
    }
} 

// 3 задание
define("G", (6.6740831 * pow(10, 11)));
if ( isset($_GET['mThird1'])) {
    $mThird1 = htmlentities($_GET['mThird1']);
    $mThird2 = htmlentities($_GET['mThird2']);
    $rThird = htmlentities($_GET['rThird']);
    if ( is_numeric($mThird1) && is_numeric($mThird2) && is_numeric($rThird)){
        if ( $mThird1 > 0 && $mThird2 > 0 && $rThird > 0 ) {
            $fThird = G * ($mThird1 * $mThird2) / sqrt($rThird);
            echo 'F = '.$fThird;
        } else { 
            echo "Значения должны быть больше нуля";
        }
    } else {
        echo "Не правильно введены данные";
    }
     
} 

// 4 задание
if (isset($_GET['aFourth'])) {
    $aFourth = htmlentities($_GET['aFourth']);
    $bFourth = htmlentities($_GET['bFourth']);
    if (is_numeric($aFourth) && is_numeric($bFourth)) {
        if ($aFourth > 0 && $bFourth > 0) {
            $D = round(sqrt($aFourth ** 2 + $bFourth ** 2), 2) ;
            $P = ($aFourth + $bFourth) * 2;
            $S = $aFourth * $bFourth;
            $degree = asin(2 * $S / $D ** 2);
            $degree = round(rad2deg($degree), 2);
            $r = round($D / 2, 2);
            $d = round(2 * $r, 2);
            $p = round(2 * pi() * $r, 2);
            $s = round(pi() * $r * $r, 2);
            echo "
            <table> 
                <thead>
                    <tr>
                        <th>Диагональ: D</th>
                        <th>Периметр: P</th>
                        <th>Площадь: S</th>
                        <th>Угол между диагоналями:</th>
                        <th>Радиус: r</th>
                        <th>Диаметр: d</th>
                        <th>Периметр: P</th>
                        <th>Площадь: S</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th> $D</th>
                        <th> $P </th>
                        <th> $S </th>
                        <th> $degree </th>
                        <th> $r </th>
                        <th> $d </th>
                        <th> $p </th>
                        <th> $s </th>
                    </tr> 

                </tbody>

            </table>
                 ";
        } else {
            echo "Значения должны быть больше нуля";
        }

    } else {
        echo "Не правильно введены данные";
    }

}

?>