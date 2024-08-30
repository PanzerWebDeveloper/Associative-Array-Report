<?php
    //todo First Method of Declaring Associative Array
    $car = array("Brand"=>"Ford", "Model"=>"Mustang", "Year" => 1964);
    print_r($car);
    echo "<br>";
    //*You can use var_dump() or print_r() to print an array not echo

    //todo Second Method of Declaring Associative Array
    $second_car["Brand"] = "Lamborgini";
    $second_car["Model"] = "Aventador";
    $second_car["Year"] = 2012;
        var_dump($second_car) . "<br>";

        //* You can use echo to singlehandedly print the values of the key-value pairs
        echo "<br>Brand: " . $second_car["Brand"] . "<br>";
        echo "Model: " . $second_car["Model"] . "<br>";
        echo "Year: " . $second_car["Year"] . "<br>";

    //todo Shorter Syntax for Php 5.4 and Above
    $City = [
        "Region XI" => "Panabo City",
        "Nation" => "Philippines",
    ];
    print_r($City);
    echo "<br>===================================================<br>";
?>

<?php
    //todo Accessing Associative Array
    $games = array("FPS" => "Call of Duty", "MMORPG" => "DragonNest", "MOBA" => "Mobile Legends");

    echo "FPS: " . $games["FPS"]; //using echo
    print_r("<br>MMORPG: " . $games["MMORPG"] . "<br>"); //using print_r(), likewise with var_dump()
    print_r("<br>MOBA: " . $games["MOBA"]);


    //todo Changing the value
    //Here, we change the value of MOBA to Honor Of Kings in the $games array
    $games["MOBA"] = "Honor Of Kings";
    echo "<br>MOBA: " . $games["MOBA"] . "<br>";

    echo "<br>===================================================<br>";
?>

<?php
    //todo Looping through Associative Array
    $Ryzen_5_5600G = array("Company" => "AMD", "Cores" => 6, "GPU" => "AMD Radeon Vega 7");

    echo "CPU: Ryzen 5 5600G <br>";
    echo "************************<br>";
    //*For Each Loop
    foreach ($Ryzen_5_5600G as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "************************<br>";
    echo "<br>===================================================<br>";
?>

<?php
    //todo Adding new key-value pair item/s in an associative array using += operator
    //todo you can also add "." or concat operator in a value within a key-value pair
    $my_pc = array("CPU" => "AMD Ryzen 5 5600G", "RAM" => 8 . "GB", "Graphics" => "Radeon Graphics");
    $my_pc += ["SSD" => 476 . "GB", "Motherboard" => "Gigabyte A520M K V2"];

    foreach($my_pc as $keys => $values){
        echo "$keys: $values <br>";
    }

    echo "<br>===================================================<br>";
    //todo Show only the key and not the values
    echo "Keys only: <br><br>";
    $showKeysOnly = array_keys($my_pc);
    foreach($showKeysOnly as $x){
        echo "$x <br>";
    }

    echo "<br>===================================================<br>";
    //todo Show only the key and not the values
    echo "Values only: <br><br>";
    $showKeysOnly = array_values($my_pc);
    foreach($showKeysOnly as $y){
        echo "$y <br>";
    }
?>