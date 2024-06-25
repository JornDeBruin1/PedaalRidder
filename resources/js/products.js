document.addEventListener("DOMContentLoaded", function () {
    const soort = document.getElementById('Soort');
    const fietsen = document.querySelectorAll('.fietsPage');

    if (soort) {
        soort.addEventListener('change', (element) => {
            const value = element.target.value;
            fietsen.forEach(fiets => {
                if (value === 'Alle') {
                    fiets.style.display = 'block';
                } else if (fiets.classList.contains(value)) {
                    fiets.style.display = 'block';
                } else {
                    fiets.style.display = 'none';
                }
            });
        });
    }
});
