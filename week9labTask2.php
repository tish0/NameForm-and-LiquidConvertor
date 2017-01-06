    <head>
        <title>Week 9 Lab - Task two</title>
    </head>
    <body>
    <h1>conversion</h1>
    <?php
    function ConvertLiquid($liquidAmt, $convert){
        if ($convert == "liters") return $liquidAmt * 3.78541;
        else return $liquidAmt * 0.264172;
    }

    $convertAmt=$_POST["convertAmt"];
    $convertTo=$_POST["convertTo"];


    if (empty($convertAmt) || empty($convertTo)) {
        echo "Ensure you supply both a liquid amount and which measurement to convert";
    }
    else if (!is_numeric($convertAmt)) {
        echo "Conversion amount has to be number only";
    }
    else if ($convertTo != "liters" && $convertTo != "gallons") {
        echo "you have to choose only liters or gallons";
    }
    else {
        $value=ConvertLiquid($convertAmt, $convertTo);
        if ($convertTo == "liters") echo "".$convertAmt . " Gallons = ". $value ." Liters";
        else echo "".$convertAmt . " Liters = ". $value ." Gallons";
    }

    ?>
    </body>