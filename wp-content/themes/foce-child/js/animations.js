document.addEventListener("DOMContentLoaded", function () {
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const target = entry.target;

                // Pour les premiers mots
                if (target.classList.contains('first-word')) {
                    target.classList.add('visible');
                }
                // Pour les deuxièmes mots avec un délai
                else if (target.classList.contains('second-word')) {
                    setTimeout(() => {
                        target.classList.add('visible');
                    }, 500); // Délai de 500ms pour le deuxième mot
                } 
                // Pour les titres sans deux mots
                else {
                    target.classList.add('visible');
                }
                observer.unobserve(target);
            }
        });
    }, options);

    const fadeUpElements = document.querySelectorAll('.fade-up');
    fadeUpElements.forEach(el => observer.observe(el));
});
