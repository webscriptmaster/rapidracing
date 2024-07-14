<?php get_header(); ?>

<main class="flex-1 w-full flex flex-col">
    <section class="mb-24 flex flex-col md:flex-row px-5 md:px-10 lg:px-20 gap-4">
        <div class="flex-1 flex flex-col justify-center">
            <h1 class="font-ny font-[600] text-[32px] md:text-[40px] lg:text-[48px] text-[#090A20] mb-6">Revolutionize Your Vehicle's Performance</h1>

            <p class="mb-12 font-[400] text-[20px] md:text-[22px] lg:text-[24px] text-[#7E849C]">Elevate your driving experience with our expert dyno tuning services.</p>

            <div>
                <button class="rounded-[20px] bg-black text-white py-3 px-6 font-[400] text-[16px] md:text-[18px] lg:text-[20px]">Schedule an appointment</button>
            </div>
        </div>

        <div class="flex-1">
            <img class="w-full h-auto" src="<?php echo(get_template_directory_uri()); ?>/assets/images/banner-01.png" alt="Banner" />
        </div>
    </section>

    <section class="mb-24 flex flex-col px-5 md:px-10 lg:px-20">
        <h2 class="mb-12 flex items-center font-ny font-[600] text-[24px] md:text-[28px] lg:text-[32px] text-[#090A20]">Services <img class="w-20 mx-4" src="<?php echo(get_template_directory_uri()); ?>/assets/images/icon-offer.png" alt="Offer Icon" /> we offer</h2>

        <div class="swiper-services swiper w-full">
            <div class="swiper-wrapper">
                <?php
                    $services = array(
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-01.png",
                            "title" => "Dyno Tuning"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-02.png",
                            "title" => "Performance Part Upgrades"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-03.png",
                            "title" => "Engine Rebuilding"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-04.png",
                            "title" => "Intake / Turbochanges / Superchanges"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-05.png",
                            "title" => "ECU Remapping"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-06.png",
                            "title" => "Drivetrain Upgrades"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-07.png",
                            "title" => "Track Preparation"
                        ),
                        array(
                            "image" => get_template_directory_uri() . "/assets/images/services-08.png",
                            "title" => "Suspension Tuning"
                        )
                    );

                    foreach ($services as $service) { ?>
                        <div class="swiper-slide">
                            <div class="flex flex-col">
                                <div class="relative flex justify-center">
                                    <img class="relative w-auto h-80 z-10" src="<?php echo $service["image"]; ?>" alt="Service" />
                                    <div class="absolute top-[50%] right-0 bottom-0 left-0 bg-[#F1F4F7] z-0 rounded-t-md"></div>
                                </div>
                                <div class="w-full h-40 bg-[#F1F4F7] rounded-b-md flex flex-col items-center justify-center px-4">
                                    <span class="font-ny font-[700] text-[20px] md:text-[22px] lg:text-[24px] text-[#090A20] text-center"><?php echo $service["title"]; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php }
                ?>
            </div>
  
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="mb-24 flex flex-col px-5 md:px-10 lg:px-20">
        <h1 class="font-ny font-[600] text-[32px] md:text-[40px] lg:text-[48px] text-[#090A20]">Why</h1>
        <h1 class="mb-12 font-ny font-[600] text-[32px] md:text-[40px] lg:text-[48px] text-[#7E849C]">DynoTune?</h1>

        <div class="columns-1 md:columns-2 space-y-8">
            <div class="bg-[#F1F4F7] rounded-[20px] flex flex-col p-4 md:p-8 break-inside-avoid">
                <h2 class="mb-3 font-ny font-[700] text-[24px] md:text-[28px] lg:text-[32px] text-[#090A20]">Increased Drivability</h2>
                <p class="font-[400] text-[20px] md:text-[22px] lg:text-[24px] text-[#7E849C]">Experience smoother and more responsive driving dynamics after modifications, tailored to your specific vehicle and preferences.</p>
            </div>

            <div class="bg-[#F1F4F7] rounded-[20px] flex flex-col p-4 md:p-8 break-inside-avoid">
                <h2 class="mb-3 font-ny font-[700] text-[24px] md:text-[28px] lg:text-[32px] text-[#090A20]">Maximum Power</h2>
                <p class="font-[400] text-[20px] md:text-[22px] lg:text-[24px] text-[#7E849C]">Unlock the full potential of your engine with our precision tuningWhether you're seeking to enhance horsepower, improve throttle response, or achieve better fuel efficiency, our expert tuning ensures that your engine performs at its peak.</p>
                <img class="w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/why-01.png" alt="Why DynoTune?" />
            </div>

            <div class="bg-[#F1F4F7] rounded-[20px] flex flex-col p-4 md:p-8 break-inside-avoid">
                <h2 class="mb-3 font-ny font-[700] text-[24px] md:text-[28px] lg:text-[32px] text-[#090A20]">Safety and Precision with the Dynojet 424xlc2</h2>
                <p class="font-[400] text-[20px] md:text-[22px] lg:text-[24px] text-[#7E849C]">At our performance shop, safety and precision are paramount, which is why we rely one the industry-leading Dynojet 424xlc2 for all our dyno tuning needs. The Dynojet 424xlc2 is renowned for its advanced technology, meticulous engineering, and commitment to accuracy, ensuring that every tuning session is not only highly effective but also safe and reliable.</p>
                <img class="w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/why-02.png" alt="Why DynoTune?" />
            </div>

            <div class="bg-[#F1F4F7] rounded-[20px] flex flex-col p-4 md:p-8 break-inside-avoid">
                <h2 class="mb-3 font-ny font-[700] text-[24px] md:text-[28px] lg:text-[32px] text-[#090A20]">Stronger/Faster Acceleration</h2>
                <p class="font-[400] text-[20px] md:text-[22px] lg:text-[24px] text-[#7E849C]">Feel the adrenaline rush. Our expert tuning that optimizes throttle response and torque delivery.</p>
            </div>
        </div>
    </section>

    <section class="mb-24 flex flex-col px-5 md:px-10 lg:px-20">
        <div class="flex flex-col py-16 bg-[#010101] px-8 rounded-[20px]">
            <h2 class="mb-12 font-ny font-[500] text-[24px] md:text-[28px] lg:text-[32px] text-white text-center">Trusted by world-class companies</h2>

            <div class="flex flex-row flex-wrap gap-8 justify-center">
            <?php
                    $companies = array(
                        get_template_directory_uri() . "/assets/images/wc-alfaromeo.png",
                        get_template_directory_uri() . "/assets/images/wc-honda.png",
                        get_template_directory_uri() . "/assets/images/wc-audi.png",
                        get_template_directory_uri() . "/assets/images/wc-ford.png",
                        get_template_directory_uri() . "/assets/images/wc-infiniti.png",
                        get_template_directory_uri() . "/assets/images/wc-bmw.png",
                        get_template_directory_uri() . "/assets/images/wc-porsche.png",
                        get_template_directory_uri() . "/assets/images/wc-lexus.png",
                        get_template_directory_uri() . "/assets/images/wc-chevrolet.png",
                        get_template_directory_uri() . "/assets/images/wc-nissan.png",
                        get_template_directory_uri() . "/assets/images/wc-mercedes.png",
                        get_template_directory_uri() . "/assets/images/wc-dodge.png",
                        get_template_directory_uri() . "/assets/images/wc-toyota.png",
                    );

                    foreach ($companies as $company) { ?>
                        <img class="w-32 h-32" src="<?php echo $company; ?>" alt="Company" />
                    <?php }
                ?>
            </div>
        </div>
    </section>

    <section class="mb-24 flex flex-col px-5 md:px-10 lg:px-20">
        <div class="grid grid-cols-2 md:grid-cols-5">
            <div class="row-span-2 col-span-2 md:col-span-3 flex flex-col bg-[#F1F3F8] p-4 md:p-8 lg:p-12 justify-between rounded-t-[20px] md:rounded-l-[20px]">
                <div class="mb-6">
                    <h2 class="font-ny font-[600] text-[24px] md:text-[32px] lg:text-[40px] text-[#090A20]">Engine</h2>
                    <h2 class="mb-6 font-ny font-[600] text-[24px] md:text-[32px] lg:text-[40px] text-[#7E849C]">Performance Services</h2>
                    <p class="pr-6 font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#7E849C]">Our team of experienced technicians utilizes cutting-edge techniques and state-of-the-art equipment to optimize your engine's performance, ensuring both power and reliability.</p>
                </div>
                <a class="font-[700] text-[16px] md:text-[18px] lg:text-[20px] text-[#0C0C0C] flex items-center gap-3" href="#">Schedule an appointment <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            
            <div class="row-span-2 col-span-2 grid grid-cols-2">
                <div class="w-full relative">
                    <img class="w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/engine-01.png" alt="Engine" />
                    <p class="absolute font-ny bottom-[16px] left-0 right-0 text-center font-[700] text-[20px] md:text-[22px] lg:text-[24px] text-white">Dyno Tuning</p>
                </div>
                <div class="w-full relative">
                    <img class="w-full h-full rounded-none md:rounded-tr-[20px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/engine-02.png" alt="Engine" />
                    <p class="absolute font-ny bottom-[16px] left-0 right-0 text-center font-[700] text-[20px] md:text-[22px] lg:text-[24px] text-white">Custom ECU Tuning</p>
                </div>
                <div class="w-full relative">
                    <img class="w-full h-full rounded-bl-[20px] md:rounded-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/engine-03.png" alt="Engine" />
                    <p class="absolute font-ny bottom-[16px] left-0 right-0 text-center font-[700] text-[20px] md:text-[22px] lg:text-[24px] text-white">Performance Upgrade</p>
                </div>
                <div class="w-full relative">
                    <img class="w-full h-full rounded-br-[20px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/engine-04.png" alt="Engine" />
                    <p class="absolute font-ny bottom-[16px] left-0 right-0 text-center font-[700] text-[20px] md:text-[22px] lg:text-[24px] text-white">Engine Diagnostics</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-24 flex flex-col px-5 md:px-10 lg:px-20">
        <h1 class="font-ny font-[600] text-[32px] md:text-[40px] lg:text-[48px] text-[#090A20]">Witness</h1>
        <h1 class="mb-12 font-ny font-[600] text-[32px] md:text-[40px] lg:text-[48px] text-[#7E849C]">the Transformation</h1>
    
        <div class="swiper-witness swiper w-full">
            <div class="swiper-wrapper">
                <?php
                    $witnesses = array(
                        get_template_directory_uri() . "/assets/images/witness-01.png",
                        get_template_directory_uri() . "/assets/images/witness-02.png",
                        get_template_directory_uri() . "/assets/images/witness-03.png",
                        get_template_directory_uri() . "/assets/images/witness-04.png",
                        get_template_directory_uri() . "/assets/images/witness-05.png",
                    );

                    foreach ($witnesses as $witness) { ?>
                        <div class="swiper-slide">
                            <img class="w-full h-full rounded-[20px]" src="<?php echo $witness; ?>" alt="Witness" />
                        </div>
                    <?php }
                ?>
            </div>

            <div class="swiper-pagination"></div>
  
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="mb-24 flex flex-col px-5 md:px-10 lg:px-20">
        <div class="flex flex-col md:flex-row bg-[#F1F3F8] p-4 md:p-8 lg:p-12 gap-4 rounded-[20px]">
            <div class="flex flex-col flex-1">
                <h2 class="font-ny font-[600] text-[24px] md:text-[32px] lg:text-[40px] text-[#090A20]">Schedule</h2>
                <h2 class="mb-6 font-ny font-[600] text-[24px] md:text-[32px] lg:text-[40px] text-[#7E849C]">An Appointment</h2>
                <p class="font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-[#7E849C]">Ready to experience the DynoTune difference? Schedule your appointment now to unlock the full potential of your vehicle's performance. Our expert technicians are standing by to provide precision tuning tailored to your specific needs.</p>
            </div>

            <div class="flex flex-col flex-1 bg-white p-4 md:p-8 lg:p-12 rounded-[20px]">
                <img class="w-full h-auto mb-12" src="<?php echo get_template_directory_uri(); ?>/assets/images/schedule.png" alt="Schedule" /> 
                
                <h3 class="mb-6 font-ny font-[600] text-[22px] md:text-[24px] lg:text-[26px] text-[#191D23] text-center">Schedule your Appointment</h3>
                
                <p class="mb-6 font-[400] text-[16px] md:text-[18px] lg:text-[20px] text-center text-[#7E849C]">Don't wait and take the first step towards automotive excellence!</p>
                
                <div class="flex justify-center">
                    <style type="text/css">
                        .latepoint-book-button {
                            background: #000;
                            border-radius: 20px;
                            color: #fff;
                            padding: 12px 24px;
                            font-size: 16px;
                        }
                    </style>
                    <?php echo do_shortcode('[latepoint_book_button]'); ?>
                </div>

                
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
