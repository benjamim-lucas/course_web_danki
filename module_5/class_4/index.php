<?php
    //string
    $name = 'Ben';
    //integer
    $age = 21;
    //boolean
    $isStudent = true;
    //double (the teacher said double even though PHP uses the term float for 64-bit floating point numbers)
    $height = 1.83;

    //output
    echo 'My name is: ' . $name . '<br>';
    echo 'I am ' . $age . ' years old.<br>';
    echo 'Am I a student? ' . ($isStudent ? 'Yes' : 'No') . '<br>';
    echo 'My height is: ' . $height . ' meters.';
?>