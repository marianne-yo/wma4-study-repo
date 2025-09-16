<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $city = array("Cebu", "Tarlac", "Vigan", "Davao", "Pampanga");

        echo "List of Cities:";
        echo "<br/>";
        for($i=0; $i<=4; $i++){
            echo  $i + 1 . " " . "$city[$i]" . "<br/>";
        }
    
        echo "<br/>";

        $totalPopulation = 0;
        $ave=0;
        $population = array(120000, 95000, 134000, 88000, 110000);
        echo "Population:";
        echo "<br/>";
        for($i=0; $i<=4; $i++){
            echo "$population[$i]" . "<br/>";

            $totalPopulation+=$population[$i];
            $ave = $totalPopulation/5;
        }
        echo "<br/>";
        echo "Average Population: ". $ave;


    ?>

</body>
</html>