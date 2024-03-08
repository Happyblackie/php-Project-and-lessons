<?php 
    $footballClubs = [
        ['name' => 'mancity', 'league' => 'epl', 'followers' => '10M'],
        ['name' => 'afc', 'league' => 'kpl', 'followers' => '20k'],
        ['name' => 'myb', 'league' => 'ncl', 'followers' => '10k']
    ];

    //print_r($footballClubs);
    //echo $footballClubs[1]['name'];
    //echo count($footballClubs);

    #add new associative array to multidimentional array
    $footballClubs[] = ['name' => 'mnu', 'league' => 'kregl', 'followers' => '10k'];
    //print_r($footballClubs);

    $popped = array_pop($footballClubs); //removes last value
    print_r( $popped );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional arrays</title>
</head>
<body>
    
</body>
</html>