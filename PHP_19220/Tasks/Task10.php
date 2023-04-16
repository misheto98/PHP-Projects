<?php
$array = array("a", "Ab", "abcd", "abcdfegh", "achn");
$max_len = max(array_map('strlen', $array));
$min_len = min(array_map('strlen', $array));
echo "The shortest array length is:" . $max_len;
echo "<br>";
echo"The longest array length is:" . $min_len;
?>

