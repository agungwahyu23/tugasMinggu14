<?php
require_once('encode.php');

$pesan = "MTE2IDMwNSAxMTU=";
$image = "sample.png";
$lets_encode = new encode();

$lets_encode->executeLSB($pesan,$image);

?>