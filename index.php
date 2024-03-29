<?php 
    include('config/db_connect.php');

    #write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    #make query and get result
    $result = mysqli_query($conn, $sql);

    #fetch resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    #FREE RESULT FROM MEMORY
    mysqli_free_result($result);

    #colse connection
    mysqli_close($conn);

    // print_r($pizzas);




?>






<!DOCTYPE html>
<html lang="en">


    <?php  @include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza): ?>
                <div class="col s6 md-3">
                    <div class="card z-depth-0">
                        <img src="img/pizza.svg" alt="pizza_mage" class="pizza">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <div>
                                <?php #echo htmlspecialchars($pizza['ingredients']); ?>
                                <ul>
                                    <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                                        <li><?php echo htmlspecialchars($ing); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                                        
            <!-- alt syntax -->
            <?php #if(count($pizzas) >=3): ?>
                <!-- <p>there is more pizzas</p> -->
            <?php  #else: ?>
                <!-- <p>there are less than 3 pizzas</p> -->
            <?php #endif; ?>


        </div>
    </div>



    <?php @include('templates/footer.php'); ?>
</html>