<?php 
require_once "functions.php"; // my functions inside

### Day 3 | Classwork ### 

/* Exercise 1
Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop. */

start_Exercise(1);
    /* for ($i=0; $i <= 50; $i++) { 
        echo "<p>$i Yevgen</p>";
    }
    
    $a = 0;
    while ($a <= 50) {
        echo "<p>$a Yevgen</p>";
        $a++;
    }

    $y = 0;
    do {
        echo "<p>$y Yevgen</p>";
        $y++;
    } while ($y <= 50); */
end_Exercise();



/* Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element. */
 
start_Exercise(2);

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($array as $value) {
        echo "$value ";
    }

end_Exercise();



/* Exercise 3
Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP. */

start_Exercise(3);

$rand_num_array = [];

$i = 0;
while ($i <= 10) {
    array_push($rand_num_array, rand(1,100));
    $i++;
}

format_highlight_export($rand_num_array);

echo "Max Value of random_array => ".max($rand_num_array);

end_Exercise();



/* Exercise 4
Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
e.g. 1 2 Back-End 4 Front-End Back-End 7 8 Back-End Front-End 11 Back-End 13 14 Full-Stack 16 17
Back-End
19
Front-End
etc. */

start_Exercise(4);

for ($i = 1; $i <= 100 ; $i++) { 
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo " Full-Stack <br>";
    } elseif ($i % 3 == 0) {
        echo " Back-End <br>";
    } elseif ($i % 5 == 0) {
        echo " Front-End <br>";
    } else {
        echo " $i <br>";
    }
}

end_Exercise();
?>



