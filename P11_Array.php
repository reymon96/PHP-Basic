<?php

//Normal Array
$Array = array("Data0", "Data1", "Data2", "Data3");
echo ($Array[2]."\n");

//Associative
$age = array("David" => "34", "Romeo" => "18", "Jose" => "12");
echo ("\n".$age["Romeo"]."\n\n");

//Loop Through
foreach ($age as $name => $number) {
	echo ("Name: ".$name." - ".$number."\n");
}

echo ("\n\n"."Main Array"."\n");
$Array = array("Data0", "Data1", "Data2", "Data3", "Data4", "Data5");
foreach ($Array as $data) {
	echo ($data."\t");
}

echo ("\n\n"."array_slice(0, 3)"."\n");

$Array = array_slice($Array, 0, 3);
foreach ($Array as $data) {
	echo ($data."\t");
}

$Array = array("Data0", "Data1", "Data2", "Data3", "Data4", "Data5");
echo ("\n"."array_shift()"."\n");
$Array = array_shift($Array);
echo ($Array."\n");

$Array = array("Data0", "Data1", "Data2", "Data3", "Data4", "Data5");
echo ("array_pop()"."\n");
array_pop($Array);
foreach ($Array as $data) {
	echo ($data."\t");
}

$Array  = array("Data0", "Data1", "Data2", "Data3");
$Array1 = array("DataA", "DataB", "DataC");
echo ("\n"."array_merge()"."\n");
$Array = array_merge($Array, $Array1);
foreach ($Array as $data) {
	echo ($data."\t");
}

?>