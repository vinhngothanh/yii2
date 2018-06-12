<?php

namespace backend\controllers;

class FacebookController extends \yii\web\Controller
{
    // private $parentId;

    // private function getDt($id){
    // 	$token = 'EAAAAUaZA8jlABAJ2bKMCJvQ6Lks4yKrcEFdm8ouIOVnkymoWp6lEmMXWpYsTcaLGhjoLsG3W3psjrIZBSHVcappsLZBix0q16UnotZCGmKFPqp8K7dveLtZCXK6gxOBgMo4xj0avCALeir3lkHAPl8w0CZCJF1tdKW3rAOMnsZAtQZDZD';
    // 	return json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/comments?fields=message,from,comment_count,parent&access_token='.$token),true);
    // }

    // public function curl($url) {
    // 	$ch = @curl_init();
    // 	curl_setopt($ch, CURLOPT_URL, $url);
    // 	$head[] = "Connection: keep-alive";
    // 	$head[] = "Keep-Alive: 300";
    // 	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    // 	$head[] = "Accept-Language: en-us,en;q=0.5";
    // 	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
    // 	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    // 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    // 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // 	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    // 	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    // 	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    // 	$page = curl_exec($ch);
    // 	curl_close($ch);
    // 	return $page;
    // }

    public function actionIndex()
    {
        // $id = '1094916933927327_1708435035908844';
        // $token = 'EAAAAUaZA8jlABAJ2bKMCJvQ6Lks4yKrcEFdm8ouIOVnkymoWp6lEmMXWpYsTcaLGhjoLsG3W3psjrIZBSHVcappsLZBix0q16UnotZCGmKFPqp8K7dveLtZCXK6gxOBgMo4xj0avCALeir3lkHAPl8w0CZCJF1tdKW3rAOMnsZAtQZDZD';

        // $arr = $this->curl('https://graph.facebook.com/'.$id.'/comments?fields=message,from,comment_count,parent&access_token='.$token);

        // $arr = $this->getDt('1094916933927327_1708435035908844');
        // var_dump($arr);
        // print_r($arr);
        // print_r($arr['data']);

        // $i = 0;
        // while($i<count($arr['data'])){
        // 	if(!array_key_exists('parent',$arr['data'][$i])){
        // 		echo '<div class="v1"><u>'.$arr['data'][$i]['from']['name'].'</u>: '.$arr['data'][$i]['message'].'</div>';
        // 		$parentId = $arr['data'][$i]['id'];
        // 		foreach(array_filter($arr['data'], function($v){return $v['parent']['id'] == $GLOBALS['parentId'];}, ARRAY_FILTER_USE_BOTH) as $key){
        // 			echo '<div class="v2"><u>'.$key['from']['name'].'</u>: '.$key['message'].'</div>';
        // 		}
        // 	}
        // 	$i++;
        // }
        return $this->render('index');
    }
}
