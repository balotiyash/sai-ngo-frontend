<!-- 
    File: pages/contact/index.php
    Author: Yash Balotiya
    Description: This file contains the contact page of the website.
    Created on: 16/03/2025
    Last Modified: 02/05/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | Contact Us</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./contact.css">
</head>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <!-- Contact Us -->
    <main>
        <h2>Contact Us</h2>

        <!-- Form -->
        <section class="formSection">

            <!-- Left Side -->
            <div>
                <span>
                    <h3>About SAI NGO</h3>
                    <p>Social Activities Integration -SAI is a non-profit organization that strives to prevent the spread of HIV /AIDS & also bring relief to Cancer Patients who need support and care. It was established in 1991 by Mr. Vinay Vasta, the founder, and Secretary-General. Apart from medical care, we also try to secure the financial future of the affected and infected via vocational training and boosting their confidence to fight such deadly diseases, something that we are very proud of.</p>
                </span>

                <br><br>

                <span>
                    <h3>Contact Information</h3>
                    <p>+91-22-2301 6976</p>
                    <p>info@saingo.org</p>
                    <p>N M Joshi Marg, Byculla, Mumbai, Maharashtra 400011, India</p>

                    <!-- <span class="contactSpan">
                        <i class="fa-solid fa-phone icon"></i>
                    </span>
                    
                    <span class="contactSpan">
                        <i class="fa-solid fa-envelope icon"></i>
                    </span>

                    <span class="contactSpan">
                        <i class="fa-solid fa-location-dot icon"></i>
                    </span> -->
                </span>
            </div>

            <!-- Right Side -->
            <div class="formDiv">
                <h3>Send Us A Message</h3>

                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" onclick="sendMail()">Send</button>
            </div>
        </section>

        <!-- Map -->
        <section class="mapSection">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30183.02266509393!2d72.832301!3d18.981002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce5e90af9a39%3A0x618cb944387e3f57!2sByculla%20Municipal%20Secondary%20School!5e0!3m2!1sen!2sus!4v1742109238769!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>

    <!-- Footer -->
    <?php include '../../shared/footer/footer.html'; ?>

    <!-- Script -->
    <script>
        function sendMail() {
            const name = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const subject = document.querySelector('input[name="subject"]').value;
            const message = document.querySelector('textarea[name="message"]').value;

            if (name && email && subject && message) {
                const mailtoLink = `mailto:info@saingo.org?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`)}`;
                window.location.href = mailtoLink;
            } else {
                alert("Please fill in all fields.");
            }
        }
    </script>
</body>

</html>