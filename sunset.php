<?php
date_default_timezone_set("Asia/Calcutta");
echo("Date: " . date("D M d Y") . "<br />");
echo("Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,23.0322424,72.5626907,90.5546,5.50));
?>