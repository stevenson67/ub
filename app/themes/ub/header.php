<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo wp_get_document_title(); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/normalize.css' ; ?>" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="header-wrap">
        <div class="header_menu">
            <div class="header_menu-mob">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ; ?>">
            <ul class="header-items">
                <li class="header-item"><a href="#">Торговля</a></li>
                <li class="header-item"><a href="#">Рынки</a></li>
                <li class="header-item"><a href="#">Клиентам</a></li>
                <li class="header-item"><a href="#">О нас</a></li>
            </ul>
        </div>
        <div class="header_login">
            <select>
                <option>RU</option>
                <option>EN</option>
            </select>
            <button class="header_login-btn">Войти</button>
        </div>
    </div>
</header>