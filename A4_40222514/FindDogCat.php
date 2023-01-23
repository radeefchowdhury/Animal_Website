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
        <div class="finddogcat">
            <form action='#' method='post'>
                <label for="Dog or Cat choosing">Choose a cat or dog</label>
                <select name="Choice" id="Choice">
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                </select>

                <div>
                    <label for="Breed">Choose a Breed</label>
                    <select name="Breed" id="Breed">
                        <option value="Persian Cat">Persian Cat</option>
                        <option value="Bengal Cat">Bengal Cat</option>
                        <option value="Scottish Fold">Scottish Fold</option>
                        <option value="Bulldog">Bulldog</option>
                        <option value="German Shepherd">German Shepherd</option>
                        <option value="Labrador Retreiver">Labrador Retreiver</option>

                    </select>
                </div>

                <div>
                    <label for="Age">Choose an age</label>
                    <select name="Age" id="Age">Age
                        <option value="Young dog">6-24 months dogs</option>
                        <option value="Mature">2-6 year olds dogs</option>
                        <option value="Old dog">7-11 years dogs</option>

                        <option value="Kitten">0-6 months cats</option>
                        <option value="Adult">3-6 years cats</option>
                        <option value="Mature cat">7-10 years cats</option>
                    </select>
                </div>

                <div>
                    <label for="Gender">Choose a Gender</label>
                    <select name="Gender" id="Gender">Gender
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Doesnt matter">Does not matter</option>
                    </select>
                </div>

                <div>
                    <p>Does it need getting along with : </p>
                    <label for="Getting Along dogs">Getting along dogs</label>
                    <input type="checkbox" id="getAlongDogs" name="getAlongDogs">
                    <label for="Getting Along cats">Getting along cats</label>
                    <input type="checkbox" id="getAlongcats" name="getAlongcats">
                    <label for="Getting Along kids">Getting along kids</label>
                    <input type="checkbox" id="getAlongkids" name="getAlongkids">

                </div>

                <div><input type="submit"> <input type="reset"></div>
            </form>
    </div>

<?php
        $type = $_POST['Animal'];
        $breed = $_POST["Breedtype"];
        $age = $_POST["Age"];
        $gender = $_POST["Gender"];
        $getsAlong = "";
        foreach ($_POST["gettingAlong"] as $animal){
            $getAlong = $getAlong . $animal;
        }
        if($getAlong==""){$getAlong = "none";}

        $animal = $type.":".$breed.":".$age.":".$gender.":".$getAlong;


    if(strpos(file_get_contents("pet.txt"),$animal) !== false) {
        echo "same animal found";
    }
    else{
        echo "no same animal";
    }
    ?>
        <?php
        error_reporting (0);
        include('footer.php');
        ?>
</body>

</html>