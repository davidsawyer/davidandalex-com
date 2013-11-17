<?php $navItems = array(
        "Home"          => ["path" => "/",              "title" => "Alex and David Are Getting Married"],
        "Our Story"     => ["path" => "/our-story",     "title" => "Alex and David - Our Story"],
        "The Wedding"   => ["path" => "/the-wedding",   "title" => "Alex and David - The Wedding"],
        "RSVP"          => ["path" => "/rsvp",          "title" => "Alex and David - RSVP"],
        "Wedding Party" => ["path" => "/wedding-party", "title" => "Alex and David - Wedding Party"],
        "Registry"      => ["path" => "/registry",      "title" => "Alex and David - Registry"]
    );

    $menu = "";
    $title = "";
    $headerImageNum = 1;
    $i = 1;

    foreach ($navItems as $key => $value) {
        $menu .= "<li><a ";
        if ($_SERVER["REQUEST_URI"] == $value["path"]) {
            $menu .= "class=\"current\" ";
            $title = $value["title"];
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
    </header>
    <div id="navigation">
        <div class="menu-button"><label for="toggle-menu"></label></div>
        <input type="checkbox" id="toggle-menu">
        <div id="navContainer">
            <nav>
                <ul>
                    <?= $menu ?>
                </ul>
            </nav>
        </div>
        <div class="menuFiller"></div>
    </div>
