import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelectorAll(".navbar-burger");
    const menu = document.querySelectorAll(".navbar-menu");

    if (burger.length && menu.length) {
        burger.forEach((burgerElement, index) => {
            burgerElement.addEventListener("click", function () {
                menu[index].classList.toggle("hidden");
            });
        });
    }

    const close = document.querySelectorAll(".navbar-close");
    const backdrop = document.querySelectorAll(".navbar-backdrop");

    if (close.length) {
        close.forEach(closeElement => {
            closeElement.addEventListener("click", function () {
                menu.forEach(menuElement => {
                    menuElement.classList.toggle("hidden");
                });
            });
        });
    }

    if (backdrop.length) {
        backdrop.forEach(backdropElement => {
            backdropElement.addEventListener("click", function () {
                menu.forEach(menuElement => {
                    menuElement.classList.toggle("hidden");
                });
            });
        });
    }

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
                button.addEventListener('click', function(event) {
                    event.stopPropagation();
                    const item = {
                        name: this.dataset.name,
                        price: this.dataset.price,
                        image: this.dataset.image
                    };
                    cart.push(item);
                    renderCart();

                    // Show the cart confirmation modal
                    showCartConfirmationModal();
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
            const checkoutButton = document.createElement('button');
            checkoutButton.innerText = 'Check-out';
            checkoutButton.classList.add('mt-4', 'bg-gray-200', 'hover:bg-gray-300', 'text-black', 'px-4', 'py-2', 'rounded');
            checkoutButton.onclick = () => window.location.href = '/checkout';
            cartItemsList.appendChild(checkoutButton);
        }
    }
    

    function showCartConfirmationModal() {
        const cartModal = document.getElementById('cartModal');
        cartModal.classList.remove('opacity-0', 'pointer-events-none');
        setTimeout(() => {
            cartModal.classList.add('opacity-0', 'pointer-events-none');
        }, 2000);
    }
});
