<?php
// The path to the executable file
$exePath = 'C:\\path\\to\\your\\file.exe';

// Run the executable and store the output in $output
exec($exePath, $output);

// Output the result
print_r($output);
?>
