<?php
$access_token = 'wHpV2hqG/0J4nHiikj/j7Je0FICbVPnj3XSoua1U1g3bAoaT9tdS8wLe1hvPgvh5zp/6yEKVKT9HbX+qkKiX5mixYBAeWYOJcjg52d23IID9DmSNQtIAOstkmrcHUI6MbBKACsy/VmAyiQpbPQ2B+gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>