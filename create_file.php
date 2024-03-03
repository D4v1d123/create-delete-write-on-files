<?php

// fopen => Funtion for create and open files.

// fopen main ctions or parameters 
// 'r' => Open a existing file.
// 'r+' => Open to write an existing file.
// 'w' => Open or create a file if it does not exist.
// 'w+' => Open to write or create a file if it does not exist.

$path = "./files/";
$file = "new_file.txt";
$message = "The file has been created successfully.";

// Create a new file if it does not exist in a preset path.
$fopen = fopen($path . $file, "w+");
// Write a file.
fwrite($fopen, "Hello world");

// Go to another web page.
header("Location:./index.php?msg=" . $message);

