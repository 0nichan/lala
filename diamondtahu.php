<?php

function phpsessid($len){
	$data = "abcdefghijklmnopqrstuvwxyz1234567890";
	$word = array();
	for($a=0;$a<$len;$a++){
			$rand = rand(0,strlen($data)-1);
			$word[$a] = $data{$rand};
	}
	$ww = implode("",$word);
	return $ww;
}
function rMac(){
	$data = "abcdefghijklmnop1234567890qrstuvwxyz1234567890";
	$w = array();
	$i = 0;
	while($i<6){
		for($a=0;$a<2;$a++){
			$rand = rand(0,strlen($data)-1);
			$word[$a] = $data{$rand};
		}
		$w[$i] = implode("",$word);
		$i++;
	}
	$ww = implode(":",$w);
	return $ww;
}

function cHeader($data=null, $ref=null, $phpsess){
	$h = array();
        $h[] = "Host: api.indkota.com";
        $h[] = "Connection: keep-alive";
        if($data!=null) $h[] = "Content-Length: ".strlen($data);
        $h[] = "Accept: application/json, text/javascript, */*; q=0.01";
        $h[] = "Origin: file://";
        $h[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.91 Mobile Safari/537.36";
        $h[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
        $h[] = "Accept-Encoding: gzip, deflate";
        if($ref!=null) $h[] = "Referer: $ref";
        $h[] = "Accept-Language: id-ID,en-US;q=0.9";
        $h[] = "Cookie: PHPSESSID=$phpsess";
        $h[] = "X-Requested-With: com.tahu.fep";
	return $h;
}
function id($token,$jumlah,$wait) {
	while($x = true) {
	$data = 'member_token='.$token.'&device_id='.rMac();
	$headers = cHeader($data,null,phpsessid(26));
	 $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com/System/Invite/rewarded_video");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
	$result = curl_exec($ch);
	$res = json_decode($result,true);
    	curl_close ($ch);
	if($res['status']==true){
		$live += 1;
		echo "[$live]".$result."\n";
	}else{
		continue;
	}
    	sleep($wait);
    	$x++;
    	flush();
	}
}
echo "Token ?\nInput : ";
$token = trim(fgets(STDIN));
$jumlah = 10;
$wait = 0;
$submit = id($token,$jumlah,$wait);
print $submit;
?>