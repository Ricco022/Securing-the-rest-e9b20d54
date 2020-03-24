<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <?php
    function redirect($url)
    {
        ob_start();
        header('Location: ' . $url);
        ob_end_flush();
        die();
    }
    if (!isset($_COOKIE['loggedInUser'])) {
        redirect("login.php");
    }
    ?>

    <h1>Succesvol ingelogd</h1>
</body>

</html>