<?php

if(isset($_POST["limit"], $_POST["start"])) {
    $data = file_get_contents('cache.txt');
    $json_data = json_decode($data, true);
        
    for ($x = $_POST["start"]; $x < $_POST["limit"] + $_POST["start"]; $x++) { 
        if ($x < sizeof($json_data)) {
            echo '<div class="news-item-container">
                    <p class="news-title"><a href='. $json_data[$x]["link"] .' target="__blank" >' . $json_data[$x]["title"] . '</a></p>
                    <p class="news-desc">' . $json_data[$x]["description"] . '</p>
                    <p class="news-date">' . $json_data[$x]["date"] . '</p>
                </div>';
        }   
    }    
}
?>