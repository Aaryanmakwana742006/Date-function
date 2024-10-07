<?php

echo "<br> Now ". date("d-m-Y", strtotime("now"));
echo "<br> lastyear ".date("d-m-Y", strtotime("last year"));

$now= new DateTime('now');
$lastyear=new DateTime('last year');

$newdate= $now->diff($lastyear);
echo"<br>Difference:".$newdate->y ."years, ".$newdate->m."months," . $newdate->d . "days";

echo"<br>Total difference in days:". $newdate->days."days";
?>