<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require "./includes/session.php"; ?>
    <?php require "./includes/mailView.php"; ?>
    <form method="post" action="./includes/mail.php" ;>
        <h1>MVC framework in php</h1>
        <input type="text" name="name" placeholder="name" id="">
        <input type="email" name="email" placeholder="email" id="">
        <button type="submit" name="submit">submit</button>
        <?php checkFromSubmission() ?>
    </form>
</body>

</html>