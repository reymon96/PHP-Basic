<?php

$Array = [];

print("Random Array"."\n");
for ($i = 0; $i < 10; $i++) {
	array_push($Array, rand(0, 100));
	echo ($Array[$i]."\t");
}

print("\n"."Ascending Order"."\n");
sort($Array);
foreach ($Array as $data) {
	echo ($data."\t");
}

print("\n"."Descending Order"."\n");
rsort($Array);
foreach ($Array as $data) {
	echo ($data."\t");
}

$Array = [
	"Samsung" => "$3,500",
	"Alcatel" => "$2,800",
	"Kodak"   => "$1,499",
	"Sony"    => "$4,600"
];
asort($Array);
print("\n"."Ascending According to Value"."\n");
foreach ($Array as $data => $price) {
	echo ($data." - ".$price."\t");
}

print("\n"."Ascending According to Key"."\n");
ksort($Array);
foreach ($Array as $data => $price) {
	echo ($data." - ".$price."\t");
}

print("\n"."Descending According to Value"."\n");
arsort($Array);
foreach ($Array as $data => $price) {
	echo ($data." - ".$price."\t");
}

print("\n"."Descending According to Key"."\n");
krsort($Array);
foreach ($Array as $data => $price) {
	echo ($data." - ".$price."\t");
}

?>