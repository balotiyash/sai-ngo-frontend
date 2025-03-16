<!-- 
    File: pages/events/index.php
    Author: Atharv Mirgal
    Description: This file is the main page for the events section of the website.
    Created on: 16/03/2025
    Last Modified: 16/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | Events</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./events.css">
</head>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <!-- Events Section -->
    <section>
        <h1 id="title-text">Upcoming Events</h1>

        <div class="events">
        </div>
    </section>


    <!-- Footer -->
    <?php include '../../shared/footer/footer.html'; ?>

    <!-- Main Script -->
    <script src="./events.js" type="module"></script>
</body>

</html>