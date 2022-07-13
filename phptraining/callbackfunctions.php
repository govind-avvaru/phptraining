<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["hi", "hello", "bye", "good"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>
