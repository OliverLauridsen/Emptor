<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta name="description" content="Emptor International is specialized in the production and delivery
   of election materials and related logistical services for elections worldwide">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">
    <title> Emptor international - Election</title>
    <?php 
    wp_head();
    ?>
    </head>
<body>
<div class="program-wrapper">
    <div class="header">
        <div class="burger-container">
            <div id="burger">
                <div class="bar topBar"></div>
                <div class="bar btmBar"></div>
            </div>
        </div>
        <ul class="menu">
            <li class="menu-item"><a class="1 <?php if (is_page_template('page-templates/trading.php')) { echo 'trading-menu'; }?>" href="#">OUR PRODUCTS</a></li>
            <li class="menu-item"><a class="2 <?php if (is_page_template('page-templates/trading.php')) { echo 'trading-menu'; }?>" href="#">WHO WE ARE</a></li>
            <li class="menu-item"><a class="3 <?php if (is_page_template('page-templates/trading.php')) { echo 'trading-menu'; }?>" href="#">THE LOGISTICS</a></li>
            <li class="menu-item"><a class="4 <?php if (is_page_template('page-templates/trading.php')) { echo 'trading-menu'; }?>" href="#">MEET THE TEAM</a></li>
            <li class="menu-item"><a class="5 <?php if (is_page_template('page-templates/trading.php')) { echo 'trading-menu'; }?>" href="#">GET IN TOUCH</a></li>
        </ul>
    </div>
</div>

<section id="section_1" style='
    <?php 
        if (is_page_template('page-templates/trading.php')) {
            echo "background-image: url(" . get_template_directory_uri() . "/img/tradingHeaderImage.png)";
        } else {
            echo "background-image: url(" . get_template_directory_uri() . "/img/mobile_hand.jpg)";   
        }
    ?> 
    '>
    <div id="content"><img src="<?php echo get_template_directory_uri(); ?>/img/tilbage_til_top_2_sort.png" alt="Emptor back to top" id="up_arrow">
        <nav id="desktop-nav">
            <a href="<?php 
                if (is_page_template('page-templates/trading.php')) {
                    echo 'trading';
                } else {
                    echo 'election';
                }
                ?>">
                <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/Emptor_logo_white.png" alt="Emptor International logo">
            </a>
            <div id="header_line"></div>
            <li id="desktop_nav_li">
                <a class="1" href="#">OUR PRODUCTS</a> 
                <a class="2" href="#">WHO WE ARE</a> 
                <a class="3" href="#">THE LOGISTICS</a>
                <a class="4" href="#">MEET THE TEAM</a> 
                <a class="5" href="#">GET IN TOUCH</a>
            </li>
            <h1><span style="color: <?php 
            if (is_page_template('page-templates/trading.php')) {
                echo '#F6A623';
            } else {
                echo '#76C6E8';
            }
            ?>">ELECTION SHIPPING</span><br> MADE EASY</h1>
        </nav>
        <h1 id="trademark"> EMPTOR INT.<br> <span id="trademark_span" style="color:<?php
        if (is_page_template('page-templates/trading.php')) {
            echo '#F6A623';
        } else {
            echo '#76C6E8';
        }
        ?>">
        <?php
        if (is_page_template('page-templates/trading.php')) {
            echo 'TRADING';
        } else {
            echo 'ELECTION';
        }
        ?>
        </span></h1> 
        <a href="<?php 
        if (is_page_template('page-templates/trading.php')) {
            echo 'election';
        } else {
            echo 'trading';
        }
        ?>" id="go_to"><span style="text-decoration: underline">GO TO <?php 
        if (is_page_template('page-templates/trading.php')) {
            echo 'election';
        } else {
            echo 'trading';
        }
        
        ?> SITE</span><br></a>
    </div>
</section>
<div class="desktop-navbar-top">
    <div class="top-nav-wrapper"><a href="<?php 
    if (is_page_template('page-templates/trading.php')) {
        echo 'trading';
    } else {
        echo 'election';
    }
    ?>
    ">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Emptor_logo_black.png" alt="Emptor International logo"></a> 
        <a class="1" href="#">OUR PRODUCTS</a> 
        <a class="2" href="#">WHO WE ARE</a> 
        <a class="3" href="#">THE LOGISTICS</a> 
        <a class="4"href="#">MEET THE TEAM</a> 
        <a class="5" href="#">GET IN TOUCH</a>
    </div>
</div>

<?php 
if (is_page_template('page-templates/trading.php')) {
    echo 
    '<style>
        li a:hover {
            color: #F6A623;
            transition: all 0.5s ease;
            cursor: pointer;
            text-decoration:none;
        }

        span:hover {
            color: #F6A623;
            transition: all 0.5s ease;
            cursor: pointer;
        }

        span {
            transition: all 0.5s ease;
        }

        .top-nav-wrapper a:hover {
            color: #F6A623;
            transition: all 0.5s ease;
        }  

        .top-nav-wrapper a {
            transition: all 0.5s ease;
        }

    </style>
    ';
} else {
    echo
    '
    <style>

    span:hover {
        color: #76C6E8;
        transition: all 0.5s ease;
        cursor: pointer;
    }

    span {
        transition: all 0.5s ease;
    }

    .top-nav-wrapper a:hover {
        color: #76C6E8;
        transition: all 0.5s ease;
    }  

    .top-nav-wrapper a {
        transition: all 0.5s ease;
    }
    </style>

    ';
}