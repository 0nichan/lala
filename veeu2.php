<? php

// include (readline ("config:"));
//link
$ link = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=".$access_token;
$ link2 = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=".$access_token;
$ link3 = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=".$access_token;
//tubuh
$ jbody = array (
 'lokal' => 'in_ID',
	'task_extra_info' => '',
	'task_name' => 'daily_checkin_01',
	'zona waktu' => 'GMT + 07: 00');
$ milstone = array (
 'Lintang' => '-6.885519',
	'lokal' => 'in_ID',
	'longitude' => '107.6228',
	'task_extra_info' => '',
	'task_name' => 'vip_reward_01',
	'zona waktu' => 'GMT + 07: 00');
$ box = array (
      'Lintang' => '-6.885519',
	     'lokal' => 'in_ID',
	     'longitude' => '107.6228',
	     'task_extra_info' => '',
      	'task_name' => 'treasure_box_01',
	     'zona waktu' => 'GMT + 07: 00');
// json_encode
$ body = json_encode ($ jbody, true);
$ body2 = json_encode ($ milstone, true);
$ body3 = json_encode ($ box, true);
// tajuk
$ header = array ();
$ header [] = "Content-Type: application / json";              
             "charset = UTF-8";
             "Isi-Panjang: 96";
             "Host: www.veeuapp.com";
             "Koneksi: Keep-Alive";
             "Terima-Encoding: gzip";
             "Agen-Pengguna: okhttp / 3.10.0";

// absen
sementara (true):
$ curl = curl_init ();
curl_setopt_array ($ curl, array (
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $ tautan,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => benar,
    CURLOPT_POSTFIELDS => $ badan,
    CURLOPT_HTTPHEADER => $ header,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$ resp = curl_exec ($ curl); curl_close ($ curl);
$ json = json_decode ($ resp, true);
if ($ json ['code'] == '4040') {
echo "$ red. [!] $ putih absen harian: $ red". $ json ['message']. "\ n";
tidur (1);
istirahat;
}
lain
{
cetak "$ turkis. [>] $ putih". $ json ['tugas'] ['task_type']. "$ turkis | reward_point: $ putih". $ json ['tugas'] ['reward_point']. "\ n ";
}
tidur (1);
abadi;
// milstone
sementara (true):
$ curl = curl_init ();
curl_setopt_array ($ curl, array (
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $ link2,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => benar,
    CURLOPT_POSTFIELDS => $ body2,
    CURLOPT_HTTPHEADER => $ header,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$ result = curl_exec ($ curl); curl_close ($ curl);
$ js = json_decode ($ hasil, true);
if ($ js ['code'] == '4040') {
echo "$ red. [!] $ putih milstone: $ red". $ js ['message']. "\ n";
tidur (1);
istirahat;
}
lain
{
cetak "$ turkis. [>] $ putih". $ js ['tugas'] ['display_name']. "$ turkis | reward_point: $ putih". $ js ['tugas'] ['reward_point']. "\ n ";
}
tidur (1);
	abadi;
//kotak
sementara (true):
$ curl = curl_init ();
curl_setopt_array ($ curl, array (
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $ link3,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => benar,
    CURLOPT_POSTFIELDS => $ body3,
    CURLOPT_HTTPHEADER => $ header,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$ result_box = curl_exec ($ curl); curl_close ($ curl);
$ jbox = json_decode ($ result_box, true);
if ($ jbox ['code'] == '4040')
{
echo "$ red. [!] $ putih kotak: $ red". $ jbox ['message']. "\ n";
tidur (1);
istirahat;
}
lain
{
echo "$ turkis. [>] $ putih". $ jbox ['tugas'] ['task_type']. "$ turkis | reward_point: $ putih". $ jbox ['tugas'] ['reward_point']. "\ n ";
tidur (1);
}
abadi;
?>