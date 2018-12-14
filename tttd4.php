<?php
function signup(){
	$url = "http://indonesiareward.com/api/v3/account.signUp.php";
	$h = explode("\n",str_replace("	","","Content-Type: application/x-www-form-urlencoded; charset=UTF-8
	User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.0.2; Redmi Note 2 MIUI/V8.1.2.0.LHMMIDI)
	Host: indonesiareward.com
	Connection: Keep-Alive"));
	$user = "sadna".rand(01234,99999);
	$pwd = "ferguso".rand(012345,999999);
	$body = "email=$user@gmail.com&fullname=babik kali&clientId=1&password=$pwd&username=$user&";
	return curl($url,$h,$body);
}
function curl($url,$h,$body){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$x = curl_exec($ch); curl_close($ch);
	return json_decode($x,true);
}
function refer($reff){
	$data = signup();
	$aid = $data['accountId'];
	$atok = $data['accessToken'];
	$user = $data['account'][0]['username'];
	$body = 'data={"clientId":"1","accountId":"'.$aid.'","accessToken":"'.$atok.'","user":"'.$user.'","name":"refer","value":"'.$reff.'","dev_name":"Redmi Note 2","dev_man":"Xiaomi","ver":"3.0","pckg":"com.loyaltyreward.application"}&';
	$url = "http://indonesiareward.com/api/v3/account.Refer.php";
	$h = explode("\n",str_replace("	","","Content-Type: application/x-www-form-urlencoded; charset=UTF-8
	User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.0.2; Redmi Note 2 MIUI/V8.1.2.0.LHMMIDI)
	Host: indonesiareward.com
	Connection: Keep-Alive"));
	return curl($url,$h,$body);
}
while(true){
	$submit = refer("KS30O1")['response_title'];
	if(empty($submit)) continue;
	echo "$submit\n";
	continue;
}