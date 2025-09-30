<html>
    <head>
        <title>Aula 05 php</title>
    </head>
    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];

            echo "Os valores informados são $n1 e $n2 <br>";
            echo "<br> O valor absoluto de $n2 e". abs($n2);
            echo "<br> O resultado de  $n2 <sup>$n1</sup> e igual a ".pow($n2,$n1);
            echo "<br> A raiz quadrada de $n2 e ".sqrt($n2);
            echo "<br> O numero $n2 arredondado e ".round($n2);
            echo "<br> O numero $n2 arredondado para cima".ceil($n2);
            echo "<br> O numero $n2 arredondado para baixo".floor($n2);
            echo "<br> A parte inteira de $n2 e igual a ". intval($n2);
            echo "<br> Um pirulito custa R$".number_format($n2,2);        
            ?>
    </body>
</html>
