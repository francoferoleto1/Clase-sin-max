<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ciclos de iteracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h1>Ciclos de iteracion</h1>
    <?php
        $contador = 0;       
        
        echo "<h2>Estructura do while</h2>";
        do {
            echo "$contador<br>";
            $contador++;
        } while ($contador <= 10);
    ?>
    <hr>    
    <?php  
    $contador = 0;   
        echo "<h2>Estructura do while</h2>";
        while ($contador < 10) {
            echo "$contador<br>";
            $contador++;            
        }

    ?>

    <?php 
        $contador = 0; 
        echo "<h2>For</h2>";
        for($contador = 0;$contador < 10; $contador++){
            echo "$contador<br>";
        }
    
    ?>


    <?php  

    echo "<h2>Pre y post incremento</h2>";
    $dato = 50;
    $preIncrementoDato = ++$dato;
    $postIncrementoDato = $dato++;
    echo "dato: $dato<br>";
    echo "preIncrementoDato: $preIncrementoDato<br>";
    echo "postIncrementoDato: $postIncrementoDato<br>";
    
    ?>
    
    
    <?php 
        echo "<h2>For</h2>";
        for($contador = 0;$contador < 10; $contador++){
            echo "$contador<br>";
        }
    
    ?>    

    <?php
       
       
       echo "<h2>Lista desordenada con for</h2>";


       echo "<ul>";
        for($item=0;$item<=3;$item++){
            echo "<li>Item $item</li>";
        }
       echo "</ul>";
       echo "<hr>" 
    ?>

    <?php
    $fila = 0;
    $precio = 0;
    echo "<table>";
    for($fila=0;$fila<4;$fila++){
        echo "<tr>";
            if($fila == 0){
                echo "<th>Item</th>";
                echo "<th>Precio</th>";
                
            } else {
                echo "<td>$fila</td>"; 
                echo "<td>USD $fila</td>";
            }

        echo "</tr>";
    }
    echo "</table>";


    ?>


</body>
</html>