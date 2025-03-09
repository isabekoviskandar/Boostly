<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Stay Focused, Achieve More</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon and Touch Icon -->
    <link href="{{ asset('assets/img/boostly.jpeg') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&family=Poppins:wght@100;400;700&family=Nunito:wght@200;400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo.png" alt="">
                <h1 class="sitename">Boostly</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="{{ route('register_page') }}">Get Started</a>

        </div>
    </header>

    <main class="main">

        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Boost Your Focus and Productivity with Boostly</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Boostly is your ultimate tool to track focus and
                            measure
                            productivity. Stay organized, monitor your progress, and achieve your goals efficiently.</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('register_page') }}" class="btn-get-started">Get Started <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="Boostly Hero Image">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>About Boostly</h3>
                            <h2>Your Ultimate Focus and Productivity Tracker</h2>
                            <p>
                                Boostly helps you stay on top of your tasks and manage your time efficiently. Track your
                                focus, measure
                                productivity, and achieve your goals with ease. Join thousands of users who have boosted
                                their
                                efficiency with Boostly.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ route('register_page') }}"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Learn More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="About Boostly">
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->


        <!-- Values Section -->
        <section id="values" class="values section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Our Values</h2>
                <p>What Drives Us at Boostly</p>
            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="assets/img/values-1.png" class="img-fluid" alt="Focus">
                            <h3>Unwavering Focus</h3>
                            <p>We believe that focus is the key to productivity. Our tools help you stay concentrated on
                                what matters
                                most.</p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="assets/img/values-2.png" class="img-fluid" alt="Growth">
                            <h3>Personal Growth</h3>
                            <p>Boostly empowers you to track progress and continuously improve, turning goals into
                                achievements.</p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="assets/img/values-3.png" class="img-fluid" alt="Efficiency">
                            <h3>Efficiency First</h3>
                            <p>We prioritize productivity without the burnout, helping you get more done with less
                                stress.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Values Section -->


        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center text-center">
                            <i class="bi bi-person-circle" style="font-size: 2rem; color: #007bff;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Users</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center text-center">
                            <i class="bi bi-clock-history" style="color: #ff9800; font-size: 2rem;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5000"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Tracked Time (hrs)</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center text-center">
                            <i class="bi bi-check-circle" style="color: #4caf50; font-size: 2rem;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1200"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Completed Tasks</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center text-center">
                            <i class="bi bi-folder" style="color: #e91e63; font-size: 2rem;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Active Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Features Section -->
        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                <p>Our Advanced Features<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/features.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-xl-6 d-flex">
                        <div class="row align-self-center gy-4 w-100">

                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-item">
                                    <div class="feature-box d-flex align-items-center dropdown-toggle"
                                        data-bs-toggle="collapse" data-bs-target="#todoList" aria-expanded="false">
                                        <i class="bi bi-check"></i>
                                        <h3>To-Do List Management</h3>
                                    </div>
                                    <div class="collapse feature-description" id="todoList">
                                        <p>Organize your tasks with our intuitive to-do list feature. Create multiple
                                            lists, set deadlines, add descriptions, and easily mark items as complete.
                                            Our smart sorting options help you focus on what matters most.</p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-item">
                                    <div class="feature-box d-flex align-items-center dropdown-toggle"
                                        data-bs-toggle="collapse" data-bs-target="#pomodoroTimer"
                                        aria-expanded="false">
                                        <i class="bi bi-check"></i>
                                        <h3>Pomodoro Timer</h3>
                                    </div>
                                    <div class="collapse feature-description" id="pomodoroTimer">
                                        <p>Boost your productivity with our customizable Pomodoro timer. Work in focused
                                            intervals, take scheduled breaks, and track your daily focus sessions.
                                            Adjust work/break durations to match your personal workflow.</p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-item">
                                    <div class="feature-box d-flex align-items-center dropdown-toggle"
                                        data-bs-toggle="collapse" data-bs-target="#calendarIntegration"
                                        aria-expanded="false">
                                        <i class="bi bi-check"></i>
                                        <h3>Calendar Integration</h3>
                                    </div>
                                    <div class="collapse feature-description" id="calendarIntegration">
                                        <p>Seamlessly sync with Google Calendar, Outlook, and other popular calendar
                                            services. View your schedule alongside tasks, set recurring events, and
                                            receive notifications for upcoming appointments all in one place.</p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="feature-item">
                                    <div class="feature-box d-flex align-items-center dropdown-toggle"
                                        data-bs-toggle="collapse" data-bs-target="#taskPrioritization"
                                        aria-expanded="false">
                                        <i class="bi bi-check"></i>
                                        <h3>Task Prioritization</h3>
                                    </div>
                                    <div class="collapse feature-description" id="taskPrioritization">
                                        <p>Prioritize your workload with our flexible system. Assign importance levels,
                                            use color coding, and implement the Eisenhower Matrix to distinguish between
                                            urgent and important tasks. Never miss critical deadlines again.</p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="feature-item">
                                    <div class="feature-box d-flex align-items-center dropdown-toggle"
                                        data-bs-toggle="collapse" data-bs-target="#eventReminders"
                                        aria-expanded="false">
                                        <i class="bi bi-check"></i>
                                        <h3>Event Reminders</h3>
                                    </div>
                                    <div class="collapse feature-description" id="eventReminders">
                                        <p>Stay on track with customizable notifications. Set multiple reminders per
                                            task, choose from email, desktop, or mobile alerts, and configure
                                            notification timing that works for your schedule.</p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="feature-item">
                                    <div class="feature-box d-flex align-items-center dropdown-toggle"
                                        data-bs-toggle="collapse" data-bs-target="#progressTracking"
                                        aria-expanded="false">
                                        <i class="bi bi-check"></i>
                                        <h3>Progress Tracking</h3>
                                    </div>
                                    <div class="collapse feature-description" id="progressTracking">
                                        <p>Monitor your productivity with detailed analytics. View completion rates,
                                            track time spent on tasks, identify productivity patterns, and generate
                                            reports to continuously improve your workflow efficiency.</p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Add this CSS to your stylesheet -->
        <style>
            .feature-item {
                margin-bottom: 10px;
                border: 1px solid rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
            }

            .feature-box {
                cursor: pointer;
                position: relative;
                padding: 15px 40px 15px 15px;
                transition: all 0.3s ease;
                background-color: #f8f9fa;
                margin-bottom: 0;
            }

            .feature-box:hover {
                background-color: #f1f3f5;
            }

            .feature-box::after {
                content: "\f282";
                font-family: "bootstrap-icons";
                position: absolute;
                right: 15px;
                transition: transform 0.3s ease;
            }

            .feature-box[aria-expanded="true"]::after {
                transform: rotate(180deg);
            }

            .feature-box h3 {
                margin-bottom: 0;
            }

            .feature-description {
                padding: 15px;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
                background-color: #ffffff;
            }

            .feature-description p {
                margin-bottom: 0;
            }

            /* Ensure smooth transition for the collapse */
            .collapse {
                transition: height 0.35s ease;
            }

            /* Fix for full width */
            .col-xl-6.d-flex {
                display: flex;
            }

            .row.align-self-center {
                width: 100%;
            }
        </style>



        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Check Our Services</p>
            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-list-task icon"></i>
                            <h3>To-Do List Management</h3>
                            <p>Stay organized and productive with our easy-to-use task management system</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-clock-history icon"></i>
                            <h3>Pomodoro Technique</h3>
                            <p>Enhance your productivity by breaking work into focused intervals</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <i class="bi bi-sort-up icon"></i>
                            <h3>Task Prioritization</h3>
                            <p>Identify and focus on high-priority tasks for better efficiency</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <i class="bi bi-calendar-event icon"></i>
                            <h3>Event Reminders</h3>
                            <p>Set reminders and never miss an important event again</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <i class="bi bi-bar-chart icon"></i>
                            <h3>Progress Tracking</h3>
                            <p>Monitor your progress and stay motivated towards your goals</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-chat-square-text icon"></i>
                            <h3>Collaboration Tools</h3>
                            <p>Work together seamlessly with team collaboration and communication features</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                </div>

                <!-- Social Media Icons -->
                <div class="social-icons text-center mt-5" data-aos="fade-up" data-aos-delay="600">
                    <a href="https://www.linkedin.com/in/iskandar-isabekov-60745229b/" class="me-3"><i
                            class="bi bi-linkedin display-6 text-primary"></i></a>
                    <a href="https://t.me/isabekov_iskandar" class="me-3"><i
                            class="bi bi-telegram display-6 text-info"></i></a>
                    <a href="https://www.instagram.com/sbkf.6/" class="me-3"><i
                            class="bi bi-instagram display-6 text-danger"></i></a>
                    <a href="https://x.com/KENC1K" class="me-3"><i
                            class="bi bi-twitter-x display-6 text-primary"></i></a>
                    <a href="https://github.com/isabekoviskandar"><i class="bi bi-github display-6 text-dark"></i></a>
                </div>

            </div>

        </section><!-- /Contact Section -->



    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Boostly</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>School-21</p>
                        <p>Tashkent, Uzbekistan</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+998 95 020 09 26</span></p>
                        <p><strong>Email:</strong> <span>iskandarisabrkov@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">To-Do List Management</li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Pomodoro Timer</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Calendar Integration</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Event Reminders</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Boostly</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href=“https://themewagon.com>ThemeWagon
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
