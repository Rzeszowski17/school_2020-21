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
    <td><div class="baner">Prostopadloscian<div></td>
    </tr>
    <tr>
    <td><img src=prosto.jpg></td>
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
    <td><input type="number" name="b"  placeholder="b" value="<?php echo$_POST['b']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="number" name="c"  placeholder="c" value="<?php echo$_POST['c']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="submit" name="oblicz" value="Oblicz"></td>
    </tr>
    <tr>
    <td>
    <?php  
    echo prost()
    ?>
    </td>
    </tr>
    <tr>
    <td><a href="3_zadanie_formularz_geometria.php">Powrót do strony głównej</a></td>
    </tr>
    </form>
    </table>
    <?php

    function prost(){

    if (empty($_POST['a']) || empty($_POST['b']) || empty($_POST['c']) || (!is_numeric($_POST['a']) || !is_numeric($_POST['b'] || (!is_numeric($_POS['c']){
       // if (($_GET['a']==''||$_GET['h']=='')||(!is_numeric($_GET['a'])||!is_numeric($_GET['h'])))
        //if(in_array(true, $important)){

            echo "<h4>Dane podane w formularzu muszę być liczbami!</h4>";

            }
            
    else{
    
    if (isset($_POST['a'],$_POST['b'], $_POST['c'])){
         if($_POST['a']<=0 || $_POST['b']<=0 || $_POST['c']<=0){
            echo "<br><h4>Liczby podane w polach powinny być dodatnei</h4>";
        }
        else{
            require_once('./scripts/prostopadloscian.php');


        echo '<ul>';
        echo '<li>Pole:'.Pole_Prosto($a,$b,$c).'cm<sup>2</sup></li>';
        echo '<li>Objętość:'.Obje_Prosto($a,$b,$c).'cm<sup>3</sup></li>';
        echo '<li>Długość przekątnej:'.Dlugo_Prosto($a,$b,$c).'cm</li>';
        echo '</ul>';


        }
    }

    }
}
    

    ?>
</body>
</html>