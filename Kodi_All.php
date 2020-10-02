<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "live_tv_apis";
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if(!$con){
    die("Connection Failed : ".mysqli_connect_error());
    }

	$sql_query = "SELECT * FROM streaming";
    $result = mysqli_query($con,$sql_query);
	if (!$result)
	die("Database access failed: " . mysqli_error());

	$rows = mysqli_num_rows($result); 

	if ($rows) {     
    // header('Content-type: text/xml');
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    while ($row = mysqli_fetch_array($result)) {
    $stream_url = str_replace('&','&amp;',$row['link']); // KODI &amp; LINKS
    echo '<item>'. PHP_EOL;
    echo '<id>' . $row['stream_id'] . '</id>'. PHP_EOL;
    echo '<title>[COLOR lime][B]' . $row['title'] . '[/COLOR][/B]</title>'. PHP_EOL;
    echo '<thumbnail>' . $row['thumbnail'] . '</thumbnail>'. PHP_EOL;
    echo '<fanart>' . $row['fanart'] . '</fanart>'. PHP_EOL;
    //echo '<link>' . $row['link'] . '</link>'. PHP_EOL;
    echo '<link>' . $stream_url . '</link>'. PHP_EOL;
    echo '<description>' . $row['description'] . '</description>'. PHP_EOL;
    echo '<category>' . $row['category'] . '</category>'. PHP_EOL;
    echo '</item>'. PHP_EOL . PHP_EOL;
  }
}
mysqli_close($con);
?>