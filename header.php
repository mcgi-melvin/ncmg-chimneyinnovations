<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid">
                <div class="contact_nav">
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Call : +01 123455678990</span>
                    </a>
                    <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Email : demo@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>CHIMNEY INNOVATIONS </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <?php wp_nav_menu(['theme_location' => 'header-menu', 'container_id' => 'navbarSupportedContent', 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'navbar-nav']) ?>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->
</header>