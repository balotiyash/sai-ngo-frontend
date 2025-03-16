/** 
 * File: pages/about/event-details.js
 * Author: Atharv Mirgal
 * Description: This script displays the details of a specific event.
 * Created on: 16/03/2025
 * Last Modified: 16/03/2025
*/

import { events } from "./event-data.js";

// Function to get event ID from URL
function getEventIdFromURL() {
    const params = new URLSearchParams(window.location.search);
    return params.get("id") ? parseInt(params.get("id")) : null;
}

// Function to display event details
function displayEventDetails() {
    const eventId = getEventIdFromURL();
    const event = events.find(event => event.id === eventId);

    if (!event) {
        document.querySelector(".event-content").innerHTML = "<h2>Event not found!</h2>";
        return;
    }

    document.getElementById("event-image").src = event.image;
    document.getElementById("event-image").alt = event.title;
    document.getElementById("event-title").textContent = event.title;
    document.getElementById("event-description").textContent = event.description;
    document.getElementById("event-date").textContent = new Date(event.date).toDateString();
    document.getElementById("event-status").textContent = event.status;

    // Generate Google Calendar link
    const googleCalendarLink = `https://www.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(event.title)}
        &dates=${event.date.replace(/-/g, '')}/${event.date.replace(/-/g, '')}
        &details=${encodeURIComponent(event.description)}
        &sf=true&output=xml`;

    document.getElementById("add-to-calendar").href = googleCalendarLink;
}

// Load event details when page loads
window.onload = displayEventDetails;