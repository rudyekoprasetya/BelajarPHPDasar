<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "fsH9WX15wWIOVY9w5o9qb5v03Hokzmw7tiZkb0kR6SqYkMwdgtrkoR039bC7lh+aGngJh8go52jJQEWoVeVIQBDm4zOd0r4D3L3EvUFK8dn8hBI5mmZVE3QHjXLTVzIwpYd5QfiRj+3xje90sojC/wdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "dd6a8f00d49edde34e7764f11d916feb";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}