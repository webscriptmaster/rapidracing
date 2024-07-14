<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dyno Tuning</title>
        <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="<?php echo(get_template_directory_uri());?>/assets/images/favicon.png">
        <link rel="stylesheet" href="<?php echo(get_template_directory_uri());?>/assets/vendor/fontawesome-free-6.5.2-web/css/all.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="<?php echo(get_template_directory_uri());?>/assets/vendor/swiper@11/swiper-bundle.min.css" />
        <script src="<?php echo(get_template_directory_uri());?>/assets/vendor/swiper@11/swiper-bundle.min.js"></script>

        <?php wp_head(); ?>
    </head>

    <body class="min-h-screen bg-white antialiased font-hv flex flex-col">
        <header class="w-full h-24 flex justify-between items-center px-6 md:px-12 lg:px-24">
            <a href="<?php echo(get_home_url()); ?>">
                <img class="w-[150px] h-[50px]" src="<?php echo(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Logo" />
            </a>
            
            <div class="hidden sm:flex gap-4">
                <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#0C0C0C]" href="<?php echo(get_home_url()); ?>">Home</a>
                <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#0C0C0C]" href="<?php echo(get_permalink(get_page_by_path('services'))); ?>">Services</a>
                <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#0C0C0C]" href="<?php echo(get_permalink(get_page_by_path('about'))); ?>">About</a>
                <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#0C0C0C]" href="<?php echo(get_permalink(get_page_by_path('contact'))); ?>">Contact</a>
            </div>
        </header>