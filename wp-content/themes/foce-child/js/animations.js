//Animation des titres au scroll
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

//Animation carroussel des personnages
const swiper = new Swiper('.swiper-container', {
    spaceBetween: 60,
    speed: 1750,
    autoplay: {
        delay: 400,
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 50,
        depth: 100,
        slideShadows: false,
    },
});

//Parallaxe nuages
document.addEventListener('DOMContentLoaded', () => {
    const bigCloud = document.getElementById("big_cloud");
    const littleCloud = document.getElementById("little_cloud");
    const bannerImg = document.querySelector('.banner_img');
    const backgroundVideo = document.getElementById("background-video");
    const placeSection = document.getElementById("place");
    const bannerSection = document.querySelector(".banner");
    const initialOffset = 300; // Valeur de décalage initial
  
    // Animation pour les nuages
    const applyCloudParallax = () => {
      const decalage = window.scrollY;
      let decalageCloud = decalage / 4;
      let decalageLittleCloud = decalage / 4;

      bigCloud.style.transform = 'translateX(' + (-(decalageCloud - initialOffset)) + 'px)';
      littleCloud.style.transform = 'translateX(' + (-(decalageLittleCloud - initialOffset)) + 'px)';
      
    };
  
    const cloudObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          window.addEventListener('scroll', applyCloudParallax);
        } else {
          window.removeEventListener('scroll', applyCloudParallax);
        }
      });
    });
  
    // Observer la section place
    cloudObserver.observe(placeSection);
  
    // Animation pour l'image de bannière et la vidéo
    const scrollRatio = 0.5; // Ratio pour le mouvement de la bannière et de la vidéo
  
    const applyBannerParallax = () => {
      const currentScrollPosition = window.scrollY;
      const bannerImgOffset = currentScrollPosition * scrollRatio;
      const backgroundVideoOffset = currentScrollPosition * (1 - scrollRatio);
  
      bannerImg.style.transform = `translateY(${bannerImgOffset}px)`;
      backgroundVideo.style.transform = `translateY(${backgroundVideoOffset}px)`;
    };
  
    const bannerObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          window.addEventListener('scroll', applyBannerParallax);
        } else {
          window.removeEventListener('scroll', applyBannerParallax);
        }
      });
    });
  
    // Observer la section banner
    bannerObserver.observe(bannerSection);
  });
  
  