<?php
    $tweets = file_get_contents('tweets.json');
    $arrayTweets = json_decode($tweets, true);
    $tweettext = $_POST['tweettext'];

    if(isset($_POST['tweetButton']) && $tweettext){
        $tweet = [
            'texto' => $tweettext,
            'autor' => 'Chris',
            'username' => 'JesusChrist'
        ];
        array_unshift($arrayTweets['tweets'], $tweet);
        file_put_contents('tweets.json', json_encode($arrayTweets, JSON_PRETTY_PRINT));
    }
    require_once "index.html";
?>
