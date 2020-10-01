<?php
// Youtube KODI Structure
// TESTED ON http://albdroid.al/api
ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";

header('Content-Type: text/xml;charset="UTF-8"',true);
echo '<?xml version="1.0" encoding="UTF-8"?> <channel>';

	$select_data = ("SELECT * from streaming where category = 'Youtube Live Streams'");
	$result = mysqli_query($conn,$select_data);
	while( $row = mysqli_fetch_array($result))
	{
		$stream_id = $row['stream_id'];
		$thumbnail = $row['thumbnail'];
		$fanart = $row['fanart'];
		//echo date("Y-m-d H:i:s");
        echo "<item>";
		echo "<title>".$row['title']."</title>";
		echo "<link>".$row['link']."</link>";
		echo "<thumbnail>".$thumbnail."</thumbnail>";
		echo "<fanart>".$fanart."</fanart>";
		echo "<description>".$row['description']."</description>";
        echo "</item>";
	}
echo '</channel>';
ob_end_flush();
?>