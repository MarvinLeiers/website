document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('[data-link]');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            const data = link.dataset.link;
            const xhr = new XMLHttpRequest();
            const contentDiv = document.querySelector('#content');

            xhr.onload = () => {
                if (xhr.status === 200)
                    contentDiv.innerHTML = xhr.responseText;
            };

            xhr.open('GET', './backend/navigator.php?p=' + data, true);
            xhr.send();

            links.forEach(li => {
                li.classList.remove('active');
            });

            link.classList.add('active');
        });
    });
});