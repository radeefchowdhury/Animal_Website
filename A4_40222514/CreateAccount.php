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
    include('Session.php');
    include('header.php');
?>

<div class="main">
    <?php
    include('menu.php');
    ?>

    <div class="body">

        <form method="get">
            Username:  <input type="text" required pattern="[A-Za-z0-9]+" title = "username can contain letters and digits only." name="username">
            Password:  <input type="text" required pattern = "^(?=.*\d)(?=.*[A-Za-z]).{4,}$" title="password must be at least 4 characters long, have at least one letter
                        and at least one digit" name="password">
            <input onclick="" type="submit">
        </form>

        <?php
        error_reporting (E_ALL ^ E_NOTICE);

        $file = 'userinfo.txt';
        if(isset($_GET["username"]) AND isset($_GET["password"])){ //TODO: change to cookies
            $data_user = $_GET["username"];
            $data_pass = $_GET["password"];
            $data = $data_user . ":" . $data_pass . PHP_EOL;
            if (empty($data_user) or empty($data_pass)) {
                return null;
            }
            elseif (strpos(file_get_contents("userinfo.txt"), $data_user) !== false) {
                echo "username already used.";
            }
            else {
                file_put_contents("userinfo.txt", $data, FILE_APPEND);
                echo "account created";
            }
        }
        ?>

    </div>


</div>

<?php
    include('footer.php');
?>

</body>
</html>