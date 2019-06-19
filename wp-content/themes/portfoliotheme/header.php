<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Protfolio | Sushara</title>
    <?php wp_head(); ?>
</head>
<body>
<!-- this simply calls whatever the menu we have in our admin panel. It grabs the first menu available -->
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?> 