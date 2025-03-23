import { news } from './news-data.js';

window.addEventListener('DOMContentLoaded', () => {
    const newsContainer = document.querySelector('.news');

    // Generate news cards
    news.forEach((item, index) => {
        const card = document.createElement('div');
        card.classList.add('news-card');
        
        // Get the first image for the card
        const firstImage = Object.values(item)[0];

        card.innerHTML = `
            <div class="image-thumbnails">
                <img src="${firstImage}" alt="Event Image" class="thumbnail" />
            </div>
        `;

        // Add click event to open slider modal
        card.addEventListener('click', () => openSlider(item));

        newsContainer.appendChild(card);
    });
});

function openSlider(item) {
    const modal = document.createElement('div');
    modal.classList.add('modal');
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="slider">
                ${Object.values(item).map(url => `
                    <div class="slide">
                        <img class="news-image" src="${url}" alt="Slider Image" />
                    </div>
                `).join('')}
            </div>
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    `;

    // Append modal to body
    document.body.appendChild(modal);

    // Close modal on click of the close button
    modal.querySelector('.close-btn').addEventListener('click', () => {
        modal.remove();
    });

    // Slider functionality
    let slideIndex = 0;
    const slides = modal.querySelectorAll('.slide');
    const prevButton = modal.querySelector('.prev');
    const nextButton = modal.querySelector('.next');

    function showSlide(index) {
        if (index < 0) slideIndex = slides.length - 1;
        if (index >= slides.length) slideIndex = 0;

        slides.forEach((slide, i) => {
            slide.style.display = i === slideIndex ? 'block' : 'none';
        });
    }

    prevButton.addEventListener('click', () => {
        slideIndex--;
        showSlide(slideIndex);
    });

    nextButton.addEventListener('click', () => {
        slideIndex++;
        showSlide(slideIndex);
    });

    showSlide(slideIndex);
}
