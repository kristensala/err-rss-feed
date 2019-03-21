<?php

//include "db_connect.php";

$url="https://www.err.ee/rss";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);    // get the url contents

$data1 = curl_exec($ch); // execute curl request
curl_close($ch);

$xml = simplexml_load_string($data1);

foreach ($xml->channel->item as $newsItem) {

    $guid = (string) $newsItem->guid;
    $title = (string) $newsItem->title;
    $link = (string) $newsItem->link;
    $description = (string) $newsItem->description;
    $date = (string) $newsItem->pubDate;

    $sql = "insert into news (id, guid, title, link, description, date) values (NULL,'$guid', '$title','$link', '$description', '$date')";

    //$db->query($sql);

    if ($db->query($sql) === TRUE) {
        echo '<script>console.log("New record created successfully")</script>';
    } 
    else {
        echo '<script>console.log("Error inserting data to database")</script>';
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>