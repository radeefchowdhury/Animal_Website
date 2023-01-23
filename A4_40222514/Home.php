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
        ?>
    </div>
        <div class="body">
            <h1>This is the website where you can browse for Available pets, find dogs or cats, whichever you prefer!
                There are also tips to help you take care of them properly and more will be added as days go on. </h1>
            <h1>If you are tired of your pets, we take them with open arms, or someone elses arms!</h1>
            <h1>All our contact information is listed on our website if ever you have any quesitons and you want to
                reach out to us.</h1>
            <h1>Don't forget to keep everything halal!</h1>
            <p>100% halal</p>
        </div>
    </div>
<?php
error_reporting (0);
include('footer.php');
?>

</body>

</html>