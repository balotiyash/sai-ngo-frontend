<!-- 
    File: pages/donate/index.php
    Author: Yash Balotiya
    Description: This file contains the donate page of the website.
    Created on: 16/03/2025
    Last Modified: 02/05/2025
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

    <!-- Script -->
    <script>
        function sendMail() {
            const amount = document.getElementById('amount').value.trim();
            const currency = document.getElementById('currency_in_word').value.trim();
            const amountInr = document.getElementById('donation_amount').value.trim();
            const bankName = document.getElementById('bank_name').value.trim().toUpperCase();
            const name = document.getElementById('name').value.trim().toUpperCase();
            const localAddress = document.getElementById('local_address').value.trim().toUpperCase();
            const localPin = document.getElementById('pin').value.trim();
            const officialAddress = document.getElementById('official_address').value.trim().toUpperCase();
            const officialPin = document.getElementById('official_pin').value.trim();
            const telephone = document.getElementById('telephone_number').value.trim();
            const fax = document.getElementById('fax').value.trim();
            const mobileNumber = document.getElementById('mobile_number').value.trim();
            const profession = document.getElementById('profession_designation').value.trim().toUpperCase();
            const email = document.getElementById('email').value.trim().toLowerCase();
            const pan = document.getElementById('pan_no').value.trim().toUpperCase();
            const nationality = document.getElementById('nationality').value.trim().toUpperCase();
            const sex = document.getElementById('sex').value.trim().toUpperCase();
            const dob = document.getElementById('dob').value.trim();
            const highestQualification = document.getElementById('highest_qualification').value.trim().toUpperCase();

            const qno1 = document.getElementById('qno1').value.trim();
            const qno2 = document.getElementById('qno2').value.trim();
            const qno3 = document.getElementById('qno3').value.trim();

            if (
                amount === "" ||
                currency === "" ||
                amountInr === "" ||
                bankName === "" ||
                name === "" ||
                localAddress === "" ||
                localPin === "" ||
                officialAddress === "" ||
                officialPin === "" ||
                telephone === "" ||
                mobileNumber === "" ||
                profession === "" ||
                email === "" ||
                pan === "" ||
                nationality === "" ||
                sex === "" ||
                dob === "" ||
                highestQualification === ""
            ) {
                alert("Please fill all the required fields.");
                return;
            }

            // Write regex validation for pin, telephone, mobile number, email, pan
            const pinRegex = /^[1-9][0-9]{5}$/;
            const telephoneRegex = /^[0-9]{10}$/;
            const mobileNumberRegex = /^[0-9]{10}$/;
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            const nameRegex = /^[a-zA-Z\s]+$/;

            if (!nameRegex.test(bankName)) {
                alert("Please enter a valid bank name.");
                return;
            }

            if (!nameRegex.test(name)) {
                alert("Please enter a valid name.");
                return;
            }

            if (!pinRegex.test(localPin)) {
                alert("Please enter a valid local pin code.");
                return;
            }

            if (!pinRegex.test(officialPin)) {
                alert("Please enter a valid official pin code.");
                return;
            }

            if (!telephoneRegex.test(telephone)) {
                alert("Please enter a valid telephone number.");
                return;
            }

            if (!mobileNumberRegex.test(mobileNumber)) {
                alert("Please enter a valid mobile number.");
                return;
            }

            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            if (!panRegex.test(pan)) {
                alert("Please enter a valid PAN number.");
                return;
            }

            if (!nameRegex.test(nationality)) {
                alert("Please enter a valid Nationality.");
                return;
            }
            
            if (!nameRegex.test(sex)) {
                alert("Please enter valid sex.");
                return;
            }
            
            if (!nameRegex.test(profession)) {
                alert("Please enter a valid Profession/Designation.");
                return;
            }

            // Send mail
            const subject = "Donation Form Submission";
            const body = `
                To,
                The President,
                Social Activities Integration-SAI
                Byculla. (W), Mumbai-400 011. INDIA.

                Dear Sir/Madam,
                I would like to request you to please accept my Donation towards HIV / AIDS/CANCER Patient Name / APNI DUNIYA PROJECT / CHILD EDUCATION /Other _____________________________________ for his Treatment to SOCIAL ACTIVITIES INTEGRATION.
                \n
                Amount: ${amount}\n
                Currency: ${currency}\n
                Amount in INR: ${amountInr}\n
                Bank Name: ${bankName}\n
                Name: ${name}\n
                Local Address: ${localAddress}\n
                Local Pin: ${localPin}\n
                Official Address: ${officialAddress}\n
                Official Pin: ${officialPin}\n
                Telephone Number: ${telephone}\n
                Fax: ${fax}\n
                Mobile Number: ${mobileNumber}\n
                Profession/Designation: ${profession}\n
                Email: ${email}\n
                PAN No.: ${pan}\n
                Nationality: ${nationality}\n
                Sex: ${sex}\n
                Date of Birth: ${dob}\n
                Highest Qualification: ${highestQualification}\n
                \n
                Questionnaire:
                1. Your Message /Feelings towards Patient and about us?\n
                ${qno1}\n\n
                2. What Motivated you for Social Activities Integration (SAI)?\n
                ${qno2}\n\n
                3. Are you associated with Medical / Social Field?\n
                ${qno3}`;

            // const mailtoLink = `mailto:info@saingo.org?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            // window.location.href = mailtoLink;

            // print a particular div instead of sending mail
            // const printContent = document.querySelector('.rightContainer').innerHTML;
            // const originalContent = document.body.innerHTML;
            // document.body.innerHTML = printContent;
            // window.print();
            // document.body.innerHTML = originalContent;
            // window.location.reload(); // Reload the page to reset the form

        }
    </script>
</body>

</html>