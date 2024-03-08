<?php
    $colors = ['red', 'green', 'blue', 'white'];

    // for($i=0; $i<count($colors);$i++)
    // {
    //     echo $colors[$i] . '<br/>';
    // }

    // foreach($colors as $color)
    // {
    //     echo $color . '<br/>' ;
    // }

    $footballClubs = [
        ['name' => 'mancity', 'league' => 'epl' ],
        ['name' => 'afc', 'league' => 'kpl' ],
        ['name' => 'myb', 'league' => 'ncl' ]
    ];
                   #for loop
    // for($i=0; $i < count($footballClubs); $i++)
    // {
    //     echo $footballClubs[$i]['name'] . '-' . $footballClubs[$i]['league'];
    //     echo '<br/>';
    // }
                       #foreach loop
    // foreach($footballClubs as $footballClub)
    // {
    //     echo $footballClub['name'] . '-' . $footballClub['league'];
    //     echo '<br/>';
    // }



                   #while loop

    // $i = 0;
    // while($i < count($footballClubs))
    // {
    //     echo $footballClubs[$i]['name']. '-' .$footballClubs[$i]['league'];
    //     echo '<br/>';
    //     $i++;
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Football Clubs</h1>
    <ul>
        <?php foreach($footballClubs as $footballClub){ ?>
            <h3>name: <?php echo $footballClub['name']; ?></h3>
            <p>league: <?php echo $footballClub['league']; ?></p>
        <?php } ?>
    </ul>
</body>
</html>