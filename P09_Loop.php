<?php
//For
echo ("For______________________"."\n");
for ($i = 0; $i < 10; $i++) {
	print($i.""."\t");
}
//Foreach
echo ("\n"."Foreach__________________"."\n");
$Array = ["a", "b", "c", "d", "e", "f"];
foreach ($Array as $data) {
	print($data."\t");
}
//While
echo ("\n"."While____________________"."\n");
$i = 0;
while ($i < 10) {
	echo ($i."\t");
	$i++;
}
//doWhile
echo ("\n"."doWhile__________________"."\n");
$i = 0;
do {
	$i++;
	echo ($i."\t");
} while ($i < 10);
?>