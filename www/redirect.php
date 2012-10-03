<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  header("Status: 302 Found"); //Temporary redirect, likely overkill as cache-control should do the same?
  header('Location: image.php?'.$_SERVER['QUERY_STRING'].'&lgrnd='.substr(md5(rand()), 0, 9));
?>
