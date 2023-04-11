<?php

function Printer(int $num) {
	for ($i = 0; $i < $num; $i++) {
		echo ($i."\t");
	}
}

Printer(5);

?>