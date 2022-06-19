<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers =[1,2,3,4,5,6,7,8,9];
$fruits =array('apple','banana','orange','pear');

//print_r($numbers);
//echo $numbers[1];
//associative array
$color =[
    1 => 'red',
    2 => 'green',
    3 => 'yellow',
    4 => 'blue'
];
//echo $color[1];
$people = [ 
   
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@example.com'   
    ],
    
    [
        'first_name' => 'John002',
        'last_name' => 'Doe002',
        'email' => 'john@example.com'   
    ],
    
    [
        'first_name' => 'John003',
        'last_name' => 'Doe003',
        'email' => 'john@example.com'   
    
    ]

 ];
 //echo $people[1]['first_name'];
 var_dump(json_encode($people));