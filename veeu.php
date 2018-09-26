<? php
@ system ( " clear " );
// warna
$ biru = " \ 033 [1; 34m " ;
$ turkis = " \ 033 [1; 36m " ;
$ ijo = " \ 033 [92m " ;
$ putih = " \ 033 [1; 37m " ;
$ pink = " \ 033 [1; 35m " ;
$ red = " \ 033 [1; 31m " ;
$ kuning = " \ 033 [1; 33m " ;
// flag
cetak " $ ijo
================================================== ==== \ n __ _______ _____ _ _
\ \ / / ____ | ____ | | | | buat oleh: QueenshaCell
\ \ / / | _ | | _ | | | | | jika tidak keberatan
  \ V / | | ___ | | ___ | | _ | | masukan kode masukan: E11ZBF
   \ _ / | _____ | _____ | \ ___ / \ n ===================================== ================= \ n $ putih " ;
// tautan
$ link  =  " https://www.veeuapp.com/v1.0/incentive/tasks?access_token= " . $ access_token ;
// body
$ video  =  array (
   ' lokal '  =>  ' in_ID ' ,
	  ' task_extra_info '  =>  ' ' ,
	  ' task_name '  =>  ' watch_video_ball_01 ' ,
	  ' zona waktu '  =>  ' GMT + 07: 00 ' );
// encode
$ body0  =  json_encode ( $ video , true );
// tajuk
$ head  =  array ();
$ head [] =  " Host: www.veeuapp.com " ;
          " Koneksi: Keep-Alive " ;
          " Terima-Encoding: gzip " ;
          " Agen-Pengguna: okhttp / 3.10.0 " ;
$ header  =  array ();
$ header [] =  " Content-Type: application / json " ;              
             " charset = UTF-8 " ;
             " Isi-Panjang: 96 " ;
             " Host: www.veeuapp.com " ;
             " Koneksi: Keep-Alive " ;
             " Terima-Encoding: gzip " ;
             " Agen-Pengguna: okhttp / 3.10.0 " ;
// config
include ( readline ( " masukan config: " ));
// intro
echo  " $ kuning . [>] $ putih sedang masuk ..... \ n " ;
tidur ( 1 );
// dapatkan info
sementara ( true ):
$ curl  =  curl_init ();
curl_setopt_array ( $ curl , array (
    CURLOPT_URL  =>  " https://www.veeuapp.com/v1.0/me?access_token= " . $ access_token ,
    CURLOPT_RETURNTRANSFER  =>  1 ,
    CURLOPT_TIMEOUT  =>  30 ,
    CURLOPT_HTTPHEADER  =>  $ kepala ,
    CURLOPT_SSL_VERIFYPEER  =>  0 ,
      ));
$ result  =  curl_exec ( $ curl );                                   curl_close ( $ curl );
$ jres  =  json_decode ( $ hasil , true );
echo  " $ ijo . [*] sukses !!! \ n " ;
echo  " $ putih | pengguna: $ biru " . $ jres [ ' user ' ] [ ' nickname ' ] . " \ n " ;
echo  " $ putih | email: $ biru " . $ jres [ ' user ' ] [ ' email ' ] . " \ n " ;
istirahat ;
abadi ;
// konfirmasi
$ konfir  = readline ( " $ putih . [?] $ turkis konfirmasi (y / n): " );
       if ( $ konfir  ==  ' y '  OR  $ konfir  ==  ' Y ' ) {
        @ system ( " clear " );
        }
        else {
        echo  " $ merah . [!] " . $ putih . " masuk lagi \ n " ;
        keluar ;
        }
// intro2
echo  " $ kuning . [>] $ putih memproses data !!! \ n " ;
tidur ( 1 );
echo  " $ yellow . [>] $ putih mejalankan bot ...... \ n " ;
tidur ( 1 );
// termasuk
termasuk ( ' modul ' );
// bot_nonton
sementara ( true ):
tidur ( 1 );
$ curl  =  curl_init ();
curl_setopt_array ( $ curl , array (
    CURLOPT_RETURNTRANSFER  =>  1 ,
    CURLOPT_URL  =>  $ tautan ,
    CURLOPT_TIMEOUT  =>  30 ,
    CURLOPT_POST  =>  benar ,
    CURLOPT_POSTFIELDS  =>  $ body0 ,
    CURLOPT_HTTPHEADER  =>  $ header ,
    CURLOPT_SSL_VERIFYPEER  =>  0 ,
      ));
$ result_video  =  curl_exec ( $ curl );                                   curl_close ( $ curl );
$ jvid  =  json_decode ( $ result_video , true );
if ( $ jvid [ ' code ' ] ==  ' 4040 ' ) {
echo  " $ red . [!] $ putih menonton video: $ merah  " . $ jvid [ ' message ' ] . " $ putih \ n " ;
tidur ( 1 );
// info pengguna
echo  " $ putih | pengguna: $ biru " . $ jres [ ' user ' ] [ ' nickname ' ] . " \ n " ;
echo  " $ putih | email: $ biru " . $ jres [ ' user ' ] [ ' email ' ] . " \ n " ;
keluar ;
}
else {
echo  " $ kuning . [>] $ ijo sukses $ putih | pengguna: $ biru " . $ jres [ ' user ' ] [ ' nickname ' ] . " $ ijo
[!] $ turkis reward_point: $ putih  " . $ jvid [ ' tugas ' ] [ ' reward_point ' ] . " $ ijo | $ turkis complete_seconds: $ putih  " . $ jvid [ ' task ' ] [ ' extra ' ] [ ' complete_seconds ' ] . " $ ijo
[!] $ turkis current_point: $ putih  " . $ jvid [ ' point ' ] [ ' current_point ' ] . " $ ijo | $ turkis today_revenue_point: $ putih  " . $ jvid [ ' point ' ] [ ' today_revenue_point ' ] . "
================================================== ===== \ r \ n " ;}
abadi ;
? >
