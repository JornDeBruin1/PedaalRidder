const soort = document.getElementById('Soort');
const fietsen = document.querySelectorAll('.fietsPage');

soort.addEventListener('change', (element) => {
    const value = element.target.value;
    fietsen.forEach(fiets => {
        if (value === 'Alle') {
            fiets.classList.remove('hidden');
        } else if (fiets.classList.contains(value)) {
            fiets.classList.remove('hidden');
        } else {
            fiets.classList.add('hidden');
        }
    });
});