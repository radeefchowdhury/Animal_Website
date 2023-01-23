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
        <ul>
            <div class="catdisplay">
                <li>
                    <img src="cat1.jpg" alt="cat1" width="100px">
                    <p>Animal : Cat</p>
                    <p>Breed : Unknown</p>
                    <p>Age: 10 months</p>
                    <p>Friendly with everyone</p>
                    <button class="cat1">Interested</button>
                </li>

                <li>
                    <img src="cat2.jpg" alt="cat1" width="100px">
                    <p>Animal : Cat</p>
                    <p>Breed : Unknown</p>
                    <p>Age: 24 months</p>
                    <p>Friendly with family only</p>
                    <button class="cat1">Interested</button>
                </li>

                <li>
                    <img src="pug.jpg" alt="cat1" width="100px">
                    <p>Animal : Dog</p>
                    <p>Breed : Pug</p>
                    <p>Age: Unkown</p>
                    <p>Friendly with dogs only</p>
                    <button class="cat1">Interested</button>
                </li>

            </div>
        </ul>
    </div>
    </div>
<?php
error_reporting (0);
include('footer.php');
?>
</body>

</html>