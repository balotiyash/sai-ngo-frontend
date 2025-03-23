import { cancerAids } from "./data.js";

document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("cards-container");

    // Clear existing content
    container.innerHTML = "";

    // Loop through data and create cards
    cancerAids.forEach(person => {
        const card = document.createElement("div");
        card.classList.add("card");

        card.innerHTML = `
                <img src="${person.profile}" alt="${person.name}">
                <h4>${person.name}</h4>
                <button class="read-more" onclick="viewReport(${person.id})">Read more</button>
        `;

        container.appendChild(card);
    });
});

// Function to handle 'Read more' button click
window.viewReport = (id) => {
    window.location.href = `details.php?id=${id}`;
};