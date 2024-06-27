document.addEventListener("DOMContentLoaded", function () {
    const productModal = document.getElementById('productModal');
    const closeModal = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalDescription = document.getElementById('modalDescription');
    const modalRijHoogte = document.getElementById('modalRijHoogte');
    const modalPrice = document.getElementById('modalPrice');

    if (closeModal) {
        closeModal.addEventListener('click', function () {
            productModal.classList.add('hidden');
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

            productModal.classList.remove('hidden');
        });
    });

    const cartModal = document.getElementById('cartModal');
    const closeCartModal = document.getElementById('closeCartModal');
    const cartModalBody = document.getElementById('cartModalBody');

    if (closeCartModal) {
        closeCartModal.addEventListener('click', function () {
            cartModal.classList.add('hidden');
        });
    }

    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;

            cartModalBody.innerHTML = `
                <div class="flex items-center">
                    <img src="${image}" alt="${name}" class="w-16 h-16 object-cover">
                    <span class="ml-4">${name}</span>
                    <span class="ml-auto font-bold text-[#ff4500]">€${price}</span>
                </div>
            `;

            cartModal.classList.remove('hidden');
        });
    });
});
