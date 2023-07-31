<?php
$to = "kriskirqzov@gmail.com";
$subject = "EMAIL";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>