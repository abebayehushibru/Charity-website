<?php
require("mysql_db_abc.php");
$sql= "select post_text,post_file, posted_date FROM Postfile order by posted_date DESC";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="news" >
        <div class="img">
        <img src="'.$row["post_file"].'" >
        </div>
        <div class="dis" >
        <p>'. $row["post_text"].'</p>
        <span>
        <span class="downbtn" onclick="viewed(0)" ></span>
        Read more
        </span>
        </div>
        </div>';
    }
}