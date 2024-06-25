document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('productModal');
    const closeModal = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalDescription = document.getElementById('modalDescription');
    const modalRijHoogte = document.getElementById('modalRijHoogte');
    const modalPrice = document.getElementById('modalPrice');

    if (closeModal) {
        closeModal.addEventListener('click', function () {
            modal.style.display = 'none';
        });
    }

    const productElements = document.querySelectorAll('.product-item');
    productElements.forEach(product => {
        product.addEventListener('click', function () {
            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;
            const description = this.dataset.description;
            const rijhoogte = this.dataset.rijhoogte || '';

            modalTitle.textContent = name;
            modalImage.src = image;
            modalDescription.textContent = description;
            modalRijHoogte.textContent = rijhoogte ? 'Rijhoogte: ' + rijhoogte : '';
            modalPrice.textContent = '€' + price;

            modal.style.display = 'flex';
        });
    });
});
