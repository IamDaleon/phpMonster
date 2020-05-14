<?php
    echo "Well hello there...!";
    $age = 33;
    
    if ($age < 18 ){
        echo "Sorry you are too young";
    }elseif ( $age > 21){
        ?>
        <h2>"Drink up"</h2>
        <?php
    }else{
        echo 'Where is your ID...?';
    }
?>

