<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Study</title>
</head>
<body>
    <h3>IF STATEMENT</h3>
    <!-- IF STATEMENT -->
    <?php 
        $d = date("D");
        if($d=="Tue") echo "Have a nice weekend!";
    ?>
    <br>
    <?php 
        $fName = "Marianne";
        if($fName=="Marianne") echo "Hello " . $fName;
    ?>
    <br><br>

    <h3>IF...ELSE STATEMENT</h3>
    <!-- IF...ELSE STATEMENT -->
    <?php 
        $d = date("D");
        if($d=="Fri") 
            echo "Have a nice weekend!";
        else
            echo "Have a nice day!";
    ?>
    <br>
    <?php 
        $fName = "Carl";
        if($fName=="Marianne") 
            echo "Hello Marianne";
        else
            echo "Hello Guest!";
    ?>
    <br><br>

    <h3>IF...ELSEIF...ELSE STATEMENT</h3>
    <!-- IF...ELSEIF...ELSE STATEMENT -->
    <?php 
        $d = date("D");
        if($d=="Fri") 
            echo "Have a nice weekend!";
        else if ($d== "Tue")
            echo "Have a nice tuesday!";
        else
            echo "Have a nice week!";
    ?>
    <br>
    <?php 
        $fName = "Carl";
        if($fName=="Marianne") 
            echo "Hello Marianne";
        else if($fName=="Carl")
            echo "Hello Carl!";
        else
            echo "Hello Guest!";
    ?>
    <br><br>

    <h3>SWITCH STATEMENT</h3>
    <!-- SWITCH STATEMENT -->
    <?php 
        $x = 3;
        switch($x){
            case 1:
                echo "Number 1";
                break;
            case 2:
                echo "Number 2";
                break;
            case 3:
                echo "Number 3";
                break;
            default:
                echo "No number between 1 and 3";
                break;
        }
    ?>
    <br>
    <?php 
        $fruit = "Pineapple";
        switch($fruit){
            case "Apple":
                echo "The fruit is apple.";
                break;
            case "Banana":
                echo "The fruit is banana.";
                break;
            case "Mango":
                echo "The fruit is mango.";
                break;
            default:
                echo "Not in the fruit list";
                break;
        }
    ?>
    <br><br>

    <h3>CONDITIONAL RULE</h3>
    <p>IF YOU HAVE A LOT TO ECHO IN A CONDITIONAL, YOU WRAP IT IN {}</p>
    <!-- PHP CONDITIONAL RULE -->
     <?php 
        $d = date("D");
        if($d=="Tue") {
            echo "Hello ";
            echo "Have a nice weekend! ";
            echo "See you next week!";
        }
    ?>
    <br><br>

    <h3>Numeric Array</h3>
    <?php
        $cars = array("Volvo", "BMW", "Honda", "Kia", "Ford", "Toyota");
        echo $cars[2]. " and " . $cars[5] . " are Japanese cars." ;
    ?>

    <h3>Associative Array</h3>
    <?php
        $ages = array("Peter" => 32, "Quagmire" => 30, "Joe" => 34);
        echo "$ages[Quagmire]"
    ?>

    <h3>Multidimensional Array</h3>
     <?php 
        $families = array(
            "Griffin"=> array("Peter", "Lois", "Megan", "Stewie"),
            "Quagmire"=> array("Glenn"),
            "Brown"=> array("Cleveland", "Loretta", "Junior")
        );
        echo "Is " . $families['Griffin'][1] . " part of the Griffin family?";
     ?>

    <br>
    <h3>while Loop</h3>
    <?php 
        $i = 1;
        while($i<=5){
            echo "The number is " . $i. "<br/>";
            $i++;
        }
    ?>

    <br>
    <h3>do...while Loop</h3>
    <?php 
        $i = 1;
        do{
            $i++;
            echo "The number is " . $i . "<br/>";
        }
        while($i<=5);
    ?>

    <br>
    <h3>for Loop</h3>
    <?php 
        for($i=1; $i<=5; $i++){
            echo "The number is " . $i. "<br/>";
        }
    ?>
    <br>

    <h3>foreach Loop</h3>
    <?php 
        $x=array("one", "two", "three");
        foreach($x as $numbers){
            echo $numbers . "<br/>";
        }
    ?>
    <br>
    <?php 
        $fruits=array("apple", "banana", "mango");
        foreach($fruits as $fruit){
            echo $fruit . "<br/>";
        }
    ?>
    <br>

    <h3>function</h3>
    <?php 
        function writeName(){
            echo "Marianne Balen";
        }
        echo "My name is ";
        writeName();
    ?>
    <br>
    <h3>function with parameters</h3>
    <?php 
        function writefName($fName){
            echo $fName . " Refnes. <br/>";
        }
        echo "My name is ";
        writefName("Kai Jim");
        echo "My sister's name is ";
        writefName("Hege");
        echo "My brother's name is ";
        writefName("Stale");
    ?>
    <h3>function with multiple parameters</h3>
    <?php
        function writeNameP($fName, $punctuation){
            echo $fName . " Refsnes" . $punctuation . "<br/>";
        }
        echo "My name is ";
        writeNameP("Kai Jim", ".");
        echo "My sister's name is ";
        writeNameP("Hege", "!");
        echo "My brother's name is ";
        writeNameP("Stale", "?");
    ?>

</body>
</html>