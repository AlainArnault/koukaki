document.addEventListener("DOMContentLoaded", function () {
    const firstWord = document.querySelector('.first-word');
    const secondWord = document.querySelector('.second-word');

    function checkVisibility() {
        const windowHeight = window.innerHeight;

        // Vérifier si le premier titre (L'histoire) est visible
        const firstTitle = document.querySelector('h2:first-of-type .fade-up');
        const firstTitleTop = firstTitle.getBoundingClientRect().top;

        if (firstTitleTop < windowHeight - 50) {
            firstTitle.classList.add('visible');
        }

        // Vérifier si le second mot est visible
        const secondWordTop = firstWord.getBoundingClientRect().top;

        if (secondWordTop < windowHeight - 50) {
            firstWord.classList.add('visible');

            // Attendre que le premier mot soit visible avant d'afficher le second mot
            setTimeout(() => {
                secondWord.classList.add('visible');
            }, 500); // Délai de 500 ms pour le second mot
        }
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Vérifie immédiatement au chargement
});
