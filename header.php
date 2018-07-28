<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400" rel="stylesheet">

    <?php
        wp_head();
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <ul class="nav">
                <li>
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>

                </li>

                <?php wp_list_pages('&title_li=' ); ?>
            </ul>

        </div>
    </nav>



    <div class="bg-light header-bg mb-1">
        <header class="container">
            <div class="col-12 text-center p-5 ">
                <h1>
                    <?php echo get_bloginfo('name'); ?>
                </h1>
                <small>
                    <?php echo get_bloginfo('description'); ?>
                </small>


            </div>
        </header>
    </div>

    <main>
        <div class="container mt-3">
            <div class="row posts">