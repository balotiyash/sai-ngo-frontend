<!-- 
    File: pages/events/event-details.php
    Author: Atharv Mirgal
    Description: This file contains structure of the event details page.
    It displays the event image, title, description, date, status and a button to add the event to Google Calendar.
    Created on: 16/03/2025
    Last Modified: 16/03/2025
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Event Details</title>
    <link rel="stylesheet" href="./event-details.css">
</head>

<body>

    <!-- Event Image -->
    <div class="event-banner">
        <img id="event-image" src="" alt="Event Image">
    </div>

    <!-- Event Content -->
    <div class="event-content">
        <h1 id="event-title"></h1>
        <p id="event-description"></p>

        <!-- Add to Google Calendar -->
        <a id="add-to-calendar" href="#" target="_blank" class="add-to-calendar">📅 Add to Google Calendar</a>

        <!-- Event Details -->
        <div class="event-details">
            <h3>DETAILS</h3>
            <p><strong>Date:</strong> <span id="event-date"></span></p>
            <p><strong>Event Status:</strong> <span id="event-status"></span></p>
        </div>

        <!-- Back to Events -->
        <a href="index.php" class="back-button">⬅ Back to Events</a>
    </div>

    <!-- Event Details Script -->
    <script type="module" src="event-details.js"></script>
</body>

</html>