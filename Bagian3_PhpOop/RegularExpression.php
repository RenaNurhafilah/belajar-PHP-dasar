<?php

$matches = [] ;
$result = preg_match_all("/rena|fillah|hafidzah/i", "Rena Nurhafilah", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/kucing|liar/i", "***", "dasar kucing makan tikus!");
var_dump($result);

$result = preg_split("/[\s,-]/",  "Rena Nurhafilah, Teknik Informatika");
var_dump($result);