<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "yourEmail@gmail.com";
$subject = "This is the subject line";


$txt = "Name = " . $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;

$headers = "From: noreply@demosite.com";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../portfolio/assets/css/style.css">



</head>

<body>
    <div class="container sm text-center">
        <h1 class="m-5 uppercase text-2xl font-bold">Thank you <span class="text-green-700"><?= $name ?></span> for your message,I will get replay to you soon.</h1>
        <button class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="index.php">
                <input class="uppercase" type="submit" value="Go Back" />
                </a>
        </button>

    </div>

</body>

</html>