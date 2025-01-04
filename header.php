<?php
$header = get_field('header_group', 'options');
$logo = $header['logo'];
$links = $header['links'];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Circulo Sagrado</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header class="bg-black">
        <div class="container flex justify-between">
            <a href="<?php echo site_url() ?>">
                <img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] != '' ? $logo['alt'] : $logo['title']; ?>">
            </a>
            <nav class="flex align-center">
                <ul class="flex align-center">
                    <?php foreach ($links as $item) : ?>
                        <li>
                            <a class="text-white" href="<?php echo $item['link']['url']; ?>">
                                <?php echo $item['link']['title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>