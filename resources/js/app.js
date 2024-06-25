import './bootstrap';

// Initialize functions on DOMContentLoaded
document.addEventListener("DOMContentLoaded", function () {
    // Initialize other functionalities like cart and burger menu here
    
    // Burger menu
    const burger = document.querySelectorAll(".navbar-burger");
    const menu = document.querySelectorAll(".navbar-menu");

    if (burger.length && menu.length) {
        for (let i = 0; i < burger.length; i++) {
            burger[i].addEventListener("click", function () {
                for (let j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    const close = document.querySelectorAll(".navbar-close");
    const backdrop = document.querySelectorAll(".navbar-backdrop");

    if (close.length) {
        for (let i = 0; i < close.length; i++) {
            close[i].addEventListener("click", function () {
                for (let j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    if (backdrop.length) {
        for (let i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener("click", function () {
                for (let j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    // Cart functionality
    const cartIcon = document.querySelector('.fa-cart-shopping');
    const cartSheet = document.getElementById('cartSheet');
    const closeCartButton = document.getElementById('closeCart');
    const cartItemsList = document.getElementById('cartItems');
    const emptyCartMessage = document.getElementById('emptyCartMessage');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    let cart = [];

    if (cartIcon) {
        cartIcon.addEventListener('click', function() {
            cartSheet.classList.toggle('hidden');
            renderCart();
        });

        if (closeCartButton) {
            closeCartButton.addEventListener('click', function() {
                cartSheet.classList.add('hidden');
            });
        }

        if (addToCartButtons.length > 0) {
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const item = {
                        name: this.dataset.name,
                        price: this.dataset.price,
                        image: this.dataset.image
                    };
                    cart.push(item);
                    renderCart();
                });
            });
        }
    }

    function renderCart() {
        cartItemsList.innerHTML = '';
        if (cart.length === 0) {
            emptyCartMessage.classList.remove('hidden');
        } else {
            emptyCartMessage.classList.add('hidden');
            cart.forEach(item => {
                const listItem = document.createElement('li');
                listItem.classList.add('flex', 'justify-between', 'items-center');
                listItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover">
                    <span>${item.name}</span>
                    <span class="font-bold text-[#ff4500]">€${item.price}</span>
                `;
                cartItemsList.appendChild(listItem);
            });
        }
    }

    // Modal functionality
    const modal = document.getElementById('productModal');
    const closeModal = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalDescription = document.getElementById('modalDescription');
    const modalRijHoogte = document.getElementById('modalRijHoogte');
    const modalPrice = document.getElementById('modalPrice');

    closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

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

            modal.classList.remove('hidden');
        });
    });
});
