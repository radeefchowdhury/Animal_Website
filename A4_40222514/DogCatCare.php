<!DOCTYPE html>
<html lang="en">

<style>
</style>

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
        <div class="caring">
            <ol class="caringdog">
                <h2>How to take care of a dog</h2>
                <li>PROVIDE A PROTECTED AND CLEAN LIVING ENVIRONMENT FOR YOUR DOG. Shelter from the elements and hazards, as
                    well as good hygiene, are basic to a quality life.</li>
                <li>ALWAYS KEEP FRESH WATER AVAILABLE. Maintaining optimal hydration is important for health and energy.</li>
                <li>FEED A QUALITY DIET AND PREVENT OBESITY. Overweight humans and animals can adversely affect health in many
                    ways. Follow the dietary recommendations that your veterinarian will make according to the nutritional needs
                    of your dog, based on size, age, level of activity and breed. Remember to provide healthy treats rather than
                    table scraps, as rewards.</li>
                <li>HAVE YOUR PET EXAMINED BY A VETERINARIAN ON A REGULAR BASIS. Your veterinarian will provide you with the
                    information on vaccination schedules, deworming and external parasite control. Keep a copy of your pet’s
                    vaccination records in your home or with you when you travel. Contact your veterinarian if you believe that
                    your pet may be ill, injured, or if something just doesn’t seem right. Your veterinarian is the expert on
                    keeping your dog healthy. Work as a team with him or her.</li>
                <li>PROVIDE AMPLE OPPORTUNITIES TO EXERCISE. Make sure your dog gets the regular exercise needed to enable it to
                    be fit. By being in shape, your dog will be more capable of participating in the activities that it enjoys.
                </li>
                <p>This was taken from https://iditarod.com/ten-tips-for-taking-care-of-your-dog/</p>
            </ol>
            <ol class="caringcat">
                <h2>How to take care of a cat</h2>
                <li>Provide plenty of human companionship</li>
                <li>Provide regular, suitable meals with a constant supply of fresh water</li>
                <li>Provide a clean and comfortable bed</li>
                <li>Provide the cat with outdoor access or be prepared to empty and clean a litter tray on a daily basis</li>
                <li>Provide it with a stimulating and safe environment</li>
                <p>This was taken from https://icatcare.org/advice/thinking-of-getting-a-cat/</p>
            </ol>
        </div>
    </div>
    <?php
    error_reporting (0);
    include('footer.php');
    ?>
</body>


</html>