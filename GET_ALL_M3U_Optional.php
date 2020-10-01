<?php
// M3U Optional Structure
// TESTED ON http://albdroid.al/api
ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";

   $select_data = mysqli_query($conn,"select * from streaming");
   echo "#EXTM3U Albdroid Streaming"."\n";
   while($row = mysqli_fetch_array($select_data))
    {
		$stream_id = htmlentities($row["stream_id"]);
		$stream_title = htmlentities($row["title"]);
		$stream_url = $row["link"];
		//$stream_url = str_replace('https','http',$stream_url);
		$stream_thumbnail = $row["thumbnail"];
		$stream_fanart = $row["fanart"];
		$stream_description = htmlentities($row["description"]);
		$stream_category = $row["category"];

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$tvgid = "Hosted by Albdroid";
$tvg_id = ('tvg-id="'. $tvgid .'"');
$tvg_name = ('tvg-name="'. $stream_title .'"');
$TV_LOGO = "https://png.kodi.al/tv/albdroid/black.png"; // MANUAL LOGO
//$tvg_logo = ('tvg-logo="'. $TV_LOGO .'"'); // MANUAL LOGO
$tvg_logo = ('tvg-logo="'. $stream_thumbnail.'"');  // LOGO FROM SQL
$group_title = ('group-title="'. $stream_category .'"');
echo "\r#EXTINF:-1 $tvg_id $tvg_name $tvg_logo $group_title,$stream_title\n";
echo $stream_url."\n";
}
ob_end_flush();
?>