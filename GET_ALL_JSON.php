<?php
// JSON Structure
// TESTED ON http://albdroid.al/api
ob_start();
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
include "db_connection.php";
include "db_connection.php";
$json_data = array();

   $select_data = mysqli_query($conn,"SELECT * from streaming");

    while($row = mysqli_fetch_array($select_data))
    {
		$row_array['id'] = $row['stream_id'];
        $row_array['title'] = $row['title'];
		$row_array['link'] = $row['link'];
        $row_array['thumbnail'] = $row['thumbnail'];
		$row_array['fanart'] = $row['fanart'];
		$row_array['description'] = $row['description'];
		$row_array['category'] = $row['category'];
        array_push($json_data, $row_array);
    }

echo str_replace('\\/', '/',  json_encode($json_data));
//echo json_encode($json_data);
ob_end_flush();
?>