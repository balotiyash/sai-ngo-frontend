/** 
 * File: pages/about/events.js
 * Author: Atharv Mirgal
 * Description: This script file is used to dynamically add events to the events page.
 * Created on: 16/03/2025
 * Last Modified: 16/03/2025
*/

import { events } from "./event-data.js";

// Adding events to the page
const eventsContainer = document.querySelector('.events');

events.forEach(event => {
    const eventCard = document.createElement('div');
    eventCard.classList.add('event-card');

    // Trim long descriptions
    const maxDescLength = 100;
    const trimmedDescription = event.description.length > maxDescLength
        ? event.description.substring(0, maxDescLength) + "..."
        : event.description;

    eventCard.innerHTML = `
    <img src="${event.image}" alt="${event.title}">
    <div class="event-date">${event.date}</div>
    <h2>${event.title}</h2>
    <p>${trimmedDescription}</p>
    <a href="event-details.php?id=${event.id}" class="read-more">Read More</a>
`;

    eventsContainer.appendChild(eventCard);
});