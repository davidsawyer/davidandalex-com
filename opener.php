<?php
$navItems = array(
        "Home"          => array("path" => "/",              "title" => "Alex and David Are Getting Married", "h1" => "Alex and David are Getting Married"),
        "Our Story"     => array("path" => "/our-story",     "title" => "Alex and David - Our Story", "h1" => "Our Story"),
        "The Wedding"   => array("path" => "/the-wedding",   "title" => "Alex and David - The Wedding", "h1" => "The Wedding"),
        "RSVP"          => array("path" => "/rsvp",          "title" => "Alex and David - RSVP", "h1" => "RSVP"),
        "Wedding Party" => array("path" => "/wedding-party", "title" => "Alex and David - Wedding Party", "h1" => "Wedding Party"),
        "Registry"      => array("path" => "/registry",      "title" => "Alex and David - Registry", "h1" => "Registry")
    );

    $menu = "";
    $title = "";
    $h1 = "";
    $headerImageNum = 1;
    $i = 1;

    foreach ($navItems as $key => $value) {
        $menu .= "<li><a ";
        if ($_SERVER["REQUEST_URI"] == $value["path"]) {
            $menu .= "class=\"current\" ";
            $title = $value["title"];
            $h1 = $value["h1"];
            $headerImageNum = $i;
        }
        $menu .= "href=".$value["path"].">".$key."</a></li>\n";

        $i++;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <?php include("head.php"); ?>
</head>
<body ontouchstart="">
<div id="main">
    <noscript>You will definitely need to enable JavaScript if you want to be able to RSVP or view a lot of the fantastic content on this site.</noscript>
    <header>
        <img src="/media/headers/header<?= $headerImageNum ?>.jpg" width="1600" alt="header">
        <h1><?= $h1 ?></h1>
    </header>
    <div class="menu-button"><label for="toggle-menu"></label></div>
    <input type="checkbox" id="toggle-menu">
    <div id="navigation">
        <div id="navContainer">
            <nav>
                <ul>
                    <?= $menu ?>
                </ul>
            </nav>
        </div>
        <div class="menuFiller"></div>
    </div>
