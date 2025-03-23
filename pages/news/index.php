<!-- 
    File: pages/news/index.php
    Author: Atharv Mirgal
    Description: This file is the main page for the news section of the website.
    Created on: 17/03/2025
    Last Modified: 17/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | News</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./news.css">
</html>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <!-- News Section -->
    <section>
        <h1 id="title-text">Latest News</h1>

        <div class="news">
        </div>
    </section>


    <!-- Footer -->
    <?php include '../../shared/footer/footer.html'; ?>

    <!-- Main Script -->
    <script src="./news.js" type="module"></script>
</body>

</html>