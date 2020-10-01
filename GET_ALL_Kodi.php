<?php
// Kodi Structure
// TESTED ON http://albdroid.al/api
ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";

   $select_data = mysqli_query($conn,"SELECT * from streaming");
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
?>
<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
?>
<item>
    <title><?php echo $stream_title; ?></title>
    <link><?php echo $stream_url; ?></link>
    <thumbnail><?php echo $stream_thumbnail; ?></thumbnail>
    <fanart><?php echo $stream_fanart; ?></fanart>
    <description><?php echo $stream_description; ?></description>
    <category><?php echo $stream_category; ?></category>
</item>
<?php
}
ob_end_flush();
?>