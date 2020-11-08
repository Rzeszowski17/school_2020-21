<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
     margin: auto;
     border: 2px solid black;
}
.baner{
    font-weight: 900;
    font-size: 19px
}
hr{
    border: 1px solid black;
}
</style>
</head>
<body>
    <table>
    <form method="POST">
    <tr>
    <td><div class="baner">Szescian<div></td>
    </tr>
    <tr>
    <td><img src=szescian.jpg></td>
    </tr>
    <tr>
    <td>
    <hr>
    </td>
    </tr>
    <tr>
    <td><div class="baner">Dane<div></td>
    </tr>
    <tr>
    <td><input type="number" name="a"  placeholder="a" value="<?php echo$_POST['a']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="submit" name="oblicz" value="Oblicz"></td>
    </tr>
    <tr>
    <td>
    <?php  
    echo szesc()
    ?>
    </td>
    </tr>
    <tr>
    <td><a href="3_zadanie_formularz_geometria.php">Powrót do strony głównej</a></td>
    </tr>
    <form>
    </table>
    <?php

    function szesc(){
    if (isset($_POST['a'])){
         if($_POST['a']<=0){
            echo "<br><h4>Liczby podane w polach powinny być dodatnei</h4>";
        }
        else{
            require_once('./scripts/szescian.php');


        echo '<ul>';
        echo '<li>Pole:'. Pc_szescian($a).'cm<sup>2</sup></li>';
        echo '<li>Objętość:'.V_szesc($a).'cm<sup>3</sup></li>';
        echo '<li>Długość przekątnej:'.d_szesc($a).'cm</li>';
        echo '<li>Promiń kuli wisanej w sześcian: '.r_szesc($a).'cm</li>';
        echo '<li>Promiń kuli opisaenej w sześcian: '.r_kulsze($a).'cm</li>';
        echo '</ul>';


        }
    }

    }

    ?>
</body>
</html>