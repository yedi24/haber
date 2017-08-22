
<?php

$ch = curl_init();

// URL
curl_setopt($ch, CURLOPT_URL, "http://www.cumhuriyet.com.tr");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_exec($ch); // ekrana basiliyor
curl_close($ch);
	
?>
