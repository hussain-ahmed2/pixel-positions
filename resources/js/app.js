import './bootstrap';

import.meta.glob([
    '../images/**'
]);

const logoImages = document.querySelectorAll('.image-logo');

logoImages.forEach(image => {
    image.onerror = function() {
        image.src = `https://placehold.co/400/png?text=${image.dataset.name}`;
    }
});