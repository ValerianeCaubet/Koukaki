// Déclenchement du fadeInUp des titres au scroll 
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, { threshold: 0.5 }); 

    document.querySelectorAll('.fade-in-title').forEach(title => {
        observer.observe(title);
    });
});

// Effet de parallax sur logo au scroll 
// parallaxe
window.addEventListener('scroll', function() {
    const parallaxImage = document.querySelector('.parralax');
    const scrollPosition = window.scrollY;

    // Ajustez la valeur 0.25 selon l'effet de parallaxe souhaité.
    // Une valeur plus élevée accélérera l'effet de parallaxe, une valeur plus faible le ralentira.
    const parallaxValue = scrollPosition * 0.25;
    parallaxImage.style.transform = 'translateY(' + parallaxValue + 'px)';
});