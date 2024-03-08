<?php 

    $products = [
        ['name' => 'maize', 'price' => 20 ],
        ['name' => 'sugar', 'price' =>10 ],
        ['name' => 'vegetable', 'price' => 15],
        ['name' => 'TV-remote', 'price' => 5],
        ['name' => 'rice', 'price' => 40],
        ['name' => 'salt', 'price' => 2]
        
    ];  

    foreach($products as $product)
    {
        // if($product['name'] === 'TV-remote'){
        //     break;
        // }

        if($product['name'] === 'TV-remote'){
            continue;
        }
        
        echo $product['name'] . '<br/>';
        
       
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue & Break</title>
</head>
<body>
    
</body>
</html>