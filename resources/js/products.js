document.addEventListener("DOMContentLoaded", function () {
    const soort = document.getElementById('Soort');
    const fietsen = document.querySelectorAll('.fietsPage');

    soort.addEventListener('change', (event) => {
        const value = event.target.value.toLowerCase();
        fietsen.forEach(fiets => {
            if (value === 'alle') {
                fiets.style.display = 'flex';
            } else if (fiets.classList.contains(value)) {
                fiets.style.display = 'flex';
            } else {
                fiets.style.display = 'none';
            }
        });
    });
});
