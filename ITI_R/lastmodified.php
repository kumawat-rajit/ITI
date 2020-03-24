<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name;
$file_last_modified = filemtime($current_file_name); 
echo "Last modified " . date("d/m/Y", $file_last_modified)."\n";
?>