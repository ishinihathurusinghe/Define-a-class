<?php
     class Employee{

     }


$classes = get_declared_classes();

echo '<pre>';
    print_r($classes);
    echo '</pre>';

    $class_name = 'Employee';

    if (class_exists($class_name)){
        echo 'Class' . $class_name . ' is available';
    }
    else{
        echo 'Class' . $class_name . ' is not available';
    }

  

    ?>