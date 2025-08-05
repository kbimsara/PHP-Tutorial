<?php
$num1=20;
$num2=30;

// $message="Welcome to PHP Programming!";

function addNumber($x,$y){
    $sum=$x+$y;
    // echo "<br>".$sum;
    return $sum;
}
function mulNumber($x,$y){
    $mult=$x*$y;
    // echo "<br>".$sum;
    return $mult;
}

function displayMessage($message){
    echo "<br>".$message."<br>";
}



// Calling the functions
// echo addNumber($num1,$num2); // Calling the function to add numbers
displayMessage("This is returning sum: ".addNumber($num1, $num2)); // Calling the function to display message
displayMessage("This is returning mul: ".mulNumber($num1, $num2)); // Calling the function to display message





// displayMessage($message); // Calling the function to display message




// $globalVariable=60; // Global variable

// function view(){
//     global $globalVariable; // Accessing the global variable

//     echo"</br>";
//     echo "This is a View function<br>";
//     echo"</br>";
//     echo "The global variable is: $globalVariable<br>";
//     echo"</br>";

// }

// view(); // Calling the view function



?>