<?php
//filemtime('cache.txt') < time()-1*3600 || 0 == filesize('cache.txt')
// if file is empty get data from DB
// else add data to cache after 2 min
if (filemtime('cache.txt') < (time()- 60 * 2) || 0 == filesize('cache.txt')) { 
    include "db_connect.php"; // connect DB
    include "data.php"; // add data to DB;
    
    if ($result = $db->query("SELECT * FROM news")) {
        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        mysqli_close($db);
        
        // add data to cache.txt
        // make sure that you have the permission to read/write cache.txt
        file_put_contents('cache.txt', json_encode($rows));    
    } else {
        echo 'Could not extract information from DB!';
    }
} 

echo date ("F d Y H:i:s.", filemtime('cache.txt'));

?>