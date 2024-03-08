<?php 
    // function sayHello($name)
    // {
    //     echo "good morning $name";
    // }

    // function sayHello($name='blackie')
    // {
    //     echo "good morning $name";
    // }

    function sayHello($name='blackie', $time='good morning')
    {
        echo "$time  $name";
    }

    sayHello('vin', 'good afternoon');






    function formatProduct($product)
    {
       // echo "{$product['name']} costs {$product['price']} to buy <br/>";
        return  "{$product['name']} costs {$product['price']} to buy <br/>";
    }

    $formatted = formatProduct(['name'=>'colgate', 'price'=>20]);
    //echo $formatted

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>