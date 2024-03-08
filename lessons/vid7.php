<?php 
                #indexed array
    $peopleOne = ['happy', 'ziporah', 'liz'];
    //echo $peopleOne[1];

    $peopleTwo = array('ken', 'denje');
    //echo $peopleTwo[1];

    $ages = [26, 21, 19];
    //print_r($ages);

    #override a value
    $ages[1] = 22;
    //print_r($ages);

    #add a new value to the array- by default goes at the end
    $ages[] = 23;
    //print_r($ages);
    array_push($ages, 28);
    //print_r($ages);

    #count items in an array
    //echo count($ages);

    #merge arrays
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree);


                #associative array(key $ values pairs)
    $ninjasOne = ['zipi' => 'black', 'happy'=>'red', 'liz'=>'red'];
    //print_r($ninjasOne);

    $ninjasTwo = array('mancity' => 'epl', 'realmadrid'=>'laliga');
    //print_r($ninjasTwo);

    #adding new associative array key value pair to existing one
    $ninjasTwo['copanhagen'] = 'serieA';
    //print_r($ninjasTwo);

     #overriding array key value pair to existing one
     $ninjasTwo['realmadrid'] = 'bundesliga';
    //print_r($ninjasTwo)

    #merge two associative array
    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);
    
    





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>