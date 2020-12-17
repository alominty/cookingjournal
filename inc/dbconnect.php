<?php
         $dbhost = 'db.bmk-hh.de';
         $dbuser = 'meg91';
         $dbpass = 'meg9100xN#';
         $dbname = 'meg91_a.langhans';
         $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
         if(! $db ) {
            die('Could not connect: ' . mysqli_error());
         }