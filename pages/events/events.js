/** 
 * File: pages/about/events.js
 * Author: Atharv Mirgal
 * Description: This script file is used to dynamically add events to the events page.
 * Created on: 16/03/2025
 * Last Modified: 16/03/2025
*/

import { events } from "./event-data.js";

// Select title
const title = document.querySelector("#title-text");

// Select events container
const eventsContainer = document.querySelector(".events");

// Get selected category from URL
const urlParams = new URLSearchParams(window.location.search);
const selectedCategory = urlParams.get("category") || "Upcoming"; // Default: Upcoming

// Set title based on selected category
title.textContent = selectedCategory + " Events";

// Function to display events based on category
function displayEvents(status) {
    eventsContainer.innerHTML = ""; // Clear previous content

    const filteredEvents = events.filter(event => event.status === status);

    if (filteredEvents.length === 0) {
        eventsContainer.innerHTML = "<p>No events found for this category.</p>";
        return;
    }

    filteredEvents.forEach(event => {
        const eventCard = document.createElement("div");
        eventCard.classList.add("event-card");

        // Format Date
        const eventDate = new Date(event.date).toDateString();

        // Trim long descriptions
        const maxDescLength = 100;
        const trimmedDescription = event.description.length > maxDescLength
            ? event.description.substring(0, maxDescLength) + "..."
            : event.description;

        eventCard.innerHTML = `
            <img src="${event.image}" alt="${event.title}">
            <div class="event-date">${eventDate}</div>
            <h2>${event.title}</h2>
            <p>${trimmedDescription}</p>
            <a href="event-details.php?id=${event.id}" class="read-more">Read More</a>
        `;

        eventsContainer.appendChild(eventCard);
    });
}

// Load events based on selected category
displayEvents(selectedCategory);
