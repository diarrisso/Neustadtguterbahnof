<!doctype html>
<html lang="de">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPURWERK</title>
    <?php wp_head(); ?>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/Images/logo.jpeg">
</head>

<body>
    <header class="banner">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">

                    <img src=" <?= get_template_directory_uri(); ?>/img/header_logo.png" alt="Logo">
                </a>
            </div>
        </nav>

    </header>