<?php
// Task 3: sort the array in descending order

$grades = [85, 92, 78, 88, 95];
function descendingNumber($grades)
{
    rsort($grades);
    print_r($grades);
}
descendingNumber($grades);

?>