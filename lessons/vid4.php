<?php 


$name= 'happy';
//echo $name;

#Constants cant be overidden otherwise..error
define('NAME', 'OTIENO');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and constants</title>
</head>
<body>
    <h1>my name is <?php echo $name; ?></h1>
    <h1>other name is <?php echo NAME; ?></h1>
</body>
</html>