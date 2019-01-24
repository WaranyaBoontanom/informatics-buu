<?php
$access_token = 'gDw+LFy4eXaaNVFZi1hgqiP2exAu7Mntori9bFUQ8rX6XUj/wpFjY4D+t9UiZCXHsxcBIROuiNl6nUApAteX5RTEBwM2ToLRI56h07LaKBItjxuGtmRN8GE6J0z6XJYTRBPyvxqW7yI1ZnVb5CVXmwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
