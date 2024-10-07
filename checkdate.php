<?php
var_dump(checkdate(03,15,2010));
var_dump(checkdate(10,05,1990));
var_dump(checkdate(2,29,2001));
var_dump(checkdate(2,29,2012));
$m = "7";
$d = "18";
$y = "24";
If (!checkdate($m, $d, $y)) {
echo "invalid date";
} else {
echo "Entry date is correct ";
}
?>
