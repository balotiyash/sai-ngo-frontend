<!-- 
    File: pages/home/index.php
    Author: Atharv Mirgal
    Description: This file is the home page of the website. It contains a brief description of the website and its features.
    Created on: 23/03/2025
    Last Modified: 23/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | Home</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./home.css">

</html>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <!-- Main Content -->

    <!-- Hero Image -->
    <div class="hero-image">
        <div class="hero-text">
            <h1>SAI NGO</h1>
            <p>Our Moto - Human Care</p>
        </div>
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
            <div class="partners-logos">
                <img src="../../assets/home/partner1.jpg" alt="Partner 1">
                <img src="../../assets/home/partner2.jpg" alt="Partner 2">
                <img src="../../assets/home/partner3.jpg" alt="Partner 3">
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="projects-section">
        <h2>OUR PROJECTS</h2>

        <div class="project-cards">
            <!-- Project 1 -->
            <div class="project-card" onclick="redirectTo('../events/index.php')">
                <img src="../../assets/home/project1.png" alt="Apani Duniya">
                <div class="project-card-content">
                    <h3>Apani Duniya – A Village for Orphans</h3>
                    <span class="date">November 18, 2017</span>
                    <p>We have purchased a land consisting of 13.5 acres</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card" onclick="redirectTo('../events/index.php')">
                <img src="../../assets/home/project2.png" alt="AIDS Project">
                <div class="project-card-content">
                    <h3>AIDS Project</h3>
                    <span class="date">November 18, 2017</span>
                    <p>2.10 million people & more suffer from HIV.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card" onclick="redirectTo('../events/index.php')"> 
                <img src="../../assets/home/project2.png" alt="Cancer Aid Cell">
                <div class="project-card-content">
                    <h3>Cancer Aid Cell</h3>
                    <span class="date">January 1, 2003</span>
                    <p>SAI has since 2013 taken additional initiatives.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../../shared/footer/footer.html'; ?>
</body>

<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>

</html>