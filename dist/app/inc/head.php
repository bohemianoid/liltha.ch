<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo config( 'site.language' ) ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php echo config( 'site.language' ) ?>">        <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo config( 'site.language' ) ?>">               <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo config( 'site.language' ) ?>">                      <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo config( 'site.title' ) ?> <?php echo config( 'site.description' ) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Vollkorn:400italic,400|Dancing+Script:700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="<?php echo site() ?>assets/screen.css">
        <link rel="author" href="humans.txt">
        
        <script src="<?php echo site() ?>assets/modernizr.min.js"></script>
        
    </head>
    <body<?php echo isset( $bodyClass ) ? ' class="' . $bodyClass . '"' : '' ?>>
        <header class="header">
            <h1 class="branding"><a class="logo" href="<?php echo site() ?>" rel="home"><?php echo config( 'site.title' ) ?></a></h1>
            <nav class="top navigation">
                <ul>
                    <!-- <li><a href="<?php echo site() ?>courses">Kurse</a></li> -->
                    <li><a href="<?php echo site() ?>about">About</a></li>
                    <!-- <li><a href="<?php echo site() ?>contact">Kontakt</a></li> -->
                </ul>
            </nav>
        </header>
        <div class="content">