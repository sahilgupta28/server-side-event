<?php
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
 
// Get the current time on server
$currentTime = date("h:i:s", time());
 
// Send it in a message
$data = [
    'id' => mt_rand(0, 100),
    'time' => $currentTime
];
$str = json_encode($data);

echo "data: {$str} \n\n";
flush();
?>