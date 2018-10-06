<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Научно-производственная фирма «Антип»</title>
    <link rel="stylesheet" href="<?php echo project_url(); ?>/assets/styles/style.css">
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header__logo">
            <a href="index.php">
            </a>
        </div>
        <div class="header__adress">
            Адрес: 129366, Москва, ул. Галушкина, 4<br>
            Тел. /Факс: <a href="tel:+74956172729">(495) 617-2729</a><br>
            E-Mail: <a href="mailto:antip01@mail.ru">antip01@mail.ru</a>
        </div>
    </div>
    <div class="body">
        <div class="body__menu">
            <div class="line">
            </div>

            <!--Работоспособное меню-->

            <?php
            $atts = array(
                'about' => array(
                    'caption' => 'О компании',
                ),
                'services' => array(
                    'caption' => 'Услуги',
                ),
                'partners' => array(
                    'caption' => 'Партнеры',
                ),
                'certification' => array(
                    'caption' => 'Испытания и сертификация',
                ),
                'documentation' => array(
                    'caption' => 'Документация',
                ),
                'contacts' => array(
                    'caption' => 'Контакты',
                ),
            );
            echo menu($atts);

            ?>

            <!--Конец меню-->

            <div class="line">
            </div>
        </div>
        <div class="body__frame">
