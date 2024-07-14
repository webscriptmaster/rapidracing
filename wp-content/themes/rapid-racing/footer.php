        <footer class="flex flex-col bg-black p-4 md:p-8 lg:p-12">
            <div class="mb-6 flex justify-between">
                <a href="<?php echo(get_home_url()); ?>">
                    <img class="w-[150px] h-[50px] invert" src="<?php echo(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Logo" />
                </a>
            </div>

            <div class="mb-6 flex justify-between items-center gap-4 md:gap-8 lg:gap-12">
                <p class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#7E849C]">Your trusted partner for precision engine tuning and performance enhancements. With a dedication to excellence and a commitment to delivering tangible results, we're passionate about optimizing your vehicle's performance to its fullest potential.</p>

                <div class="hidden sm:flex gap-4">
                    <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#FEFEFE]" href="<?php echo(get_permalink(get_page_by_path('services'))); ?>">Services</a>
                    <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#FEFEFE]" href="<?php echo(get_permalink(get_page_by_path('about'))); ?>">About</a>
                    <a class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#FEFEFE]" href="<?php echo(get_permalink(get_page_by_path('contact'))); ?>">Contact</a>
                </div>
            </div>

            <p class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#7E849C]">&copy;<?php echo date("Y"); ?> DynoTuning LLC. All right reserved.</p>
        </footer>

        <script src="<?php echo(get_template_directory_uri());?>/assets/js/home.js"></script>
    </body>
</html>