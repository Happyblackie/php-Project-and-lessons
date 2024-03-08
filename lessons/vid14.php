<?php 
    #............LOCAL VARIABLE...........................

    function myFunc()
    {
        $price = 10;
        echo $price;
    }

    // myFunc();
    // echo $price;    ...cant access local variable locally


    function myFuncTwo($age) //stil a local variable
    {
        echo $age;
    }
    //myFuncTwo(26);  
    // echo $price;    ...again cant access local variable locally











    #............GLOBAL VARIABLE...........................
    $name = 'Bafana';

    function greetings()
    {
        global $name;
        #override global variable
        $name = 'SouthAfrica';
        echo $name;
    }

    greetings();
    //echo $name;


    // function sayByee(&$name)
    // {
    //     $name = 'SouthAfrica';
    //     echo "byee $name"; 
    // }

    // sayByee($name);
    // echo $name; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variible scope</title>
</head>
<body>
    
</body>
</html>