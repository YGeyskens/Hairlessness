<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri();?>/dist/css/main.css">
    <title><?php wp_title('');?></title>
</head>
<body>
<header class="header">
    <div class="title-bg">
        <h1 role="heading">HairLessNess</h1>
    </div>
    <nav class="top__nav nav">
        <h2 class="nav__title">Ma navigation</h2>
        <ul class="nav__container">
            <?php foreach(hairlessness_getMenu('main') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>