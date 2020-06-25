<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from templates.aucreative.co/ora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 04:19:06 GMT -->
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ora theme tempalte">
    <meta name="author" content="NDT">
    <meta name="keywords" content="Ora theme template">

    <!-- Title Page-->
    <title>SAHITECH LTD</title>


    <!-- All CSS-->
    <link href="{{ asset('assets/css/compressed.css') }}" rel="stylesheet" media="all">
    
    <!--Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/favicon.html') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-icon.html') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/apple-icon-72x72.html') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/apple-icon-114x114.html') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.0/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->


</head>

<body class="animsition">


    <!-- header-->
    <header class="header header-primary header-fixed js-header-bar d-md-block d-none">
        <div class="container-fluid">
            <div class="section-inner header-bar">
                <div class="header-bar-logo">
                    <a href="#">
                        <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                    </a>
                </div>
                <div class="header-bar-menu">
                    <nav class="navbar-primary">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#intro">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#projects">WORKS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ourteam">OUR TEAM</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#blog">BLOG</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#testimonials">OUR CLIENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <header class="header header-mobile js-header-bar-mobile d-md-none">
        <div class="header-bar">
            <div class="header-bar-logo">
                <a href="#">
                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                </a>
            </div>
            <div class="header-bar-menu">
                <button class="navbar-toggler hamburger" type="button" id="js-header-toggle">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <nav class="navbar-mobile navbar-primary">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#intro">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ourteam">OUR TEAM</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#blog">BLOG</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">OUR CLIENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- end header-->

    <!-- Intro start-->
    <section class="section section-intro js-intro" id="intro" data-intro-layout="fullscreen" data-intro-delay="2000" style="background-color:rgba(0, 0, 0, 0);background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: scroll;background-image: url({{ URL::to('assets/images/intro.jpg') }});background-size: cover;background-origin: padding-box;background-clip: border-box;animation-name: zoomIn;animation-duration: 1.5s;animation-fill-mode: both;animation-delay: 1s;">
        <div class="container">
            <article class="section-inner">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="intro-name">
                            <span class="animated" data-intro-animate="fadeInRight" data-intro-delay="500">Hello Everybody!</span>
                        </h3>
                        <p class="intro-text">
                            <span class="animated" data-intro-delay="1100" data-intro-animate="fadeInDown" style="text-align: justify;">
                            We are one of the fastest flourishing Software company in the world. We provide the best in class and highly efficient applications for Web, Android, and iOS. We also provide after-release services like SEO and digital marketing. We have an immensely devoted team, they are always ready to serve our beloved client. </span>
                        </p>
                        <!-- <img class="animated intro-sign" src="{{ URL::to('assets/images/icons/ic-sign.png') }}" alt="John Smith" data-intro-delay="2000" data-intro-animate="zoomIn"> -->
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Intro end-->

    <!-- section services-->
    <section class="section section-services bg-grey-1 p-t-110 p-b-90" id="services">
        <div class="container">
            <div class="section-inner">
                <h3 class="section-heading m-b-25">Services</h3>
                <div class="row justify-content-center m-b-45">
                    <p class="section-text-introduce col-lg-9" style="text-align: justify;">
                        We not only build the application, but also focus on the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components. We don't stop our service after releasing the application, will continue to serve through search engine optimization and digital marketing to maintain long term relations with our beloved clients.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service">
                            <!-- <a class="card-link-overlay" href="#"></a> -->
                            <figure class="card-figure">
                                <div class="service-icon">
                                    <i class="fa fa-apple"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="service-title">iOS Application Development</h3>
                            </header>
                            <p class="card-text" style="text-align: justify;">iOS is the world's most advanced mobile operating system. It needs the most intellectual development team who can build even more intelligent apps. Merrily, we have skyrocket expectations from our team cause we have a top-notch iOS Team in the industry who can implement any idea you want.</p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service">
                            <!-- <a class="card-link-overlay" href="#"></a> -->
                            <figure class="card-figure">
                                <div class="service-icon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="service-title">Web Application Development</h3>
                            </header>
                            <p class="card-text" style="text-align: justify;">We build websites that you will be proud of! We offer the latest in web technology. Sporadically, an off the shelf product does not fulfill an organization's requirements. Consequently, we also build custom applications cause this is the only viable method of solving a distinctive business problem.</p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service">
                            <!-- <a class="card-link-overlay" href="#"></a> -->
                            <figure class="card-figure">
                                <div class="service-icon">
                                    <i class="fa fa-android"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="service-title">Android Application Development</h3>
                            </header>
                            <p class="card-text" style="text-align: justify;">We build custom Android apps of your choice. Our team is well versed in Android SDK. We have successfully released several customized mobile applications on these platforms which have helped our customers achieve significant cost savings, increase productivity, and enter the fast-growing market of mobile apps.</p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service">
                            <!-- <a class="card-link-overlay" href="#"></a> -->
                            <figure class="card-figure">
                                <div class="service-icon">
                                    <!-- <i class="fa fa-ux"></i> -->
                                    <!-- <i class="fas fa-paint-roller"></i> -->
                                    <svg width="40px" height="40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paint-roller" class="fa svg-inline--fa fa-paint-roller fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M416 128V32c0-17.67-14.33-32-32-32H32C14.33 0 0 14.33 0 32v96c0 17.67 14.33 32 32 32h352c17.67 0 32-14.33 32-32zm32-64v128c0 17.67-14.33 32-32 32H256c-35.35 0-64 28.65-64 64v32c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32v-32h160c53.02 0 96-42.98 96-96v-64c0-35.35-28.65-64-64-64z"></path></svg>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="service-title">UI/UX Design</h3>
                            </header>
                            <p class="card-text" style="text-align: justify;">Design is not just what it looks like and feels like. Design is how it works. We understand the importance of good design in digital success. Our people-first, appealing, and pleasant designs address the needs of modern businesses and enterprises. We offer wide-ranging UI/UX services that include branding, responsive web design, mobile app design, user experience consulting, and promotional designs.</p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service">
                            <a class="card-link-overlay" href="#"></a>
                            <figure class="card-figure">
                                <div class="service-icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="service-title">Search Engine Optimization (SEO)</h3>
                            </header>
                            <p class="card-text" style="text-align: justify;">SEO is vital to ensure your website shows up in online searches. Without effective SEO, prospective customers may never get to see any of your digital marketing efforts. No matter what marketing goals you have for your company, with our highly developed SEO techniques, your company can lend more weight to search results on Google, Bing, and other search engines.</p>
                        </article>
                    </div>
                      <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service">
                            <a class="card-link-overlay" href="#"></a>
                            <figure class="card-figure">
                                <div class="service-icon">
                                    <!-- <i class="fas fa-ad fa-2x"></i> -->
                                    <!-- <i class="fa fa-bullhorn"></i> -->
                                    <!-- <i class="fab fa-adversal"></i>  -->
                                   
                                    <svg width="40px" height="40px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="adversal" class="fa svg-inline--fa fa-adversal fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M482.1 32H28.7C5.8 32 0 37.9 0 60.9v390.2C0 474.4 5.8 480 28.7 480h453.4c24.4 0 29.9-5.2 29.9-29.7V62.2c0-24.6-5.4-30.2-29.9-30.2zM178.4 220.3c-27.5-20.2-72.1-8.7-84.2 23.4-4.3 11.1-9.3 9.5-17.5 8.3-9.7-1.5-17.2-3.2-22.5-5.5-28.8-11.4 8.6-55.3 24.9-64.3 41.1-21.4 83.4-22.2 125.3-4.8 40.9 16.8 34.5 59.2 34.5 128.5 2.7 25.8-4.3 58.3 9.3 88.8 1.9 4.4.4 7.9-2.7 10.7-8.4 6.7-39.3 2.2-46.6-7.4-1.9-2.2-1.8-3.6-3.9-6.2-3.6-3.9-7.3-2.2-11.9 1-57.4 36.4-140.3 21.4-147-43.3-3.1-29.3 12.4-57.1 39.6-71 38.2-19.5 112.2-11.8 114-30.9 1.1-10.2-1.9-20.1-11.3-27.3zm286.7 222c0 15.1-11.1 9.9-17.8 9.9H52.4c-7.4 0-18.2 4.8-17.8-10.7.4-13.9 10.5-9.1 17.1-9.1 132.3-.4 264.5-.4 396.8 0 6.8 0 16.6-4.4 16.6 9.9zm3.8-340.5v291c0 5.7-.7 13.9-8.1 13.9-12.4-.4-27.5 7.1-36.1-5.6-5.8-8.7-7.8-4-12.4-1.2-53.4 29.7-128.1 7.1-144.4-85.2-6.1-33.4-.7-67.1 15.7-100 11.8-23.9 56.9-76.1 136.1-30.5v-71c0-26.2-.1-26.2 26-26.2 3.1 0 6.6.4 9.7 0 10.1-.8 13.6 4.4 13.6 14.3-.1.2-.1.3-.1.5zm-51.5 232.3c-19.5 47.6-72.9 43.3-90 5.2-15.1-33.3-15.5-68.2.4-101.5 16.3-34.1 59.7-35.7 81.5-4.8 20.6 28.8 14.9 84.6 8.1 101.1zm-294.8 35.3c-7.5-1.3-33-3.3-33.7-27.8-.4-13.9 7.8-23 19.8-25.8 24.4-5.9 49.3-9.9 73.7-14.7 8.9-2 7.4 4.4 7.8 9.5 1.4 33-26.1 59.2-67.6 58.8z"></path></svg>
                                </div>

                            </figure>
                            <header class="card-header">
                                <h3 class="service-title">Digital Marketing</h3>
                            </header>
                            <p class="card-text" style="text-align: justify;">Digital marketing benefits businesses of all sizes by giving access to the mass market at an affordable price. Unlike TV or print advertising, it allows truly personalized marketing. But how easily can it be found? Let SahiTech Ltd’s digital marketing team help you develop an online marketing strategy to drive more qualified visitors to your site and convert those visitors into leads and sales.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section services-->

    <!-- section resume-->
    <!-- <section class="section section-resume bg-white p-t-110 p-b-120" id="resume">
        <div class="container">
            <div class="section-inner">
                <h3 class="section-heading m-b-50">Resume</h3>
                <ul class="nav au-nav-tabs" id="resumeTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-expanded="true">EXPERIENCE
                            <div class="triangle-down">
                                <div class="inner"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education">EDUCATION
                            <div class="triangle-down">
                                <div class="inner"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills">SKILLS
                            <div class="triangle-down">
                                <div class="inner"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content au-tab-content" id="resumeTabContent">
                    <div class="tab-pane fade show active" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <article class="card-secondary card-resume">
                                    <figure class="card-figure">
                                        <img class="resume-image img-fluid" src="{{ URL::to('assets/images/resume-ex-01.jpg') }}" alt="Project Manager" />
                                        <a class="bg-overlay" href="#"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="resume-title">
                                            <a href="#">Project Manager</a>
                                        </h3>
                                        <span class="resume-company">Apple Inc</span>
                                        <span class="resume-timeline">SEP 2017 – PRESENT</span>
                                    </header>
                                    <p class="card-text">Nunc tincidunt pellentesque accumsan. Fusce vel lobortis justo, quis sagittis sem. Nam eleifend aliquet malesuada.</p>
                                </article>
                            </div>
                            <div class="col-lg-4">
                                <article class="card-secondary card-resume">
                                    <figure class="card-figure">
                                        <img class="resume-image img-fluid" src="{{ URL::to('assets/images/resume-ex-02.jpg') }}" alt="UI/UX Designer" />
                                        <a class="bg-overlay" href="#"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="resume-title">
                                            <a href="#">UI/UX Designer</a>
                                        </h3>
                                        <span class="resume-company">Google Inc</span>
                                        <span class="resume-timeline">MAY 2015 – AUG 2017</span>
                                    </header>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa quis est hendrerit rutrum. Nunc tincidunt pellentesque</p>
                                </article>
                            </div>
                            <div class="col-lg-4">
                                <article class="card-secondary card-resume">
                                    <figure class="card-figure">
                                        <img class="resume-image img-fluid" src="{{ URL::to('assets/images/resume-ex-03.jpg') }}" alt="Web Development" />
                                        <a class="bg-overlay" href="#"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="resume-title">
                                            <a href="#">Web Development</a>
                                        </h3>
                                        <span class="resume-company">Envato Inc</span>
                                        <span class="resume-timeline">SEP 2013 – MAY 2015</span>
                                    </header>
                                    <p class="card-text">Vestibulum rutrum imperdiet diam et suscipit. Praesent vulputate ex id velit facilisis, dapibus pretium dui posuere. Mauris tempus gravida</p>
                                </article>
                            </div>
                        </div>
                        <div class="row justify-content-center m-t-60">
                            <div class="col-auto">
                                <a class="au-btn au-btn-pill" href="#">DOWNLOAD CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <article class="card-secondary card-resume">
                                    <header class="card-header">
                                        <h3 class="resume-title">
                                            <a href="#">University of Cambridge</a>
                                        </h3>
                                        <span class="resume-company">Specialization Course</span>
                                        <span class="resume-timeline">Sep 2015 – Present</span>
                                    </header>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa quis est hendrerit rutrum. Nunc tincidunt pellentesque accumsan. Fusce vel lobortis justo, quis sagittis sem. Nam eleifend aliquet malesuada.
                                    </p>
                                </article>
                            </div>
                            <div class="col-lg-4">
                                <article class="card-secondary card-resume">
                                    <header class="card-header">
                                        <h3 class="resume-title">
                                            <a href="#">University of Cambridge</a>
                                        </h3>
                                        <span class="resume-company">Specialization Course</span>
                                        <span class="resume-timeline">May 2014 – Aug 2015</span>
                                    </header>
                                    <p class="card-text">Maecenas eget lacinia leo. Curabitur non pretium lectus. Nullam sem augue, lacinia in dui a, pulvinar sagittis magna. Phasellus non accumsan ligula, a blandit nisi. Phasellus sed congue risus. Ut scelerisque laoreet
                                        tortor a ullamcorper
                                    </p>
                                </article>
                            </div>
                            <div class="col-lg-4">
                                <article class="card-secondary card-resume">
                                    <header class="card-header">
                                        <h3 class="resume-title">
                                            <a href="#">University of Cambridge</a>
                                        </h3>
                                        <span class="resume-company">Specialization Course</span>
                                        <span class="resume-timeline">Sep 2009 – Oct 2013</span>
                                    </header>
                                    <p class="card-text">Donec ultrices finibus ipsum, quis gravida libero vulputate ac. Sed tristique, lectus ut efficitur facilisis, orci ex elementum elit, et feugiat massa libero nec lacus. In pharetra justo vel nulla ornare, non condimentum
                                        diam euismod
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="row justify-content-center m-t-60">
                            <div class="col-auto">
                                <a class="au-btn au-btn-pill" href="#">DOWNLOAD CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                        <div class="row">
                            <div class="col-lg-6 js-waypoint">
                                <div class="au-progress-box">
                                    <h4 class="au-progress-box-title">UI/UX Design</h4>
                                    <div class="au-progress">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="80">
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-progress-box">
                                    <h4 class="au-progress-box-title">Photography</h4>
                                    <div class="au-progress">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="90">
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-progress-box">
                                    <h4 class="au-progress-box-title">HTML5/CSS3</h4>
                                    <div class="au-progress">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="85">
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 js-waypoint">
                                <div class="au-progress-box">
                                    <h4 class="au-progress-box-title">WordPress</h4>
                                    <div class="au-progress">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="80">
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-progress-box">
                                    <h4 class="au-progress-box-title">Copywriter</h4>
                                    <div class="au-progress">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="90">
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-progress-box">
                                    <h4 class="au-progress-box-title">SEO Marketing</h4>
                                    <div class="au-progress">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="95">
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center m-t-60">
                            <div class="col-auto">
                                <a class="au-btn au-btn-pill" href="#">DOWNLOAD CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end section resume-->

    <!-- section projects-->
    <section class="section section-projects bg-dark-1 p-t-110 p-b-90" id="projects">
            <div class="container-fluid">
                <div class="section-inner">
                    <h3 class="section-heading section-heading-light m-b-50">Featured Projects</h3>
                    <div id="myBtnContainer" class="text-center" style="margin-bottom: 50px;">
                      <button class="btn hey active" onclick="filterSelection('all')"> Show all</button>
                      <button class="btn hey" onclick="filterSelection('android')"> Android</button>
                      <button class="btn hey" onclick="filterSelection('ios')"> iOS</button>
                      <button class="btn hey" onclick="filterSelection('web')"> Web</button>
                      <button class="btn hey" onclick="filterSelection('wordpress')"> Wordpress</button>
                      <button class="btn hey" onclick="filterSelection('uxdesign')"> UI/UX</button>
                    </div>
                    <div class="row">
                        <!-- (START) PUT IOS PROJECTS INSIDE THIS COMMENT SECTION -->
                        <div class="filterDiv ios col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#liker-details"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/Liker.jpg') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Liker</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv ios col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#od-details"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/democrats.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Occupy Democrats</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv ios col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#rideox-details"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/RideOX.jpg') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">RideOX</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv ios col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#bc-details"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/BC.jpg') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Budget Catcher</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <!-- (END) PUT IOS PROJECTS INSIDE THIS COMMENT SECTION -->
                        <!-- (START) PUT WEB PROJECTS INSIDE THIS COMMENT SECTION -->
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#vue-inventory"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/1st.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Vue Inventory</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#ecommerce"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/ecommerce/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Ecommerce</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#phonebook"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/phonebook/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Phonebook</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#groupchat"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/groupchat/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Group Chat</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#chatapplication"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/chatapplication/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Chat Application</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <!-- <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#nstuinfo"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/nstuinfo/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">NSTUINFO API</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div> -->
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#jobsite"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/jobsite/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Jobsite</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#blog-details"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/blog/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Blog</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv web col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#inventory"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/web/inventory/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Inventory Management</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <!-- (END) PUT WEB PROJECTS INSIDE THIS COMMENT SECTION -->
                        <!-- (START) PUT WORDPRESS PROJECTS INSIDE THIS COMMENT SECTION -->
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#feeka"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Online Shopping</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#partyhire"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/partyhire/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Party-Product Hiring Site</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#fooddelivery"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/fooddelivery/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Food Delivery Service</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#internationalcourier"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">International Courier Service System</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#gmbcalculator"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/gmbcalculator/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">GMB Pricing Calculator</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#crm"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/crm/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">CRM</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#scoregiver"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/scoregiver/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Score Giver</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#praxis"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Praxis</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#corporis"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Corporis</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv wordpress col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#anri"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/wordpress/anri/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Anri</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <!-- (END) PUT WORDPRESS PROJECTS INSIDE THIS COMMENT SECTION -->
                        <!-- (START) PUT ANDROID PROJECTS INSIDE THIS COMMENT SECTION -->
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#missilecar"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/missilecar/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Missile Car</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#kbc"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/kbc/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">কে হতে চায় কোটিপতি</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#worldcup2018"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/worldcup2018/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">FIFA World Cup 2018 Fixtures & Schedules</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#bornomala"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/bornomala/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">বর্ণমালা - Kids Alphabet Learning App</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#literaturemini"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/literaturemini/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Literaturemini</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#animalsounds"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/animalsounds/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Animal Sounds</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#fatwaarka"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/fatwaarka/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Fatwa Arkanul Islam (ফতোওয়া আরকানুল ইসলাম)</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#duaozikir"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/duaozikir/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Shahi Dua & Zikir (সহীহ দোআ ও যিকির)</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#bdall"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/bdall/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">BD All University Info</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#nstudiary"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/nstudiary/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">NSTU Diary (NSTUinfo)</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#saudirectory"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/saudirectory/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">SAU Directory</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <!-- <div class="filterDiv android col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#cste10"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/android/cste10/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Directory of CSTE 10th batch NSTU</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">DESIGN</a>
                                        </li>
                                        <li>
                                            <a href="#">DEVELOP</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div> -->
                        <!-- (END) PUT ANDROID PROJECTS INSIDE THIS COMMENT SECTION -->
                        <!-- (START) PUT UI/UX DESIGN INSIDE THIS COMMENT SECTION -->
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#webtemplate"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/webtemplate/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Web Template Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#homepage"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/homepage/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Home Page Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#landingpage"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/landingpage/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Landing Page Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#mobileapp"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Mobile App Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#companyprofile"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Company Profile Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#canedesign"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/canedesign/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Cane Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#bookcover"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/bookcover/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Book Cover Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#businesscard"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/businesscard/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Business Card Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#brochure"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/brochure/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Brochure Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#rackcard"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/rackcard/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Rack Card Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#flyer"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/flyer/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Flyer Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#banner"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/banner/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Banner Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <div class="filterDiv uxdesign col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <article class="card-primary card-project">
                                <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#logo"></a>
                                <figure class="card-figure">
                                    <img class="project-image img-fluid" src="{{ URL::to('assets/images/uxdesign/logo/1.png') }}" alt="Brand &amp; Strategy Contents" />
                                </figure>
                                <header class="card-header">
                                    <h3 class="project-title">Logo Design</h3>
                                    <ul class="project-subjects">
                                        <li>
                                            <a href="#">UI/UX DESIGN</a>
                                        </li>
                                    </ul>
                                </header>
                            </article>
                        </div>
                        <!-- (END) PUT UI/UX DESIGN INSIDE THIS COMMENT SECTION -->
                        <!-- </div> -->
                    </div>
               </div>
            </div>
        </section>

        <!-- end section projects--> 
        
        

        <!-- section statistic-->
        <div class="section section-statistic bg-grey-1 p-t-150 p-b-120" id="statistic">
            <div class="container">
                <div class="section-inner">
                    <ul class="list-reset row justify-content-center">
                        <li class="col-md-3">
                            <div class="box box-number">
                                <span class="number counterUp">4</span>
                                <span class="title">YEARS OF EXPERIENCE</span>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="box box-number">
                                <span class="number counterUp">52</span>
                                <span class="title">PROJECT COMPLETED</span>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="box box-number">
                                <span class="number counterUp">2</span>
                                <span class="title">AWARDS</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end section statistic-->

        <!-- section latest Our Team-->
        <section class="section section-latest-blog bg-white p-t-110 p-b-100" id="ourteam">
            <div class="container">
                <div class="section-inner">
                    <h3 class="section-heading m-b-50">OUR TEAM</h3>
                    <ul class="list-reset js-slick row" data-slick-lg="1" data-slick-dots="true" data-slick-dotsClass="slick-dots dots-style-1">
                        <li class="col">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="myImage blog-image img-fluid" src="{{ URL::to('assets/images/team/sabuj.png') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                            "/>
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post" data-toggle="popover" data-content="Disabled popover"></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Kamrul Hassan Sabuj</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">CTO and iOS Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="https://www.facebook.com/sabujsahi"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/tuhin.png') }}" alt="New Short Course: Lightweight Carousels With John
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Abu Hurayra Tuhin</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">COO and Web Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/hridita.png') }}" alt="10 Remedial Design Pointers for Developers
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Hridita Rahman</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">CFO</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                            </div>
                        </li>
                        <li class="col">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/pranto.png') }}" alt="10 Remedial Design Pointers for Developers
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Pranto Saha</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">IOS Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/azmal.png') }}" alt="10 Remedial Design Pointers for Developers
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Mohammad Azmal</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">IOS Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/hridoy.png') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Saiful Haque Hridoy</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Android Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                            </div>
                        </li>
                        <li class="col">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/matul.png') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Abu Saleh Matul</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Web Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/zisan.png') }}" alt="New Short Course: Lightweight Carousels With John
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Fazlul Kabir Zisan</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Web Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/nasir.png') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">G. M. NASIR UDDIN AHAMMAD</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">UI/UX DESIGNER</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                            </div>
                        </li>
                        <li class="col">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/shuvo.png') }}" alt="10 Remedial Design Pointers for Developers
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Shuhanur Rahman Shuvo</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">UI/UX DESIGNER</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/nishan.png') }}" alt="New Short Course: Lightweight Carousels With John
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">A R Nishan</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Wordpress Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/team/shovon.png') }}" alt="10 Remedial Design Pointers for Developers
                                            " />
                                            <!-- <a class="bg-overlay" href="#" data-toggle=" modal " data-target=" #blog-post "></a> -->
                                        </figure>

                                        <li class="box box-testimonials">


                                            <div class="client-info">
                                                <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Zaman Shovon</span>
                                                <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Wordpress Developer</span>
                                                <!-- <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </li>
                                    </article>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end section Our Team-->

        <!-- section latest blog-->
        <!-- <section class="section section-latest-blog bg-white p-t-110 p-b-100" id="blog">
            <div class="container">
                <div class="section-inner">
                    <h3 class="section-heading m-b-50">Blogs</h3>
                    <ul class="list-reset js-slick row" data-slick-lg="1" data-slick-dots="true" data-slick-dotsClass="slick-dots dots-style-1">
                        <li class="col">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <article class="card-secondary card-blog">
                                        <figure class="card-figure">
                                            <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-01.jpg') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                            " />
                                            <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                        </figure>
                                        <header class="card-header">
                                            <h3 class="blog-title">
                                                <a href="#" data-toggle="modal" data-target="#blog-post">How to Create a Split-Screen Slider With JavaScript
                                                </a>
                                            </h3>
                                        </header>
                                        <p class="card-text">Nam eget nulla sem. Duis tristique risus in condimentum consequat. Pellentesque cursus enim sit amet sem ornare tristique.</p>
                                        <footer class="card-footer">
                                            <span class="blog-date">JULY 18, 2017</span>

                                        </footer>
                                    

                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-02.jpg') }}" alt="New Short Course: Lightweight Carousels With John
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">New Short Course: Lightweight Carousels With John
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Pellentesque tristique mi ut condimentum dapibus. Nulla tortor risus, posuere interdum volutpat non, lacinia vitae magna tristique</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JULY 10, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-03.jpg') }}" alt="10 Remedial Design Pointers for Developers
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">10 Remedial Design Pointers for Developers
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Integer a ante fringilla, ultricies nunc a, bibendum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JUNE 29, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                        </div>
                    </li>
                    <li class="col">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-01.jpg') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">How to Create a Split-Screen Slider With JavaScript
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Nam eget nulla sem. Duis tristique risus in condimentum consequat. Pellentesque cursus enim sit amet sem ornare tristique.</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JULY 18, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-02.jpg') }}" alt="New Short Course: Lightweight Carousels With John
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">New Short Course: Lightweight Carousels With John
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Pellentesque tristique mi ut condimentum dapibus. Nulla tortor risus, posuere interdum volutpat non, lacinia vitae magna tristique</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JULY 10, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-03.jpg') }}" alt="10 Remedial Design Pointers for Developers
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">10 Remedial Design Pointers for Developers
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Integer a ante fringilla, ultricies nunc a, bibendum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JUNE 29, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                        </div>
                    </li>
                    <li class="col">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-01.jpg') }}" alt="How to Create a Split-Screen Slider With JavaScript
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">How to Create a Split-Screen Slider With JavaScript
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Nam eget nulla sem. Duis tristique risus in condimentum consequat. Pellentesque cursus enim sit amet sem ornare tristique.</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JULY 18, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-02.jpg') }}" alt="New Short Course: Lightweight Carousels With John
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">New Short Course: Lightweight Carousels With John
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Pellentesque tristique mi ut condimentum dapibus. Nulla tortor risus, posuere interdum volutpat non, lacinia vitae magna tristique</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JULY 10, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="card-secondary card-blog">
                                    <figure class="card-figure">
                                        <img class="blog-image img-fluid" src="{{ URL::to('assets/images/blog-03.jpg') }}" alt="10 Remedial Design Pointers for Developers
                                        " />
                                        <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                    </figure>
                                    <header class="card-header">
                                        <h3 class="blog-title">
                                            <a href="#" data-toggle="modal" data-target="#blog-post">10 Remedial Design Pointers for Developers
                                            </a>
                                        </h3>
                                    </header>
                                    <p class="card-text">Integer a ante fringilla, ultricies nunc a, bibendum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                    <footer class="card-footer">
                                        <span class="blog-date">JUNE 29, 2017</span>
                                    </footer>
                                    
                                </article>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section> -->
    <!-- end section blog-->

    <!-- section testimonials-->
    <section class="section section-testimonials bg-grey-1 p-t-110 p-b-50" id="testimonials">
        <div class="container">
            <div class="section-inner">
                <h3 class="section-heading m-b-10">OUR CLIENT</h3>
                <ul class="list-reset js-slick js-slick-test section-content slick-arrow-style-1" data-slick-lg="1" data-slick-autoplay="true" data-slick-arrows="true" data-slick-prevarrow=""
                data-slick-nextarrow="" data-slick-loop="false">
                <!--"prev arrow content:" &lt;i class='arrow arrow-prev lnr lnr-chevron-left' data-toggle='tooltip' title='Preview'&gt;&lt;/i&gt; -->
                <!--"next arrow content:" &lt;i class='arrow arrow-next lnr lnr-chevron-right' data-toggle='tooltip' title='Next' &gt;&lt;/i&gt; -->

                <li class="box box-testimonials">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.5s">
                            Fantastic experience. Incredibly reliable and great to communicate with. This was our first app and they made the process very smooth. We, Will, work with them again!.
                        </p>
                    </div>
                    <div hidden="" class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="{{ URL::to('assets/images/avatar-03.jpg') }}" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Verdesian</span>
                       <!--  <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">CTO AND iOS DEVELOPER</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul> -->
                    </div>
                </li>
                <li class="box box-testimonials" style="">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.5s">
                            Superb Management! Great attention to detail, made sure every requirement was met. Timely delivery of great work! Planning to work with them for numerous upcoming projects. Can not recommend highly enough!!
                        </p>
                    </div>
                    <div hidden="" class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="{{ URL::to('assets/images/avatar-02.jpg') }}" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Michaelo Gunjemi</span>
                       <!--  <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">COO AND WEB DEVELOPER</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul> -->
                    </div>
                </li>
                <li class="box box-testimonials">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.5s">
                            Great working with SahiTech Ltd! They responded quickly to all my requests and the work came out great. I highly recommend working with them and I'll be doing so again in the future.
                        </p>
                    </div>
                    <div hidden="" class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="{{ URL::to('assets/images/avatar-01.jpg') }}" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Alaaa Qeel</span>
                       <!--  <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">CFO</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul> -->
                    </div>
                </li>
                <li class="box box-testimonials">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.5s">
                            I am really very happy with this management... I didn't know too much about apps. but they helped me with everything every time and without any problem. the order was done on time and was done a perfect job. thank you very much And I will be happy to continue with another order.
                        </p>
                    </div>
                    <div hidden="" class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="{{ URL::to('assets/images/avatar-04.jpg') }}" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Jack Foley</span>
                      <!--   <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Laravel Developer</span>
                        <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">Multiplexer Lab</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s"> -->
                           <!--  <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul> -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
    <!-- end section testimonials-->

<!-- section partner-->
<div class="section section-partner bg-grey-1 p-t-80 p-b-110" id="partner">
    <div class="container-fluid">
        <div class="section-inner">
            <ul class="list-reset js-slick partner-list" data-slick-lg="5" data-slick-md="3" data-slick-sm="2" data-slick-xs="1" data-slick-autoplay="true">

                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="Wooecommerce"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/ic-partnership-01.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="ios"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/ios-icon.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="laravel"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/laravel-icon.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="android"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/android-icon.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="php"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/php-icon.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                   <!--  <a class="box box-partner" href="#" data-toggle="tooltip" title="WordPress"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/ic-partnership-02.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <!-- <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/ic-partnership-03.png') }}" alt="partner">
                </li> -->
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="Jquery"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/ic-partnership-05.png') }}" alt="partner">
                    <!-- </a> -->
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.1s">
                    <!-- <a class="box box-partner" href="#" data-toggle="tooltip" title="Bootstrap"> -->
                        <img class="partner-image" src="{{ URL::to('assets/images/icons/ic-partnership-04.png') }}" alt="partner">
                    <!-- </a> -->
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- end section partner-->

<!-- section contact-->
<section class="section section-contact bg-parallax p-t-110 p-b-80" id="contact" style="background: url(assets/images/bg-contact.jpg) center center no-repeat;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading section-heading-light m-b-45">Contact Us</h3>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="messages" id="status"></div>
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $errors->first('name') }}</li>          
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <form class="section-contact-form m-b-80" action="{{ URL::to('send-mail') }}" method="post" role="form" data-toggle="validator">
                            @csrf
                        {{-- {!! Form::open(['url' => 'send-mail', 'method' => 'post', 'class' => 'section-contact-form m-b-80', 'role' => "form",  'data-toggle' => "validator"]) !!} --}}
                            <div class="input-item form-group">
                                <label class="input-label">
                                    <span>YOUR NAME*</span>
                                    <span class="help-block with-errors"></span>
                                </label>
                                <input class="au-input" type="text" id="name" name="name" required data-error="Name is required.">
                                   {{--  @if ($errors->first('name'))
                                                <li class="alert alert-danger">{{ $errors->first('name') }}</li>        
                                    @endif --}}
                            </div>
                            <div class="input-item form-group">
                                <label class="input-label">
                                    <span>YOUR EMAIL*</span>
                                    <span class="help-block with-errors"></span>
                                </label>
                                <input class="au-input" type="email" id="email" name="email" required data-error="Valid email is required.">
                            </div>
                            <div class="input-item form-group">
                                <label class="input-label">
                                    <span>MESSAGE*</span>
                                    <span class="help-block with-errors"></span>
                                </label>
                                <textarea class="au-input" id="msg" name="msg" style="height: 160px;" required data-error="Please, leave us a message."></textarea>
                            </div>
                            <div class="input-item text-center m-t-40">
                                <input class="au-btn au-btn-pill" type="submit" id="contactBtn" value="SUBMIT">
                            </div>
                        {{-- {!! Form::close() !!} --}}
                        </form>
                </div>
            </div>
            <div class="row section-contact-info">
                <div class="col-md col-sm-12">
                    <div class="box box-contact-info">
                        <h3 class="box-title">
                            <i class="fa fa-home"></i>
                            <span>Address</span>
                        </h3>
                        <p class="box-text">House#06, Road#08, Block#A, Pallabi, Dhaka-1216</p>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="box box-contact-info">
                        <h3 class="box-title">
                            <i class="fa fa-volume-control-phone"></i>
                            <span>Lets Talk</span>
                        </h3>
                        <a href="tel:+8801521497673" target="_blank" class="box-text">+8801521497673
                        </a>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="box box-contact-info">
                        <h3 class="box-title">
                            <i class="fa fa-envelope"></i>
                            <span>Email</span>
                        </h3>
                        <a href="mailto:sahitechltd@gmail.com" target="_blank" class="box-text">sahitechltd@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section contact-->

<!-- footer-->
<footer class="section section-footer p-t-85 p-b-90" id="footer">
    <div class="container">
        <div class="section-inner">
            <ul class="h-list footer-social social-list">
                <li class="list-item" data-toggle="tooltip" title="Email">
                    <a href="mailto:sahitechltd@gmail.com" target="_blank" class="fa fa-envelope"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Twitter">
                    <a class="fa fa-twitter" href="https://twitter.com/sahitechltd" target="_blank"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Facebook">
                    <a class="fa fa-facebook" href="https://www.facebook.com/sahitechltd" target="_blank"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Linkedin">
                    <a class="fa fa-linkedin" href="http://linkedin.com/company/sahitechltd" target="_blank"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Instagram">
                    <a class="fa fa-instagram" href="https://www.instagram.com/sahitechltd/" target="_blank"></a>
                </li>
            </ul>
            <p class="footer-text-intro">
                <span>Built with</span>
                <span class="fa fa-heart"></span>
                <span>at SahiTech Ltd</span>
            </p>
            <p class="footer-copy-text">Copyright © 2020 SahiTech Ltd. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- end footer-->

<!-- section blog post-->
<section class="section-blog-post modal fade js-modal" id="blog-post" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader"></div>
        <div class="modal-content">
            <div class="section-inner modal-primary">
                <div class="container-fluid">
                    <div class="modal-header">
                        <div class="modal-header-logo">
                            <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                        </div>
                        <div class="modal-header-control">
                            <button class="btn-prev au-btn au-btn-circle" type="button">
                                <i class="lnr lnr-chevron-left"></i>
                            </button>
                            <button class="btn-next au-btn au-btn-circle" type="button">
                                <i class="lnr lnr-chevron-right"></i>
                            </button>
                            <button class="btn-close au-btn au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                <i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="modal-body">
                                <article class="post-blog m-b-55">
                                    <header class="post-header">
                                        <h3 class="post-title">New Short Course: Lightweight Carousels With John</h3>
                                        <ul class="post-info h-list">
                                            <li class="post-info-item">
                                                <span>BY
                                                    <a href="#">JOHN DOE</a>
                                                </span>
                                            </li>
                                            <li class="post-info-item">
                                                <span>AUGUST 28, 2018</span>
                                            </li>
                                            <li class="post-info-item">
                                                <span>
                                                    <a href="#">WEB DESIGN</a>
                                                </span>
                                            </li>
                                            <li class="post-info-item">
                                                <span>
                                                    <a href="#">3 COMMENTS</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </header>
                                    <figure class="post-image">
                                        <img class="img-fluid" src="{{ URL::to('assets/images/blog-post-01.jpg') }}" alt="New Short Course: Lightweight Carousels With John">
                                    </figure>
                                    <div class="post-body">
                                        <p class="post-paragraph">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum . Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex tempor, sit
                                            amet scelerisque eros rhoncus. Cras scelerisque auctor gravida. Nunc fermentum luctus rhoncus. Nulla vulputate fermentum convallis. In quis pellentesque tortor. Cras metus nibh, gravida vitae ante vel, finibus
                                            semper tellus. Nulla vel tincidunt magna. Morbi tempor velit lectus, eu commodo quam volutpat vitae.
                                        </p>
                                        <blockquote class="post-quote">
                                            <p class="quote-text">Cras nec odio facilisis, suscipit sem sit amet, tincidunt turpis. Praesent diam eros, consectetur ac viverra vitae, imperdiet ut est.</p>
                                            <span class="quote-sign">JOHN SMITH, ENVATO</span>
                                        </blockquote>
                                        <p class="post-paragraph">
                                            Nulla feugiat nulla mi, a aliquam arcu condimentum in. Cras pulvinar ac odio quis efficitur. Pellentesque commodo sapien ac arcu ultrices dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur eu
                                            arcu at sem lobortis rhoncus sed at dolor.
                                        </p>
                                    </div>
                                    <footer class="post-footer">
                                        <div class="flex-bar align-items-start justify-content-lg-between m-b-40">
                                            <ul class="post-tags h-list">
                                                <li class="post-tag-item">
                                                    <a href="#">WEBSITE</a>
                                                </li>
                                                <li class="post-tag-item">
                                                    <a href="#">ONEPAGE</a>
                                                </li>
                                                <li class="post-tag-item">
                                                    <a href="#">PROFESIONAL</a>
                                                </li>
                                            </ul>
                                            <div class="post-socials">
                                                <span class="post-social-label">SHARE</span>
                                                <ul class="h-list social-list">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                        <a class="fa fa-google-plus" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Other">
                                                        <a class="fa fa-plus" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-author">
                                            <div class="post-author-image">
                                                <a href="#">
                                                    <img src="{{ URL::to('assets/images/avatar-04.jpg') }}" alt="John Doe">
                                                </a>
                                            </div>
                                            <div class="post-author-text">
                                                <a class="post-author-name" href="#">Tammy Ramos</a>
                                                <p class="post-author-paragraph">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin est nec ex vestibulum, vitae imperdiet justo malesuada. Donec quam augue, tempus sed tempor quis, rutrum sit amet
                                                </p>
                                            </div>
                                        </div>
                                    </footer>
                                </article>
                                <div class="comment-pane m-b-45">
                                    <div class="comment-pane-header">
                                        <h3 class="comment-pane-title">3 COMMENTS</h3>
                                    </div>
                                    <div class="comment-pane-body">
                                        <ul class="comment-pane-list">
                                            <li class="list-item has-comment-children">
                                                <div class="comment-item">
                                                    <div class="comment-author-avatar">
                                                        <a href="#">
                                                            <img src="{{ URL::to('assets/images/avatar-05.jpg') }}" alt="Arthur Reyes">
                                                        </a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="comment-paragraph">
                                                            Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                                        </p>
                                                        <div class="comment-info">
                                                            <a href="#">ARTHUR REYES &nbsp;</a>- JUNE 25, 2018 &nbsp;
                                                            <a class="comment-reply" href="#">
                                                                <i class="fa fa-share"></i>REPLY</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="comment-pane-list-children">
                                                        <li class="list-item">
                                                            <div class="comment-item">
                                                                <div class="comment-author-avatar">
                                                                    <a href="#">
                                                                        <img src="{{ URL::to('assets/images/avatar-06.jpg') }}" alt="Arthur Reyes">
                                                                    </a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p class="comment-paragraph">Nullam ipsum urna, dapibus sed justo sed, imperdiet malesuada commodo</p>
                                                                    <div class="comment-info">
                                                                        <a href="#">SHIRLEY CAMPBELL &nbsp;</a>- JUNE 25, 2018 &nbsp;
                                                                        <a class="comment-reply" href="#">
                                                                            <i class="fa fa-share"></i>REPLY</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="list-item has-comment-children">
                                                        <div class="comment-item">
                                                            <div class="comment-author-avatar">
                                                                <a href="#">
                                                                    <img src="{{ URL::to('assets/images/avatar-07.jpg') }}" alt="Arthur Reyes">
                                                                </a>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p class="comment-paragraph">
                                                                    Donec sollicitudin nisi sed eros elementum, non vestibulum quam convallis. Curabitur bibendum magna at nisl hendrerit, et tempus metus facilisis. Praesent augue tellus, euismod id posuere eget, gravida id dolor
                                                                </p>
                                                                <div class="comment-info">
                                                                    <a href="#">SARA ELLIS &nbsp;</a>- JUNE 25, 2018 &nbsp;
                                                                    <a class="comment-reply" href="#">
                                                                        <i class="fa fa-share"></i>REPLY</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="leave-comment-pane">
                                                <div class="leave-comment-pane-header">
                                                    <h3 class="leave-comment-pane-title">LEAVE A COMMENT</h3>
                                                    <p class="leave-comment-pane-notify">You must be logged in to post a comment.</p>
                                                </div>
                                                <div class="leave-comment-pane-body">
                                                    <form class="leave-comment-pane-form">
                                                        <div class="form-group input-item">
                                                            <textarea class="au-input" placeholder="COMMENT..."></textarea>
                                                        </div>
                                                        <div class="row no-gutters form-row">
                                                            <div class="col-lg-4 input-item form-group">
                                                                <input class="au-input" type="text" placeholder="NAME*">
                                                            </div>
                                                            <div class="col-lg-4 input-item form-group">
                                                                <input class="au-input" type="text" placeholder="EMAIL*">
                                                            </div>
                                                            <div class="col-lg-4 input-item form-group">
                                                                <input class="au-input" type="text" placeholder="WEBSITE*">
                                                            </div>
                                                        </div>
                                                        <div class="input-submit">
                                                            <input class="au-btn au-btn-pill" type="submit" value="POST COMMENT">
                                                        </div>
                                                    </form>
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
            <!-- end section blog post-->

  <!-- section project post-->
        <!-- (START) PUT IOS PROJECTS INSIDE THIS COMMENT SECTION -->
            <section class="section-project-post modal fade js-modal" id="liker-details" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="loader"></div>
                    <div class="modal-content">
                        <div class="section-inner modal-primary">
                            <div class="container-fluid">
                                <div class="modal-header">
                                    <div class="modal-header-logo">
                                        <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                    </div>
                                    <div class="modal-header-control">
                                        <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-left"></i>
                                        </button>
                                        <button class="btn-next au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-right"></i>
                                        </button> -->
                                        <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                            <i class="lnr lnr-cross"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-11 col-lg-9">
                                        <div class="modal-body">
                                            <article class="post-project m-b-55">
                                                <header class="post-header">
                                                    <h3 class="post-title">Liker</h3>
                                                </header>
                                                <div class="row no-gutters">
                                                    <div class="col col-figure">
                                                        <figure class="post-image">
                                                            <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                            data-slick-dotsclass="slick-dots-2">
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/Liker1.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/Liker2.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/Liker3.jpg') }}" alt="Featured Details">
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col col-aside">
                                                    <aside class="project-aside">
                                                        <div class="project-aside-inner">
                                                            <div class="project-aside-block m-b-30">
                                                                <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                                <p class="project-aside-paragraph" style="text-align: justify;">Liker is the SMARTER social network where your posts immediately reach the right audience, you finally get the recognition you deserve because likes actually mean something, and you can customize your news feed to easily find the breaking and trending posts YOU want WHEN you want them — in any topic. 


                                                                    <br>NO MORE ENDLESS SCROLLING

                                                                    <br>- Customize your news feed by selecting one or more topics that matter to you to quickly and easily find the posts you want to see — when you want to.  

                                                                    <br>- Enjoy our revolutionary Trending and Breaking feeds to find the newest and most popular posts in any topic.


                                                                    <br>NO MORE WAITING FOR ACTION

                                                                    <br>- Select a target audience for your posts to make sure that they reach the right eyeballs and generate maximum engagement.  


                                                                    <br>FIND EXPERTS IN ANY TOPIC

                                                                    <br>- Quickly find star contributors in any of your favorite categories -- such as sports, politics, or fashion.


                                                                    <br>FINALLY GET THE RECOGNITION YOU DESERVE

                                                                    <br>- Become a star contributor in your topic of expertise by making great posts that earn a lot of likes.

                                                                <br>- Build a name and a dedicated following for yourself as an expert.</p>
                                                            </div>
                                                            <div class="project-aside-block m-b-45">
                                                                <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                                <ul class="project-aside-list">
                                                                    <li>
                                                                        <span class="t-left">App Store Link:</span>
                                                                        <a class="t-right" href="https://apps.apple.com/us/app/liker/id1364798905" target="_blank">View on App Store</a>
                                                                    </li>
                                                                    <li>
                                                                        <span class="t-left">Categories:</span>
                                                                        <span class="t-right cate-link">
                                                                            <a href="#">Social Media &nbsp;</a>
                                                                            <span>, &nbsp;</span>
                                                                            <a href="#">Messaging &nbsp;</a>
                                                                            <!-- <span>, &nbsp;</span>
                                                                            <a href="#">Digital &nbsp;</a> -->
                                                                        </span>
                                                                    </li>
                                                                    <!-- <li>
                                                                        <span class="t-left">Date:</span>
                                                                        <span class="t-right">10/2018</span>
                                                                    </li> -->
                                                                </ul>
                                                            </div>
                                                            <!-- <div class="project-aside-block">
                                                                <h4 class="project-aside-title project-aside-title-sm m-b-20">SHARE</h4>
                                                                <ul class="h-list social-list">
                                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                                        <a class="fa fa-facebook" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                                        <a class="fa fa-twitter" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                                        <a class="fa fa-google-plus" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                                        <a class="fa fa-linkedin" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Other">
                                                                        <a class="fa fa-plus" href="#"></a>
                                                                    </li>
                                                                </ul>
                                                            </div> -->
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <!-- section project post-->
            <section class="section-project-post modal fade js-modal" id="od-details" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="loader"></div>
                    <div class="modal-content">
                        <div class="section-inner modal-primary">
                            <div class="container-fluid">
                                <div class="modal-header">
                                    <div class="modal-header-logo">
                                        <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                    </div>
                                    <div class="modal-header-control">
                                        <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-left"></i>
                                        </button>
                                        <button class="btn-next au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-right"></i>
                                        </button> -->
                                        <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                            <i class="lnr lnr-cross"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-11 col-lg-9">
                                        <div class="modal-body">
                                            <article class="post-project m-b-55">
                                                <header class="post-header">
                                                    <h3 class="post-title">Occupy Democrats</h3>
                                                </header>
                                                <div class="row no-gutters">
                                                    <div class="col col-figure">
                                                        <figure class="post-image">
                                                            <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                            data-slick-dotsclass="slick-dots-2">
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/OD1.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/OD2.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/OD3.jpg') }}" alt="Featured Details">
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col col-aside">
                                                    <aside class="project-aside">
                                                        <div class="project-aside-inner">
                                                            <div class="project-aside-block m-b-30">
                                                                <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                                <p class="project-aside-paragraph" style="text-align: justify;">News application developed for Occupy Democrats.</p>
                                                            </div>
                                                            <div class="project-aside-block m-b-45">
                                                                <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                                <ul class="project-aside-list">
                                                                   <!--  <li>
                                                                        <span class="t-left">Website:</span>
                                                                        <a class="t-right" href="#">Visit Site</a>
                                                                    </li> -->
                                                                    <li>
                                                                        <span class="t-left">Categories:</span>
                                                                        <span class="t-right cate-link">
                                                                            <a href="#">News &nbsp;</a>
                                                                           <!--  <span>, &nbsp;</span>
                                                                            <a href="#">Branding &nbsp;</a>
                                                                            <span>, &nbsp;</span>
                                                                            <a href="#">Digital &nbsp;</a> -->
                                                                        </span>
                                                                    </li>
                                                                  <!--   <li>
                                                                        <span class="t-left">Date:</span>
                                                                        <span class="t-right">10/2018</span>
                                                                    </li> -->
                                                                </ul>
                                                            </div>
                                                          <!--   <div class="project-aside-block">
                                                                <h4 class="project-aside-title project-aside-title-sm m-b-20">SHARE</h4>
                                                                <ul class="h-list social-list">
                                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                                        <a class="fa fa-facebook" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                                        <a class="fa fa-twitter" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                                        <a class="fa fa-google-plus" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                                        <a class="fa fa-linkedin" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Other">
                                                                        <a class="fa fa-plus" href="#"></a>
                                                                    </li>
                                                                </ul>
                                                            </div> -->
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <!-- section project post-->
            <section class="section-project-post modal fade js-modal" id="bc-details" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="loader"></div>
                    <div class="modal-content">
                        <div class="section-inner modal-primary">
                            <div class="container-fluid">
                                <div class="modal-header">
                                    <div class="modal-header-logo">
                                        <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                    </div>
                                    <div class="modal-header-control">
                                        <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-left"></i>
                                        </button>
                                        <button class="btn-next au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-right"></i>
                                        </button> -->
                                        <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                            <i class="lnr lnr-cross"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-11 col-lg-9">
                                        <div class="modal-body">
                                            <article class="post-project m-b-55">
                                                <header class="post-header">
                                                    <h3 class="post-title">Budget Catcher</h3>
                                                </header>
                                                <div class="row no-gutters">
                                                    <div class="col col-figure">
                                                        <figure class="post-image">
                                                            <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                            data-slick-dotsclass="slick-dots-2">
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/BC1.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/BC2.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/BC3.jpg') }}" alt="Featured Details">
                                                            </div>
                                                             <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/BC4.jpg') }}" alt="Featured Details">
                                                            </div>
                                                             <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/BC5.jpg') }}" alt="Featured Details">
                                                            </div>
                                                             <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/BC6.jpg') }}" alt="Featured Details">
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col col-aside">
                                                    <aside class="project-aside">
                                                        <div class="project-aside-inner">
                                                            <div class="project-aside-block m-b-30">
                                                                <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                                <p class="project-aside-paragraph" style="text-align: justify;">Finance application for tracking user's income and expenses on a weekly, monthly, and yearly basis. Generates the report with a beautiful pie chart and bar graph. Users can pay their bills from within the app.</p>
                                                            </div>
                                                            <div class="project-aside-block m-b-45">
                                                                <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                                <ul class="project-aside-list">
                                                                    <!-- <li>
                                                                        <span class="t-left">Website:</span>
                                                                        <a class="t-right" href="#">Visit Site</a>
                                                                    </li> -->
                                                                    <li>
                                                                        <span class="t-left">Categories:</span>
                                                                        <span class="t-right cate-link">
                                                                            <a href="#">Finance &nbsp;</a>
                                                                            <span>, &nbsp;</span>
                                                                            <a href="#">Budget Tracking &nbsp;</a>
                                                                            <!-- <span>, &nbsp;</span>
                                                                            <a href="#">Digital &nbsp;</a>
 -->                                                                        </span>
                                                                    </li>
                                                                   <!--  <li>
                                                                        <span class="t-left">Date:</span>
                                                                        <span class="t-right">10/2018</span>
                                                                    </li> -->
                                                                </ul>
                                                            </div>
                                                           <!--  <div class="project-aside-block">
                                                                <h4 class="project-aside-title project-aside-title-sm m-b-20">SHARE</h4>
                                                                <ul class="h-list social-list">
                                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                                        <a class="fa fa-facebook" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                                        <a class="fa fa-twitter" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                                        <a class="fa fa-google-plus" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                                        <a class="fa fa-linkedin" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Other">
                                                                        <a class="fa fa-plus" href="#"></a>
                                                                    </li>
                                                                </ul>
                                                            </div> -->
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <!-- section project post-->
            <section class="section-project-post modal fade js-modal" id="rideox-details" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="loader"></div>
                    <div class="modal-content">
                        <div class="section-inner modal-primary">
                            <div class="container-fluid">
                                <div class="modal-header">
                                    <div class="modal-header-logo">
                                        <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                    </div>
                                    <div class="modal-header-control">
                                        <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-left"></i>
                                        </button>
                                        <button class="btn-next au-btn au-btn-circle" type="button">
                                            <i class="lnr lnr-chevron-right"></i>
                                        </button> -->
                                        <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                            <i class="lnr lnr-cross"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-11 col-lg-9">
                                        <div class="modal-body">
                                            <article class="post-project m-b-55">
                                                <header class="post-header">
                                                    <h3 class="post-title">RideOX</h3>
                                                </header>
                                                <div class="row no-gutters">
                                                    <div class="col col-figure">
                                                        <figure class="post-image">
                                                            <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                            data-slick-dotsclass="slick-dots-2">
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/RideOX1.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/RideOX2.jpg') }}" alt="Featured Details">
                                                            </div>
                                                            <div class="project-image-item">
                                                                <img class="img-fluid" src="{{ URL::to('assets/images/RideOX3.jpg') }}" alt="Featured Details">
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col col-aside">
                                                    <aside class="project-aside">
                                                        <div class="project-aside-inner">
                                                            <div class="project-aside-block m-b-30">
                                                                <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                                <p class="project-aside-paragraph" style="text-align: justify;">It's a ride-sharing app. The service provides vehicles of every category possible. The service is very flexible and has various Trip options (e.g: inter-city trips, general trips).</p>
                                                            </div>
                                                            <div class="project-aside-block m-b-45">
                                                                <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                                <ul class="project-aside-list">
                                                                    <li>
                                                                        <span class="t-left">App Store Link:</span>
                                                                        <a class="t-right" href="https://apps.apple.com/us/app/rideox/id1460220999" target="_blank">View on App Store</a>
                                                                    </li>
                                                                    <li>
                                                                        <span class="t-left">Categories:</span>
                                                                        <span class="t-right cate-link">
                                                                            <a href="#">Ride Sharing &nbsp;</a>
                                                                           <!--  <span>, &nbsp;</span>
                                                                            <a href="#">Branding &nbsp;</a>
                                                                            <span>, &nbsp;</span>
                                                                            <a href="#">Digital &nbsp;</a> -->
                                                                        </span>
                                                                    </li>
                                                                   <!--  <li>
                                                                        <span class="t-left">Date:</span>
                                                                        <span class="t-right">10/2018</span>
                                                                    </li> -->
                                                                </ul>
                                                            </div>
                                                           <!--  <div class="project-aside-block">
                                                                <h4 class="project-aside-title project-aside-title-sm m-b-20">SHARE</h4>
                                                                <ul class="h-list social-list">
                                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                                        <a class="fa fa-facebook" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                                        <a class="fa fa-twitter" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                                        <a class="fa fa-google-plus" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                                        <a class="fa fa-linkedin" href="#"></a>
                                                                    </li>
                                                                    <li class="list-item" data-toggle="tooltip" title="Other">
                                                                        <a class="fa fa-plus" href="#"></a>
                                                                    </li>
                                                                </ul>
                                                            </div> -->
                                                        </div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="project-post" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Brand & Strategy Contents</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/Liker1.jpg') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/Liker2.jpg') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/Liker3.jpg') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat. Fusce fermentum tellus non magna</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="#">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Categories:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Website &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Branding &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Digital &nbsp;</a>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Date:</span>
                                                                    <span class="t-right">10/2018</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="project-aside-block">
                                                            <h4 class="project-aside-title project-aside-title-sm m-b-20">SHARE</h4>
                                                            <ul class="h-list social-list">
                                                                <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                                    <a class="fa fa-facebook" href="#"></a>
                                                                </li>
                                                                <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                                    <a class="fa fa-twitter" href="#"></a>
                                                                </li>
                                                                <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                                    <a class="fa fa-google-plus" href="#"></a>
                                                                </li>
                                                                <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                                    <a class="fa fa-linkedin" href="#"></a>
                                                                </li>
                                                                <li class="list-item" data-toggle="tooltip" title="Other">
                                                                    <a class="fa fa-plus" href="#"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- (END) PUT IOS PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- (START) PUT WEB PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="vue-inventory" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Vue Inventory</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/first.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/7.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/8.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/9.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/10.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/11.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/vue-inventory/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">An Inventory Management System where employee, customer, supplier, product, and category of a product can be added. A salary of employees can be provided. The expense of the management system can be shown.Orders Can be taken from customers. Searching orders using a particular date and month also added. The stock management system also added. And Point of Sale(POS) system also provided where the conventional selling system is done.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://inventory.vue.rockertuhin.com/" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript(VUEJS framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="ecommerce" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Ecommerce</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/7.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/8.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/9.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/ecommerce/10.png') }}" alt="Featured Details">
                                                        </div>
                                                        
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This project was about to develop a complete e-commerce system, where online buying/selling will take place. The system will automatically handle transactions and interactions between customers and sellers. Facilities that are available in common e-commerce is available in the system.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <!-- <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="#">Visit Site</a>
                                                                </li> -->
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="phonebook" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Phonebook</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/phonebook/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/phonebook/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/phonebook/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/phonebook/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/phonebook/5.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A web application where anyone can save details of entry's using some attribute, edit the details, and delete the details and also view the details. Anyone can also search for any entry by all the attributes of an entry. And all these things are done using Vue.js, Axios, Vue router and Laravel, and also Bulma which is a framework of CSS.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://phonebook.rockertuhin.com" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript(VUEJS framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BULMA &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="groupchat" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Group Chat</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/groupchat/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/groupchat/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/groupchat/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A real-time chat application using Laravel, Vue.js, and Pusher. It is a group chat system where a user can send a message and other users receive the message in real-time. A notification system is added to join and leave for any user in the group. Time for send and received message is also added. When one user is typing, it is shown to all users that a particular user is typing.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript(VUEJS framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="chatapplication" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Chat Application</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/chatapplication/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/chatapplication/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/chatapplication/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/chatapplication/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/chatapplication/5.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A real-time chat application using pusher with laravel and vue.js. Private(one to one) chat and group chat both are implemented in that application. Time for send and received message is also added. Typing indicator and online active status are also implemented here. Also, users can send attachments and emoticons.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript(VUEJS framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <!-- <section class="section-project-post modal fade js-modal" id="nstuinfo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button>
                                    <button class="btn-close au-btn au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">API for an Android App(NSTUINFO) of NSTU </h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/nstuinfo/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/nstuinfo/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/nstuinfo/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/nstuinfo/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This project is for restful api of Noakhali Science and Technology University's(NSTU) android app.A similar project is also done for restful api of Sher-e-Bangla Agricultural University's(SAU) android app but not given here because of similar type project.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://nstu.rockertuhin.com" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="jobsite" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Jobsite</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/jobsite/7.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This is a job website where a company can register. After registering they can post jobs. The applicant also can register. After registering an applicant can update his profile picture, upload resume(pdf, docx), and skills on his profile page. The applicant can apply on a job with one click apply button. If he does not upload his resume, redirected to the profile page and show a warning flash message. The company can see all the applicants on his dashboard.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://jobs.rockertuhin.com" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="blog-details" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Blog</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/blog/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/blog/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/blog/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/blog/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/blog/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/blog/6.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A blogging site where admin can create, read, update, delete posts, categories, tags, users, roles, and permissions. From the user side, users can see all the posts, can like and dislike and comment on each post and can see posts according to category and tags. Like and dislike system is done by vue.js.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript(VUEJS framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="inventory" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Inventory Management</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/7.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/8.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/9.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/web/inventory/10.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">An Inventory Management System where employee, customer, supplier, product, and category of a product can be added. A salary of employees can be provided. The expense of the management system can be shown.Orders Can be taken from customers. The attendance system of employees also added. Setting control of the website also provided. And Point of Sale(POS) system also provided in where the conventional selling system is done.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://inventory.rockertuhin.com" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Laravel framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">BOOTSTRAP &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- (END) PUT WEB PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- (START) PUT WORDPRESS PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="feeka" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Online Shopping</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/feeka/6.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This is an online shopping WordPress site using WooCommerce plugin customization and created Quizz round plugin for the site Q&A. Where online buying/selling will take place. The system will automatically handle transactions and interactions between customers and sellers. Facilities that are available in common online shopping is available in the system.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="https://feeka.co.za" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Wordpress(Woocommerce Plugin,Quizz Round Plugin) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="internationalcourier" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">International Courier Service System</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/internationalcourier/6.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>A complete setup international courier service based on 3-panel service providing built on RAW PHP and using the best package for QR code, PDF maker, and API generator.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://ambercourier.com" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">RAW PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="partyhire" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Party-Product Hiring Site</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/partyhire/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/partyhire/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/partyhire/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/partyhire/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/partyhire/5.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>A party-product hiring WordPress site. It’s a popular party hire site by providing products for hiring and service maintenance. Theme customization with stripe payment gateway system build. Also mail-chimp like mail sending system build.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="https://www.funtimepartyhire.com.au" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Wordpress &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="fooddelivery" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Food Delivery Service</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/fooddelivery/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/fooddelivery/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/fooddelivery/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/fooddelivery/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>A food delivery app service with both backend panel functionality and API management using firebase. Using laravel to built the authentication system for both admin, driver, and customer. Using Rest-API to maintain API services through a secured socket, advance mail transfer system on product assuring, and admin acceptance.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="https://sakakerapp.com" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(LARAVEL framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="scoregiver" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Score Giver</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/scoregiver/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/scoregiver/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/scoregiver/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>Messenger chat-bot developing with Facebook developer version using RAW PHP script to make sure server services and live scorecard with live commentary of every league match internationally.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="http://score.com.bd" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">RAW PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="crm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">CRM</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/crm/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/crm/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/crm/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>A perfect CRM on industry-focused production and using an employee tracking system based on the perfex-crm module. This site is built on Code-Igniter.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="https://app.clarify.digital/" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">PHP(Codeigniter framework) &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Bootstrap &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="gmbcalculator" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">GMB Pricing Calculator</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/gmbcalculator/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/gmbcalculator/2.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>A worldwide online service provider maintenance system with worldwide payment gateway widgets. Using stripe payment gateway to have any kind of bank account accessibility with smart JS calculator. Using wordpress.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Website:</span>
                                                                    <a class="t-right" href="https://www.gmbkings.com/calculator" target="_blank">Visit Site</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Wordpress &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Bootstrap &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="praxis" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Praxis</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/7.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/8.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/9.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/10.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/praxis/11.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A wordpress theme where blog page, portfolio page, and some other page are created by elements/addons with the help of wpbakery premium page builder. Some theme option and meta option is created using codestar framework. Some custom post type is also created.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Wordpress &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="corporis" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Corporis</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/7.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/corporis/8.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A wordpress theme where many addons/elements are created according to theme needs using king composer page builder. Some theme option and meta option is created using codestar framework. Some custom post type is also created.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Wordpress &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="anri" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Anri</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/anri/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/anri/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/anri/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/anri/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/anri/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/wordpress/anri/6.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">A wordpress theme of a blog where posts are shown. Popular posts are shown according to popularity. The subscription option is added. Some widgets are created according to theme needs. Some theme option is created using codestar framework. Some custom post type is also created.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Programming Languages:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Wordpress &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">PHP &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Javascript &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">HTML &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">CSS &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- (END) PUT WORDPRESS PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- (START) PUT ANDROID PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="missilecar" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Missile Car</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/missilecar/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/missilecar/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/missilecar/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/missilecar/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">Missile Car is an android game that is all about the car controlling and shooting out the missile to destroy the car that's come from the opposite direction. Thus you get coins to destroy the cars and unlock the new vehicles, tracks, and missile packs.<br>
                                                            Tilt your mobile to move your vehicle horizontally and it will move as your tilting direction. Touch in the game screen to shoot out the missiles and destroy the cars which will come from the opposite direction. Engage your car with a missile pack and thus you get your missile reloaded. Get the coins by engaging your car with coins and unlock the new features. You can also earn coins by watching videos.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.shhridoy.missilecar" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Unity Game Engine and C# programming language &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Touch phase and count to shoot missile &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Acceleration to move car left and right &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Rigidbody 2D used to control velocity of cars &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Box collider to detect collision between objects &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Scene managers to load scenes &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared Preferences to store scores and setting options &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Sharing intent to share game &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="kbc" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">কে হতে চায় কোটিপতি KBC bangla GK Quiz for kotipoti</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/kbc/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/kbc/2.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">KBC Bangla is an android game which is an educational GK quiz game based on kon banega crorepati. Unlike any other time pass games, Kbc Bangla focuses on general knowledge of Bangladesh and Indian Bengali people. If you want to take part you got to be very good at the KBC gk quiz 2019.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.creativeapps.mcq_game" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">JSON perse using Volley to retrieve data from server &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">SQLite database to save data for offline &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">File to play game if there is no data connection &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Recycler view to show rank list &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Countdown timer to count the remaining time of the question to answer &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared preferences to store preferences &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation utilities to animate views &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="worldcup2018" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">FIFA World Cup 2018 Fixtures & Schedules</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/worldcup2018/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/worldcup2018/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/worldcup2018/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/worldcup2018/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This App provides you the information of the FIFA World Cup Russia 2018 competition, showing you facts about qualifying teams, push notifications for matches, fixtures, groups, match schedules, number of goals, and more from your favorite football teams in the tournament. This App was built for the people who love football(also known as Soccer) and who are always want to keep in touch with it.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Download APK:</span>
                                                                    <a class="t-right" href="https://drive.google.com/file/d/1iM8MWZQCFjJXIu3A4vrcPPBvVFVxiZvo/view?usp=sharing" target="_blank" class="btn btn-default" target="_blank">Download APK from Google Drive</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">JSON persing using Volley to retrieve data &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Database to save data for offline use and Team selection &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Notification & Alarm manager to push match notifications &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Tab fragments to view contents &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Navigation Drawer &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared preferences to store settings preferences &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation utilities to animate views &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="bornomala" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">বর্ণমালা - Kids Alphabet Learning App</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/bornomala/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/bornomala/2.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">Bangla Bornomala app is a kid learning educational app. It is one most important Bengali alphabet learning app in Bangladesh. We provide in this app the Bengali alphabet, the English alphabet from A to Z, and numbers from 1-9 with their proper pronunciation. We also provide multiple words and pictures for the alphabet for better co-relation with each letter. We hope that this app helps your children to Bornomala Sikkha. This app act as a Bangla Bornomala Book / Nursery learning book / Baby learning book. It is the best app for children & beginners to learn Bangla alphabets with fun.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.creativeapps.kids_learning_bangla" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Animation to animate home buttons and letter text &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">ViewPager to show pictures and letters &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">TextToSpeech (TTS) to echo out the pronounciation &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Paint tool to draw on the screen &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Picasso to inflate images &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Horizontall Scrollview to scroll the letter panel &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Music Player to play background music &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Calligraphy to use custom font &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Fabric crashlytics to get the knowledge of future crushes &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="literaturemini" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Literaturemini</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/literaturemini/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/literaturemini/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/literaturemini/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/literaturemini/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This is an amazing app for both literature teachers and students as it includes key facts about the author and the literary work itself. It is easy to navigate and the English used in this application is very easy to understand. What's best is that it is available for Online and It provides a lot of information about English Literature. This application is inherited from the website literaturemini.com. It is a very useful site to get in touch with literature and history as well.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.literaturemini" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">JSOUP in order to web scrapping &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Async task to data retrival &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Tab fragments to view contents &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Navigation Drawer &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Webview in order to show post details &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Recycler view to show posts list &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Sharing intents to share posts/li>  &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation utilities to animate views &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="animalsounds" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Animal Sounds</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/animalsounds/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/animalsounds/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/animalsounds/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/animalsounds/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">This animal sounds application is an amazing app for kids and it is a more useful app to know about the animal. This app will help your kids to know about the name of the animal. Animals are categorized. Correctly speaking the animal names in English.Perfect sound of a specific animal.Smooth and auto slider of the animals. Wiki details to know deeper about animals.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.vipapps.animal_sounds" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Recycler view to show the animal category &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">ViewPager to show animals and slide &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">TextToSpeech (TTS) to echo animal names &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Music player to play animal sounds &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation to zoom in and zoom out effect in animal image &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="fatwaarka" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Fatwa Arkanul Islam (ফতোওয়া আরকানুল ইসলাম)</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/fatwaarka/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/fatwaarka/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/fatwaarka/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/fatwaarka/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">The content of this app is taken from a book named "Fatwa Arkanul Islam". In this book, there are many questions about Islam and has been answered by, "Sheikh Muhammad Bin Saleh Al-usaimin (R)".Islam is based on five things and the question around these things is limitless. This app will help you to find out the answer to the common and much-needed Fatwa about Islam. Everything is categorized in the navigation drawer menu. Searching the option to search for content. Important contents can be added to Favorite Lists. Contents can be shared on social media. Users can copy the content to the clipboard. Users can change the app theme as they want. Contents can be zoomed using finger gestures.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=secondpoject.com.shhridoy.navigation" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">NavigationView & DrawerLayout &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Fragments to view contents &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">SQLite database to add contents in Favorite List &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared Preference to change app theme &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Finch zoom to control the text size using fingure gestures &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Sharing intent to share contents &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="duaozikir" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Shahi Dua & Zikir (সহীহ দোআ ও যিকির)</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/duaozikir/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/duaozikir/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/duaozikir/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/duaozikir/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">It is an android app that is originally created from a book called Hisnul Muslim was written by Dr. Saeed ibn Ali ibn al-Qahtani and translated in Bengali by Abu Bakar Muhammad Zakaria. In this app, there are a lot of Dua and Zikirs included by their references from the Holy Quran and Hadith. Categorized topics. Users can save the important dua & zikirs on bookmarks. Users can also share the content on Social Media. Facility to choose the app theme as the user want. App font size and face also can be changed.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.shhridoy.duaandzikir" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">NavigationView & DrawerLayout &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Fragments to view contents &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">SQLite database to save contents &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared Preferences to change app theme, font size & font color as well &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Sharing intent to share contents &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="bdall" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">BD All University Info</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/bdall/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/bdall/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/bdall/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/bdall/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">BD All University Info is a directory of all university's basic and much-needed information of Bangladesh. You can know about the established year, the number of students, halls, departments, location, campus area and you can browse the university's website by clicking the link. The important thing is that you can know about all faculty and departments the university has. You can know which department under which faculty. Everything is categorized. Searching facility to search specific University. Webview to browse websites. Pinch zooming controls. App sharing intent.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=shhridoy.com.shhridoy.firstproject" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Gridview for catagories and Listview for University lists &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Webview for browse sites &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Search menu option &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Local data & images &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation Classes to animate &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="nstudiary" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">NSTU Diary (NSTUinfo)</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/nstudiary/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/nstudiary/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/nstudiary/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/nstudiary/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">In NSTU Diary (NSTUinfo) we've tried to gather all of the information about Noakhali Science & Technology University (NSTU). This application will help to keep the whole university into your mobile. Dynamic apps data to keep you update. Notify in real-time when data is updated. Theme customization.Font customization.Searching facility to find anyone you want.Cool UI and amazing animation.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.nstuinfo" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Volley to perse JSON data &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">File saving mechanism to work in offline &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Recyclerview (grid and list) for main content list &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Cardview & Popup window for details view &nbsp;</a>
                                                                        <a href="#">Circular menu for theme choosing option &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Navigation Drawer &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Webview to browse nstu official website &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared preferences to store preferences &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation utilities to animate views &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="saudirectory" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">SAU Directory</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/saudirectory/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/saudirectory/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/saudirectory/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/saudirectory/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">In SAU Directory we've tried to gather all of the information about Sher-e-Bangla Agricultural University (SAU). This application will help to keep the whole university into your mobile device. Dynamic apps data to keep you update. Notify in real-time when data is updated. Theme customization.Font customization.Searching facility to find anyone you want.Cool UI and amazing animation.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Play Store Link:</span>
                                                                    <a class="t-right" href="https://play.google.com/store/apps/details?id=com.saudirectory" target="_blank" class="btn btn-default" target="_blank">View on Google Play Store</a>
                                                                </li>
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">Retrofit to parse JSON data &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">File saving mechanism to work in offline &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Recyclerview (grid and list) for main content list &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Cardview & Popup window for details view &nbsp;</a>
                                                                        <a href="#">Circular menu for theme choosing option &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Navigation Drawer &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Webview to browse sau official website &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared preferences to store preferences &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation utilities to animate views &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <!-- <section class="section-project-post modal fade js-modal" id="cste10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button>
                                    <button class="btn-close au-btn au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Directory of CSTE 10th batch NSTU</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/cste10/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/cste10/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/cste10/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/cste10/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/android/cste10/5.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col col-aside">
                                                <aside class="project-aside">
                                                    <div class="project-aside-inner">
                                                        <div class="project-aside-block m-b-30">
                                                            <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                            <p class="project-aside-paragraph" style="text-align: justify;">It is a directory of basic information about all student of CSTE 10th batch of NSTU. It contains all information about a student which is probably needed to keep contact with that student. It includes mobile numbers, email addresses, birthdays, hometown and social links like Facebook, Instagram, Twitter, Linkedin, Github etc.All contacts under a simple list.Search option to find contacts.Data can be viewed in both offline and online mode.Contacts can be added to Favorites.Direct call, message and email facitilies.Same message can be send to all contacts.Birthday's notifications avialable.Json link change option.App theme can be changed.Contacts sharing and coping option added.</p>
                                                        </div>
                                                        <div class="project-aside-block m-b-45">
                                                            <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                            <ul class="project-aside-list">
                                                                <li>
                                                                    <span class="t-left">Used Technologies:</span>
                                                                    <span class="t-right cate-link">
                                                                        <a href="#">JSON persing to retrieve data &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Database to save data for offline and for favorites &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Notification & Alarm manager to push birthday notifications &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Tab fragments to view contents &nbsp;</a>
                                                                        <a href="#">Image downloader to download & use image in offline &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Call, SMS, email, sharing intents &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Shared preferences to save app mode and JSON URL &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Animation utilities to animate views &nbsp;.</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end section project post-->
    <!-- (END) PUT ANDROID PROJECTS INSIDE THIS COMMENT SECTION -->
    <!-- (START) PUT UI/UX DESIGN INSIDE THIS COMMENT SECTION -->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="webtemplate" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Web Template Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/webtemplate/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/webtemplate/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/webtemplate/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="homepage" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Home Page Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/homepage/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/homepage/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/homepage/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="landingpage" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Landing Page Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/landingpage/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/landingpage/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/landingpage/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="mobileapp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Mobile App Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/mobileapp/6.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="companyprofile" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Company Profile Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/5.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/6.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/7.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/companyprofile/8.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="canedesign" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Cane Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/canedesign/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/canedesign/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/canedesign/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="bookcover" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Book Cover Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/bookcover/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/bookcover/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/bookcover/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/bookcover/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="businesscard" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Business Card Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/businesscard/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/businesscard/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/businesscard/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/businesscard/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="brochure" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Brochure Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/brochure/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/brochure/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/brochure/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="rackcard" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Rack Card Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/rackcard/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/rackcard/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/rackcard/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/rackcard/4.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="flyer" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Flyer Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/flyer/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/flyer/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/flyer/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/flyer/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/flyer/5.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="banner" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Banner Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/banner/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/banner/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/banner/3.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- section project post-->
        <section class="section-project-post modal fade js-modal" id="logo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader"></div>
                <div class="modal-content">
                    <div class="section-inner modal-primary">
                        <div class="container-fluid">
                            <div class="modal-header">
                                <div class="modal-header-logo">
                                    <img src="{{ URL::to('assets/images/icons/logo.png') }}" alt="Ora">
                                </div>
                                <div class="modal-header-control">
                                    <!-- <button class="btn-prev au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-left"></i>
                                    </button>
                                    <button class="btn-next au-btn au-btn-circle" type="button">
                                        <i class="lnr lnr-chevron-right"></i>
                                    </button> -->
                                    <button class="btn-close au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="lnr lnr-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-11 col-lg-9">
                                    <div class="modal-body">
                                        <article class="post-project m-b-55">
                                            <header class="post-header">
                                                <h3 class="post-title">Logo Design</h3>
                                            </header>
                                            <div class="row no-gutters">
                                                <div class="col col-figure">
                                                    <figure class="post-image">
                                                        <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                        data-slick-dotsclass="slick-dots-2">
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/logo/1.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/logo/2.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/logo/3.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/logo/4.png') }}" alt="Featured Details">
                                                        </div>
                                                        <div class="project-image-item">
                                                            <img class="img-fluid" src="{{ URL::to('assets/images/uxdesign/logo/5.png') }}" alt="Featured Details">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section project post-->
    <!-- (END) PUT UI/UX DESIGN INSIDE THIS COMMENT SECTION -->

        <!-- All JS-->
        <script src="{{ asset('assets/js/compressed.js') }}"></script>

        <!-- Vendor JS-->
        <script src="{{ asset('assets/vendor/validator/validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/config-contact.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

        {{-- <script>
          @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
            case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
            }
            @endif
        </script> --}}
        <script>
          @if(session('notification')['message'])
          var type="{{ isset(session('notification')['alert-type']) ? session('notification')['alert-type'] : 'info' }}"
          switch(type){
            case 'info':
            toastr.info("{{ session('notification')['message'] }}");
            break;
            case 'success':
            toastr.success("{{ session('notification')['message'] }}");
            break;
            case 'warning':
            toastr.warning("{{ session('notification')['message'] }}");
            break;
            case 'error':
            toastr.error("{{ session('notification')['message'] }}");
            break;
            }
            @endif
        </script>
        {{-- <script>
            @if(isset($notification['message']) && isset($notification['alert-type']))
                var type="{{$notification['alert-type']}}"
                switch(type){
                    case 'info':
                    toastr.info("{{ $notification['message'] }}");
                    break;
                    case 'success':
                    toastr.success("{{ $notification['message'] }}");
                    break;
                    case 'warning':
                    toastr.warning("{{ $notification['message'] }}");
                    break;
                    case 'error':
                    toastr.error("{{ $notification['message'] }}");
                    break;
                }
            @endif
        </script> --}}
        {{-- <script>
          @if(isset($message) && isset($alertType))
          var type="{{ $alertType }}"
          switch(type){
            case 'info':
            toastr.info("{{ $message }}");
            break;
            case 'success':
            toastr.success("{{ $message }}");
            break;
            case 'warning':
            toastr.warning("{{ $message }}");
            break;
            case 'error':
            toastr.error("{{ $message }}");
            break;
            }
            @endif
        </script> --}}

        <script>
            filterSelection("all")
            function filterSelection(c) {
              var x, i;
              x = document.getElementsByClassName("filterDiv");
              if (c == "all") c = "";
              for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
              }
            }

            function w3AddClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
              }
            }

            function w3RemoveClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
              }
              element.className = arr1.join(" ");
            }

            // Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("hey");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
               
                //current[0].className = current[0].className.replace("active", "");
                current[2].className = current[2].className.replace("active", "");

                this.className += " active";
              });
            }
        </script>
        <!-- <SCRIPT LANGUAGE="javascript">

            function click() {
            if (event.myImage==1) {
            alert('No clicking!')
            }
            }
            document.onMouseDown=click

        </SCRIPT>  -->

        <script type="text/javascript">
            var message = "Sorry,Right click disabled";
            function clickIE()
            {
                if(document.all)
                {
                    // alert(message);
                    return false;
                }
            }
            function clickNS(e)
            {
                if(document.layers || (document.getElementById && !document.all))
                {
                    if (e.which == 2 || e.which == 3)
                    {
                        // alert(message);
                        return false;
                    }
                }
            }
            if (document.layers)
            {
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown = clickNS;
            }
            else
            {
                document.onmouseup = clickNS;
                document.oncontextmenu = clickIE;
            }
            document.oncontextmenu = new Function("return false");
        </script>

        <script type="text/javascript">
            function disableselect(e)
            {
                return false;
            }
            function reEnable()
            {
                return true;
            }
            document.onselectstart = new Function ("return false");
            if(window.sidebar)
            {
                // document.onmousedown = disableselect;
                document.oncontextmenu = disableselect;
                document.onclick = reEnable;
            }
        </script>

    </body>

    <script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0422'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='{{ ('assets/../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js') }}'></script>
    <!-- Mirrored from templates.aucreative.co/ora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 04:19:06 GMT -->
    </html>
<!-- end document-->