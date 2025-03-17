<!-- 
    File: pages/certificates/index.php
    Author: Atharv Mirgal
    Description: This file is the main page for the certificates section of the website.
    Created on: 16/03/2025
    Last Modified: 17/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tab Details -->
    <title>SAI NGO | Certificates</title>

    <!-- Meta Data -->
    <?php include '../../shared/metaText.html'; ?>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="./certificates.css">
</head>

<body>
    <!-- Navbar -->
    <?php include '../../shared/navbar/navbar.html'; ?>

    <section>
        <h1>Certificates</h1>

        <!-- Certificates -->
        <div class="certificates">

        </div>
    </section>

    <!-- Footer -->
    <?php include '../../shared/footer/footer.html'; ?>

</body>

<script>
    // certificates data
    const certificates = [
        {
            url: "../../assets/certificates/cert1.jpg",
            alt: "Certificate 1"
        },
        {
            url: "../../assets/certificates/cert2.jpg",
            alt: "Certificate 2"
        },
        {
            url: "../../assets/certificates/cert3.jpg",
            alt: "Certificate 3"
        },
        {
            url: "../../assets/certificates/cert4.jpg",
            alt: "Certificate 4"
        },
        {
            url: "../../assets/certificates/cert5.jpg",
            alt: "Certificate 5"
        },
        {
            url: "../../assets/certificates/cert6.jpg",
            alt: "Certificate 6"
        },
        {
            url: "../../assets/certificates/cert7.jpg",
            alt: "Certificate 7"
        },
        {
            url: "../../assets/certificates/cert8.jpg",
            alt: "Certificate 8"
        },
        {
            url: "../../assets/certificates/cert9.jpg",
            alt: "Certificate 9"
        },
        {
            url: "../../assets/certificates/cert10.jpg",
            alt: "Certificate 10"
        },
        {
            url: "../../assets/certificates/cert11.jpg",
            alt: "Certificate 11"
        },
        {
            url: "../../assets/certificates/cert12.jpg",
            alt: "Certificate 12"
        },
        {
            url: "../../assets/certificates/cert13.jpg",
            alt: "Certificate 13"
        },
        {
            url: "../../assets/certificates/cert14.jpg",
            alt: "Certificate 14"
        },
        {
            url: "../../assets/certificates/cert15.jpg",
            alt: "Certificate 15"
        },
        {
            url: "../../assets/certificates/cert16.jpg",
            alt: "Certificate 16"
        },
        {
            url: "../../assets/certificates/cert17.jpg",
            alt: "Certificate 17"
        },
        {
            url: "../../assets/certificates/cert18.jpg",
            alt: "Certificate 18"
        },
        {
            url: "../../assets/certificates/cert19.jpg",
            alt: "Certificate 19"
        }
    ]

    // certificates container
    const certificatesContainer = document.querySelector('.certificates');

    // create certificate cards
    certificates.forEach(certificate => {
        const certificateCard = document.createElement('div');
        certificateCard.classList.add('certificate-card');

        const certificateImage = document.createElement('img');
        certificateImage.src = certificate.url;
        certificateImage.alt = certificate.alt;

        certificateCard.appendChild(certificateImage);
        certificatesContainer.appendChild(certificateCard);
    });

    // Add click event listener to each certificate card
    const certificateCards = document.querySelectorAll('.certificate-card');

    certificateCards.forEach(certificateCard => {
        certificateCard.addEventListener('click', () => {
            const imageSrc = certificateCard.querySelector('img').src;

            // Open the image in a new tab
            const newWindow = window.open(imageSrc, '_blank');

            // Wait for the new window to load, then apply zoom
            if (newWindow) {
                newWindow.onload = () => {
                    newWindow.document.body.style.zoom = "200%"; // Zoom to 200%
                };
            }
        });
    });

</script>

</html>