@extends('layouts.app-frontend')
@section('content')
<!--==============================
        Hero Area
    ==============================-->
<div class="th-hero-wrapper hero-4" id="hero">
    <div class="body-particle" id="body-particle"></div>
    <div class="hero-img tilt-active">
        <img src="assets/img/hero/hero_img_4_1.png" alt="Hero Image">
    </div>
    <div class="container">
        <div class="hero-style4">
            <div class="ripple-shape">
                <span class="ripple-1"></span><span class="ripple-2"></span><span class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span class="ripple-6"></span>
            </div>
            <span class="hero-subtitle">Welcome to Triad Trade Limited,</span>
            <h1 style="font-size:64px" class="hero-title">Your Premier Partner In Global Trade & Gigital Solutions !</h1>
            <p class="hero-text">Triad Trade Limited, bridges the gap between innovation and practicality, offering a diverse
                range of products and services designed to meet the dynamic needs of businesses and
                individuals alike. Our expertise spans across multiple domains, ensuring that we deliver
                unparalleled value and quality to our clients.</p>
            <div class="btn-group">
                <a href="contact" class="th-btn">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                <div class="call-btn">
                    <a href="https://www.youtube.com" class="play-btn popup-video">
                        <i class="fas fa-play"></i>
                    </a>
                    <div class="media-body">
                        <a href="https://www.youtube.com" class="btn-title popup-video">Watch
                            Our Story</a>
                        <span class="btn-text">Subscribe Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="triangle-1"></div>
    <div class="triangle-2"></div>
    <div class="hero-shape2">
        <img src="assets/img/hero/hero_shape_2_2.png" alt="shape">
    </div>
    <div class="hero-shape3">
        <img src="assets/img/hero/hero_shape_2_3.png" alt="shape">
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
        About Area
    ==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box4 tilt-active">
                    <div class="img-shape icon-masking">
                        <span class="mask-icon" data-mask-src="assets/img/normal/about_3_1-shape.png"></span>
                        <img src="assets/img/normal/about_3_1-shape.png" alt="img">
                    </div>
                    <img src="assets/img/normal/about_3_1.png" alt="About">
                    <a href="https://www.youtube.com" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35 text-center text-xl-start">
                    <div class="shadow-title">ABOUT US</div>
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            {{-- <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"> --}}
                        </div>About Trade SOLUTIONS
                    </span>
                    <h2 class="sec-title">Unlocking Business Potential with <span class="text-theme">Trading Excellence</span></h2>
                </div>
                {{-- <p class="mt-n2 mb-30 text-center text-xl-start">Leverage cutting-edge strategies and innovative solutions to achieve unparalleled business growth. Our dedication to excellence ensures that we deliver results that matter.</p> --}}
                <p class="mt-n2 mb-30 text-center text-xl-start">Thank you for choosing Triad Trade Limited. Let's build a brighter future together!</p>
                <div class="achivement-tab filter-menu-active indicator-active">
                    <button data-filter=".cat1" class="active" type="button">Key Achievements</button>
                    <button data-filter=".cat2" type="button"> Our Commitment</button>
                </div>
                <div class="achivement-box-area filter-active-cat1">
                    <div class="filter-item w-100 cat1">
                        <div class="achivement-box">
                            {{-- <div class="achivement-box_img">
                                <img src="assets/img/normal/about_3_1_1.jpg" alt="About">
                            </div> --}}
                            <div class="media-body">
                                <h3 class="box-title">Achievements</h3>
                                <p class="achivement-box_text">We're proud to launch our cutting-edge AI Document Control Management System, HR
                                    Management System, and Administration System, setting new benchmarks in efficiency and
                                    innovation.
                                </p>
                                <a href="contact" class="th-btn">Contact For More</a>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item w-100 cat2">
                        <div class="achivement-box">
                            {{-- <div class="achivement-box_img">
                                <img src="assets/img/normal/about_3_1_2.jpg" alt="About">
                            </div> --}}
                            <div class="media-body">
                                <h3 class="box-title">Commitment</h3>
                                <p class="achivement-box_text"> At Triad Trade Limited, we are dedicated to providing exceptional service and solutions that
                                    drive success. Our commitment to quality, reliability, and customer satisfaction is at the core of
                                    everything we do. Join us on this journey of growth and excellence, and discover how we can
                                    help you achieve your goals.</p>
                                <a href="contact" class="th-btn">Contact For More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--==============================
        Service Area
    ==============================-->
<section class="bg-top-center z-index-common space-top" id="service-sec" data-bg-src="assets/img/bg/service_bg_2.jpg">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-9 pe-xl-5">
                <div class="title-area text-center text-lg-start">
                    <div class="shadow-title color2">SERVICES</div>
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            {{-- <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"> --}}
                        </div>WHAT WE DO
                    </span>
                    <h2 class="sec-title text-white">We Provide Exclusive Service For <span class="text-theme">You</span></h2>
                </div>
            </div>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="assets/img/icon/service_card_1.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="#">Import/Export</a></h3>
                                <p class="service-grid_text">We facilitate the global trade of a wide array of products, including
                                    electronics, home appliances, furniture, textiles, automotive parts, agricultural products,
                                    industrial machinery, medical equipment, food and beverages, and building materials.</p>
                                {{-- <a href="contact" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a> --}}
                                <div class="bg-shape">
                                    <img src="assets/img/bg/service_grid_bg.png" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="assets/img/icon/service_card_2.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="#">Digital Services</a></h3>
                                <p class="service-grid_text">From software development to website and application creation, our
                                    digital solutions are tailored to propel your business forward. Our offerings include
                                    custom software, mobile apps, web applications, and more.</p>
                                {{-- <a href="contact" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a> --}}
                                <div class="bg-shape">
                                    <img src="assets/img/bg/service_grid_bg.png" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="assets/img/icon/service_card_3.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="#">Business Solutions</a></h3>
                                <p class="service-grid_text">Enhance your business operations with our state-of-the-art SaaS
                                    products, including CRM, ERP, project management, and accounting software.</p>
                                {{-- <a href="contact" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a> --}}
                                <div class="bg-shape">
                                    <img src="assets/img/bg/service_grid_bg.png" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="assets/img/icon/service_card_4.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a href="#">Wholesale Products</a></h3>
                                <p class="service-grid_text">We offer a wide range of products available for wholesale, providing significant cost savings and
                                    consistent quality for retailers and businesses. Our wholesale offerings include electronics,
                                    home appliances, textiles, and more, ensuring bulk availability and competitive pricing.
                                </p>
                                {{-- <a href="contact" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a> --}}
                                <div class="bg-shape">
                                    <img src="assets/img/bg/service_grid_bg.png" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-grid">
                            <div class="service-grid_icon">
                                <img src="assets/img/icon/service_card_5.svg" alt="Icon">
                            </div>
                            <div class="service-grid_content">
                                <h3 class="box-title"><a target="_blank" href="https://www.jeweldress.com">Online Store (Jewel Dress ) www.jeweldress.com</a></h3>
                                <p class="service-grid_text">Explore our exclusive collection of branded clothes, shoes, and pure
                                    leather hand-made products like shoes, wallets, and bags.</p>
                                {{-- <a href="contact" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a> --}}
                                <div class="bg-shape">
                                    <img src="assets/img/bg/service_grid_bg.png" alt="bg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="why-sec-v2" data-bg-src="assets/img/bg/why_bg_2.jpg">
    <div class="container space">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-xl-12">
                <div class="title-area mb-35">
                    <div class="shadow-title color3">Choose US</div>
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                        </div>WHY CHOOSE US
                    </span>
                    {{-- <h2 class="sec-title">More Than 8+ Years Experience <span class="text-theme">Trading</span></h2> --}}
                </div>
                <div class="feature-circle-wrap">
                    <div class="feature-circle">
                        <div class="progressbar" data-path-color="#A97C50">
                            <div class="circle" data-percent="100">
                                <div class="circle-num"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="feature-circle_title">Mission</h3>
                            <p class="feature-circle_text">Our mission is to empower businesses and individuals through exceptional products and services that drive
                                growth and efficiency. We strive to be a trusted partner in global trade and digital solutions, delivering unparalleled
                                value and fostering long-term relationships with our clients.</p>
                        </div>
                    </div>
                    <div class="feature-circle">
                        <div class="progressbar" data-path-color="#A97C50">
                            <div class="circle" data-percent="100">
                                <div class="circle-num"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="feature-circle_title">Vision</h3>
                            <p class="feature-circle_text">Our vision is to be a global leader in the import/export and digital services sectors, recognized for our
                                innovation, integrity, and excellence. We aim to continuously evolve, embracing new technologies and opportunities
                                to create a positive impact on the businesses and communities we serve.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <a href="about.html" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a> --}}
            </div>
        </div>
    </div>
</div>



<!--==============================
        Project Area
    ==============================-->
<section class="space" id="project-sec">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title">SERVICE</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                </div>
                Import/Export
            </span>
            <h2 class="sec-title">We provide the following Import/Export Services</h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="projectSlider2" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Electronics</a></h3>
                                <p class="project-grid_text">We offer a comprehensive range of electronic products, including mobile
                                    phones, laptops, smart home devices, and accessories, ensuring top-notch quality and
                                    competitive pricing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Home Appliances</a></h3>
                                <p class="project-grid_text">Our selection of home appliances includes kitchen gadgets,
                                    cleaning equipment, and personal care devices, all designed to enhance convenience
                                    and efficiency in daily life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Jewel Dress</a></h3>
                                <p class="project-grid_text">Discover our exquisite collection of jewel dresses that combine elegance
                                    with craftsmanship, perfect for special occasions and formal events.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Foodand Beverages</a></h3>
                                <p class="project-grid_text">We provide a variety of food and beverage products,
                                    from packaged foods to fresh produce, ensuring quality and freshness for our clients.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#projectSlider2" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#projectSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
<section class="space" id="project-sec1">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title">SERVICE</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                </div>
                Digital Services
            </span>
            <h2 class="sec-title">We provide the following degital services</h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="projectSlider3" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Software Development</a></h3>
                                <p class="project-grid_text">Our team specializes in custom software development tailored
                                    to meet the unique needs of your business, delivering scalable and robust solutions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Website Development: </a></h3>
                                <p class="project-grid_text">We create visually appealing, user-friendly websites that
                                    enhance your online presence and drive engagement with your audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Application Development (For Mobile)</a></h3>
                                <p class="project-grid_text">Our mobile app development services
                                    encompass both Android and iOS platforms, delivering innovative and user-centric
                                    applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Graphic Designing</a></h3>
                                <p class="project-grid_text">We offer professional graphic design services, including logo
                                    creation, branding, and marketing materials, to effectively communicate your brand's
                                    message.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Animation Content</a></h3>
                                <p class="project-grid_text">Our animation services bring your ideas to life through engaging
                                    and high-quality animated videos, perfect for marketing, training, and entertainment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            {{-- <div class="project-grid_img">
                                <img src="assets/img/project/project_2_3.jpg" alt="project image">
                                <a href="assets/img/project/project_2_3.jpg" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                            </div> --}}
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Digital Marketing</a></h3>
                                <p class="project-grid_text">Our digital marketing strategies are designed to increase your online
                                    visibility, drive traffic, and generate leads through SEO, PPC, social media, and email
                                    marketing.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#projectSlider3" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#projectSlider3" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
<section class="space" id="project-sec2">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title">SERVICE</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                </div>
                Business Solutions
            </span>
            <h2 class="sec-title">We provide the following Business Management Solutions</h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="projectSlider4" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">A.I. Document Control Management (AIDCM) System</a></h3>
                                <p class="project-grid_text">Our AIDCM system leverages
                                    artificial intelligence to streamline document management, enhancing efficiency and
                                    accuracy in handling documents.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Customer Relationship Management (CRM) System</a></h3>
                                <p class="project-grid_text">Our CRM solutions help you
                                    manage customer interactions, improve sales, and enhance customer satisfaction
                                    through a centralized platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Enterprise Resource Planning (ERP) System</a></h3>
                                <p class="project-grid_text">Our ERP systems integrate various
                                    business processes, providing a comprehensive solution for managing resources,
                                    operations, and data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Project Management Software</a></h3>
                                <p class="project-grid_text"> Our project management tools enable efficient
                                    planning, execution, and tracking of projects, ensuring timely delivery and optimal
                                    resource utilization.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Accounting and Financial Software</a></h3>
                                <p class="project-grid_text">Our accounting and financial software provides
                                    robust tools for managing finances, from budgeting to financial reporting, ensuring
                                    compliance and accuracy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Marketing Automation Tools</a></h3>
                                <p class="project-grid_text">Our marketing automation tools streamline marketing
                                    processes, from lead generation to customer engagement, driving efficiency and
                                    effectiveness in your campaigns.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">E-commercePlatforms</a></h3>
                                <p class="project-grid_text">Our e-commerce platforms offer a complete solution for online
                                    selling, including product management, payment processing, and customer service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Inventory Management Software</a></h3>
                                <p class="project-grid_text">Our inventory management systems provide
                                    real-time tracking and control of inventory, optimizing stock levels and reducing costs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Human Resources Management Software</a></h3>
                                <p class="project-grid_text">Our HR management software automates
                                    HRprocesses, from recruitment to payroll, enhancing productivity and employee
                                    satisfaction.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#projectSlider4" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#projectSlider4" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
<section class="space" id="project-sec3">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title">SERVICE</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                </div>
                Marketing Strategy
            </span>
            <h2 class="sec-title">We provide the following Marketing Services</h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="projectSlider5" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">SEO</a></h3>
                                <p class="project-grid_text">OurSEOservices optimize your website content to rank higher on search engines,
                                    making it easier for potential customers to find you using relevant keywords related to
                                    your business.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Social Media Marketing</a></h3>
                                <p class="project-grid_text">We manage your social media presence with regular posts on
                                    LinkedIn, Facebook, Instagram, and Twitter, showcasing your products, services, and
                                    company updates to engage with your audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Email Marketing</a></h3>
                                <p class="project-grid_text">Our email marketing campaigns, including newsletters and targeted
                                    emails, keep your clients and prospects informed about new products, services, and
                                    company achievements, fostering ongoing engagement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Content Marketing</a></h3>
                                <p class="project-grid_text">We create and share valuable content, such as blog posts, case
                                    studies, and whitepapers, to demonstrate your expertise and establish your brand as a
                                    thought leader in your industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Paid Advertising</a></h3>
                                <p class="project-grid_text">Our paid advertising services, including Google Ads and social media
                                    ads, increase your online visibility and drive targeted traffic to your website, boosting
                                    your lead generation efforts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Networking Events</a></h3>
                                <p class="project-grid_text">We attend and sponsor industry events and trade shows, providing
                                    opportunities to increase your brand's visibility and establish valuable business
                                    connections.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Print Media</a></h3>
                                <p class="project-grid_text">Our print media services include creating brochures, business cards, and
                                    flyers that effectively communicate your brand message and offerings, distributed at
                                    events and through direct mail.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Partnerships</a></h3>
                                <p class="project-grid_text">We collaborate with other businesses for cross-promotions and joint
                                    ventures, expanding your reach and creating mutually beneficial opportunities for
                                    growth.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#projectSlider5" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#projectSlider5" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
<section class="space" id="project-sec4">
    <div class="container">
        <div class="title-area text-center">
            <div class="shadow-title">SERVICE</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                </div>
                Client Acquisition
            </span>
            <h2 class="sec-title">We provide the following Client Acquisition services</h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="projectSlider6" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Website Forms</a></h3>
                                <p class="project-grid_text">We integrate contact forms and quote request forms on your website,
                                    making it easy to capture leads and gather essential information from potential clients.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Landing Pages</a></h3>
                                <p class="project-grid_text">Our dedicated landing pages for each service are designed with clear
                                    calls-to-action (CTAs) to drive conversions and capture leads effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Referral Program</a></h3>
                                <p class="project-grid_text">We implement referral programs that incentivize your existing clients
                                    to refer new clients, leveraging your satisfied customers to expand your client base.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Cold Outreach</a></h3>
                                <p class="project-grid_text"> Our targeted email and phone campaigns reach out to potential clients
                                    in relevant industries, introducing them to your services and generating new business
                                    opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Customer Support</a></h3>
                                <p class="project-grid_text">We provide responsive and helpful customer service through
                                    multiple channels, ensuring your clients receive the support they need promptly and
                                    efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-grid">
                            <div class="project-grid_content">
                                <h3 class="box-title"><a href="#">Loyalty Programs</a></h3>
                                <p class="project-grid_text">Our loyalty programs offer discounts and special offers for repeat
                                    clients, encouraging long-term business relationships and repeat purchases.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#projectSlider6" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#projectSlider6" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
<!--==============================
        Counter Area
    ==============================-->
<div class="bg-theme space-extra" data-bg-src="assets/img/bg/counter_bg_1.png">
    <div class="container py-2">
        <div class="row gy-40 justify-content-between">
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter_1_1.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">986</span>+</h2>
                        <p class="counter-card_text">Finished Project</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter_1_2.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">896</span>+</h2>
                        <p class="counter-card_text">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter_1_3.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">396</span>+</h2>
                        <p class="counter-card_text">Skilled Experts</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter_1_4.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">46</span>+</h2>
                        <p class="counter-card_text">Honorable Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
        Process Area
    ==============================-->
<section class="bg-smoke" id="process-sec" data-bg-src="assets/img/bg/process_bg_1.png">
    <div class="container space">
        <div class="title-area text-center">
            <div class="shadow-title">OTHER SERVICES</div>
            <span class="sub-title">
                <div class="icon-masking me-2">
                </div>
                IMPORTANT SERVICES
            </span>
            <h2 class="sec-title">We also provide the following important <span class="text-theme">services!</span></h2>
        </div>
        <div class="process-card-area">
            <div class="process-line">
                <img src="assets/img/bg/process_line.svg" alt="line">
            </div>
            <div class="row gy-40">
                <div class="col-sm-6 col-xl-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">01</div>
                        <div class="process-card_icon">
                            <img class="other-serivce-img" src="assets/img/amazon-logo.png" alt="icon">
                        </div>
                        <h2 class="box-title">AmazonSeller Account</h2>
                        <p class="process-card_text">Triad Trade Limited offers a convenient way for customers to
                            order our import/export products through our established Amazon seller account.
                            Explore our wide range of products and enjoy a seamless shopping experience on the
                            world's largest online marketplace.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">02</div>
                        <div class="process-card_icon">
                            <img class="other-serivce-img" src="assets/img/alibaba-logo.png" alt="icon">
                        </div>
                        <h2 class="box-title">Alibaba Seller Account</h2>
                        <p class="process-card_text">Our Alibaba seller account provides a gateway for global B2B
                            transactions. Businesses can easily browse and order our products, benefiting from our
                            competitive prices and reliable supply chain management.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--==============================
        Team Area
    ==============================-->
<section class="space-top mt-5" id="team-sec">
    <div class="brand-sec1" data-pos-for="#process-sec" data-sec-pos="top-half">
        <div class="container py-5">
            <div class="slider-area text-center">
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box py-20">
                                <img style="height: 60px" src="assets/img/logo.png" alt="Brand Logo">
                            </div>
                        </div>
                    </div>

                </div>
                <button data-slider-prev="#brandSlider1" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#brandSlider1" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </div>

    {{-- team section is here --}}


</section>
<!--==============================
        Testimonial Area
    ==============================-->

<!--==============================
        Cta Area
    ==============================-->
<section class="space-bottom mt-5" id="contact-sec">
    <div class="container">
        <div class="cta-box">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-box_img">
                        <img src="assets/img/normal/customer_support.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cta-box_content">
                        <div class="cta-box_icon">
                            <img src="assets/img/icon/call_1.svg" alt="Icon">
                        </div>
                        <div class="title-area mb-35">
                            <div class="shadow-title">CONSULTATION</div>
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    {{-- <span class="mask-icon"
                                            data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                        <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"> --}}
                                </div>
                                LET’S CONSULTATION
                            </span>
                            <h2 class="sec-title">Let’s Talk About Business Solutions <span class="text-theme">With Us</span></h2>
                        </div>
                        <a href="contact" class="th-btn">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
