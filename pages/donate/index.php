<!-- 
    File: pages/donate/index.php
    Author: Yash Balotiya
    Description: This file contains the donate page of the website.
    Created on: 16/03/2025
    Last Modified: 16/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | Donate</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./donate.css">
</head>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <!-- Contact Us -->
    <main>
        <!-- Left Side -->
        <section class="leftContainer">
            <!-- Intro -->
            <h2>Donate</h2>

            <!-- Accordation -->
            <?php include './termsNconditions.html'; ?>

            <!-- Other Details below accordations -->
            <?php include './payment.html'; ?>
        </section>

        <!-- Right Side -->
        <?php include './form.html'; ?>
    </main>

    <!-- Footer -->
    <?php include '../../shared/footer/footer.html'; ?>
</body>

</html>