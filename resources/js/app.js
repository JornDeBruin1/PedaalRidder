// Burger menu
document.addEventListener("DOMContentLoaded", function () {
    // open
    const burger = document.querySelectorAll(".navbar-burger");
    const menu = document.querySelectorAll(".navbar-menu");

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll(".navbar-close");
    const backdrop = document.querySelectorAll(".navbar-backdrop");

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const cartIcon = document.querySelector('.fa-cart-shopping');
    const cartSheet = document.getElementById('cartSheet');
    const closeCartButton = document.getElementById('closeCart');
    const cartItemsList = document.getElementById('cartItems');
    const emptyCartMessage = document.getElementById('emptyCartMessage');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    let cart = [];

    cartIcon.addEventListener('click', function() {
        cartSheet.classList.toggle('hidden');
        renderCart();
    });

    closeCartButton.addEventListener('click', function() {
        cartSheet.classList.add('hidden');
    });

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
});