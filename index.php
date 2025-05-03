<!-- 
    File: pages/home/index.php
    Author: Atharv Mirgal, Yash Balotiya
    Description: This file is the home page of the website. It contains a brief description of the website and its features.
    Created on: 23/03/2025
    Last Modified: 02/05/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | Home</title>

    <!-- Meta Data -->
    <?php include './shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./style.css">

    <!-- Scripts -->
    <script src="./main.js"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</html>

<body>
    <!-- Header Navbar -->
    <header>
        <nav>
            <!-- Mobile -->
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#5f6368" style="margin-top: 12px;">
                            <path
                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg> </a></li>
                <li><a class="nav-link1" href="./pages/donate" style="color: orange;"><b><big>Donate</big></b></a></li>
                <li><a class="nav-link2" href="./">Home</a></li>
                <li><a class="nav-link3" href="./pages/about">About Us</a></li>
                <li><a class="nav-link4" href="./pages/certificates">Certificates</a></li>
                <li><a class="nav-link5" href="./pages/events/index.php?category=Upcoming">Upcoming Events</a></li>
                <li><a class="nav-link6" href="./pages/events/index.php?category=Current">Current Events</a></li>
                <li><a class="nav-link7" href="./pages/events/index.php?category=Past">Past Events</a></li>
                <li><a class="nav-link8" href="./pages/news">News</a></li>
                <li><a class="nav-link9" href="./pages/projects/past.php">Past Projects</a></li>
                <li><a class="nav-link10" href="./pages/projects/current.php">Current Projects</a></li>
                <li><a class="nav-link11" href="./pages/cancer-aids">Cancer AIDS Cell</a></li>
                <li><a class="nav-link12" href="./pages/other-projects">Apani Duniya</a></li>
                <li><a class="nav-link13" href="./pages/contact">Contact Us</a></li>
            </ul>

            <!-- Desktop -->
            <ul class="navbar">
                <li class="one"><a id="logoHref" href="./"><img id="navbar-logo" src="./assets/images/Banner.png" alt="Sai NGO Logo"
                            id="navbar-logo"></a>
                </li>

                <li class="hideOnMobile"><a href="./pages/donate" class="navDonateBtn nav-link14">Donate</a></li>

                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg></a></li>
            </ul>
        </nav>

        <div class="navLinks">
            <ul>
                <li><a class="nav-link15" href="./">Home</a></li>
                <li><a class="nav-link16" href="./pages/about">About Us</a></li>
                <li><a class="nav-link17" href="./pages/certificates">Certificates</a></li>
                <li>
                    <a href="#">Events</a>
                    <ul class="eventList">
                        <li><a class="nav-link18" href="./pages/events/index.php?category=Upcoming">Upcoming Events</a></li>
                        <li><a class="nav-link19" href="./pages/events/index.php?category=Current">Current Events</a></li>
                        <li><a class="nav-link20" href="./pages/events/index.php?category=Past">Past Events</a></li>
                    </ul>
                </li>
                <li><a class="nav-link21" href="./pages/news">News</a></li>
                <li>
                    <a href="#">Projects</a>
                    <ul class="projectList">
                        <li><a class="nav-link22" href="./pages/projects/past.php">Past Projects</a></li>
                        <li><a class="nav-link23" href="./pages/projects/current.php">Current Projects</a></li>
                    </ul>
                </li>
                <li><a class="nav-link24" href="./pages/cancer-aids">Cancer AIDS Cell</a></li>
                <li><a class="nav-link25" href="./pages/other-projects">Apani Duniya</a></li>
                <li><a class="nav-link26" href="./pages/contact">Contact Us</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Image Slider -->
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="hero-image" style="background-image: url('./assets/home/heroImg1.jpg');">
                    <div class="hero-text">
                        <h1>SAI NGO</h1>
                        <p>Our Moto - Human Care</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="hero-image" style="background-image: url('./assets/home/heroImg2.jpg');">
                    <div class="hero-text">
                        <h1>WE NEED YOUR HELP</h1>
                        <p>YOU CAN MAKE DIFFERENCE BY DONATING IN THE LIFE OF NEEDY. </p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="hero-image" style="background-image: url('./assets/home/heroImg3.jpg');">
                    <div class="hero-text">
                        <h1>Hollywood & Bollywood Actress Priyanka Chopra Supporting Sai</h1>
                        <p>We Need Your Help. You Can Make Difference By Donating In The Life Of Needy.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <div class="hero-image" style="background-image: url('./assets/home/heroImg4.jpg');">
                    <div class="hero-text">
                        <h1>Bollywood Actor Anant Jog Supporting Sai</h1>
                        <p>We Need Your Help. You Can Make Difference By Donating In The Life Of Needy.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper Pagination (Dots) -->
        <div class="swiper-pagination"></div>
    </div>


    <!-- Mission Section -->
    <div class="mission-section">
        <div class="mission-text">
            <p id="mission-head">WE HELP POOR & UNDERPRIVILEGED PEOPLE & THEIR CHILDREN TO GET CARE, EDUCATION &
                TREATMENT</p>
            <div id="mission-desc">
                <p>
                    Since 1991 we are providing health care services to the Poor & neglected Sex Workers,
                    Poor People Living
                    with HIV & their Children for the Prevention & Treatment, enlightening about human & legal rights to
                    fight against injustice. Vocational training has brought radical change in their life given up the
                    prostitution.
                </p>

                <p>
                    The education to the children of sex workers & marginalized people has transformed the life pattern
                    of
                    them. Because of education child prostitution, human trafficking has been stopped & the children of
                    marginalized people have secured better education, employment, personality development & joined the
                    mainstream of the society. Their future will be brighter & they will live happily with their single
                    mothers & poor parents. Education will make them responsible citizen of the country & they will
                    perform
                    the work of nation building. Hence there is absolute need of funding support from your good selves.
                </p>

                <p>
                    Since 2013 we have helped 160 Poor Children infected by Cancer for their treatment & now living
                    happy
                    life. By knowing our help to the poor Kid Cancer Patients many other such cases are approaching to
                    us
                    for the financial help for their treatment. Deserving cases are considered by us.
                </p>

                <p>
                    We also provide help care services for the prevention & treatment of Hepatitis B for poor Patients.
                </p>

                <p>
                    Apani Duniya- We have proposed a unique project viz. Apani Duniya at Kuhe, Bhiwandi wherein we have
                    purchased 13.5 acres of land & proposed to construct Shelters for Orphans, destitute Women,
                    educational,
                    hospice center, vocational Center. In view of above we earnestly request you to please donate your
                    mite
                    for the noble cause.
                </p>
            </div>
        </div>
    </div>

    <!-- About & Partners Section -->
    <div class="about-partners">
        <div class="about-text">
            <h2>WHO ARE WE?</h2>
            <p>Social Activities Integration (SAI) is a non-profit organization that strives to prevent the spread of
                HIV/AIDS & Cancer and also brings relief to patients who need support and care. We also provide
                education.</p>
        </div>

        <div class="about-video">
            <iframe src="https://www.youtube.com/embed/SHl0fsnXZk8" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="partners-section">
            <h3>🔸 OUR PARTNERS</h3>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./assets/home/partner1.jpg" alt="Partner 1"></div>
                    <div class="swiper-slide"><img src="./assets/home/partner2.jpg" alt="Partner 2"></div>
                    <div class="swiper-slide"><img src="./assets/home/partner3.jpg" alt="Partner 3"></div>
                    <div class="swiper-slide"><img src="./assets/home/partner1.jpg" alt="Partner 4"></div>
                    <div class="swiper-slide"><img src="./assets/home/partner2.jpg" alt="Partner 5"></div>
                    <div class="swiper-slide"><img src="./assets/home/partner3.jpg" alt="Partner 6"></div>
                </div>
            </div>
        </div>

    </div>

    <!-- Projects Section -->
    <div class="projects-section">
        <h2>OUR PROJECTS</h2>

        <div class="project-cards">
            <!-- Project 1 -->
            <div class="project-card" onclick="redirectTo('./pages/other-projects')">
                <img src="./assets/home/project1.png" alt="Apani Duniya">
                <div class="project-card-content">
                    <h3>Apani Duniya – A Village for Orphans</h3>
                    <span class="date">November 18, 2017</span>
                    <p>We have purchased a land consisting of 13.5 acres</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card" onclick="redirectTo('./pages/other-projects')">
                <img src="./assets/home/project2.png" alt="AIDS Project">
                <div class="project-card-content">
                    <h3>AIDS Project</h3>
                    <span class="date">November 18, 2017</span>
                    <p>2.10 million people & more suffer from HIV.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card" onclick="redirectTo('./pages/other-projects')">
                <img src="./assets/images/cancer-360x300.png" alt="Cancer Aid Cell">
                <div class="project-card-content">
                    <h3>Cancer Aid Cell</h3>
                    <span class="date">January 1, 2003</span>
                    <p>SAI has since 2013 taken additional initiatives.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include './shared/footer/footer.html'; ?>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper('.swiper-container', {
            slidesPerView: 4, // Show 3 partners by default
            spaceBetween: 20, // Space between slides
            loop: true, // Infinite loop
            autoplay: {
                delay: 3000, // Auto-slide every 3s
                disableOnInteraction: false, // Keep autoplay after interaction
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4
                }, // Desktop
                768: {
                    slidesPerView: 3
                }, // Tablets
                480: {
                    slidesPerView: 2
                }, // Mobile
                300: {
                    slidesPerView: 1
                }
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        new Swiper('.hero-slider', {
            effect: "fade", // Smooth fade transition
            autoplay: {
                delay: 4000, // Auto-slide every 4s
                disableOnInteraction: false,
            },
            loop: true, // Infinite looping
            pagination: {
                el: ".swiper-pagination",
                clickable: true, // Allow clicking dots
            }
        });
    });
</script>

</html>