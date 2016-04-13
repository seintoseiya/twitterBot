<?php

require_once('twitteroauth/autoload.php');
require_once('config.php');

use Abraham\TwitterOAuth\TwitterOAuth;

$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

// 時間によってメッセージを変更
// $msg = (date("H")==12)?"お昼やでー。":"夜やでー。"

$msg = "技術ブログやってます。 http://onesway.hatenablog.com/";

$params = array(
		'status' => $msg
	);

$result = $conn->post('statuses/update', $params);

var_dump($result);