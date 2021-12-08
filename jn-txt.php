<?php
    $urls=array(
        'https://woooi8.com/user/y_one.php',
        'https://woooi8.com/user/y_two.php',
        'https://woooi8.com/user/y_three.php',
        'https://woooi8.com/user/y_four.php',
    );

    shuffle($urls);
    
    header('Location: '.$urls[0]);

?>