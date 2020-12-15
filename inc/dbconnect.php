<?php
$dbservername = "mysql:dbname=meg91_a.langhans;host=db.bmk-hh.de;port=3306;";
$dbusername = "meg91";
$dbpassword = "meg9100xN#";

try {
  $conn = new PDO($dbservername, $dbusername, $dbpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}