<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/images/img-icon.png" rel="icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="assets/css/aos.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/animate.css"> -->
    <!-- <link rel="stylesheet" href="public/css/common.css"> -->

</head>

<body class="dark_mode">
    <div>
        <?php include "inc/header.php" ?>
        <?php include "modal.php" ?>
        <!-- responsive sidemenu  -->
        <div class="menuoverlay"></div>
        <div class="responsive_sidemenu">
            <div class="logo-section d-flex justify-content-between align-items-center">
                <a class="responsive_logo" href="index.php">
                    <img src="assets/images/saroj2.jpg" alt="" class="img-fluid img-thumbnail rounded-circle" data-aos="flip-up" data-aos-easing="linear" data-aos-delay="300">
                </a>
                <div class="close_icon" data-aos="flip-up" data-aos-easing="linear" data-aos-delay="300">
                    <i class="ri-close-line "></i>
                </div>
            </div>
            <ul class="menu_section d-flex jusify-content-start flex-column list-unstyled gap-4 pt-5">
                <li class="nav-item" data-cursor="pointer" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="300">
                    <a class="nav-link text-uppercase bubble_btn active" href="#about_us">Home</a>
                </li>
                <li class="nav-item" data-cursor="pointer" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="300">
                    <a class="nav-link text-uppercase bubble_btn active" href="#about_us">About Us</a>
                </li>
                <li class="nav-item" data-cursor="pointer" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="300">
                    <a class="nav-link text-uppercase bubble_btn active" href="#features">Features</a>
                </li>
                <li class="nav-item" data-cursor="pointer" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="300">
                    <a class="nav-link text-uppercase bubble_btn active" href="#technology">Technology</a>
                </li>
                <li class="nav-item" data-cursor="pointer" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="300">
                    <a class="nav-link text-uppercase bubble_btn active" href="#resume">Resume</a>
                </li>
                <li class="nav-item" data-cursor="pointer" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="300">
                    <a class="nav-link text-uppercase bubble_btn active" href="#contact">Contact</a>
                </li>
                <li class="nav-item" data-aos="flip-down" data-aos-easing="linear" data-aos-delay="600">
                    <div class="form-switch-input ">
                        <input type="checkbox" class="checkbox mt-0" id="responive_checkbox_input" checked>
                        <label for="responive_checkbox_input" class="checkbox-label light_dark_toggle_input d-flex justify-content-between align-items-center ">
                            <i class="ri-sun-fill sun_icon ms-1"></i>
                            <i class="ri-moon-fill moon_icon me-1"></i>
                            <span class="checkbox_ball"></span>
                        </label>
                    </div>
                </li>
            </ul>
            <div class="bottom_social_section my-3">
                <h4 class="social_title text-uppercase">Find With Me</h4>
                <div class="d-flex align-iems-center gap-4 mt-3">
                    <a href="javascript:void();" class="text-decoration-none">
                        <div class="bootom_social_icon d-flex align-items-center justify-content-center bubble_btn">
                            <i class="ri-facebook-line"></i>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/sarojkumar.ui/" class="text-decoration-none">
                        <div class="bootom_social_icon d-flex align-items-center justify-content-center bubble_btn">
                            <i class="ri-instagram-line"></i>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/in/saroj-kumar-swain/" class="text-decoration-none">
                        <div class="bootom_social_icon d-flex align-items-center justify-content-center bubble_btn">
                            <i class="ri-linkedin-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="vertical_img_left" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500">
            <div class="img-section  ">
                <div class="border_line">
                    <div class="boder_inner"></div>
                    <img src="assets/images/saroj2.jpg" alt="profile pic" class="img-fluid avatar-md   rounded-circle  ">
                </div>
            </div>
        </div>
        <div class="vertical_img_right" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500">
            <div class="img-section  ">
                <div class="border_line">
                    <div class="boder_inner"></div>
                    <img src="assets/images/saroj2.jpg" alt="profile pic" class="img-fluid avatar-md   rounded-circle  ">
                </div>
            </div>
        </div>

        <!-- right side social icons  -->
        <div class="left_side_social_icons">
            <a href="javascript:void();" class="text-decoration-none" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="600">
                <div class="left_social_icon d-flex justify-content-between align-items-center gap-3">
                    <span>Facebook</span>
                    <i class="ri-facebook-line"></i>
                </div>
            </a>
            <a href="javascript:void();" class="text-decoration-none" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="650">
                <div class="left_social_icon d-flex justify-content-between align-items-center gap-3 mt-2">
                    <span>Instagram</span>
                    <i class="ri-instagram-line"></i>
                </div>
            </a>
            <a href="javascript:void();" class="text-decoration-none" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="700">
                <div class="left_social_icon d-flex justify-content-between align-items-center gap-3 mt-2">
                    <span>LinkedIn</span>
                    <i class="ri-linkedin-line"></i>
                </div>
            </a>
        </div>
        <section class="ss-section1 mb-lg-0 mb-3" id="about_us">
            <div class="container">
                <div class="mt-5">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6 col-12 col-sm-12 col-md-12 col-xl-6  sect-order2">
                            <div class="ss-inner">
                                <h4 class="ss-subtitle text-uppercase mb-3" data-cursor="pointer" data-aos="fade-down" data-aos-easing="linear">Welcome To My World</h4>
                                <h2 class="ss-title mb-3 text-capitalize" data-cursor="pointer" data-aos="fade-down">Hi, I'm <span>Saroj Kumar Creative</span>
                                    <span class="ss-rotate-text" data-cursor="pointer">
                                        <span class="ss-text-wrapper">
                                            <b class="is-visible">Designer</b>
                                            <b class="is-hidden">Developer</b>
                                        </span>
                                    </span>
                                </h2>
                                <div data-aos="fade-down">
                                    <p class="ss-description" data-cursor="pointer">
                                        I'm a passionate UI/UX designer with a mission to create delightful and intuitive digital experiences. With a strong foundation in design principles and a keen eye for detail, I specialize in translating complex ideas into user-friendly interfaces that captivate and engage.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 responsive_center">
                                        <span class="ss-social-title text-uppercase" data-cursor="pointer" data-aos="fade-up">Find With Me</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col-12">
                                        <div class="ss-social-share">
                                            <div class="d-flex align-items-center gap-4 mt-3 responsive_justify_center">
                                                <a href="javascript:void();" class="text-decoration-none " data-aos="fade-up">
                                                    <div class="ss-social d-flex align-items-center justify-content-center  bubble_btn">
                                                        <i class="ri-facebook-line"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none" data-aos="fade-up">
                                                    <div class="ss-social d-flex align-items-center justify-content-center bubble_btn">
                                                        <i class="ri-instagram-line"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none" data-aos="fade-up">
                                                    <div class="ss-social d-flex align-items-center justify-content-center bubble_btn">
                                                        <i class="ri-linkedin-line"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col-12 responsive_center">
                                        <button class="btn btn-default download-btn border-0 text-uppercase mt-3 bubble_btn" data-cursor="pointer" type="button" data-aos="flip-up">Download CV <i class="ri-download-line ms-2 align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-sm-12 col-md-12 col-xl-6 sect-order1 d-flex justify-content-end responsive_flex">
                            <div class="img-section-dark" data-aos="fade-left" data-aos-delay="500" data-aos-easing="linear">
                                <div class="border_line"></div>
                                <div class="boder_inner">
                                    <div class="half_border"></div>
                                    <img src="assets/images/saroj-img.png" data-tilt alt="profile pic" class="img-fluid ss-img js-tilt" data-cursor="pointer">
                                </div>
                            </div>

                            <div class="textRotateWrapper"data-aos="fade-right" data-aos-delay="700" data-aos-easing="linear">
                                <h3 class="textRotate mb-0">
                                    <span>S</span>
                                    <span>a</span>
                                    <span>r</span>
                                    <span>o</span>
                                    <span>j</span>
                                    <span> </span>
                                    <span>K</span>
                                    <span>u</span>
                                    <span>m</span>
                                    <span>a</span>
                                    <span>r</span>
                                    <span> </span>
                                    <span>S</span>
                                    <span>w</span>
                                    <span>a</span>
                                    <span>i</span>
                                    <span>n</span>
                                    <span></span>
                                </h3>
                            </div>
                            <!-- <div class="ss-thumbnail position-relative">
                                <div class="ss-inner" data-tilt data-aos="fade-left" data-aos-delay="500" data-aos-easing="linear">
                                    <img src="assets/images/saroj-img.png" alt="profile pic" class="img-fluid ss-img js-tilt" data-cursor="pointer" style="filter:blur(20px)">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="light-border position-absolute"> </div> -->
        </section>
        <!-- section two -->
        <section class="ss-section2" id="features" data-aos="fade-up">
            <div class="container">
                <h4 class="ss-subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">FEATURES</h4>
                <h2 class="ss-title text-capitalize mb-5" data-aos="fade-up" data-aos-easing="linear">What <span>I </span> Can <span>Do </span>for <span>You </span></h2>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="text-decoration-none">
                            <div class="ss-services h-100" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                <div class="ss-inner mt-4">
                                    <div class="ss-inner-icon w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0h455.519" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(10 356.674)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(93.507 399.228)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h89.46c13.067 0 23.754-10.681 23.754-23.741 0-13.061-10.687-23.741-23.754-23.741H0c-13.067 0-23.754 10.68-23.754 23.741C-23.754-10.681-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(299.95 446.71)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(181.209 399.228)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0-20.013-83.747" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(162.416 279.756)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0 28.317 31.788c1.247 1.388 1.247 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(208.507 203.573)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0-28.317 31.788c-1.248 1.388-1.248 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(96.314 203.573)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c10.941-2.437 21.174-6.743 30.387-12.522l8.192 8.159C43.426.51 51.391.51 56.267-4.363l12.897-12.891c4.875-4.873 4.875-12.834 0-17.679L61-43.12a96.571 96.571 0 0 0 12.473-30.088h11.479c6.889 0 12.529-5.638 12.529-12.494v-18.274c0-6.855-5.64-12.493-12.529-12.493H73.416A96.87 96.87 0 0 0 61-146.387l8.164-8.159c4.875-4.873 4.875-12.834 0-17.679l-12.897-12.919c-4.876-4.873-12.841-4.873-17.688 0l-8.192 8.16A96.692 96.692 0 0 0 .34-189.422v-11.615c0-6.885-5.641-12.523-12.5-12.523h-18.283c-6.861 0-12.501 5.638-12.501 12.523v11.643c-10.772 2.437-20.891 6.715-29.991 12.41l-8.163-8.16c-4.876-4.873-12.84-4.873-17.688 0l-12.925 12.919c-4.848 4.845-4.848 12.806 0 17.679l8.191 8.159a96.251 96.251 0 0 0-12.443 29.918h-11.594c-6.887 0-12.501 5.638-12.501 12.493v18.274c0 6.856 5.614 12.494 12.501 12.494h11.566a96.76 96.76 0 0 0 12.273 29.776l-8.22 8.244c-4.875 4.845-4.875 12.806 0 17.679l12.897 12.891c4.876 4.873 12.841 4.873 17.688 0l8.135-8.103A97.26 97.26 0 0 0-43.284-.17v11.53c0 6.885 5.612 12.523 12.5 12.523h18.255C-5.641 23.883 0 18.245 0 11.36Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(404.519 235.56)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c28.459 0 51.533-23.062 51.533-51.534 0-28.445-23.074-51.506-51.533-51.506-28.487 0-51.562 23.061-51.562 51.506C-51.562-23.062-28.487 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(383.23 192.241)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h-59.187c-20.464 0-37.246 20.029-37.246 44.479V326.43c0 24.477 16.752 44.479 37.246 44.479H321.84c20.494 0 37.246-20.03 37.246-44.479V107.374M170.529 0H89.375" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(106.433 119.09)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h.198" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(151.22 119.09)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                </g>
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg2" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0h455.519" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(10 356.674)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(93.507 399.228)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h89.46c13.067 0 23.754-10.681 23.754-23.741 0-13.061-10.687-23.741-23.754-23.741H0c-13.067 0-23.754 10.68-23.754 23.741C-23.754-10.681-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(299.95 446.71)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(181.209 399.228)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0-20.013-83.747" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(162.416 279.756)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0 28.317 31.788c1.247 1.388 1.247 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(208.507 203.573)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0-28.317 31.788c-1.248 1.388-1.248 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(96.314 203.573)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c10.941-2.437 21.174-6.743 30.387-12.522l8.192 8.159C43.426.51 51.391.51 56.267-4.363l12.897-12.891c4.875-4.873 4.875-12.834 0-17.679L61-43.12a96.571 96.571 0 0 0 12.473-30.088h11.479c6.889 0 12.529-5.638 12.529-12.494v-18.274c0-6.855-5.64-12.493-12.529-12.493H73.416A96.87 96.87 0 0 0 61-146.387l8.164-8.159c4.875-4.873 4.875-12.834 0-17.679l-12.897-12.919c-4.876-4.873-12.841-4.873-17.688 0l-8.192 8.16A96.692 96.692 0 0 0 .34-189.422v-11.615c0-6.885-5.641-12.523-12.5-12.523h-18.283c-6.861 0-12.501 5.638-12.501 12.523v11.643c-10.772 2.437-20.891 6.715-29.991 12.41l-8.163-8.16c-4.876-4.873-12.84-4.873-17.688 0l-12.925 12.919c-4.848 4.845-4.848 12.806 0 17.679l8.191 8.159a96.251 96.251 0 0 0-12.443 29.918h-11.594c-6.887 0-12.501 5.638-12.501 12.493v18.274c0 6.856 5.614 12.494 12.501 12.494h11.566a96.76 96.76 0 0 0 12.273 29.776l-8.22 8.244c-4.875 4.845-4.875 12.806 0 17.679l12.897 12.891c4.876 4.873 12.841 4.873 17.688 0l8.135-8.103A97.26 97.26 0 0 0-43.284-.17v11.53c0 6.885 5.612 12.523 12.5 12.523h18.255C-5.641 23.883 0 18.245 0 11.36Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(404.519 235.56)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c28.459 0 51.533-23.062 51.533-51.534 0-28.445-23.074-51.506-51.533-51.506-28.487 0-51.562 23.061-51.562 51.506C-51.562-23.062-28.487 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(383.23 192.241)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h-59.187c-20.464 0-37.246 20.029-37.246 44.479V326.43c0 24.477 16.752 44.479 37.246 44.479H321.84c20.494 0 37.246-20.03 37.246-44.479V107.374M170.529 0H89.375" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(106.433 119.09)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h.198" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(151.22 119.09)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ss-inner-content">
                                        <h4 class="ss-cont-title mb-3">Web Development</h4>
                                        <p class="ss-inner-content mb-4">I throw myself down among the tall grass by the stream as I lie close to the earth.</p>
                                        <i class="ri-arrow-right-line arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="text-decoration-none">
                            <div class="ss-services h-100" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                <div class="ss-inner mt-4">
                                    <div class="ss-inner-icon w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <path d="M502.002 10.249H10c-5.523 0-10 4.478-10 10v102.859c0 5.522 4.477 10 10 10h492.002c5.523 0 10-4.478 10-10V20.249c0-5.522-4.477-10-10-10zm-10 102.859H20V30.249h472.002v82.859z" fill="#ff014f" opacity="1" data-original="#ff014f" class=""></path>
                                                <path d="m469.41 90.394-8.167-8.167a31.795 31.795 0 0 0 3.416-14.388c0-8.533-3.323-16.557-9.357-22.591-12.456-12.455-32.723-12.456-45.18 0-6.034 6.034-9.357 14.058-9.357 22.591 0 8.533 3.324 16.557 9.357 22.59 6.035 6.034 14.058 9.357 22.591 9.357 5.083 0 9.98-1.188 14.388-3.416l8.167 8.167c1.953 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929c3.905-3.905 3.905-10.237 0-14.143zm-28.249-14.108a11.866 11.866 0 0 1-8.448 3.5 11.867 11.867 0 0 1-8.448-3.5c-2.256-2.257-3.5-5.256-3.5-8.447s1.244-6.192 3.5-8.448a11.91 11.91 0 0 1 8.448-3.493 11.91 11.91 0 0 1 8.448 3.493c2.256 2.257 3.5 5.257 3.5 8.448s-1.243 6.191-3.5 8.447zM358.341 87.831a10.2 10.2 0 0 0-1.49-3.6c-.36-.54-.78-1.06-1.24-1.52a9.57 9.57 0 0 0-1.52-1.24 9.87 9.87 0 0 0-1.73-.92c-.6-.25-1.23-.44-1.87-.57a9.898 9.898 0 0 0-3.91 0c-.64.13-1.27.32-1.87.57-.6.25-1.18.56-1.72.92-.55.36-1.06.78-1.53 1.24-.46.46-.87.979-1.24 1.52-.36.54-.67 1.13-.92 1.73-.25.6-.44 1.229-.57 1.87-.13.649-.19 1.3-.19 1.96 0 .649.06 1.3.19 1.95.13.64.32 1.27.57 1.869.25.601.56 1.181.92 1.73.37.54.78 1.06 1.24 1.52.47.46.98.881 1.53 1.24.54.36 1.12.67 1.72.92.61.25 1.24.44 1.87.57.65.13 1.31.19 1.96.19a9.915 9.915 0 0 0 3.82-.76c.6-.25 1.19-.56 1.73-.92.55-.359 1.06-.78 1.52-1.24a10.09 10.09 0 0 0 2.93-7.069c0-.66-.07-1.311-.2-1.96zM310.627 79.786H102.794c-5.523 0-10 4.478-10 10s4.477 10 10 10h207.833c5.523 0 10-4.478 10-10s-4.477-10-10-10zM314.821 147.364H11.181c-5.523 0-10 4.478-10 10v197.199c0 5.523 4.477 10 10 10h303.64c5.523 0 10-4.478 10-10V157.364c0-5.522-4.477-10-10-10zM121.806 344.562H36.925l57.165-66.186 41.4 47.94-13.684 18.246zm25 0 18.646-24.861h48.489c5.523 0 10-4.478 10-10s-4.477-10-10-10h-33.488l7.016-9.354h62.789l40.665 54.215H146.806zm55.662-74.215 16.395-21.859 16.395 21.859h-32.79zm102.353 59.413-77.958-103.94a10.002 10.002 0 0 0-16 0l-63.09 84.119-46.114-53.4a10 10 0 0 0-15.136 0l-65.342 75.653V167.364h283.64V329.76z" fill="#ff014f" opacity="1" data-original="#ff014f" class=""></path>
                                                <path d="M137.648 178.846c-19.494 0-35.353 15.859-35.353 35.353s15.86 35.353 35.353 35.353c19.494 0 35.353-15.859 35.353-35.353s-15.859-35.353-35.353-35.353zm0 50.707c-8.466 0-15.353-6.887-15.353-15.353s6.888-15.353 15.353-15.353 15.353 6.887 15.353 15.353-6.887 15.353-15.353 15.353zM502.002 147.364h-153.69c-5.523 0-10 4.478-10 10v197.199c0 5.522 4.477 10 10 10h153.69c5.523 0 10-4.478 10-10V157.364c0-5.522-4.477-10-10-10zm-10 197.199h-133.69V167.364h133.69v177.199z" fill="#ff014f" opacity="1" data-original="#ff014f" class=""></path>
                                                <path d="M468.719 183.835h-87.124c-5.523 0-10 4.478-10 10s4.477 10 10 10h87.124c5.523 0 10-4.478 10-10s-4.477-10-10-10zM468.719 223.969h-87.124c-5.523 0-10 4.478-10 10s4.477 10 10 10h87.124c5.523 0 10-4.478 10-10s-4.477-10-10-10zM468.719 264.103h-87.124c-5.523 0-10 4.478-10 10s4.477 10 10 10h87.124c5.523 0 10-4.478 10-10s-4.477-10-10-10zM391.401 312.281c-.13-.641-.32-1.271-.57-1.87-.25-.601-.56-1.181-.92-1.73-.37-.54-.78-1.06-1.25-1.52-2.32-2.32-5.77-3.391-9.02-2.73a10.098 10.098 0 0 0-3.6 1.49c-.54.36-1.06.78-1.52 1.24a9.991 9.991 0 0 0-2.16 3.25c-.25.6-.44 1.229-.57 1.87-.13.649-.2 1.3-.2 1.949a10.085 10.085 0 0 0 .77 3.831 10.04 10.04 0 0 0 2.16 3.25c.46.46.98.88 1.52 1.24a10.098 10.098 0 0 0 5.56 1.69c2.63 0 5.2-1.07 7.06-2.931.46-.46.88-.979 1.25-1.52.36-.55.67-1.13.92-1.73.25-.6.44-1.229.57-1.87.13-.649.19-1.3.19-1.96 0-.649-.06-1.3-.19-1.949zM468.719 304.236h-49.214c-5.523 0-10 4.478-10 10s4.477 10 10 10h49.214c5.523 0 10-4.478 10-10s-4.477-10-10-10zM164.871 378.751H11.181c-5.523 0-10 4.478-10 10v103.002c0 5.522 4.477 10 10 10h153.69c5.523 0 10-4.478 10-10V388.751c0-5.522-4.477-10-10-10zm-10 103.002H21.181v-83.002h133.69v83.002zM502.002 378.751H199.728c-5.523 0-10 4.478-10 10v103.002c0 5.522 4.477 10 10 10h302.274c5.523 0 10-4.478 10-10V388.751c0-5.522-4.477-10-10-10zm-10 103.002H209.728v-83.002h282.274v83.002z" fill="#ff014f" opacity="1" data-original="#ff014f" class=""></path>
                                                <path d="M255.281 438.302a10.122 10.122 0 0 0-1.49-3.599 9.533 9.533 0 0 0-1.24-1.521 9.57 9.57 0 0 0-1.52-1.24 9.937 9.937 0 0 0-1.73-.92c-.6-.25-1.23-.45-1.87-.58-1.29-.25-2.62-.25-3.91 0a10.217 10.217 0 0 0-3.59 1.5c-.55.36-1.06.78-1.52 1.24a9.86 9.86 0 0 0-2.17 3.25 9.84 9.84 0 0 0-.76 3.82c0 .649.06 1.31.19 1.95.13.639.32 1.269.57 1.879.25.6.56 1.18.92 1.72.37.55.79 1.06 1.25 1.52a10.077 10.077 0 0 0 7.07 2.931c.65 0 1.31-.061 1.95-.19.64-.13 1.27-.33 1.87-.58.61-.25 1.19-.55 1.73-.92a9.462 9.462 0 0 0 1.52-1.24c.46-.46.88-.97 1.24-1.52.36-.54.67-1.12.92-1.72.25-.61.44-1.24.57-1.88.13-.641.2-1.301.2-1.95 0-.65-.07-1.311-.2-1.95zM451.319 430.252h-167.93c-5.523 0-10 4.478-10 10s4.477 10 10 10h167.93c5.523 0 10-4.478 10-10s-4.477-10-10-10z" fill="#ff014f" opacity="1" data-original="#ff014f" class=""></path>
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg2" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <path d="M502.002 10.249H10c-5.523 0-10 4.478-10 10v102.859c0 5.522 4.477 10 10 10h492.002c5.523 0 10-4.478 10-10V20.249c0-5.522-4.477-10-10-10zm-10 102.859H20V30.249h472.002v82.859z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path>
                                                <path d="m469.41 90.394-8.167-8.167a31.795 31.795 0 0 0 3.416-14.388c0-8.533-3.323-16.557-9.357-22.591-12.456-12.455-32.723-12.456-45.18 0-6.034 6.034-9.357 14.058-9.357 22.591 0 8.533 3.324 16.557 9.357 22.59 6.035 6.034 14.058 9.357 22.591 9.357 5.083 0 9.98-1.188 14.388-3.416l8.167 8.167c1.953 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929c3.905-3.905 3.905-10.237 0-14.143zm-28.249-14.108a11.866 11.866 0 0 1-8.448 3.5 11.867 11.867 0 0 1-8.448-3.5c-2.256-2.257-3.5-5.256-3.5-8.447s1.244-6.192 3.5-8.448a11.91 11.91 0 0 1 8.448-3.493 11.91 11.91 0 0 1 8.448 3.493c2.256 2.257 3.5 5.257 3.5 8.448s-1.243 6.191-3.5 8.447zM358.341 87.831a10.2 10.2 0 0 0-1.49-3.6c-.36-.54-.78-1.06-1.24-1.52a9.57 9.57 0 0 0-1.52-1.24 9.87 9.87 0 0 0-1.73-.92c-.6-.25-1.23-.44-1.87-.57a9.898 9.898 0 0 0-3.91 0c-.64.13-1.27.32-1.87.57-.6.25-1.18.56-1.72.92-.55.36-1.06.78-1.53 1.24-.46.46-.87.979-1.24 1.52-.36.54-.67 1.13-.92 1.73-.25.6-.44 1.229-.57 1.87-.13.649-.19 1.3-.19 1.96 0 .649.06 1.3.19 1.95.13.64.32 1.27.57 1.869.25.601.56 1.181.92 1.73.37.54.78 1.06 1.24 1.52.47.46.98.881 1.53 1.24.54.36 1.12.67 1.72.92.61.25 1.24.44 1.87.57.65.13 1.31.19 1.96.19a9.915 9.915 0 0 0 3.82-.76c.6-.25 1.19-.56 1.73-.92.55-.359 1.06-.78 1.52-1.24a10.09 10.09 0 0 0 2.93-7.069c0-.66-.07-1.311-.2-1.96zM310.627 79.786H102.794c-5.523 0-10 4.478-10 10s4.477 10 10 10h207.833c5.523 0 10-4.478 10-10s-4.477-10-10-10zM314.821 147.364H11.181c-5.523 0-10 4.478-10 10v197.199c0 5.523 4.477 10 10 10h303.64c5.523 0 10-4.478 10-10V157.364c0-5.522-4.477-10-10-10zM121.806 344.562H36.925l57.165-66.186 41.4 47.94-13.684 18.246zm25 0 18.646-24.861h48.489c5.523 0 10-4.478 10-10s-4.477-10-10-10h-33.488l7.016-9.354h62.789l40.665 54.215H146.806zm55.662-74.215 16.395-21.859 16.395 21.859h-32.79zm102.353 59.413-77.958-103.94a10.002 10.002 0 0 0-16 0l-63.09 84.119-46.114-53.4a10 10 0 0 0-15.136 0l-65.342 75.653V167.364h283.64V329.76z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path>
                                                <path d="M137.648 178.846c-19.494 0-35.353 15.859-35.353 35.353s15.86 35.353 35.353 35.353c19.494 0 35.353-15.859 35.353-35.353s-15.859-35.353-35.353-35.353zm0 50.707c-8.466 0-15.353-6.887-15.353-15.353s6.888-15.353 15.353-15.353 15.353 6.887 15.353 15.353-6.887 15.353-15.353 15.353zM502.002 147.364h-153.69c-5.523 0-10 4.478-10 10v197.199c0 5.522 4.477 10 10 10h153.69c5.523 0 10-4.478 10-10V157.364c0-5.522-4.477-10-10-10zm-10 197.199h-133.69V167.364h133.69v177.199z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path>
                                                <path d="M468.719 183.835h-87.124c-5.523 0-10 4.478-10 10s4.477 10 10 10h87.124c5.523 0 10-4.478 10-10s-4.477-10-10-10zM468.719 223.969h-87.124c-5.523 0-10 4.478-10 10s4.477 10 10 10h87.124c5.523 0 10-4.478 10-10s-4.477-10-10-10zM468.719 264.103h-87.124c-5.523 0-10 4.478-10 10s4.477 10 10 10h87.124c5.523 0 10-4.478 10-10s-4.477-10-10-10zM391.401 312.281c-.13-.641-.32-1.271-.57-1.87-.25-.601-.56-1.181-.92-1.73-.37-.54-.78-1.06-1.25-1.52-2.32-2.32-5.77-3.391-9.02-2.73a10.098 10.098 0 0 0-3.6 1.49c-.54.36-1.06.78-1.52 1.24a9.991 9.991 0 0 0-2.16 3.25c-.25.6-.44 1.229-.57 1.87-.13.649-.2 1.3-.2 1.949a10.085 10.085 0 0 0 .77 3.831 10.04 10.04 0 0 0 2.16 3.25c.46.46.98.88 1.52 1.24a10.098 10.098 0 0 0 5.56 1.69c2.63 0 5.2-1.07 7.06-2.931.46-.46.88-.979 1.25-1.52.36-.55.67-1.13.92-1.73.25-.6.44-1.229.57-1.87.13-.649.19-1.3.19-1.96 0-.649-.06-1.3-.19-1.949zM468.719 304.236h-49.214c-5.523 0-10 4.478-10 10s4.477 10 10 10h49.214c5.523 0 10-4.478 10-10s-4.477-10-10-10zM164.871 378.751H11.181c-5.523 0-10 4.478-10 10v103.002c0 5.522 4.477 10 10 10h153.69c5.523 0 10-4.478 10-10V388.751c0-5.522-4.477-10-10-10zm-10 103.002H21.181v-83.002h133.69v83.002zM502.002 378.751H199.728c-5.523 0-10 4.478-10 10v103.002c0 5.522 4.477 10 10 10h302.274c5.523 0 10-4.478 10-10V388.751c0-5.522-4.477-10-10-10zm-10 103.002H209.728v-83.002h282.274v83.002z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path>
                                                <path d="M255.281 438.302a10.122 10.122 0 0 0-1.49-3.599 9.533 9.533 0 0 0-1.24-1.521 9.57 9.57 0 0 0-1.52-1.24 9.937 9.937 0 0 0-1.73-.92c-.6-.25-1.23-.45-1.87-.58-1.29-.25-2.62-.25-3.91 0a10.217 10.217 0 0 0-3.59 1.5c-.55.36-1.06.78-1.52 1.24a9.86 9.86 0 0 0-2.17 3.25 9.84 9.84 0 0 0-.76 3.82c0 .649.06 1.31.19 1.95.13.639.32 1.269.57 1.879.25.6.56 1.18.92 1.72.37.55.79 1.06 1.25 1.52a10.077 10.077 0 0 0 7.07 2.931c.65 0 1.31-.061 1.95-.19.64-.13 1.27-.33 1.87-.58.61-.25 1.19-.55 1.73-.92a9.462 9.462 0 0 0 1.52-1.24c.46-.46.88-.97 1.24-1.52.36-.54.67-1.12.92-1.72.25-.61.44-1.24.57-1.88.13-.641.2-1.301.2-1.95 0-.65-.07-1.311-.2-1.95zM451.319 430.252h-167.93c-5.523 0-10 4.478-10 10s4.477 10 10 10h167.93c5.523 0 10-4.478 10-10s-4.477-10-10-10z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ss-inner-content">
                                        <h4 class="ss-cont-title mb-3">UI/UX Design</h4>
                                        <p class="ss-inner-content mb-4">I throw myself down among the tall grass by the stream as I lie close to the earth.</p>
                                        <i class="ri-arrow-right-line arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="text-decoration-none">
                            <div class="ss-services h-100" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                <div class="ss-inner mt-4">
                                    <div class="ss-inner-icon w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                    </clipPath>
                                                </defs>
                                                <path d="m0 0 27.412 15.826m-132.771-76.655 27.406 15.823m-54.869-215.054v150.876m159.63-275.662-131.698 76.035m319.365.636L81.704-384.83m159.6 275.646V-260.06M82.173 15.19l131.698-76.035" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 269.011 95.088)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 442.001)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 9.999)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(68.936 334)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(68.936 118)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c16.523 0 30 13.477 30 30S16.523 60 0 60s-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(443.063 334)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c16.523 0 30 13.477 30 30S16.523 60 0 60s-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(443.063 118)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0 120-69.281v-138.564L0-277.126l-120 69.281v138.564Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 394.563)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0-118.576-68.459-116.429 67.22" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(374.575 324.459)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0v-133.875" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 256)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0 114.669 66.204" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(198.665 292.18)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0 35.662 20.589" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(300.834 193.324)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h.007" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.613;stroke-dasharray:none;stroke-opacity:1" transform="translate(162.777 418.183)" fill="none" stroke="#ff014f" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2.613" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                </g>
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg2" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                    </clipPath>
                                                </defs>
                                                <path d="m0 0 27.412 15.826m-132.771-76.655 27.406 15.823m-54.869-215.054v150.876m159.63-275.662-131.698 76.035m319.365.636L81.704-384.83m159.6 275.646V-260.06M82.173 15.19l131.698-76.035" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="matrix(1.33333 0 0 -1.33333 269.011 95.088)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 442.001)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 9.999)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(68.936 334)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c16.524 0 30 13.477 30 30S16.524 60 0 60c-16.523 0-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(68.936 118)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c16.523 0 30 13.477 30 30S16.523 60 0 60s-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(443.063 334)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c16.523 0 30 13.477 30 30S16.523 60 0 60s-30-13.477-30-30S-16.523 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(443.063 118)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0 120-69.281v-138.564L0-277.126l-120 69.281v138.564Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 394.563)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0-118.576-68.459-116.429 67.22" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(374.575 324.459)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0v-133.875" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 256)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0 114.669 66.204" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(198.665 292.18)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0 35.662 20.589" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(300.834 193.324)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h.007" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.613;stroke-dasharray:none;stroke-opacity:1" transform="translate(162.777 418.183)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2.613" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ss-inner-content">
                                        <h4 class="ss-cont-title mb-3">Product Development</h4>
                                        <p class="ss-inner-content mb-4">I throw myself down among the tall grass by the stream as I lie close to the earth.</p>
                                        <i class="ri-arrow-right-line arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="text-decoration-none">
                            <div class="ss-services h-100" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                <div class="ss-inner mt-4">
                                    <div class="ss-inner-icon w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <path d="M189.633 457.434a10.028 10.028 0 0 0-7.059 2.925c-1.855 1.856-2.922 4.43-2.922 7.055s1.067 5.2 2.922 7.055a10.015 10.015 0 0 0 7.059 2.926c2.62 0 5.199-1.06 7.054-2.926 1.856-1.856 2.926-4.43 2.926-7.055s-1.07-5.2-2.925-7.055a10.046 10.046 0 0 0-7.055-2.925zM109.785 115.773c-16.508 0-29.941 13.434-29.941 29.942v31.937c0 16.508 13.433 29.942 29.941 29.942h31.938c16.511 0 29.941-13.434 29.941-29.942v-31.937c0-16.508-13.43-29.942-29.941-29.942zm41.918 29.942v31.937c0 5.504-4.476 9.98-9.98 9.98h-31.938c-5.504 0-9.98-4.476-9.98-9.98v-31.937c0-5.504 4.476-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98zM141.723 235.54h-31.938c-16.508 0-29.941 13.433-29.941 29.94v31.938c0 16.508 13.433 29.941 29.941 29.941h31.938c16.511 0 29.941-13.433 29.941-29.941V265.48c0-16.507-13.43-29.94-29.941-29.94zm9.98 61.878c0 5.504-4.476 9.98-9.98 9.98h-31.938c-5.504 0-9.98-4.476-9.98-9.98V265.48c0-5.503 4.476-9.98 9.98-9.98h31.938c5.504 0 9.98 4.477 9.98 9.98zm0 0" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                <path d="m478.922 497.246-64.945-119.273a10.049 10.049 0 0 0-1.48-2.047L265.901 219.348c-.078-.078-.152-.157-.23-.235-8.203-8.203-8.203-21.554 0-29.758a20.892 20.892 0 0 1 14.879-6.164 20.908 20.908 0 0 1 14.883 6.164c.199.2.41.395.629.575l131.996 111.144 33.375 39.848c3.535 4.223 9.832 4.781 14.058 1.242 4.227-3.539 4.781-9.836 1.242-14.059l-33.933-40.515a10.36 10.36 0 0 0-1.223-1.227l-62.32-52.476V29.94C379.258 13.434 365.824 0 349.316 0H29.941C13.434 0 0 13.434 0 29.941V481.06C0 497.566 13.434 511 29.941 511h319.375c16.508 0 29.942-13.434 29.942-29.941v-111.43l17.797 19.008 64.336 118.152a9.968 9.968 0 0 0 13.535 3.992c4.844-2.633 6.633-8.695 3.996-13.535zM279.469 265.48v31.938c0 5.504-4.477 9.98-9.98 9.98H237.55c-5.5 0-9.98-4.476-9.98-9.98V265.48c0-5.503 4.48-9.98 9.98-9.98h31.937c1.246 0 2.43.238 3.532.656l6.02 6.43a9.98 9.98 0 0 1 .429 2.894zm-27.91-90.242a40.736 40.736 0 0 0-8.489 12.395h-5.52c-5.5 0-9.98-4.477-9.98-9.98v-31.938c0-5.504 4.48-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98v17.558c-10.136.266-20.19 4.247-27.91 11.965zm107.738 305.82c0 5.505-4.477 9.981-9.98 9.981H29.94c-5.503 0-9.98-4.476-9.98-9.98V29.94c0-5.503 4.477-9.98 9.98-9.98h319.375c5.504 0 9.98 4.477 9.98 9.98v187.141l-20.16-16.977c.134-.644.2-1.308.2-1.992V69.781c0-5.511-4.469-9.98-9.98-9.98H229.55c-5.512 0-9.98 4.469-9.98 9.98s4.468 9.98 9.98 9.98h89.824V183.47l-10.152-8.551a40.794 40.794 0 0 0-9.793-7.086v-22.117c0-16.508-13.43-29.942-29.942-29.942h-31.937c-16.508 0-29.942 13.434-29.942 29.942v31.937c0 16.508 13.434 29.942 29.942 29.942h2.16c.758 9.297 4.66 18.386 11.723 25.511l2.28 2.434h-16.163c-16.508 0-29.942 13.434-29.942 29.941v31.938c0 16.508 13.434 29.941 29.942 29.941h31.937c16.512 0 29.942-13.433 29.942-29.941v-13.05l20.015 21.378c-.043.375-.07.758-.07 1.145v120.273h-21.664a29.762 29.762 0 0 0 1.719-9.98v-31.938c0-16.508-13.434-29.941-29.942-29.941h-31.937c-16.512 0-29.942 13.433-29.942 29.941v31.938c0 3.5.61 6.855 1.715 9.98h-39.379a29.762 29.762 0 0 0 1.72-9.98v-31.938c0-16.508-13.435-29.941-29.942-29.941h-31.938c-16.512 0-29.941 13.433-29.941 29.941v31.938c0 3.5.61 6.855 1.715 9.98H59.883V79.762h89.824c5.512 0 9.98-4.469 9.98-9.98s-4.468-9.981-9.98-9.981H49.902c-5.511 0-9.98 4.469-9.98 9.98v367.364c0 5.511 4.469 9.98 9.98 9.98h279.453c5.512 0 9.98-4.469 9.98-9.98V326.992l19.962 21.32zM227.57 417.185v-31.938c0-5.504 4.48-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98v31.938c0 5.503-4.476 9.98-9.98 9.98h-31.937c-5.5 0-9.98-4.477-9.98-9.98zm-127.765 0v-31.938c0-5.504 4.476-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98v31.938c0 5.503-4.476 9.98-9.98 9.98h-31.938c-5.5 0-9.98-4.477-9.98-9.98zm0 0" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                <path d="M189.633 80.281c2.62 0 5.199-1.066 7.054-2.922 1.856-1.859 2.926-4.433 2.926-7.058s-1.07-5.2-2.925-7.055a10.063 10.063 0 0 0-7.055-2.926c-2.637 0-5.203 1.07-7.059 2.926-1.855 1.856-2.922 4.43-2.922 7.055s1.067 5.199 2.922 7.058a10.068 10.068 0 0 0 7.059 2.922zm0 0" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg2" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <path d="M189.633 457.434a10.028 10.028 0 0 0-7.059 2.925c-1.855 1.856-2.922 4.43-2.922 7.055s1.067 5.2 2.922 7.055a10.015 10.015 0 0 0 7.059 2.926c2.62 0 5.199-1.06 7.054-2.926 1.856-1.856 2.926-4.43 2.926-7.055s-1.07-5.2-2.925-7.055a10.046 10.046 0 0 0-7.055-2.925zM109.785 115.773c-16.508 0-29.941 13.434-29.941 29.942v31.937c0 16.508 13.433 29.942 29.941 29.942h31.938c16.511 0 29.941-13.434 29.941-29.942v-31.937c0-16.508-13.43-29.942-29.941-29.942zm41.918 29.942v31.937c0 5.504-4.476 9.98-9.98 9.98h-31.938c-5.504 0-9.98-4.476-9.98-9.98v-31.937c0-5.504 4.476-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98zM141.723 235.54h-31.938c-16.508 0-29.941 13.433-29.941 29.94v31.938c0 16.508 13.433 29.941 29.941 29.941h31.938c16.511 0 29.941-13.433 29.941-29.941V265.48c0-16.507-13.43-29.94-29.941-29.94zm9.98 61.878c0 5.504-4.476 9.98-9.98 9.98h-31.938c-5.504 0-9.98-4.476-9.98-9.98V265.48c0-5.503 4.476-9.98 9.98-9.98h31.938c5.504 0 9.98 4.477 9.98 9.98zm0 0" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                <path d="m478.922 497.246-64.945-119.273a10.049 10.049 0 0 0-1.48-2.047L265.901 219.348c-.078-.078-.152-.157-.23-.235-8.203-8.203-8.203-21.554 0-29.758a20.892 20.892 0 0 1 14.879-6.164 20.908 20.908 0 0 1 14.883 6.164c.199.2.41.395.629.575l131.996 111.144 33.375 39.848c3.535 4.223 9.832 4.781 14.058 1.242 4.227-3.539 4.781-9.836 1.242-14.059l-33.933-40.515a10.36 10.36 0 0 0-1.223-1.227l-62.32-52.476V29.94C379.258 13.434 365.824 0 349.316 0H29.941C13.434 0 0 13.434 0 29.941V481.06C0 497.566 13.434 511 29.941 511h319.375c16.508 0 29.942-13.434 29.942-29.941v-111.43l17.797 19.008 64.336 118.152a9.968 9.968 0 0 0 13.535 3.992c4.844-2.633 6.633-8.695 3.996-13.535zM279.469 265.48v31.938c0 5.504-4.477 9.98-9.98 9.98H237.55c-5.5 0-9.98-4.476-9.98-9.98V265.48c0-5.503 4.48-9.98 9.98-9.98h31.937c1.246 0 2.43.238 3.532.656l6.02 6.43a9.98 9.98 0 0 1 .429 2.894zm-27.91-90.242a40.736 40.736 0 0 0-8.489 12.395h-5.52c-5.5 0-9.98-4.477-9.98-9.98v-31.938c0-5.504 4.48-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98v17.558c-10.136.266-20.19 4.247-27.91 11.965zm107.738 305.82c0 5.505-4.477 9.981-9.98 9.981H29.94c-5.503 0-9.98-4.476-9.98-9.98V29.94c0-5.503 4.477-9.98 9.98-9.98h319.375c5.504 0 9.98 4.477 9.98 9.98v187.141l-20.16-16.977c.134-.644.2-1.308.2-1.992V69.781c0-5.511-4.469-9.98-9.98-9.98H229.55c-5.512 0-9.98 4.469-9.98 9.98s4.468 9.98 9.98 9.98h89.824V183.47l-10.152-8.551a40.794 40.794 0 0 0-9.793-7.086v-22.117c0-16.508-13.43-29.942-29.942-29.942h-31.937c-16.508 0-29.942 13.434-29.942 29.942v31.937c0 16.508 13.434 29.942 29.942 29.942h2.16c.758 9.297 4.66 18.386 11.723 25.511l2.28 2.434h-16.163c-16.508 0-29.942 13.434-29.942 29.941v31.938c0 16.508 13.434 29.941 29.942 29.941h31.937c16.512 0 29.942-13.433 29.942-29.941v-13.05l20.015 21.378c-.043.375-.07.758-.07 1.145v120.273h-21.664a29.762 29.762 0 0 0 1.719-9.98v-31.938c0-16.508-13.434-29.941-29.942-29.941h-31.937c-16.512 0-29.942 13.433-29.942 29.941v31.938c0 3.5.61 6.855 1.715 9.98h-39.379a29.762 29.762 0 0 0 1.72-9.98v-31.938c0-16.508-13.435-29.941-29.942-29.941h-31.938c-16.512 0-29.941 13.433-29.941 29.941v31.938c0 3.5.61 6.855 1.715 9.98H59.883V79.762h89.824c5.512 0 9.98-4.469 9.98-9.98s-4.468-9.981-9.98-9.981H49.902c-5.511 0-9.98 4.469-9.98 9.98v367.364c0 5.511 4.469 9.98 9.98 9.98h279.453c5.512 0 9.98-4.469 9.98-9.98V326.992l19.962 21.32zM227.57 417.185v-31.938c0-5.504 4.48-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98v31.938c0 5.503-4.476 9.98-9.98 9.98h-31.937c-5.5 0-9.98-4.477-9.98-9.98zm-127.765 0v-31.938c0-5.504 4.476-9.98 9.98-9.98h31.938c5.504 0 9.98 4.476 9.98 9.98v31.938c0 5.503-4.476 9.98-9.98 9.98h-31.938c-5.5 0-9.98-4.477-9.98-9.98zm0 0" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                <path d="M189.633 80.281c2.62 0 5.199-1.066 7.054-2.922 1.856-1.859 2.926-4.433 2.926-7.058s-1.07-5.2-2.925-7.055a10.063 10.063 0 0 0-7.055-2.926c-2.637 0-5.203 1.07-7.059 2.926-1.855 1.856-2.922 4.43-2.922 7.055s1.067 5.199 2.922 7.058a10.068 10.068 0 0 0 7.059 2.922zm0 0" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ss-inner-content">
                                        <h4 class="ss-cont-title mb-3">Mobile App</h4>
                                        <p class="ss-inner-content mb-4">I throw myself down among the tall grass by the stream as I lie close to the earth.</p>
                                        <i class="ri-arrow-right-line arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="text-decoration-none">
                            <div class="ss-services h-100" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                <div class="ss-inner mt-4">
                                    <div class="ss-inner-icon w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <path d="M184.254 257c-.499 0-.99.037-1.469.107a10.16 10.16 0 0 0-1.469-.107h-9.562c-7.168 0-13-5.832-13-13s5.832-13 13-13h35.5c5.523 0 10-4.477 10-10s-4.477-10-10-10h-35.5c-18.196 0-33 14.804-33 33s14.804 33 33 33h9.562c.499 0 .99-.037 1.469-.107.479.07.97.107 1.469.107 7.168 0 13 5.832 13 13s-5.832 13-13 13h-31.5c-5.523 0-10 4.477-10 10s4.477 10 10 10h31.5c18.197 0 33-14.804 33-33s-14.804-33-33-33zM96.752 212.25h-35.5c-5.523 0-10 4.477-10 10v89.5c0 5.523 4.477 10 10 10s10-4.477 10-10v-33.5h25.5c18.196 0 33-14.804 33-33 0-18.196-14.804-33-33-33zm0 46h-25.5v-26h25.5c7.168 0 13 5.832 13 13s-5.832 13-13 13zM264.002 212.25h-20c-5.523 0-10 4.477-10 10v89.5c0 5.523 4.477 10 10 10h20c30.189 0 54.75-24.561 54.75-54.75 0-30.19-24.561-54.75-54.75-54.75zm0 89.5h-10v-69.5h10c19.161 0 34.75 15.589 34.75 34.75s-15.589 34.75-34.75 34.75z" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                <path d="M505.851 149.293 407.118 4.37A9.998 9.998 0 0 0 398.854 0H171.188c-13.013 0-23.601 10.747-23.601 23.956V149H30.413c-14.336 0-26 11.664-26 26v184c0 14.336 11.663 26 25.999 26h117.175v103.043c0 13.21 10.587 23.957 23.601 23.957h312.799c13.013 0 23.6-10.747 23.6-23.957v-333.12c0-2.008-.605-3.969-1.736-5.63zM407.587 40.58l70.939 104.126h-70.939V40.58zM30.413 365c-3.252 0-6-2.748-6-6V175c0-3.253 2.748-6 6-6h309.179c3.252 0 6 2.747 6 6v184c0 3.252-2.747 6-6 6H30.413zm457.174 123.044c0 2.144-1.649 3.956-3.6 3.956h-22.741v-52.291c0-5.523-4.477-10-10-10s-10 4.477-10 10V492H171.188c-1.952 0-3.601-1.812-3.601-3.957V385h172.004c14.337 0 26-11.664 26-26V175c0-14.336-11.663-26-26-26H167.587V23.956c0-2.144 1.649-3.956 3.601-3.956h216.399v130.601c0 7.777 6.281 14.105 14 14.105h86v323.338z" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                <path d="M451.246 391.57c-5.523 0-10 4.477-10 10v.612c0 5.523 4.477 10 10 10s10-4.477 10-10v-.612c0-5.523-4.477-10-10-10z" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg2" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                            <g>
                                                <path d="M184.254 257c-.499 0-.99.037-1.469.107a10.16 10.16 0 0 0-1.469-.107h-9.562c-7.168 0-13-5.832-13-13s5.832-13 13-13h35.5c5.523 0 10-4.477 10-10s-4.477-10-10-10h-35.5c-18.196 0-33 14.804-33 33s14.804 33 33 33h9.562c.499 0 .99-.037 1.469-.107.479.07.97.107 1.469.107 7.168 0 13 5.832 13 13s-5.832 13-13 13h-31.5c-5.523 0-10 4.477-10 10s4.477 10 10 10h31.5c18.197 0 33-14.804 33-33s-14.804-33-33-33zM96.752 212.25h-35.5c-5.523 0-10 4.477-10 10v89.5c0 5.523 4.477 10 10 10s10-4.477 10-10v-33.5h25.5c18.196 0 33-14.804 33-33 0-18.196-14.804-33-33-33zm0 46h-25.5v-26h25.5c7.168 0 13 5.832 13 13s-5.832 13-13 13zM264.002 212.25h-20c-5.523 0-10 4.477-10 10v89.5c0 5.523 4.477 10 10 10h20c30.189 0 54.75-24.561 54.75-54.75 0-30.19-24.561-54.75-54.75-54.75zm0 89.5h-10v-69.5h10c19.161 0 34.75 15.589 34.75 34.75s-15.589 34.75-34.75 34.75z" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                <path d="M505.851 149.293 407.118 4.37A9.998 9.998 0 0 0 398.854 0H171.188c-13.013 0-23.601 10.747-23.601 23.956V149H30.413c-14.336 0-26 11.664-26 26v184c0 14.336 11.663 26 25.999 26h117.175v103.043c0 13.21 10.587 23.957 23.601 23.957h312.799c13.013 0 23.6-10.747 23.6-23.957v-333.12c0-2.008-.605-3.969-1.736-5.63zM407.587 40.58l70.939 104.126h-70.939V40.58zM30.413 365c-3.252 0-6-2.748-6-6V175c0-3.253 2.748-6 6-6h309.179c3.252 0 6 2.747 6 6v184c0 3.252-2.747 6-6 6H30.413zm457.174 123.044c0 2.144-1.649 3.956-3.6 3.956h-22.741v-52.291c0-5.523-4.477-10-10-10s-10 4.477-10 10V492H171.188c-1.952 0-3.601-1.812-3.601-3.957V385h172.004c14.337 0 26-11.664 26-26V175c0-14.336-11.663-26-26-26H167.587V23.956c0-2.144 1.649-3.956 3.601-3.956h216.399v130.601c0 7.777 6.281 14.105 14 14.105h86v323.338z" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                <path d="M451.246 391.57c-5.523 0-10 4.477-10 10v.612c0 5.523 4.477 10 10 10s10-4.477 10-10v-.612c0-5.523-4.477-10-10-10z" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ss-inner-content">
                                        <h4 class="ss-cont-title mb-3">PSD to Html</h4>
                                        <p class="ss-inner-content mb-4">I throw myself down among the tall grass by the stream as I lie close to the earth.</p>
                                        <i class="ri-arrow-right-line arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="text-decoration-none">
                            <div class="ss-services h-100" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                <div class="ss-inner mt-4">
                                    <div class="ss-inner-icon w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ff014f" opacity="1" data-original="#ff014f"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0h455.519" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(10 356.674)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(93.507 399.228)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h89.46c13.067 0 23.754-10.681 23.754-23.741 0-13.061-10.687-23.741-23.754-23.741H0c-13.067 0-23.754 10.68-23.754 23.741C-23.754-10.681-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(299.95 446.71)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(181.209 399.228)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0-20.013-83.747" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(162.416 279.756)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0 28.317 31.788c1.247 1.388 1.247 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(208.507 203.573)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="m0 0-28.317 31.788c-1.248 1.388-1.248 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(96.314 203.573)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c10.941-2.437 21.174-6.743 30.387-12.522l8.192 8.159C43.426.51 51.391.51 56.267-4.363l12.897-12.891c4.875-4.873 4.875-12.834 0-17.679L61-43.12a96.571 96.571 0 0 0 12.473-30.088h11.479c6.889 0 12.529-5.638 12.529-12.494v-18.274c0-6.855-5.64-12.493-12.529-12.493H73.416A96.87 96.87 0 0 0 61-146.387l8.164-8.159c4.875-4.873 4.875-12.834 0-17.679l-12.897-12.919c-4.876-4.873-12.841-4.873-17.688 0l-8.192 8.16A96.692 96.692 0 0 0 .34-189.422v-11.615c0-6.885-5.641-12.523-12.5-12.523h-18.283c-6.861 0-12.501 5.638-12.501 12.523v11.643c-10.772 2.437-20.891 6.715-29.991 12.41l-8.163-8.16c-4.876-4.873-12.84-4.873-17.688 0l-12.925 12.919c-4.848 4.845-4.848 12.806 0 17.679l8.191 8.159a96.251 96.251 0 0 0-12.443 29.918h-11.594c-6.887 0-12.501 5.638-12.501 12.493v18.274c0 6.856 5.614 12.494 12.501 12.494h11.566a96.76 96.76 0 0 0 12.273 29.776l-8.22 8.244c-4.875 4.845-4.875 12.806 0 17.679l12.897 12.891c4.876 4.873 12.841 4.873 17.688 0l8.135-8.103A97.26 97.26 0 0 0-43.284-.17v11.53c0 6.885 5.612 12.523 12.5 12.523h18.255C-5.641 23.883 0 18.245 0 11.36Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(404.519 235.56)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0c28.459 0 51.533-23.062 51.533-51.534 0-28.445-23.074-51.506-51.533-51.506-28.487 0-51.562 23.061-51.562 51.506C-51.562-23.062-28.487 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(383.23 192.241)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h-59.187c-20.464 0-37.246 20.029-37.246 44.479V326.43c0 24.477 16.752 44.479 37.246 44.479H321.84c20.494 0 37.246-20.03 37.246-44.479V107.374M170.529 0H89.375" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(106.433 119.09)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                    <path d="M0 0h.198" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(151.22 119.09)" fill="none" stroke="#ff014f" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ff014f" class=""></path>
                                                </g>
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg2" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0h455.519" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(10 356.674)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(93.507 399.228)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h89.46c13.067 0 23.754-10.681 23.754-23.741 0-13.061-10.687-23.741-23.754-23.741H0c-13.067 0-23.754 10.68-23.754 23.741C-23.754-10.681-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(299.95 446.71)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c13.096 0 23.782 10.652 23.782 23.741S13.096 47.482 0 47.482c-13.067 0-23.754-10.652-23.754-23.741S-13.067 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(181.209 399.228)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0-20.013-83.747" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(162.416 279.756)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0 28.317 31.788c1.247 1.388 1.247 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(208.507 203.573)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="m0 0-28.317 31.788c-1.248 1.388-1.248 3.654 0 5.042L0 68.618" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(96.314 203.573)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c10.941-2.437 21.174-6.743 30.387-12.522l8.192 8.159C43.426.51 51.391.51 56.267-4.363l12.897-12.891c4.875-4.873 4.875-12.834 0-17.679L61-43.12a96.571 96.571 0 0 0 12.473-30.088h11.479c6.889 0 12.529-5.638 12.529-12.494v-18.274c0-6.855-5.64-12.493-12.529-12.493H73.416A96.87 96.87 0 0 0 61-146.387l8.164-8.159c4.875-4.873 4.875-12.834 0-17.679l-12.897-12.919c-4.876-4.873-12.841-4.873-17.688 0l-8.192 8.16A96.692 96.692 0 0 0 .34-189.422v-11.615c0-6.885-5.641-12.523-12.5-12.523h-18.283c-6.861 0-12.501 5.638-12.501 12.523v11.643c-10.772 2.437-20.891 6.715-29.991 12.41l-8.163-8.16c-4.876-4.873-12.84-4.873-17.688 0l-12.925 12.919c-4.848 4.845-4.848 12.806 0 17.679l8.191 8.159a96.251 96.251 0 0 0-12.443 29.918h-11.594c-6.887 0-12.501 5.638-12.501 12.493v18.274c0 6.856 5.614 12.494 12.501 12.494h11.566a96.76 96.76 0 0 0 12.273 29.776l-8.22 8.244c-4.875 4.845-4.875 12.806 0 17.679l12.897 12.891c4.876 4.873 12.841 4.873 17.688 0l8.135-8.103A97.26 97.26 0 0 0-43.284-.17v11.53c0 6.885 5.612 12.523 12.5 12.523h18.255C-5.641 23.883 0 18.245 0 11.36Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(404.519 235.56)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0c28.459 0 51.533-23.062 51.533-51.534 0-28.445-23.074-51.506-51.533-51.506-28.487 0-51.562 23.061-51.562 51.506C-51.562-23.062-28.487 0 0 0Z" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(383.23 192.241)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h-59.187c-20.464 0-37.246 20.029-37.246 44.479V326.43c0 24.477 16.752 44.479 37.246 44.479H321.84c20.494 0 37.246-20.03 37.246-44.479V107.374M170.529 0H89.375" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(106.433 119.09)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                    <path d="M0 0h.198" style="stroke-width:20.176;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(151.22 119.09)" fill="none" stroke="#ffffff" stroke-width="20.176" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#ffffff" class=""></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ss-inner-content">
                                        <h4 class="ss-cont-title mb-3">Web Development</h4>
                                        <p class="ss-inner-content mb-4">I throw myself down among the tall grass by the stream as I lie close to the earth.</p>
                                        <i class="ri-arrow-right-line arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- section three -->
        <section class="ss-section3" id="technology">
            <div class="container">
                <h4 class="ss-subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Technology</h4>
                <h2 class="ss-title text-capitalize mb-5" data-aos="fade-up" data-aos-easing="linear">Techn<span>o</span>logy <span>I </span> Work <span>With </span></h2>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/html5.png" alt="html5" class="img-fluid mb-5 " width="50%">
                                <h4 class="ss-tech-title text-break">HTML 5</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">1</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/css3.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">CSS 3</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">2</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/scss.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">SCSS</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">3</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/bootstrap.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">BOOTSTRAP 5</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">4</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/javascript1.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">JAVASCRIPT</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">5</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/jquery.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">JQUERY</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">6</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/gsap.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">GSAP</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">7</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/github.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">GITHUB</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">8</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/jira.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">JIRA</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">9</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/trello.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">TRELLO</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">10</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/react.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">REACT JS</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">11</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6 col-12">
                        <div class="ss-card h-100 border-0 p-3 position-relative" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                            <div class="ss-card-body h-100 p-3 py-5 d-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/unit_testing.png" alt="html5" class="img-fluid mb-5 ">
                                <h4 class="ss-tech-title text-break">UNIT TESTING</h4>
                            </div>
                            <div class="ss-circle d-flex justify-content-center align-items-center">11</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- section four -->
        <section class="ss-section4" id="resume">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            <div class="circle5"></div>
            <div class="circle6"></div>
            <div class="circle7"></div>
            <div class="circle8"></div>
            <div class="circle9"></div>
            <div class="circle10"></div>
            <div class="container">
                <h4 class="ss-subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">2+ years of Experience</h4>
                <h2 class="ss-title text-capitalize mb-5" data-aos="fade-up" data-aos-easing="linear">My <span>R</span>e<span>s</span>u<span>m</span>e</h2>
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 col-12">
                        <ul class="nav mb-4 custom-nav d-flex justify-content-between align-items-center border-0" id="pills-tab" role="tablist" data-aos="flip-up" data-aos-easing="linear">
                            <li class="nav-item" data-cursor="pointer">
                                <a class="nav-link  custom-navlink active bubble_btn" href="javascript:void()" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" role="tab"><i class="ri-profile-line d-md_block"></i><span class="d-lg_none"> Education </span></a>
                            </li>
                            <li class="nav-item" data-cursor="pointer">
                                <a class="nav-link custom-navlink  bubble_btn" href="javascript:void()" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" role="tab"><i class="ri-briefcase-4-line d-md_block"></i><span class="d-lg_none"> Experience </span></a>
                            </li>

                            <li class="nav-item" data-cursor="pointer">
                                <a class="nav-link custom-navlink  bubble_btn" href="javascript:void()" id="projects-tab" data-bs-toggle="pill" data-bs-target="#projects" role="tab"><i class="ri-pages-line d-md_block"></i><span class="d-lg_none"> Projects </span></a>
                            </li>
                            <li class="nav-item" data-cursor="pointer">
                                <a class="nav-link custom-navlink  bubble_btn" href="javascript:void()" id="rating-company-tab" data-bs-toggle="pill" data-bs-target="#rating-company" role="tab"><i class="ri-code-s-slash-line d-md_block"></i><span class="d-lg_none"> Language Ratings </span></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-education">
                                <h3 class="ss-exp-subtitle text-capitalize" data-aos="fade-up" data-aos-easing="linear">20012 - 2019</h3>
                                <h3 class="ss-exp-title text-capitalize" data-aos="fade-up" data-aos-easing="linear">Education Quality</h3>
                                <div class="experience-list mt-5">
                                    <div class="ss-card-list" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                        <div class="ss-inner">
                                            <div class="d-flex align-items-center ss-inner1 flex-wrap">
                                                <div class="flex-grow-1 mb-4">
                                                    <h4 class="ss-inner-title">Secondary School Leaving Certificate</h4>
                                                    <p class="ss-inner-subtitle mb-0">Jagannathpur High School <span>(2012 - 2013)</span></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h4 class="ss-perc-box d-flex align-items-center justify-content-center">
                                                        <span>60%</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="ss-edu-content mb-0">
                                                    Education should be highly interactive, fostering engagement. Tincidunt dolor aliquam sodales, promoting active learning experiences. Mauris hendrerit ante, enhancing both comprehension and retention.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ss-card-list mt-5" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                        <div class="ss-inner">
                                            <div class="d-flex align-items-center ss-inner1 flex-wrap">
                                                <div class="flex-grow-1 mb-4">
                                                    <h4 class="ss-inner-title">Higher Secondary School Certificate</h4>
                                                    <p class="ss-inner-subtitle mb-0">Jagannathpur High School <span>(2013 - 2015)</span></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h4 class="ss-perc-box d-flex align-items-center justify-content-center">
                                                        <span>50%</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="ss-edu-content mb-0">
                                                    Education should be highly interactive, fostering engagement. Tincidunt dolor aliquam sodales, promoting active learning experiences. Mauris hendrerit ante, enhancing both comprehension and retention.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ss-card-list mt-5" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                        <div class="ss-inner">
                                            <div class="d-flex align-items-center ss-inner1 flex-wrap">
                                                <div class="flex-grow-1 mb-4">
                                                    <h4 class="ss-inner-title">Bachelor of Technology</h4>
                                                    <p class="ss-inner-subtitle mb-0"> Balasore College of Engineering & Technology<span>(2015 - 2019)</span></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h4 class="ss-perc-box d-flex align-items-center justify-content-center">
                                                        <span>7.55</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="ss-edu-content mb-0">
                                                    Education should be highly interactive, fostering engagement. Tincidunt dolor aliquam sodales, promoting active learning experiences. Mauris hendrerit ante, enhancing both comprehension and retention.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-experience">
                                <h3 class="ss-exp-subtitle text-capitalize">20019 - 2023</h3>
                                <h3 class="ss-exp-title text-capitalize">Experience Quality</h3>
                                <div class="experience-list mt-5">
                                    <div class="ss-card-list mt-5">
                                        <div class="ss-inner">
                                            <div class="d-flex align-items-center ss-inner1 flex-wrap">
                                                <div class="flex-grow-1 mb-4">
                                                    <h4 class="ss-inner-title">Software Developer <span>(Aug,2023 - Continuing)</span></h4>
                                                    <p class="ss-inner-subtitle mb-0 d-flex align-items-center flex-wrap">Swipewire Technologies
                                                        <span class="d-flex align-items-center gap-2 ms-3">
                                                            <a href="https://swipe-wire.com/" class="text-decoration-none avatar-xss rounded-circle social_earth_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-earth-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="#" class="text-decoration-none avatar-xss rounded-circle social_insta_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-instagram-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="https://www.linkedin.com/company/swipewire-technologies-pvt-ltd/mycompany/" class="text-decoration-none avatar-xss rounded-circle social_linked_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-linkedin-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="#" class="text-decoration-none avatar-xss rounded-circle social_facebook_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-facebook-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h4 class="ss-perc-box d-flex align-items-center justify-content-center">
                                                        <span>Continuing</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="ss-edu-content mb-0">
                                                    Swipewire Technologies, established in 2020, operates as a product-based company. During my tenure as a software developer, I accomplished the successful completion of FIve projects.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ss-card-list mt-5">
                                        <div class="ss-inner">
                                            <div class="d-flex align-items-center ss-inner1 flex-wrap">
                                                <div class="flex-grow-1 mb-4">
                                                    <h4 class="ss-inner-title">UI Developer <span>(Apr,2022 - Jul,2023)</span></h4>
                                                    <p class="ss-inner-subtitle mb-0 d-flex align-items-center flex-wrap">Quacklabs Technologies
                                                        <span class="d-flex align-items-center gap-2 ms-3">
                                                            <a href="https://www.quacklabs.in/" class="text-decoration-none avatar-xss rounded-circle social_earth_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-earth-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="#" class="text-decoration-none avatar-xss rounded-circle social_insta_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-instagram-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="https://www.linkedin.com/company/quacklabs/?originalSubdomain=in" class="text-decoration-none avatar-xss rounded-circle social_linked_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-linkedin-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="https://www.facebook.com/quacklabs" class="text-decoration-none avatar-xss rounded-circle social_facebook_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-facebook-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h4 class="ss-perc-box d-flex align-items-center justify-content-center">
                                                        <span>1.3 Years</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="ss-edu-content mb-0">
                                                    Quacklabs Technologies, founded in 2014, functions as a product-oriented company. During my tenure as a UI developer, I accomplished the successful completion of Three projects.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ss-card-list mt-5">
                                        <div class="ss-inner">
                                            <div class="d-flex align-items-center ss-inner1 flex-wrap">
                                                <div class="flex-grow-1 mb-4">
                                                    <h4 class="ss-inner-title">UI Designer <span>(2019 - 2020)</span></h4>
                                                    <p class="ss-inner-subtitle mb-0 d-flex align-items-center flex-wrap">Shootdart Solutions Pvt Ltd
                                                        <span class="d-flex align-items-center gap-2 ms-3">
                                                            <a href="https://www.shootdartsolutions.com/" class="text-decoration-none avatar-xss rounded-circle social_earth_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-earth-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="https://www.instagram.com/shootdartsolutions/" class="text-decoration-none avatar-xss rounded-circle social_insta_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-instagram-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="https://www.linkedin.com/company/shootdart-solutions/?originalSubdomain=in" class="text-decoration-none avatar-xss rounded-circle social_linked_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-linkedin-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                            <a href="https://www.facebook.com/shootdartsolutions/" class="text-decoration-none avatar-xss rounded-circle social_facebook_icons" data-cursor="pointer">
                                                                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                                                                    <i class="ri-facebook-line social_icons"></i>
                                                                </span>
                                                            </a>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h4 class="ss-perc-box d-flex align-items-center justify-content-center">
                                                        <span>1 Years</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="ss-edu-content mb-0">
                                                    Shootdart Solutions, established in 2018, operates as an advertising services company. While serving as a UI Designer, I contributed during my internship.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="projects">
                                <h3 class="ss-exp-subtitle text-capitalize">2019 - 2023</h3>
                                <h3 class="ss-exp-title text-capitalize">Projects Quality</h3>

                                <div class="project-list mt-5">
                                    <h3 class="project-heading position-relative mb-4">Swipewire Projects <span class="ms-2"><i class="ri-share-forward-line align-middle"></i></span></h3>
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="http://3.109.154.13:8002/" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4 flex-wrap">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="#" class="text-decoration-none text-capitalize">Cashona Landing Page <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="https://mylearner.in/" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4 flex-wrap">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="https://mylearner.in/" class="text-decoration-none text-capitalize">Techifi - Infix <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="https://winclash.com/" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4 flex-wrap">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="https://winclash.com/" class="text-decoration-none text-capitalize">JeetWin - RoyalJeet <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="https://driftdev.betnowck.com/" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4 flex-wrap">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="https://driftdev.betnowck.com/" class="text-decoration-none text-capitalize">DriftAI <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-list mt-5">
                                    <h3 class="project-heading position-relative mb-4">Quacklabs Projects <span class="ms-2"><i class="ri-share-forward-line align-middle"></i></span></h3>
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="#" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="https://www.quacklabs.in/" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="https://www.quacklabs.in/" class="text-decoration-none text-capitalize">Quacklabs Website <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="#" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="#" class="text-decoration-none text-capitalize">The services provide for design <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="#" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4">
                                                        <h3 class="ss-title text-uppercase mb-0">Development</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="#" class="text-decoration-none text-capitalize">The services provide for design <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-list mt-5">
                                    <h3 class="project-heading position-relative mb-4">Shootdart Solutions Projects <span class="ms-2"><i class="ri-share-forward-line align-middle"></i></span></h3>
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
                                            <div class="ss-project-card h-100">
                                                <div class="ss-project-inner-card">
                                                    <div class="ss-img-section">
                                                        <a href="https://www.shootdartsolutions.com/" class="text-decoration-none ss-img">
                                                            <img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4">
                                                        <h3 class="ss-title text-uppercase mb-0">Designer</h3>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="heart_icon">
                                                                <a href="#" class="text-decoration-none">
                                                                    <i class="ri-heart-line align-middle"></i>
                                                                </a>
                                                            </div>
                                                            <p class="ss-text mb-0">100</p>
                                                        </div>
                                                    </div>
                                                    <div class="ss-title2">
                                                        <a href="https://www.shootdartsolutions.com/" class="text-decoration-none text-capitalize"> Shootdartsolutions <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-3 col-xl-3 col-md-4 col-sm-4 col-12">
 										<div class="ss-project-card h-100">
 											<div class="ss-project-inner-card">
 												<div class="ss-img-section">
 													<a href="#" class="text-decoration-none ss-img">
 														<img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
 													</a>
 												</div>
 												<div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4">
 													<h3 class="ss-title text-uppercase mb-0">Development</h3>
 													<div class="d-flex align-items-center gap-2">
 														<div class="heart_icon">
 															<a href="#" class="text-decoration-none">
 																<i class="ri-heart-line align-middle"></i>
 															</a>
 														</div>
 														<p class="ss-text mb-0">100</p>
 													</div>
 												</div>
 												<div class="ss-title2">
 													<a href="#" class="text-decoration-none text-capitalize">The services provide for design <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
 												</div>
 											</div>
 										</div>
 									</div>
 									<div class="col-lg-3 col-xl-3 col-md-4 col-sm-4 col-12">
 										<div class="ss-project-card h-100">
 											<div class="ss-project-inner-card">
 												<div class="ss-img-section">
 													<a href="#" class="text-decoration-none ss-img">
 														<img src="assets/images/portfolio-01.jpg" alt="projects" class="img-fluid">
 													</a>
 												</div>
 												<div class="ss-content mt-4 d-flex align-items-center justify-content-between mb-4">
 													<h3 class="ss-title text-uppercase mb-0">Development</h3>
 													<div class="d-flex align-items-center gap-2">
 														<div class="heart_icon">
 															<a href="#" class="text-decoration-none">
 																<i class="ri-heart-line align-middle"></i>
 															</a>
 														</div>
 														<p class="ss-text mb-0">100</p>
 													</div>
 												</div>
 												<div class="ss-title2">
 													<a href="#" class="text-decoration-none text-capitalize">The services provide for design <span><i class="ri-arrow-right-up-line align-bottom"></i></span></a>
 												</div>
 											</div>
 										</div>
 									</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rating-company">
                                <h3 class="ss-exp-subtitle text-capitalize">2019 - 2023</h3>
                                <h3 class="ss-exp-title text-capitalize">Ratings Quality</h3>
                                <div class="rating-list">
                                    <div class="row g-3">
                                        <div class="col-lg-6 col-xl-4 col-sm-6 col-md-6 col-12">
                                            <div class="ss-rating-card mt-2">
                                                <!-- <h4 class="ss-rating-title mb-4">Swipewire Technologies</h4> -->
                                                <!-- first section  -->
                                                <div class="ss-rating-line">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">HTML 5 <small class="text-muted">(100%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> </div>
                                                    </div>
                                                </div>
                                                <!-- second section  -->
                                                <div class="ss-rating-line mt-4">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">CSS 3 <small class="text-muted">(100%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4 col-sm-6 col-md-6 col-12">
                                            <div class="ss-rating-card mt-2">
                                                <!-- <h4 class="ss-rating-title mb-4">Quacklabs Technologies</h4> -->
                                                <!-- first section  -->
                                                <div class="ss-rating-line">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">SASS <small class="text-muted">(96%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 96%;"> </div>
                                                    </div>
                                                </div>
                                                <!-- second section  -->
                                                <div class="ss-rating-line mt-4">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">BOOTSTRAP 5 <small class="text-muted">(100%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4 col-sm-6 col-md-6 col-12">
                                            <div class="ss-rating-card mt-2">
                                                <!-- <h4 class="ss-rating-title mb-4">Shootdart Solution</h4> -->
                                                <!-- first section  -->
                                                <div class="ss-rating-line">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">JQUERY <small class="text-muted">(90%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-line text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> </div>
                                                    </div>
                                                </div>
                                                <!-- second section  -->
                                                <div class="ss-rating-line mt-4">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">JAVASCRIPT <small class="text-muted">(60%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-line text-muted"></i>
                                                                <i class="ri-star-line text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4 col-sm-6 col-md-6 col-12">
                                            <div class="ss-rating-card mt-2">
                                                <!-- first section  -->
                                                <div class="ss-rating-line">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">GITHUB <small class="text-muted">(100%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-line text-warning"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> </div>
                                                    </div>
                                                </div>
                                                <!-- second section  -->
                                                <div class="ss-rating-line mt-4">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="flex-grow-1">
                                                            <h4 class="ss-ratings-sub-title mb-0" data-cursor="pointer">GSAP <small class="text-muted">(70%)</small></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="rating-box d-flex align-items-center gap-1 py-1 px-2" data-cursor="pointer">
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-line text-muted"></i>
                                                                <i class="ri-star-line text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress ss-progress mt-2" data-cursor="pointer">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- section five  -->
        <section class="ss-section5" id="contact">
            <div class="container">
                <h4 class="ss-subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Contact</h4>
                <h2 class="ss-title text-capitalize mb-5" data-aos="fade-up" data-aos-easing="linear">Con<span>t</span>act <span>W</span>ith M<span>e</span></h2>
                <div class="row g-5">
                    <div class="col-lg-5 col-xl-5 col-sm-6 col-md-6 col-12">
                        <div class="ss-contact-area-form h-100 w-100" data-aos="flip-down" data-aos-easing="linear">
                            <div class="ss-thumbnail mb-3">
                                <img src="assets/images/contact.png" alt="contact img" class="img-fluid" data-aos="fade-up" data-aos-easing="linear">
                            </div>
                            <div class="ss-contact-title-area">
                                <h4 class="ss-title" data-aos="fade-up" data-aos-easing="linear">Saroj <span>Ku.</span> Swain</h4>
                                <p class="mb-4 ss-sub-title" data-aos="fade-up" data-aos-easing="linear">Software Developer</p>
                                <p class="mb-4 ss-sub-title" data-aos="fade-up" data-aos-easing="linear">I am available for freelance work. Connect with me via and call in to my account.</p>
                                <div class="d-flex gap-3 mb-3">
                                    <div>
                                        <div class="avatar-xs d-flex align-items-center justify-content-center rounded-circle contact_icon" data-aos="fade-up" data-aos-easing="linear">
                                            <i class="ri-phone-line text-light"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 contact_title" data-aos="fade-up" data-aos-easing="linear">+91 8917550895</h4>
                                        <span class="text-muted contact_sub_title" data-aos="fade-up" data-aos-easing="linear">Phone Number</span>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 mb-3">
                                    <div>
                                        <div class="avatar-xs d-flex align-items-center justify-content-center rounded-circle contact_icon" data-aos="fade-up" data-aos-easing="linear">
                                            <i class="ri-mail-line text-light"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 contact_title" data-aos="fade-up" data-aos-easing="linear">sarojswain638@gmail.com</h4>
                                        <span class="text-muted contact_sub_title" data-aos="fade-up" data-aos-easing="linear">Email ID</span>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 mb-3">
                                    <div>
                                        <div class="avatar-xs d-flex align-items-center justify-content-center rounded-circle contact_icon" data-aos="fade-up" data-aos-easing="linear">
                                            <i class="ri-map-pin-line text-light"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 contact_title" data-aos="fade-up" data-aos-easing="linear">sarangapur, basudevpur, bhadrak, odisha</h4>
                                        <span class="text-muted contact_sub_title" data-aos="fade-up" data-aos-easing="linear">Address</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span class="ss-social-title text-uppercase" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">Find With Me</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col-6">
                                        <div class="ss-social-share2">
                                            <div class="d-flex align-items-center gap-4 mt-3">
                                                <a href="javascript:void();" class="text-decoration-none ">
                                                    <div class="ss-social2 d-flex align-items-center justify-content-center  bubble_btn" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                                        <i class="ri-facebook-line"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none">
                                                    <div class="ss-social2 d-flex align-items-center justify-content-center bubble_btn" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                                        <i class="ri-instagram-line"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none">
                                                    <div class="ss-social2 d-flex align-items-center justify-content-center bubble_btn" data-cursor="pointer" data-aos="fade-up" data-aos-easing="linear">
                                                        <i class="ri-linkedin-line"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-7 col-sm-6 col-md-6 col-12">
                        <div class="contact-form h-100" data-aos="fade-down" data-aos-easing="linear">
                            <form id="myfrom" class="myfrom">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="ss-name" class="form-label custom_label text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Your Name</label>
                                            <input type="text" class="form-control custom_input" id="fullname" data-aos="fade-up" data-aos-easing="linear">
                                            <small class="error_message ml-1">Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="ss-number" class="form-label custom_label  text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Phone Number</label>
                                            <input type="text" class="form-control custom_input" id="phonenumber" maxlength="10" data-aos="fade-up" data-aos-easing="linear">
                                            <small class="error_message ml-1">Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="ss-number" class="form-label custom_label  text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Your Email</label>
                                            <input type="email" class="form-control custom_input" id="email" data-aos="fade-up" data-aos-easing="linear">
                                            <small class="error_message ml-1">Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="ss-number" class="form-label custom_label  text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Subject</label>
                                            <input type="text" class="form-control custom_input" id="subject" data-aos="fade-up" data-aos-easing="linear">
                                            <small class="error_message ml-1">Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="ss-number" class="form-label custom_label  text-uppercase mb-3" data-aos="fade-up" data-aos-easing="linear">Your Message</label>
                                            <textarea name="" class="form-control custom_textarea" id="message" cols="30" rows="10" data-aos="fade-up" data-aos-easing="linear"></textarea>
                                            <small class="error_message ml-1">Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <button class="btn btn-submit w-100 text-uppercase py-3 border-0 bubble_btn" type="submit" data-aos="fade-up" data-aos-easing="linear">Send Message <i class="ri-arrow-right-line align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "inc/footer.php" ?>
        <!-- <div class="scroll_button"> -->
        <div class="backto-top-button">
            <i class="ri-arrow-up-line"></i>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/word-animate.js"></script>
        <script src="assets/js/tilt.jquery.min.js"></script>

        <!-- <script src="assets/js/jquery.min.js"></script> -->
        <script src="assets/js/gsap.min.js"></script>
        <script src="assets/js/ScrollTrigger.min.js"></script>
        <script src="assets/js/tilt.jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap.popper.min.js"></script>
        <script src="assets/js/aos.js"></script>
    </div>
</body>
<script>
  $("#call_modal").on('click',function(){
    $("#projectModal").modal('show');
  });
</script>

</html>