document.querySelectorAll('.dropdown').forEach(dropdown => {
    const dropbtn = dropdown.querySelector('.dropbtn');
    const content = dropdown.querySelector('.dropdown-content');

    dropbtn.addEventListener('click', (e) => {
        e.preventDefault();
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            content.style.display = 'none';
        }
    });
});