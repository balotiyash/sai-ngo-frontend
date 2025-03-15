<!-- 
    File: pages/about/index.php
    Author: Yash Balotiya
    Description: This is the about page of the website.
    Created on: 15/03/2025
    Last Modified: 15/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | About Us</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./about.css">
    <link rel="stylesheet" href="./achievements.css">
</head>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <!-- About Us -->
    <main>
        <!-- About Us Section -->
        <section>
            <h1>About Us</h1>
            <p>Social Activities Integration -SAI is a non-profit organization that strives to prevent the spread of HIV /AIDS & also bring relief to Cancer Patients who need support and care. It was established in 1991 by Mr. Vinay Vasta, the founder, and Secretary-General. Apart from medical care, we also try to secure the financial future of the affected and infected via vocational training and boosting their confidence to fight such deadly diseases, something that we are very proud of.</p>
        </section>

        <!-- Our Teams -->
        <?php include './ourTeams.html'; ?>

        <!-- Our Achievements -->
        <?php include './achievements.html'; ?>

        <!-- Board Members -->
        <?php include './boardMembers.html'; ?>
    </main>
</body>

</html>