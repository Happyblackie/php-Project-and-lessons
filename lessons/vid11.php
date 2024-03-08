<?php 

// $price = 90;

// if($price < 20)
// {
//     echo 'price is less than 20';
// }elseif($price == 20)
// {
//     echo 'price is equal to 20';
// }else
// {
//     echo 'price is neither less than 20 nor equal to 20';
// }





$products = [
    ['name' => 'maize', 'price' => 20 ],
    ['name' => 'sugar', 'price' =>10 ],
    ['name' => 'vegetable', 'price' => 15],
    ['name' => 'TV-remote', 'price' => 5],
    ['name' => 'rice', 'price' => 40],
    ['name' => 'salt', 'price' => 2],
    
];  


foreach($products as $product)
{
    // if($product['price'] < 15 && $product['price'] > 2)
    // {
    //     echo $product['name']. '<br/>';
    // }

    if($product['price'] < 20|| $product['price'] > 10)
    {
        echo $product['name']. '<br/>';
    }


}


    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach($products as $product) {?>
                
                <?php if($product['price'] > 15) { ?>
                    <li><?php echo $product['name']; ?></li>
                <?php } ?>
                
            <?php }?>
        </ul>
    </div>
</body>
</html>