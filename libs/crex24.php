<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);
$data = json_decode(file_get_contents("https://api.crex24.com/v2/public/tickers/".$_GET['instrument']."BTC"), true);
$crex24 = $data['last'];
$crex24bid = $data['bid'];
$crex24ask = $data['ask'];
$array = array('crex24' => $crex24 ,'crex24ask' => $crex24ask,'crex24bid' => $crex24bid );
$json = json_encode($array);
echo $json;
?>
