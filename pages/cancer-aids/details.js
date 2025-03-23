import { cancerAids } from "./data.js";

// Function to get query parameters
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

document.addEventListener("DOMContentLoaded", () => {
    const id = getQueryParam("id");
    const person = cancerAids.find(p => p.id == id);

    if (person) {
        document.getElementById("details-container").innerHTML = `
            <div class="profile-card">
                <img src="${person.profile}" alt="${person.name}" class="profile-img">
                <div class="profile-details">
                    <h3>${person.name}</h3>
                    <p><strong>Date:</strong> ${person.date}</p>
                    <p><strong>Posted By:</strong> ${person.postedBy}</p>
                </div>
            </div>
            <div class="report-section">
                <h3>Medical Report</h3>
                <img src="${person.report}" alt="Medical Report" class="report-img">
            </div>
        `;
    } else {
        document.getElementById("details-container").innerHTML = "<p>Person not found.</p>";
    }
});
