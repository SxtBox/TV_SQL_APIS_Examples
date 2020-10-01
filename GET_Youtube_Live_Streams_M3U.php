<?php
// Youtube VLC Structure
// http://albdroid.al/api
// TO PLAY YOUTUBE LINKS ON VLC JUST INSTALL playlist_youtube.lua FROM https://github.com/SxtBox/VLC_Player_Streaming_Data_AIO [USE Automatic Installer.bat]

ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";

	$select_data = ("SELECT * from streaming where category = 'Youtube Live Streams'");
	$result = mysqli_query($conn,$select_data);
	echo "#EXTM3U Albdroid Streaming"."\n\n";
	while( $row = mysqli_fetch_array($result))
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
echo "#EXTINF:-1,$stream_title"."\n";
echo $stream_url."\n\n";
}
ob_end_flush();
?>