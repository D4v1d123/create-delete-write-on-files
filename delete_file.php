<?php

$path = "./files/";
$file = "new_file.txt";
$message = "The file has been deleted successfully.";

// Delete a file in a preset path.
unlink($path . $file);

// Go to another web page.
header("Location: index.php?msg=" . $message);