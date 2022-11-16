<?php
    $tweets = file_get_contents('tweets.json');
    $arraytweets = json_decode($tweets, true);
    require_once  "index.html";
?>
