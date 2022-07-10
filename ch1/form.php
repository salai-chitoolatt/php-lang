<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Greeting Form</title>
</head>

<body>
    <?php
    if (!empty($_POST['name'])) {
        echo "Greetings, {$_POST['name']}, and welcome.";
    }
    ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="name">Enter your name : </label>
            <input type="text" name="name" id="name" placeholder="Your name here...">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>