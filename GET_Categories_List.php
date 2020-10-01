<?php
// Get Categories
// TESTED ON http://albdroid.al/api
ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";
header('Content-Type: text/xml;charset="UTF-8"',true);
echo '<?xml version="1.0" encoding="UTF-8"?><channel>';

	$select_data = ("SELECT count(`stream_id`),`category` FROM `streaming` group by `category`");
	$result = mysqli_query($conn,$select_data);

	while($row = mysqli_fetch_array($result))
	{
		if ($row['category'] == 'Hardcore')
		{
			$row['category'] = 'Hardcore Motherfuckers'; // <== SPECIFIED CATEGORY NAME
		}

		if ($row['category'] == 'Music')
		{
			$row['category'] = 'Music TV'; // <== SPECIFIED CATEGORY NAME
		}

		if ($row['category'] == 'Podcasts')
		{
			$row['category'] = 'RSS Podcasts'; // <== SPECIFIED CATEGORY NAME
		}

		if ($row['category'] == 'Radios')
		{
			$row['category'] = 'Mixed Radios'; // <== SPECIFIED CATEGORY NAME
		}

    echo "<item>";
		echo "<id>".$row['count(`stream_id`)']."</id>";
		echo "<category>".$row['category']."</category>";
		// echo "<category>".mysqli_real_escape_string($conn,$row['category'])."</category>"; // FOR POST ONLY
    echo "</item>";
	}
echo '</channel>';
ob_end_flush();
?>