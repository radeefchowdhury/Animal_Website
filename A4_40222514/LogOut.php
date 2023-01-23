<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Css Box</title>
    <link rel="stylesheet" href="Q4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <script src="Q4.js" defer></script>
</head>

<body onload=display_ct();>
<?php
error_reporting (0);
include('Session.php');
include('header.php');

?>
<div class ="main">
    <div class="menu">
        <?php
        include('menu.php');
        session_unset();
        session_destroy();
        ?>

    </div>

<div class="body">
    <p> Logged out</p>

</div>


</body>
</html>
