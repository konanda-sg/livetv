<?php
// Powered X-Rere Script
// Supported I-WRAH Tools
// Punya MasbimCH
// Please don't remove tag :)

echo '#EXTM3U #EXTINF:-1 tvg-logo="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/KOMPAS_TV_%282017%29.png/220px-KOMPAS_TV_%282017%29.png" group-title="LOKAL", SCTV
https://app-etslive-2.vidio.com/live/204/master.m3u8?';
echo jembuwt('204')."\n";

function jembuwt($aw){
	// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://www.vidio.com/live/204/tokens?type=hls');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: www.vidio.com';
$headers[] = 'Content-Length: 0';
$headers[] = 'Sec-Ch-Ua: ^^';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';
$headers[] = 'Content-Type: text/plain;charset=utf-8';
$headers[] = 'Accept: */*';
$headers[] = 'Origin: https://www.vidio.com';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.vidio.com/live/204-sctv';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close($ch);
	$result = json_decode($result, true);
	echo $result['token'];
}
