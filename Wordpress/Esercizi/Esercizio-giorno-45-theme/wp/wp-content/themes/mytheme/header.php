<!DOCTYPE HTML>
<html>

<head>
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body class="is-preload">