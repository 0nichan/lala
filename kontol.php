<?php
// C0ded by : Muhammad Ikhsan Aprilyadi  f.t Manggala Febri Valentino
function reff($reff){ 
    $rand = rand(1000,9999);
    $rand2 = rand(10000,99999);
    $get = file_get_contents("https://randomuser.me/api/?nat=ir");
	$j = json_decode($get, true);
	$getName = $j['results'][0]['name']['first'];
	$getName2 = $j['results'][0]['name']['last'];
	$email = $j['results'][0]['name']['username'];
	$photo = $j['results'][0]['picture']['large'];
	$os = file_get_contents("https://nblh.site/users.php");
	$n = json_decode($os, true);
	$getUser = $n[0]['Mozilla'];
    $body = '{
    "session":"",
    "h_dt":3,
    "h_av":"2.7.0",
    "h_os":"'.$getUser.'",
    "h_ts":1537422258247,
    "h_m":"",
    "h_did":"1537422258247",
    "invite_code":"'.$reff.'",
    "email":"'.$email.'@gmail.com",
    "firstName":"'.$getName.'",
    "lastName":"'.$getName2.'",
    "name":"'.$getName.' '.$getName2.'",
    "picture":"'.$photo.'",
    "userId":"1069614609835625'.$rand2.'",
    "source":"google"
}';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.pivot.one/api/account/third_login");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = array();
        $headers[] = "Content-Type: text/plain; charset=utf-8";
        $headers[] = "Referer: https://www.pivot.one/app/invite_login?inviteCode=$reff";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    $result = curl_exec($ch);
    return $result;
        
}  

echo "Your Refferal : ";
$reff  = trim(fgets(STDIN));
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda : ";
$wait   = trim(fgets(STDIN));
$i=0;
while($i<$jumlah){
            sleep($wait);
            $i++;
            flush();
            
        $res   = json_decode(reff($reff));
        //get balance
        $data  = $res->data->invite_code;
    echo "Succes Invite Code: $data\n";
    
    }
?>