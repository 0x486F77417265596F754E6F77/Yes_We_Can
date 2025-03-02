<?php
$counterFile = "counter.txt";

if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

$count = (int)file_get_contents($counterFile);

if (!isset($_COOKIE['visited'])) {
    $count++;
    file_put_contents($counterFile, $count);
    
    setcookie('visited', 'true', time() + (365 * 24 * 60 * 60), "/");
}

echo $count;
?>
