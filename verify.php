<?php $access_token = 'XFY9o7mGyFhQgjperrLOic/9YdAWkOsfNirjF+30M56MV9z7r6z5W6dlcFBRe/qGQsSJqUhLCYlrtVDjfcwJ577VgrS8Q8QA6SI1/Zo0LHmJdgB2WVBvNXljQf2Yu4gZr84Tdd9mhH3abquqFUsx8gdB04t89/1O/w1cDnyilFU=';$url = 'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result; ?>