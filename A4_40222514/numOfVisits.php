<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$count=0;
if (isset($_COOKIE['count'])){
    $count = $_COOKIE['count'];
    $count++;
}
if (isset($_COOKIE['lastVisit'])){
    $lastVisit = $_COOKIE['lastVisit'];
}
setcookie('count', $count, time()+3600);
setcookie('lastVisit', date("D-M-Y H:i:s T", time()+3600));
if($count==0){
    echo "first time";
}

else {
    echo " " . $count . " times.";
    echo '<br>';
    echo "last visit was on " . $lastVisit;
}
?>
</body>
</html>