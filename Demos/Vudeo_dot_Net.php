<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Iframe Player                                   │
 │ Version   │ V1.0                                            │
 │ Provider  │ Multi                                           │
 │ Support   │ Web Iframe Player                               │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 13 January 2021                                 │
 │ Modified  │ 00:0000:0000                                    │
 └─────────────────────────────────────────────────────────────┘
*/

/*
HOSTED APIS https://paidcodes.albdroid.al/Players/Embed_Player/
Playing From: YouTube, Google Drive, Facebook, Twitch, Dailymotion, Wistia, Vudeo.net vimeo And External Sources With Clappr & JW Player

RULES AL: Ky API Eshte Vetem Per Demostrim, Nese Ju e Keqperdorni Do Te Humbisni Komunikimin Me Serverat Tane
RULES EN: This API is For Demonstration Only, If You Misuse It You Will Lose Communication With Our Servers

Generator @ Kodi dot AL Dev Tools
Code For PHP 5/7
*/
// Only direct link Allowed ex: https://vudeo.net/xxxxxxxx.html
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");
// Another Player API With Content Replacer in Same Stream Site
// https://paidcodes.albdroid.al/Players/ADS_Remover/
$API_HOST = "https://paidcodes.albdroid.al/Players/Embed_Player/";
$CALL_URL = "?url=";
$Parameter = "&type=";
$Type = "vudeo_dot_net";
$URL = "https://vudeo.net/6i1y8a1xl6j7.html";

$API_CALL = $API_HOST. $CALL_URL . $URL . $Parameter . $Type;

$DATA = file_get_contents($API_CALL);
// $GET_URL = file_get_contents($API_CALL.$_SERVER['QUERY_STRING']);
echo $DATA;
?>
