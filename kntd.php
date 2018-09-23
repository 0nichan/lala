<? php
// My FB: Manggala Febri Valentino
fungsi  spin ( $ uid , $ chn , $ client , $ token , $ amount , $ wait ) {
    $ x  =  0 ;
    sementara ( $ x  <  $ jumlah ) {
		$ body  = ( " uid = $ uid & userRating = null & channelId = $ chn & clientId = $ client " );
        $ ch  =  curl_init ();
        curl_setopt ( $ ch , CURLOPT_URL , " http://campaign.caping.co.id " );
        curl_setopt ( $ ch , CURLOPT_POST , 1 );
        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ body );
        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
		curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , true );
		curl_setopt ( $ ch , CURLOPT_HTTPHEADER , array ( " Host: ai.caping.co.id " , " Terima: application / json " , " origin: http://campaign.caping.co.id " , " Referer: http://campaign.caping.co.id/turntable/ " , " Connection: keep-alive " , " User-Agent: Mozilla / 5.0 (Linux; Android 5.0.2; Redmi Note 2 Build / LRX22G) AppleWebKit / 537.36 (KHTML, seperti Gecko) Chrome /63.0.3239.111 Mobile Safari / 537.36 " , " X-Diminta-Dengan: CapingNews / 4.1.4 ", " logintoken: $ token " ));
        $ server_output  =  curl_exec ( $ ch );
        curl_close ( $ ch );
		echo  $ server_output . " \ n " ;
        tidur ( $ wait );
        $ x ++ ;
        flush ();
    }
}
cetak  " AWTO SPIN CAPING BY ANGGY \ n \ n " ;
echo  " UID? \ n Input: " ;
$ uid  =  trim ( fgets ( STDIN ));
echo  " ChannelId? \ n Input: " ;
$ chn  =  trim ( fgets ( STDIN ));
echo  " ClientID? \ n Input: " ;
$ client  =  trim ( fgets ( STDIN ));
echo  " Token? \ n Input: " ;
$ token  =  trim ( fgets ( STDIN ));
echo  " Input Spin \ n Input: " ;
$ jumlah  =  trim ( fgets ( STDIN ));
echo  " Jeda? 0-9999999999 (ex: 0) \ n Input: " ;
$ wait  =  trim ( fgets ( STDIN ));
$ execute  = spin ( $ uid , $ chn , $ client , $ token , $ amount , $ wait );
cetak  $ eksekusi ;
cetak  " DONE \ n " ;
? >