<?php
/*echo 'Cookie: ';
$cookie = trim(fgets(STDIN));
echo 'Auth Token: ';
$auth = trim(fgets(STDIN)); /*/
//panggil

if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {

$kata = file("uname.txt");
$isine = $kata[array_rand($kata)];
$statuse= $isine; 

}

//id ke 2


if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {

$kata = file("uname.txt");
$isine = $kata[array_rand($kata)];
$statuse1= $isine; 

}
if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {

$kata = file("uname.txt");
$isine = $kata[array_rand($kata)];
$statuse2= $isine; 

}

//selesai


while(true)
{
    //emot 
    $emoj = array("😀","😁","😂","😃","😄","😅","😆","😉","?","😋","😎","😍","😘","😗","😙","😚","☺","🙂","🤔","😐","😑","😶","🙄","😏","😣","😥","😮","😛","😴","😫","😪","😯","🤐","😝","😜","😒","😓","😔","😕","🙃","🤑","😢","😰","😱","😭","😲","🙁","😦","😳","😖","😧","😵","😞","😨","😡","😟","😩"," 😀 ", "😁", "😂", " 😃 "," 😄 "," 😅"," 😆"," 😗"," 😘"," 😍 "," 😎"," 😋"," 😊","  😉"," 😙"," 😚"," ☺"," 🙂"," 🤗"," 🤔"," 😐"," 😑"," 🤐"," 😜"," 😝"," 😯"," 😶"," 🙄"," 😪"," 😒"," 😓"," 😫"," 😏"," 😣"," 😴"," 😔"," 😕"," 😌"," 😥"," 😮"," 😛"," 🙃"," 😷"," 😠"," 😩"," 😬"," 😤"," 😟"," 😞"," 😨"," 😡"," 😵"," 😧"," 😖"," 🙁"," 😦"," 😳"," 😱"," 😭"," 😲"," 🤑"," 😢"," 😰"," 🤒"," 👺"," 💩"," 😺"," 💀"," 🤕"," 😇"," ☠"," 😸"," 😹"," 👻"," 🤓"," 😈"," 👽"," 😻"," 👿"," 👾"," 😼"," 👹"," 🤖"," 😽"," 👶"," 🙊"," 🙉"," 🙈"," 😾"," 😿"," 🙀"," 👦"," 👧"," 👨"," 👩"," 👴"," 👵"," 👮"," 👱"," 👲"," 👳"," 👸"," 👷"," 💂"," 🕵"," 👰"," 💁"," 💃"," 👯"," 🙋"," 👼"," 🎅"," 🙇"," 🛀"," 🛌"," 💆"," 🙍"," 🙎"," 💇"," 🙅"," 🚶"," 🗣"," 🕴"," 👤"," 🏃"," 🙆"," 👥"," 🏊"," 👫"," 👬"," 🏇"," 🏇"," ⛷"," 🏋"," 👭"," 🏂"," 🚴"," 💏"," 🏌"," 🚵",
" 👨",
" ❤","
💋",
" 👨",
" 🏄",
" 🏎",
" 👩",
" ❤","
💋",
" 👩",
" 💑",
" 🏍",
" 🚣",
" 👨❤","
💪"," 👨"," 👧"," 👧"," 👈"," 👉"," ☝"," 🖐"," 🤘"," 👊"," 👋"," 👂"," 💅"," 🙏"," ✊"," 🖖"," ✌"," 👎"," 🙌"," 👐"," 👍"," 👇"," 🖕"," 👌"," 👏"," ✋"," 👆"," ✍"," 👃"," 💋💗"," 💙"," 💘"," 👣"," ❤"," 👁"," 💓"," 💛"," 💚"," 💜"," 💔"," 👁"," 👅"," 💕"," 💝"," 💞"," 💖"," 👄"," 💥"," 💣"," 💢"," 💤"," 💌"," 💟"," 💦"," 💨"," 🕳"," 👓"," 🕶"," 🐵","
🐈"," 🐒"," 🦁"," 🐮"," 🦄"," 🐂"," 🐯"," 🐶"," 🐕"," 🐅"," 🐃"," 🐄"," 🐆"," 🐩"," 🐺"," 🐴"," 🐷"," 🐖"," 🐎"," 🐱"," 🐗",
" 🐽"," 🐏"," 🐑"," 🐐"," 🐪"," 🐫"," 🐇"," 🐰"," 🐹"," 🐼"," 🐀"," 🐁"," 🐭"," 🐘"," 🐿"," 🐻"," 🐨"," 🐔"," 🐚"," 🐙"," 🐡"," 🐳"," 🐧"," 🐦"," 🐥"," 🐤"," 🐣"," 🐓"," 🐌"," ⛅"," 💧"," 🎈",);
// PAnggil EMOT
//1
$motica = $emoj[rand(0,count($emoj)-1)];
$emoji5=($motica); 

    //pesannya APA?
    $Messages = ' '.$emoji5.'
    
'; //@'.$statuse.' @'.$statuse1.' @'.$statuse2.' 
    $target = '2598770871141617720';
    $LinkID = 'CQQsFajB1A4';
    
$headers = array();
$headers[] = "authority: www.instagram.com";
$headers[] = "method: POST";
$headers[] = "path: /web/comments/'.$target.'/add/";
$headers[] = "scheme: https";
$headers[] = "accept: */*";
$headers[] = "accept-encoding: gzip, deflate, br";
$headers[] = "accept-language: en-US,en;q=0.9";
//$headers[] = "content-length: 56";
$headers[] = "content-type: application/x-www-form-urlencoded";
$headers[] = "cookie: Disini";
$headers[] = "origin: https://www.instagram.com";
$headers[] = "referer: https://www.instagram.com/p/'.$LinkID.'/comments/";
$headers[] = "sec-fetch-dest: empty";
$headers[] = "sec-fetch-mode: cors";
$headers[] = "sec-fetch-site: same-origin";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Mobile Safari/537.36";
$headers[] = "x-asbd-id: 437806";
$headers[] = "x-csrftoken: qTifuextCKxOEUMxBlbNVAYibDGDkjYX";
$headers[] = "x-ig-app-id: 1217981644879628";
$headers[] = "x-ig-www-claim: hmac.AR1e4iqochl007owVxzoi-xHJktgs7ZvTNF6smZ1NaSHn68o";
$headers[] = "x-instagram-ajax: a90c0f3c9877";
$headers[] = "x-requested-with: XMLHttpRequest";
$url = 'https://www.instagram.com/web/comments/'.$target.'/add/';
$post = 'comment_text='.$Messages.'&replied_to_comment_id=';

$post = json_decode(yarzCurl($url, $post, false, $headers, true));
if(isset($post->tweet_id))
{
    echo "ID : ".$post->id."\n";
	sleep(50);
} else {
	die(print_r($post));
}
}

function yarzCurl($url, $fields=false, $cookie=false, $httpheader=false, $encoding=false)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	if($fields !== false)
	{
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	}
	if($encoding !== false)
	{
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	}
	if($cookie !== false)
	{
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	}
	if($httpheader !== false)
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
	}
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}
