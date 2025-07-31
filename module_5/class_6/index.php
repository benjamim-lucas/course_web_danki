<?php
    //$name = array('Ben', 'Mell' );
    $name = ['Ben', 'Mell']; 
    echo $name[0], '<br>';
    $name[] = 'Luis';
    echo $name[2], '<br>';

    //The video shows that arrys can store different types of data
    $name[] = 10;
    echo $name[3], '<br>';
    $name[] = 10.5;
    echo $name[4], '<br>';
    $name[] = true;
    echo $name[5], '<br>';
    $name[] = null;
    echo $name[6], '<br>';

    //The video shows that arrays can use thigs other than numbers as keys
    $name['surname'] = 'Smith';
    echo $name['surname'];

?>