<?php
// Simple VLC Structure
// TESTED ON http://albdroid.al/api
ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";

   $select_data = mysqli_query($conn,"select * from streaming");
   echo "#EXTM3U Albdroid Streaming"."\n\n";
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
echo "#EXTINF:-1,$stream_title"."\n";
echo $stream_url."\n\n";
}
ob_end_flush();
?>