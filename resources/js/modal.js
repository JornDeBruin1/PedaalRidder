document.addEventListener('DOMContentLoaded', function () {
    const productItems = document.querySelectorAll('.product-item');
    const modal = document.getElementById('productModal');
    const closeModal = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalDescription = document.getElementById('modalDescription');
    const modalPrice = document.getElementById('modalPrice');
    const cartModal = document.getElementById('cartModal');
    const closeCartModal = document.getElementById('closeCartModal');
    const cartModalBody = document.getElementById('cartModalBody');

    productItems.forEach(item => {
        item.addEventListener('click', function () {
            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;
            const description = this.dataset.description;
            const rijHoogte = this.dataset.rijhoogte;

            modalTitle.textContent = name;
            modalImage.src = image;
            modalDescription.textContent = description;

            if (modalPrice) {
                modalPrice.textContent = price ? '€' + price : '';
            }

            modal.classList.remove('hidden');
        });
    });

    closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;

            fetch('/add-to-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    name: name,
                    price: price,
                    image: image,
                    quantity: 1
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    cartModalBody.innerHTML = data.message;
                    cartModal.classList.remove('hidden');
                    setTimeout(() => {
                        cartModal.classList.add('hidden');
                    }, 2000);
                }
            });
        });
    });

    closeCartModal.addEventListener('click', function () {
        cartModal.classList.add('hidden');
    });
});
