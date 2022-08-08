<?php

$url = "https://graph.facebook.com/v14.0/me?fields=id%2Cname&access_token=EAALurbG4PiIBAIndUqV4TFXNufzuR6ZB08oT7QhLJEXDRZAKwRyFz9IZAuacRxZCWCqHr0wiB57TfgZB2ePZBomoBiq57QB94rWHZAdio2g0McLZCN4WCj312I0X1C9gI4FdpeI47XrQjdwnWH7k5rlZB31yh7gwHPWwYfppkqRuQOZBFk7ZBv0YVlmpsekbqnn6jccFwDg3RjbZAwZDZD";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>
