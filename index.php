<?php
$host = gethostname();
$ip = gethostbyname($host);
echo "$host - $ip";
